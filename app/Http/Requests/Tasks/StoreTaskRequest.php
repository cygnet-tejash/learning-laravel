<?php

namespace App\Http\Requests\Tasks;

use App\Rules\TaskEndDate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->hasPermissionTo('task-create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'max:100', 'unique:tasks'],
            'description' => ['required'],
            'end_date' => [new TaskEndDate(request()->start_date)],
            'assignees' => ['required'],
        ];
    }
}
