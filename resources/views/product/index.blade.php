@extends('layouts.master')
@section('title')
    Laravel Shoppong Cart
@endsection
@section('content')
@foreach($products->chunk(6) as $productChunk)

<div class="row">
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
            @if(!in_array($product->id, $selectedProduct))
            <a href="{{route('product.addToUser', ['productId' => $product->id])}}" class="btn btn-primary pull-right" role="button">Add</a>
            @else
            <a href="{{route('product.removeFromUser', ['productId' => $product->id])}}" class="btn btn-info pull-right" role="button">Remove</a>
            @endif
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endforeach
@endsection
