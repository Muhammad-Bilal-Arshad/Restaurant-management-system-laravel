<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\food;
use App\Models\Reservation;
use App\Models\Order;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view ("admin.user",compact("data"));
    }
  public function deleteuser($id){
    $data = user::find($id);
    $data->delete();
    return redirect()->back();
  }
  public function foodmenu(){
    $data = food::all();
    return view ("admin.foodmenu",compact("data"));
}
public function upload(Request $request){
  $data = new food;
  $image = $request->image;
  $imagename = time().'.'.$image->getClientOriginalExtension();

          $request->image->move('foodimage',$imagename);
          $data->image = $imagename;
          $data->title = $request->title;
          $data->price = $request->price;
          $data->description = $request->description;
          $data->save();
          return redirect()->back();
}
public function deletemenu($id){
  $data = food::find($id);
  $data->delete();
  return redirect()->back();
}
public function updatemenu($id){   
  $data = food::find($id);
  return view("admin.updatedview", compact("data"));
}
public function update(Request $request, $id){
  $data = food::find($id);
  $image = $request->image;
  $imagename = time().'.'.$image->getClientOriginalExtension();

          $request->image->move('foodimage',$imagename);
          $data->image = $imagename;
          $data->title = $request->title;
          $data->price = $request->price;
          $data->description = $request->description;
          $data->save();
          return redirect()->back();
}
public function reservation(Request $request){
  $data = new reservation;
  
    
          $data->name = $request->name;
          $data->email = $request->email;
          $data->phone = $request->phone;
          $data->guest = $request->guest;
          $data->date = $request->date;
          $data->time = $request->time;
          $data->message = $request->message;
          $data->save();
          echo '<script>alert("Reservation made successfully !!!")</script>';
          $data = user::all();
          return view ("home",compact("data"));
}
public function viewreservations(){
  $data = reservation::all();
  return view("admin.adminreservations",compact("data"));
}

public function search(Request $request){
  $search = $request->search;
  $data = reservation::where('name','Like','%' .$search.'%')->orWhere('date','Like','%' .$search.'%')->get();
  return view("admin.adminreservations",compact("data"));
}
public function reservations(){
  return view ('reservations');
}
public function popup(){
  echo '<script>alert("You are not signed in !!!")</script>';
  $data = food::all();
  return view ("home",compact("data"));
}
public function profile(){
 $data = user::all();
  return view ("profile",compact("data"));
}
public function orders(){
          $data = order::all();
          return view ("order.updatedorder",compact("data"));

 }
public function uploadorder(Request $request){
  $data = new order;
          $data->content= $request->content;
          $data->tableno = $request->tableno;
          $data->save();
          return redirect()->back();
}
public function orderhistory(){
  $data = order::all();
  return view ("order.orderhistory",compact("data"));

}
public function kitchenorders(){
  $data = order::all();
  return view ("Kitchen.kitchenorders",compact("data"));

}
public function updatestatus($id){   
  $data = order::find($id);
  $data->fulfilled = "1";
  $data->save();
  $data = order::all();
  return redirect()->back();
}
}

