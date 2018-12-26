@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Create New Role</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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


{!! Form::open(array('route' => 'admin.roles.store', 'method'=>'POST', 'class' => 'form-horizontal')) !!}
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
            <label class="col-md-4 control-label">Permission:</label>
            <br/>
            <div class="col-md-12">
                @foreach($permission as $value)
                    <label class="float-left col-md-3">{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                @endforeach
            </div>
            
        </div>
    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
</div>
{!! Form::close() !!}
<br />
@endsection