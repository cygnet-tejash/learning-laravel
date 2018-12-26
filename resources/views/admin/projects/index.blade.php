@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Project Management</h3>
        </div>
        <div class="float-right">
        @can('project-create')
            <a class="btn btn-success btn-sm" href="{{ route('admin.projects.create') }}"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
            @endcan
        </div>
    </div>
</div>
<hr />

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($projects as $key => $project)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $project->title }}</td>
            <td>{!! $project->actionButton !!}</td>
        </tr>
        @endforeach
    </table>
</div>


{!! $projects->render() !!}


@endsection