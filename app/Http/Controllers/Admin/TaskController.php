<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tasks\StoreTaskRequest;
use App\Http\Requests\Tasks\CreateTaskRequest;
use App\Http\Requests\Tasks\ManageTaskRequest;
use App\Repositories\Task\Contract\TaskRepository;
use App\Repositories\Project\Contract\ProjectRepository;
use App\Http\Requests\Tasks\DeleteTaskRequest;
use App\Http\Requests\Tasks\EditTaskRequest;
use App\Http\Requests\Tasks\UpdateTaskRequest;

class TaskController extends Controller
{
    protected $repository;

    public function __construct(TaskRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ManageTaskRequest $request)
    {
        $tasks = $this->repository->getAllData();
        return view('admin.tasks.index')->with(['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CreateTaskRequest $request, ProjectRepository $projectRepository)
    {
        $projects = $projectRepository->list();
        $assignees = User::role('Employee')->get();
        $assignees = $assignees->pluck('name', 'id');
        return view('admin.tasks.create')->with(['projects' => $projects, 'assignees' => $assignees]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $this->repository->save($request->input());
        return redirect(route('admin.tasks.index'))->with('success', 'Task successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, ManageTaskRequest $request)
    {
        $task = $this->repository->getOne($slug);
        return view('admin.tasks.show')->with(['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug, EditTaskRequest $request, ProjectRepository $projectRepository)
    {
        $task = $this->repository->getOne($slug);
        $projects = $projectRepository->list();
        $assignees = User::role('Employee')->get();
        $assignees = $assignees->pluck('name', 'id');
        return view('admin.tasks.edit')->with(['task' => $task, 'projects' => $projects, 'assignees' => $assignees]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($slug, UpdateTaskRequest $request)
    {
        $this->repository->save($request->input(), $slug);
        return redirect(route('admin.tasks.index'))->with('success', 'Task successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, DeleteTaskRequest $request)
    {
        $this->repository->destroy($slug);
        return redirect(route('admin.tasks.index'));
    }
}
