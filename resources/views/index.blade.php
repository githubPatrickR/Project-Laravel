@extends('layouts.indexMaster')
@section('title')
    Laravel Shoppong Cart
@endsection
@section('content')


<div class="row" style="margin-bottom: 40px;">



        <div class="col-md-12 text-center">

            <a href="{{route('product.productManagement')}}" class="btn btn-primary btn-lg " style="width: 200px !important;" role="button">Product Management</a>
            <a href="{{route('user.profile')}}" class="btn btn-primary btn-lg " style="width: 200px !important;" role="button">Users</a>

        </div>




</div>

@endsection
