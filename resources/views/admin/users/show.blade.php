@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3> Show User</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.users.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
    </div>
</div>
<hr />

<div class="">
    <table class="table table-bordered table-striped">
        <tr>
            <td><strong>Profile Image</strong></td>
            <td><img src="{{ $user->getProfileImage() }}" class="img-thumbnail" width="100px" /></td>
        </tr>
        <tr>
            <td><strong>Name</strong></td>
            <td>{{ $user->name }}</td>
        </tr>

        <tr>
            <td><strong>Email</strong></td>
            <td>{{ $user->email }}</td>
        </tr>

        <tr>
            <td><strong>Role</strong></td>
            <td>{{ $user->getRoleNames()[0] }}</td>
        </tr>
    </table>
</div>
@endsection