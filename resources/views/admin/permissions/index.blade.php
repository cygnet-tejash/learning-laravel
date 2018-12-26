@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Permisson Management</h3>
        </div>
        <div class="float-right">
        @can('permission-create')
            <a class="btn btn-success btn-sm" href="{{ route('admin.permissions.create') }}"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
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
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($permissions as $key => $permission)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $permission->name }}</td>
            <td>
                @if (Auth::user()->getRoleNames()[0] === 'Admin')
                    <div class="btn-group" permission="group" aria-label="Basic example">
                        <a class="btn btn-info btn-sm" href="{{ route('admin.permissions.show',$permission->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        @can('permission-edit')
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.permissions.edit', $permission->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        @endcan
                    </div>
                    @can('permission-delete')
                        @if ($permission->name !== 'Admin')
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            {!! Form::close() !!}
                        @endif
                    @endcan
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</div>


{!! $permissions->render() !!}


@endsection