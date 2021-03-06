@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Edit Role</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-sm btn-primary" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
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


{!! Form::model($permission, ['method' => 'PATCH','route' => ['admin.permissions.update', $permission->id]]) !!}
<div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label class="col-md-3 control-label" for="name">Name:</label>
            <div class="col-md-12">
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'id' => 'name')) !!}
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</div>
{!! Form::close() !!}


@endsection