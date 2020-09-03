@extends('layouts.productMaster')
@section('title')
    Laravel Shoppong Cart
@endsection
@section('content')
@foreach($products->chunk(6) as $productChunk)

<div class="row" style="margin-bottom: 40px;">
    @foreach($productChunk as $product)
  <div class="col-sm-6 col-md-2">
    <div >
      <img src="{{$product->imagePath}}" alt="..." class="img-responsive">
      <div class="caption">
        <h4>
            {{$product->title}}
            <span class="pull-right price" style="font-size: 16px;">
                ${{$product->price}}
            </span>
        </h4>

        <div class="clearfix">

            <a href="{{route('product.updateProduct', ['productId' => $product->id])}}" class="btn btn-primary pull-left" role="button">Update</a>
            <a href="{{route('product.managementDelete', ['productId' => $product->id])}}" class="btn btn-primary pull-right" role="button">Delete</a>

        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endforeach
@endsection
