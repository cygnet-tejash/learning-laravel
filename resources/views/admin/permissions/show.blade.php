@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3> Show Role</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
    </div>
</div>
<hr />

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $permission->name }}
        </div>
    </div>
</div>
@endsection