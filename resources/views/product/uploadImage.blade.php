@extends('layouts.productMaster')
@section('title')
    Laravel Shoppong Cart
@endsection
@section('content')

<div class="col-md-6 col-md-offset-3" >

       <h1>Upload Image For Product</h1>
       <br>
       <form accept-charset="UTF-8" action="{{route('product.uploadImage')}}" method="POST"  target="_blank" enctype="multipart/form-data">

         <div class="form-group">
           <label>Select product name</label>

           <select class="form-control"  name="productId" required="required">
               @foreach($products as $prod)
                    <option value="{{$prod->id}}">{{$prod->title}}</option>
               @endforeach
           </select>
         </div>
         <hr>
         <div class="form-group mt-3">
           <label class="mr-2">Upload the image:</label>
           <input type="file" name="file" id="file">
         </div>
         <hr>
         <button type="submit" class="btn btn-primary">Submit</button>
         <a href="{{route('product.productManagement')}}" class="btn btn-primary pull-right" role="button">Cancel</a>

         {{csrf_field()}}
       </form>
   </div>


@endsection
