<?php
namespace App\Models\Task\Traits;

trait Relationship
{
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id', 'id');
    }

    public function project()
    {
        return $this->belongsTo('App\Models\Project\Project', 'project_id', 'id');
    }

    public function assignees()
    {
        return $this->belongsToMany('App\User', 'tasks_users', 'task_id', 'user_id');
    }
}
