<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        /*
        $users=User::all();
        return view('admin.users.index')
        ->with([
            'users'=>$users
        ]);
        */

        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        /*
        return view('admin.users.create');
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        /*
        $validator = Validator::make($request->all(), [
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> ['required','confirmed','min:8','max:50', Password::min(8)->mixedCase()->numbers()->symbols()->uncompromised(),],
            'role' => 'required',
            'imagen' => 'required|file|mimes:png,jpg,jpeg,svg,webp|max:10240',
        ]);
    
        if ($validator->fails()) {
            // For example:
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
    
        }

        $user = new User();
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=$request->get('password');
        $user->role=$request->get('role');

        if($request->hasfile('imagen')){
            $ruta='storage/profile_pictures/';
            $imagen=$request->file('imagen');
            $name=$imagen->getClientOriginalName();

            $imagen->move($ruta,$name);
            $user->image=$name;
        }
        
        $user->save();
        return view('admin.inicio');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        /*
        $user=User::find($id);
        return view('admin.users.show')
        ->with([
            'user'=>$user
        ]);
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*
        $user = User::find($id);
        return view('admin.users.editProfile')
        ->with([
            'user'=>$user
        ]);
        */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        /*
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'image'=> 'file|mimes:png,jpg,jpeg,svg,webp|max:10240'
        ]);
    
        if ($validator->fails()) {
            // For example:
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $user=User::find($id);

        $user->name=$request->get('name');

        if($request->hasfile('image')){

            $ruta='storage/profile_pictures/';
            $file=$ruta.$user->image;
            
            File::delete(public_path($file));

            $file=$request->file('image');
            $name=$file->getClientOriginalName();

            $file->move($ruta,$name);

            $user->image=$name;
        }

        $user->save();
        return view('admin.users.administrate');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function predestroy($id)
    {
        /*
        $user=User::find($id);
        return view('admin.users.predestroy')
        ->with([
            'user'=>$user
        ]);
        */
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*
        $user=User::find($id);
        
        $file="storage/profile_pictures/".$user->image;
        File::delete(public_path($file));

        $user->delete();

        return redirect()->to(action([UserController::class,'index']));
        */
    }
}

