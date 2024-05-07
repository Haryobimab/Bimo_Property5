<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\SessionGuard;

class ProfileController extends Controller
{
    public function destroy($id)
    {
        $user = Profile::find($id);
        $user->delete();
        return redirect('/profile')->with('success', 'Data user berhasil terhapus');
    }
    public function profileView () 
	{
        $title = "My Profile";
    	$id = Auth::user()->id;
    	$user = User::find($id);
		return view('user.profile', compact('user'));
	}

    public function updateProfile (Request $request) 
	{
		$request->validate([
            'photo' => 'image|mimes: png, jpeg, jpg'
        ]);

        $id_user = Auth::user()->id;
        $user = User::find($id_user);
          

        if ($request->hasFile('photo')) {
            $photoNew = $request->file('photo');
            $imageName = time() . '.' . $photoNew->getClientOriginalName();
            $photoNew->move(public_path('photo'), $imageName);
            

            $user->photo = $imageName;
            $user->save();
        }

        $user->name = $request->name == '' ? Auth::user()->name : $request->name;
        $user->email= $request->email == '' ? Auth::user()->email : $request->email;
        $user->save();
        return redirect()->back()->with('success', 'Profile berhasil terupdate');
	}
}
