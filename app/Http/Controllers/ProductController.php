<?php

namespace App\Http\Controllers;

use App\Product;
use App\assignment;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    public function getIndex() {
        if (!Auth::Check()) {
            return redirect()->route('user.signin')->with('message', 'Login Failed');
        }
        $userId = Auth::user()->id;
        $product = Product::all();
        $selectedProduct = assignment::where('userId', '=', $userId)->get();
        $arr = [];
        foreach($selectedProduct as $sel) {
            $arr[] = $sel->productId;
        }
        return view('product.index', ['userId' => $userId, 'products' => $product, 'selectedProduct' => $arr]);
    }

    public function getAddToUser(Request $request, $productId) {
        $userId = Auth::user()->id;
        $assignment = new assignment([
            'userId' => $userId,
            'productId' => $productId
        ]);
        $assignment->save();
        return redirect()->route('product.index');
    }

    public function getRemoveFromUser(Request $request, $productId) {
        $userId = Auth::user()->id;
        assignment::where('userId', '=', $userId)->where('productId','=',$productId)->delete();
        return redirect()->route('product.index');
    }


    public function getProductManagement() {
        $product = Product::all();
        return view('product.management', ['products' => $product]);
    }


    public function productDelete($productId) {
        Product::where('id', '=', $productId)->delete();
        return redirect()->route('product.productManagement');
    }

    public function getAddNewProduct() {
        return view('product.addNewProduct');
    }

    public function postAddNewProduct(Request $request) {
        $this->validate($request, [
            'title' => 'required|unique:products',
            'description' => 'required',
            'price' => 'required',
        ]);
        $product = new Product([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51RPsM2vLML._SX376_BO1,204,203,200_.jpg',
        ]);
        $product->save();

        return redirect()->route('product.productManagement');
    }


    public function getUpdateProduct($productId) {
        $product = Product::where('id', '=', $productId)->get();
        return view('product.updateProduct', ['product' => $product[0]]);
    }

    public function postUpdateProduct(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        Product::where('id', $request->input('id'))
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51RPsM2vLML._SX376_BO1,204,203,200_.jpg',
            ]);

        return redirect()->route('product.productManagement');
    }

    public function getUploadImage() {
        $product = Product::all();//->groupBy('title');
        return view('product.uploadImage', ['products' => $product]);
    }

    public function postUploadImage(Request $request) {

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $destinationPath = 'uploads';

            $file->move($destinationPath,time().$file->getClientOriginalName());

            Product::where('id', $request->input('productId'))
                ->update([
                    'imagePath' => 'uploads/'.time().$file->getClientOriginalName(),
                ]);

            return redirect()->route('product.productManagement');
        } else {
            return redirect()->back();
        }








    }

}
