<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\customers;
use App\products;
use App\sales;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //display all users
    public function users(){
        $users = User::all();
        return view('admin.users')->with('users', $users);

    }
    //get specific user
    public function updateuser(Request $request){
        $id=$request->id;
        $user=User::find($id);
        return view('admin.update')->with('user', $user);

    }
    //update user
    public function updateuserinfo(Request $request){
        //getting data from the form
        $id=$request->id;
        $name=$request->username;
        $email=$request->email;
        $fastname=$request->firstname;
        $lastname=$request->lastname;
        $phone=$request->phone;
        $usertype=$request->usertype;
        $aboutme=$request->aboutme;
        //updatefields
        $user=User::find($id);
        $user->name=$name;
        $user->email=$email;
        $user->fastname=$fastname;
        $user->lastname=$lastname;
        $user->phone=$phone;
        $user->usertype=$usertype;
        $user->aboutme=$aboutme;
        $user->save();
        if($request->newpassword!=""){
            //upadate password field
        $password1=$request->newpassword;
        $password2=$request->confirmpassword;
        if($password1==$password2){
            $user->password=Hash::make($password1);
            $user->save();
            return back()->with('status', 'User Details And Password Updated Successifully');
        }else{
            return back()->with('status', 'password do not match');
        }

        }

        return back()->with('status', 'User Details Updated Successifully');
    }

    public function deleteuser(Request $request){
        $id=$request->id;
        $user=User::find($id);
        $user->delete();

        return back()->with('status', 'User Deleted Successifuly');
    }
    //searchuser
    public function searchuser(Request $request){
        $query=$request->search;
        $searchresult=User::where('name', 'LIKE', "%$query%")
                           ->orwhere('fastname', 'LIKE', "%$query")
                           ->orwhere('lastname', 'LIKE', "%$query")
                            ->orwhere('phone', 'LIKE', "%$query")
                             ->get();

           //redirect after searching
        
        return view('admin.users')->with('searchresult', $searchresult);
          
    }
}
