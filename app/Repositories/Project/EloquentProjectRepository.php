<?php
namespace App\Repositories\Project;

use App\Repositories\Project\Contract\ProjectRepository;
use App\Models\Project\Project;

class EloquentProjectRepository implements ProjectRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Project();
    }

    public function save($data)
    {
        $this->model->title = $data['title'];
        $this->model->slug = str_slug($data['title']);
        $this->model->description = $data['description'];
        $this->model->start_date = $data['start_date'];
        $this->model->end_date = $data['end_date'];
        $this->model->estimated_completion_date = $data['estimated_completion_date'];
        $this->model->status = $data['status'];
        $this->model->owner_id = auth()->id();

        if ($this->model->save($data)) {
            return $this->model->id;
        } else {
            return false;
        }
    }

    public function getAllData()
    {
        return $this->model->orderBy('id', 'desc')->paginate(5);
    }

    public function destroy()
    {
        $this->model->destroy();
    }

    public function getOne($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
