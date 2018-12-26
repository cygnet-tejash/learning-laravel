<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Function to clean filename and return underscored name
     *
     * @param UploadFile $file
     *
     * @return String
     */
    private function _cleanFileName($file)
    {
        $fileName = substr($file->getClientOriginalName(), 0, strrpos($file->getClientOriginalName(), '.'));
        return str_slug($fileName, '_') . "." . $file->getClientOriginalExtension();
    }

    public function __construct()
    {
        $this->middleware('permission:user-list');
        $this->middleware('permission:user-create', ['only' => ['create','store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        return view('admin.users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all(['id', 'name'])->pluck('name', 'name');
        return view('admin.users.create', ['roleList' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        //Assinging role to the User if the user is created
        if ($user->id) {
            $user->assignRole($request['role']);

            if ($request->hasFile('profile_pic')) {
                $file = $request['profile_pic'];

                if (!$file->getError()) {
                    $imageDirectory = public_path('images/users/'.$user->id.'/');
                    if (! file_exists($imageDirectory)) {
                        @mkdir($imageDirectory, 0777, true);
                    }

                    $fileName = $this->_cleanFileName($file);
                    if ($file->move($imageDirectory, $fileName)) {
                        $user->image = $fileName;
                        $user->save();
                    }
                }
            }
        }

        return redirect()->route('admin.users.index')
                        ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all(['id', 'name'])->pluck('name', 'name');
        return view('admin.users.edit', ['user' => $user, 'roleList' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
        ]);

        $user->save([
            'name' => $request['name'],
            'email' => $request['email'],
        ]);

        if ($request['role']
        && !empty($user->getRoleNames()[0])
        && $user->getRoleNames()[0] != $request['role']) {
            $userExistingRoles = $user->getRoleNames();
            foreach ($userExistingRoles as $userRole) {
                $user->removeRole($userRole);
            }
            $user->assignRole($request['role']);
        }

        if ($request->hasFile('profile_pic')) {
            $file = $request['profile_pic'];
            
            if (!$file->getError()) {
                $imageDirectory = public_path('images/users/'.$user->id.'/');
                if (! file_exists($imageDirectory)) {
                    @mkdir($imageDirectory, 0777, true);
                }
                
                $fileName = $this->_cleanFileName($file);
                if ($user->image) {
                    @unlink($imageDirectory.$user->image);
                }
                $file->move($imageDirectory, $fileName);
                $user->image = $fileName;
                $user->save();
            }
        }

        return redirect()->route('admin.users.index')
                        ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function deleteImage()
    {
        $user = auth()->user();
        if ($user->image) {
            @unlink(public_path('images/users/'.$user->id.'/').$user->image);
            $user->image = '';
            $user->save();
        }

        return redirect()->route('admin.users.edit', $user->id)
                ->with('success', 'Image successfully deleted.');
    }
}
