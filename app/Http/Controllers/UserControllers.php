<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Image;
use Auth;

class UserControllers extends Controller
{
    public function profiles()
    {
       return view('admin.profiles', array('user' => Auth::user()));
    }
    public function modifieravatar( Request $request)
    {
  if($request->hasFile('avatar'))
  {
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();
    Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/'. $filename));
  $user= auth::user();
  $user->avatar = $filename;
  $user->save();
  }
  return view('admin.profiles',array('user' => Auth::user()));
    }
    public function DetailAvatar()
    {
      return view('admin.profiles',array('user' => Auth::user()));
    }
}
