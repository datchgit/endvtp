<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //

    public function index(){

        
    $category = Category::all();
       
        return view('welcome', compact('category'));

    }


    public function dashboard(){
        $total_product  =  Product::where('seller_id' , Auth::user()->owner_id)->get();
        return view('dashboard.index', compact('total_product'));
    }


    public function profile(){

        if(strtolower(strtolower(Auth::user()->role->name))=='vendeur'){

            return view('dashboard.profile.seller.homeprofile');

        }elseif (strtolower(strtolower(Auth::user()->role->name))=='acheteur'){

            return view('dashboard.profile.buyer.homeprofile');
        }elseif (strtolower(Auth::user()->role->name)=='transporteur'){

        }elseif (strtolower(Auth::user()->role->name)=='stockeur'){

        }

    }

    public function showcate(){

         $categories= Category::inRandomOrder()->paginate(25);

         return view('pages.categories.showcate',compact('categories'));


    }


    public function  showcateProduct($id){

           $products = Product::where('category_id','=',$id)->paginate(20);

          return view('pages.categories.productlink',compact('products'));
        }
}
