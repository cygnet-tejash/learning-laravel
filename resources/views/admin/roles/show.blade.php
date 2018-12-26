@extends('admin.layout.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3> Show Role</h3>
        </div>
        <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        </div>
    </div>
</div>
<hr />

<div class="">
    <table class="table table-bordered table-striped">
        <tr>
            <td><strong>Name</strong></td>
            <td>{{ $role->name }}</td>
        </tr>

        <tr>
            <td><strong>Permission</strong></td>
            <td>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }},</label>
                    @endforeach
                @endif
            </td>
        </tr>
    </table>
</div>
@endsection