@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>User Management</h3>
        </div>
        <div class="float-right">
        @can('user-create')
            <a class="btn btn-success btn-sm" href="{{ route('admin.users.create') }}"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</a>
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
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $key => $user)
        <tr>
            <td>{{ ++$key }}</td>
            <td>
                <img src="{{ $user->getProfileImage() }}" class="img-thumbnail" width="50px" />
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ !empty($user->getRoleNames()[0]) ? $user->getRoleNames()[0] : "" }}</td>
            <td>
                @if ($user->id != Auth::id() && (Auth::user()->getRoleNames()[0] === 'Admin'))
                    <div class="btn-group" user="group" aria-label="Basic example">
                        <a class="btn btn-info btn-sm" href="{{ route('admin.users.show',$user->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        @can('user-edit')
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.edit', $user->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                        @endcan
                    </div>
                    @can('user-delete')
                        @if (!empty($user->getRoleNames()[0]) && $user->getRoleNames()[0] !== 'Admin')
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.users.destroy', $user->id],'style'=>'display:inline']) !!}
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


{!! $users->render() !!}


@endsection