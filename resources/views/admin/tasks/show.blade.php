@extends('admin.layout.app') 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3> Show Task</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.tasks.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
    </div>
</div>
<hr />

<div class="">
    <table class="table table-bordered table-striped">
        <tr>
            <td><strong>Name</strong></td>
            <td>{{ $task->name }}</td>
        </tr>

        <tr>
            <td><strong>Description</strong></td>
            <td>{!! nl2br($task->description) !!}</td>
        </tr>

        <tr>
            <td><strong>Start Date</strong></td>
            <td>{{ $task->start_date }}</td>
        </tr>

        <tr>
            <td><strong>End Date</strong></td>
            <td>{{ $task->end_date }}</td>
        </tr>

        <tr>
            <td><strong>Project</strong></td>
            <td>{{ $task->project->title }}</td>
        </tr>

        <tr>
            <td><strong>Assigned To</strong></td>
            <td>{{ $task->assignees->pluck('name')->implode(', ') }}</td>
        </tr>

        <tr>
            <td><strong>Status</strong></td>
            <td>{{ $task->status }}</td>
        </tr>

        <tr>
            <td><strong>Created By</strong></td>
            <td>{{ $task->owner->name }}</td>
        </tr>
    </table>
</div>
@endsection