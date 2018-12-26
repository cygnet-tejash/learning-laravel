<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Rules\ProjectEndDate;
use App\Models\Project\Project;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseApiController;
use App\Repositories\Project\Contract\ProjectRepository;

class ProjectController extends BaseApiController
{
    protected $repository;

    public function __construct(ProjectRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * List
     *
     * Display a listing of the resource.
     * @group Project management
     * @authenticated
     * @responseFile responses/projects.index.json
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        if (!$this->canAccess('project-list')) {
            return $this->sendUnAuthorized();
        }
        
        $projects = $this->repository->getAllData();
        return ProjectResource::collection($projects);
    }

    /**
     * Create
     *
     * Store a newly created Project resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @group Project management
     * @authenticated
     * @bodyParam title string required Title of the Project. Example: Project Title From API
     * @bodyParam description string required Description of the Project. Example: Random Text
     * @bodyParam start_date string required Start date of the Project. Example: 2018-12-25
     * @bodyParam end_date string required End date of the Project. Example: 2019-05-25
     * @bodyParam estimated_completion_date string required Estimated completion date of the Project. Example: 2019-05-05
     * @bodyParam status string required Status of the Project. Example: Created
     *
     * @responseFile responses/projects.create.json
     * @responseFile 403 responses/projects.unauthorized.json
     * @responseFile 500 responses/projects.validation.json
     */
    public function store(Request $request)
    {
        try {

            //Checking if user is allowed to access api
            if (!$this->canAccess('project-create')) {
                return $this->sendUnAuthorized();
            }
            
            $validation = Validator::make($request->input(), [
                'title' => ['required', 'max:50', 'unique:projects'],
                'description' => ['required'],
                'end_date' => [new ProjectEndDate(request()->start_date)],
                'estimated_completion_date' => [new ProjectEndDate(request()->start_date)]
            ]);

            if ($validation->fails()) {
                $errors = $validation->errors();
                return response()->json(
                    $errors,
                    500
                );
            }

            $project = $this->repository->save($request->input());
            if ($project) {
                return ProjectResource::collection(Project::where('id', $project)->get());
            } else {
                return response()->json(['error' => 'Oops, something went wrong!'], 500);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    /**
     * Details
     *
     * Display the specified resource.
     *
     * @group Project management
     * @authenticated
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        //
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @group Project management
     * @authenticated
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     *
     * Delete
     *
     * Remove the specified resource from storage.
     * @group Project management
     * @authenticated
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        //
    }
}
