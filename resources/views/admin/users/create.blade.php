@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Create New User</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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


{!! Form::open(array('route' => 'admin.users.store', 'method'=>'POST', 'class' => 'form-horizontal', 'files' => true)) !!}
<div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Name:</label>
            <div class="col-md-12">
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'id' => 'name')) !!}
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-md-3 control-label" for="email">Email:</label>
            <div class="col-md-12">
                {!! Form::text('email', null, array('placeholder' => 'email','class' => 'form-control', 'id' => 'email')) !!}
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-md-3 control-label" for="password">Password:</label>
            <div class="col-md-12">
                {!! Form::password('password', array('placeholder' => 'password','class' => 'form-control', 'id' => 'password')) !!}
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-md-3 control-label" for="role">Role:</label>
            <div class="col-md-12">
                {!! Form::select('role', $roleList, null, array('class' => 'form-control', 'id' => 'role')) !!}
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-md-3 control-label" for="profile_pic">Profile Pic:</label>
            <div class="col-md-12">
                {!! Form::file('profile_pic', ['class' => 'form-control', 'id' => 'profile_pic', 'accept' => 'image/*']) !!}
            </div>
        </div>
    </div>

    <hr>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
</div>
{!! Form::close() !!}
<div class="clearfix"></div>
<br />
@endsection