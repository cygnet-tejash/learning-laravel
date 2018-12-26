<?php

namespace App\Http\Requests\Project;

use App\Rules\ProjectEndDate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->hasPermissionTo('project-edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:50', 'unique:projects,id,'.request()->id],
            'description' => ['required'],
            'end_date' => [new ProjectEndDate(request()->start_date)],
            'estimated_completion_date' => [new ProjectEndDate(request()->start_date)]
        ];
    }
}
