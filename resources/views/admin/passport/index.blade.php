@extends('admin.layout.app')

@section('content')

<div id="app">

    <passport-clients></passport-clients>
    <br />
    <passport-authorized-clients></passport-authorized-clients>
    <br />
    <passport-personal-access-tokens></passport-personal-access-tokens>

</div>

@endsection

@section('after-script')
    
<!-- Custom scripts for all pages-->
<script src="{{ asset('js/app.js') }}" defer></script>  

@endsection