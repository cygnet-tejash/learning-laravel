@extends('admin.layout.app')

@section('content')
<!-- Icon Cards-->
<div class="row">
    <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
            <div class="card-body-icon">
            <i class="fas fa-fw fa-folder"></i>
            </div>
            <div class="mr-5">{{ $projects }} Projects!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.projects.index') }}">
            <span class="float-left">View Details</span>
            <span class="float-right">
            <i class="fas fa-angle-right"></i>
            </span>
        </a>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
            <div class="card-body-icon">
            <i class="fas fa-fw fa-tasks"></i>
            </div>
            <div class="mr-5">{{ $tasks }} New Tasks!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.tasks.index') }}">
            <span class="float-left">View Details</span>
            <span class="float-right">
            <i class="fas fa-angle-right"></i>
            </span>
        </a>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
            <div class="card-body-icon">
            <i class="fas fa-fw fa-user"></i>
            </div>
            <div class="mr-5">{{ $users }} Users</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ route('admin.users.index') }}">
            <span class="float-left">View Details</span>
            <span class="float-right">
            <i class="fas fa-angle-right"></i>
            </span>
        </a>
        </div>
    </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection