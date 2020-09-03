@extends('layouts.productMaster')
@section('title')
    Laravel Shoppong Cart
@endsection
@section('content')


<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Add New Product</h1>

        <form class="" action="{{route('product.addNewProduct')}}" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" id="description" name="description" class="form-control">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('product.productManagement')}}" class="btn btn-primary pull-right" role="button">Cancel</a>
        
            {{csrf_field()}}
        </form>
    </div>
</div>


@endsection
