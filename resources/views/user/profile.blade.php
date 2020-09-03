@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class='text-center' >User Profile</h1>

        <h3 class='text-center' >Current login email: {{Auth::user()->email}}</h3>
    </div>
</div>
@endsection
