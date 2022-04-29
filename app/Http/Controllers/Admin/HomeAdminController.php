<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeAdminController extends Controller
{
   //
   public function index(){
      return view('admin.home');
   }

   public function order(){
      $orders = Order::with(['user','products'])->get();
      return view('admin.order.order',[
         'orders' => $orders
      ]);
   }

   public function productDetail(){
      $productsDetail = ProductDetail::with(['product'])->get();
      return view('admin.productDetail.productDetail',[
         'productsDetail' => $productsDetail
      ]);
   }

   public function productDetailShow($id){
      return view('admin.product.showDetail',[
         'id' => $id
      ]);
   }

   public function productDetailEdit($id){
      $productDetail = ProductDetail::with(['product'])->find($id);
      
      return view('admin.productDetail.edit',[
         'productDetail' => $productDetail
      ]);
   }

   public function productDetailCreate(){
      $products = Product::all();
      $products = $products->diff(Product::join('product_details', 'products.id', '=', 'product_details.product_id')->orderBy('products.name')->get());
      return view('admin.productDetail.create',[
         'products' => $products
      ]);
   }

   public function product(){
      $products = Product::with(['category', 'productDetail'])->get();
      //dd($products);
      return view('admin.product.product',[
         'products' => $products
      ]);
   }

   public function productCreate(){
      $categories = Category::orderBy('name')->get();
      return view('admin.product.create', [
         'categories'=>$categories
      ]);
   }

   public function productEdit($id){
      $product = Product::find($id);
      $categories = Category::orderBy('name')->get();
      return view('admin.product.edit',[
         'product'=>$product,
         'categories'=>$categories
      ]);
   }

   public function category(){
      $categories = Category::orderBy('name')->get();
      return view('admin.category.category', [
         'categories'=>$categories
      ]);
   }

   public function categoryCreate(){
      return view('admin.category.create');
   }

   public function categoryEdit($id){
      $category = Category::find($id);
      return view('admin.category.edit', [
         'category' => $category
      ]);
   }

   public function categoryShow($id){
      return view('admin.category.show', [
         'id' => $id
      ]);
   }


}
