<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Task\Contract\TaskRepository;
use App\Repositories\Project\Contract\ProjectRepository;

class DashboardController extends Controller
{
    protected $projectRepository;

    protected $taskRepository;


    public function __construct(ProjectRepository $projectRepository, TaskRepository $taskRepository)
    {
        $this->projectRepository = $projectRepository;
        $this->taskRepository = $taskRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->projectRepository->getAllData()->count();
        $tasks = $this->taskRepository->getAllData()->count();
        $users = User::count();
        
        return view('admin.dashboard.index', [
            'projects' => $projects,
            'tasks' => $tasks,
            'users' => $users,
        ]);
    }

    /**
     * Method to logout user
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
}
