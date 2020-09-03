@extends('layouts.productMaster')
@section('title')
    Laravel Shoppong Cart
@endsection
@section('content')


<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Add New Product</h1>

        <form class="" action="{{route('product.postUpdateProduct')}}" method="post">
            <input type="hidden" id="id" name="id" class="form-control" hidden value="{{$product->id}}">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$product->title}}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" id="description" name="description" class="form-control" value="{{$product->description}}">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" id="price" name="price" class="form-control" value="{{$product->price}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('product.productManagement')}}" class="btn btn-primary pull-right" role="button">Cancel</a>
            {{csrf_field()}}
        </form>
    </div>
</div>


@endsection
