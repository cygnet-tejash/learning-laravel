@extends('admin.layout.app') 
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Edit Project</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.projects.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
    </div>
</div>
<hr /> @if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif {!! Form::model($project, ['route' => ['admin.projects.update', $project->slug], 'model' => 'Project', 'method'=>'POST',
'class' => 'form-horizontal', 'files' => true]) !!} @method('PATCH')

<div class="row">
    @include('admin.projects.form')
</div>

{!! Form::close() !!}

<div class="clearfix"></div>
<br />
@endsection