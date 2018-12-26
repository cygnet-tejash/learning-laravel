@php 
$parameter = Request::has('id') ? Request::get('id') : "null";
@endphp

{{ Breadcrumbs::render(Route::currentRouteName(), $parameter) }}
