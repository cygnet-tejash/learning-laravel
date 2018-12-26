@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Edit User</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-sm btn-primary" href="{{ route('admin.users.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
    </div>
</div>
<hr />


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


{!! Form::model($user, ['method' => 'PATCH','route' => ['admin.users.update', $user->id], 'files' => true]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('role', $roleList, 
            !empty($user->getRoleNames()[0]) ? $user->getRoleNames()[0] : null
            , array('class' => 'form-control', 'id' => 'role')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Profile Pic:</strong>
            {!! Form::file('profile_pic', ['class' => 'form-control', 'id' => 'profile_pic', 'accept' => 'image/*']) !!}
        </div>
        
        @if ($user->image)
        <img src="{{ $user->getProfileImage() }}" width="150px" class="img-thumbnail float-left" />
        <a href="{{ route('admin.users.delete.image') }}" class="btn btn-sm btn-danger" style="border-radius: 50%; margin-left: -15px; margin-top: -15px;"> 
            <i class="fa fa-trash" aria-hidden="true"></i>
        </a>
        @endif

    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
</div>
{!! Form::close() !!}
<br />

@endsection