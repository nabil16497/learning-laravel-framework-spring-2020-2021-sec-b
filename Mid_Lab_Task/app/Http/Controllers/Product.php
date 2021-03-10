<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\productModel;


class Product extends Controller
{
     //Existing
     public function existingProductsView()
     {
         $existing  = productModel::where('status', 'existing')->get();
         return view('product.Existing')->with('existing',count($existing))->with('exist',$existing);

     }


     public function exEdit($id)
     {
         $data = productModel::find($id);
         return view('product.editExisting')->with('data',$data);
     }

     public function exUpdate($id,ProductRequest $req)
     {
         $data = productModel::find($id);

         $data->product_name = $req->product_name;
         $data->category     = $req->category;
         $data->unit_price   = $req->unit_price;
         $data->status       = $req->status;


         $data->save();

         return redirect('/system/product_management/existing_products');
     }


     public function exDelete($id)
     {
         $data = productModel::find($id);
         return view('product.deleteExisting')->with('data',$data);
     }
     public function exDestroy($id , Request $req)
     {
         if(productModel::destroy($id)){
             return redirect('/system/product_management/existing_products');
         }
         else{
             echo 'error';
         }
     }

     public function exShow($id)
     {
         $data = productModel::find($id);
         return view('product.showExisting')->with('data',$data);
     }


     //Upcoming
     public function upcomingProductsView()
     {
         $upcoming = productModel::where('status', 'upcoming')->get();
         return view('product.Upcoming')->with('count',count($upcoming))->with('upcoming',($upcoming));
     }
     public function upEdit($id)
     {
         $data = productModel::find($id);
         return view('product.editUpcoming')->with('data',$data);
     }

     public function upUpdate($id,ProductRequest $req)
     {
         $data = productModel::find($id);

         $data->product_name = $req->product_name;
         $data->category     = $req->category;
         $data->unit_price   = $req->unit_price;
         $data->status       = $req->status;


         $data->save();

         return redirect('/system/product_management/upcoming_products');
     }


     public function upDelete($id)
     {
         $data = productModel::find($id);
         return view('product.deleteUpcoming')->with('data',$data);
     }
     public function upDestroy($id , Request $req)
     {
         if(productModel::destroy($id)){
             return redirect('/system/product_management/upcoming_products');
         }
         else{
             echo 'error';
         }
     }

     public function upShow($id)
     {
         $data = productModel::find($id);
         return view('product.showUpcoming')->with('data',$data);
     }



     //add
     public function addProductView()
     {
         return view('product.add');
     }

     public function store(ProductRequest $req){

         $store = new productModel();

         $store->product_name = $req->product_name;
         $store->category     = $req->category;
         $store->unit_price   = $req->unit_price;
         $store->status       = $req->status;

         $store->save();

         return redirect('/home');
     }
 }

