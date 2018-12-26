<?php
namespace App\Models\Project\Traits;

use Illuminate\Support\Facades\Auth;

/**
 * Model attribute for getting action buttons
 */
trait Attribute
{
    public function getActionButtonAttribute()
    {
        if (Auth::user()->hasPermissionTo('permission-list') || Auth::user()->hasPermissionTo('project-edit')) {
            $buttons = '<div class="btn-group" user="group" aria-label="Basic example">
            <a class="btn btn-info btn-sm" href="'. route('admin.projects.show', $this->slug). '"><i class="fa fa-eye" aria-hidden="true"></i></a>';
            if (Auth::user()->hasPermissionTo('project-edit')) {
                $buttons .= '<a class="btn btn-primary btn-sm" href="'. route('admin.projects.edit', $this->slug) .'"><i class="fa fa-edit" aria-hidden="true"></i></a>';
            }
            $buttons .= '</div>';

            return $buttons;
        }
    }
}
