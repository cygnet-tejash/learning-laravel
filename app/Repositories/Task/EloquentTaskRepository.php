<?php
namespace App\Repositories\Task;

use App\Repositories\Task\Contract\TaskRepository;
use App\Models\Task\Task;

class EloquentTaskRepository implements TaskRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Task();
    }

    public function save($data, $slug = null)
    {
        if (!empty($slug)) {
            $this->model = $this->getOne($slug);
        } else {
            $this->model->owner_id = auth()->id();
        }

        $this->model->name = $data['name'];
        $this->model->slug = str_slug($data['name']);
        $this->model->description = $data['description'];
        $this->model->start_date = $data['start_date'];
        $this->model->end_date = $data['end_date'];
        $this->model->project_id = $data['project_id'];
        $this->model->status = $data['status'];
        
        if ($this->model->save()) {
            $this->model->assignees()->sync($data['assignees']);

            return $this->model->id;
        } else {
            return false;
        }
    }

    public function getAllData()
    {
        return $this->model->orderBy('id', 'desc')->paginate(5);
    }

    public function destroy($slug)
    {
        $task = $this->getOne($slug);
        return $this->model->destroy($task->id);
    }

    public function getOne($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
