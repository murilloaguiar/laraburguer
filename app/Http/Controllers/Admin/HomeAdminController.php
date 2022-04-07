<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
   //
   public function index(){
      return view('admin.home');
   }

   public function order(){
      return view('admin.order.order');
   }

   public function product(){
      $products = Product::with(['category'])->get();
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

   




}
