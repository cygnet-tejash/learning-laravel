@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3> Show Project</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
    </div>
</div>
<hr />

<div class="">
    <table class="table table-bordered table-striped">
        <tr>
            <td><strong>Title</strong></td>
            <td>{{ $project->title }}</td>
        </tr>

        <tr>
            <td><strong>Description</strong></td>
            <td>{!! nl2br($project->description) !!}</td>
        </tr>

        <tr>
            <td><strong>Start Date</strong></td>
            <td>{{ $project->start_date }}</td>
        </tr>

        <tr>
            <td><strong>End Date</strong></td>
            <td>{{ $project->end_date }}</td>
        </tr>

        <tr>
            <td><strong>Estimated Completion Date</strong></td>
            <td>{{ $project->estimated_completion_date }}</td>
        </tr>

        <tr>
            <td><strong>Status</strong></td>
            <td>{{ $project->status }}</td>
        </tr>

        <tr>
            <td><strong>Created By</strong></td>
            <td>{{ $project->owner->name }}</td>
        </tr>
    </table>
</div>
@endsection