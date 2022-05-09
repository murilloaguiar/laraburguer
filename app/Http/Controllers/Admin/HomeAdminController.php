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

   //----------Product Details----------
   public function productDetail(Request $request){
      $productsDetail = ProductDetail::with(['product'])->paginate(10);
      return view('admin.productDetail.productDetail',[
         'productsDetail' => $productsDetail,
         'request' => $request->all()
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
      
      $products = Product::leftJoin('product_details', 'products.id', '=', 'product_details.product_id')->select('products.name','products.id')->whereNull('product_details.details')->orderBy('name')->get();
      //dd($products);
      return view('admin.productDetail.create',[
         'products' => $products
      ]);
   }

   //----------Product----------
   public function product(Request $request){
      $products = Product::with(['category', 'productDetail'])->orderBy('name')->paginate(5);
      //dd($products);
      return view('admin.product.product',[
         'products' => $products,
         'request' => $request->all()
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

   public function productPhotos($id){
      $product = Product::with(['photos'])->find($id);
      //dd($product);
      return view('admin.product.photo',[
         'product'=>$product,
      ]);
   }

   //----------Category----------
   public function photoCreate($id){
      $product = Product::find($id);
      //dd($product);
      return view('admin.photo.create',[
         'id'=>$product->id,
         'name'=>$product->name
      ]);
   }

   //----------Category----------
   public function category(Request $request){
      $categories = Category::orderBy('name')->paginate(5);
      return view('admin.category.category', [
         'categories'=>$categories,
         'request' => $request->all()
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
