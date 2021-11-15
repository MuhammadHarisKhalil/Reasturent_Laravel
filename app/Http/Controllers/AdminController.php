<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Cheifs;
class AdminController extends Controller
{

    //User Operation
    function Users(){
        $data=User::all();
        return view('admin.users',compact('data'));
        
    }
    function UsersDelete(User $User){
        $User->delete();
        $data=User::all();
        return redirect('/users');
    }
    // Food Operation
    function FoodMenu(){
        $data=Food::all();
        return view('admin.foodmenu',compact('data'));
    }
    function UploadFood(Request $request ){
        $data=new Food;
        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->desc=$request->desc;
        $data->save();
        return redirect('/food');
        }
        function FoodDelete(Food $Food){
           $Food->delete();
          
        return redirect('/food');
        }
        function FoodEdit($Food){
        $data=Food::find($Food);
           
         return view('admin.updatefood',compact('data'));
         }
         function FoodUpdate(Request $request, $Food)
         {
            $data=Food::find($Food);
            $image=$request->image;

            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image=$imagename;
            $data->title=$request->title;
            $data->price=$request->price;
            $data->desc=$request->desc;
            $data->save();
            return redirect('/food');
            
         }
         //reservation
         function Reserve(Request $request){
             $data=new Reservation;
             $data->name=$request->name;
             $data->email=$request->email;
             $data->date=$request->date;
             $data->time=$request->time;
             $data->guest=$request->guest;
             $data->message=$request->message;
             $data->phone=$request->phone;
             $data->save();
             return redirect()->back();
         }
         public function ViewReserve(){
             $data=Reservation::all();
             return view('admin.reservation',compact('data'));
         }
         //Chiefs
         public function ViewChiefs(){
             return view('admin.chiefs');
         }
         public function UploadChiefs(Request $request){
            $data=new Cheifs;
            $image=$request->image;
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chiefimage',$imagename);
            $data->image=$imagename;
            $data->name=$request->name;
            $data->position=$request->position;
            $data->facebook=$request->facebook;
            $data->instagram=$request->instagram;
            $data->twitter=$request->twitter;
            $data->save();
            return redirect('/chiefs');

         }

}
