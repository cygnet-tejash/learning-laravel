<?php
namespace App\Models\Task\Traits;

use Illuminate\Support\Facades\Auth;

/**
 * Model attribute for getting action buttons
 */
trait Attribute
{
    public function getActionButtonAttribute()
    {
        if (Auth::user()->hasPermissionTo('permission-list') || Auth::user()->hasPermissionTo('task-edit')) {
            $buttons = '<div class="float-left btn-group" user="group" aria-label="Basic example">
            <a class="btn btn-info btn-sm" href="'. route('admin.tasks.show', $this->slug). '"><i class="fa fa-eye" aria-hidden="true"></i></a>';
            if (Auth::user()->hasPermissionTo('task-edit')) {
                $buttons .= '<a class="btn btn-primary btn-sm" href="'. route('admin.tasks.edit', $this->slug) .'"><i class="fa fa-edit" aria-hidden="true"></i></a>';
            }
            $buttons .= '</div>';
            
            return $buttons;
        }
    }
}
