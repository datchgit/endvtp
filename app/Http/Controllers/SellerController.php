<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SellerController extends Controller
{

    //


    public function register(){
        return view('dashboard.profile.seller.create');
   }

   public function create(Request $request){
    $inputs = $request->input();
    $files = $request->file();

    Validator::make($inputs, [
        'sirname' => ['required', 'string', 'max:255'],
        'firstname' => ['required', 'string', 'max:255'],
        'phonenumber' => ['required', 'string', 'max:255'],
        'frequence' => ['required', 'string', 'max:255'],
        'media' => ['required', 'string', 'max:255'],
    ])->validate();

    Validator::make($files, [
        'photo'=>['required','image'],
        'cni'=>['required','file'],
        'house_piece'=>['required','file'],
        'rib'=>['required','file']
    ])->validate();

    $photofilename=time().'.'. $request->file('photo')->extension();
    $photopath=$request->file('photo')->move(public_path('vendeurs/images',$photofilename));

   //-------------------------
   $cnifilename=time().'.'. $request->file('cni')->extension();
   $cnipath=$request->file('cni')->move(public_path('vendeurs/cni',$cnifilename));
    //-------------------------
    $house_piecefilename=time().'.'. $request->file('house_piece')->extension();
    $house_piecepath=$request->file('house_piece')->move(public_path('vendeurs/residence',$house_piecefilename));

   //--------------------------
   $ribfilename=time().'.'. $request->file('rib')->extension();
   $ribpath=$request->file('rib')->move(public_path('vendeurs/rib',$ribfilename));
   //-------------------------


   $seller = Seller::create([
        'sirname'=>$inputs['sirname'],
        'firstname'=>$inputs['firstname'],
        'phonenumber'=>$inputs['phonenumber'],
        'frequence'=>$inputs['frequence'],
        'media'=>$inputs['media'],
        'photo'=>$photopath,
        'cni'=>$cnipath,
        'house_piece'=>$house_piecepath,
        'rib'=>$ribpath,
    ]);

    DB::table('users')
    ->where('id','=',Auth::user()->id)
    ->update(['owner_id'=>$seller->id]);

    // User::where('id',Auth::user()->id)->update(['owner_id'=>$seller->id]);


       $msg= " Félicitation votre  Inscription en tant que vendeur est terminée  ";

       Alert::success('Inscription vendeur', $msg);
       return  redirect()->route('dashboard');
   }



  public function updateprofile(){
    return view('dashboard.profile.seller.updateprofile');
  }

  public function updatepasswordprofile(){
    return view("dashboard.profile.seller.passwordprofile");

  }

  public function update(Request $request){


    $seller = DB::table('sellers')->where('id','=',Auth::user()->owner_id)->first();

    dd($seller->photo);
  }




}
