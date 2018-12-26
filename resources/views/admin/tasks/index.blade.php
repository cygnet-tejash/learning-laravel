@extends('admin.layout.app') 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Task Management</h3>
        </div>
        <div class="float-right">
            @can('task-create')
            <a class="btn btn-success btn-sm" href="{{ route('admin.tasks.create') }}"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>            @endcan
        </div>
    </div>
</div>
<hr /> @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Project</th>
            <th>Assigned To</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tasks as $key => $task)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $task->name }}</td>
            <td>{{ $task->project->title }}</td>
            <td>{{ $task->assignees->pluck('name')->implode(', ') }}</td>
            <td>
                {!! $task->actionButton !!} 
                
                @can('task-delete') 
                    {!! Form::open(array('route' => ['admin.tasks.destroy', $task->slug], 'method'=>'POST', 'class' => 'form-horizontal', 'files' => true)) !!} 
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger btn-sm delete" style="margin-left:10px;"><i class="fa fa-trash" aria-hidden="true"></i></button>                
                    {!! Form::close() !!} 
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
</div>


{!! $tasks->render() !!}
@endsection