<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class UserController extends Controller
{

    protected $storage="storage/users/";
    protected $variableS="user";
    protected $variableP="users";
    protected $viewRoutes=[
        'index'   =>  'admin.users.index',
        'create'  =>  'admin.users.create',
        'edit'    =>  'admin.users.edit',
        'show'    =>  'admin.users.show',
    ];
    protected $files=[
        '',
    ];


    public function index()
    {
        $data=User::paginate(5);
        return view($this->viewRoutes['index'])->with(
            [
                $this->variableP=>$data
            ]
        );
    }

    public function create()
    {
        return view($this->viewRoutes['create']);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        foreach($this->files as $file){
            $newFile=$request->file($file);
            $extension=$newFile->getClientOriginalExtension();
            $fileName=$file.date('YmdHis').'.'.$extension;
            $newFile->move($this->storage, $fileName);
            $data[$file]=$fileName;
        }

        User::create($data);

        return redirect()->action([UsersController::class,'index']);
    }

    public function show($id)
    {
        $data = User::find($id);
        return view($this->viewRoutes['show'])->with(
            [
                $this->variableS=>$data
            ]
        );
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view($this->viewRoutes['edit'])->with(
            [
                $this->variableS=>$data
            ]
        );
    }


    public function update(Request $request, $id)
    {
        $input=$request->all();
        $data=User::find($id);

        foreach($this->files as $file){
            if($request->hasFile($file))
            {
                $oldFile=$this->storage.$data->{$file};
                File::delete(public_path($oldFile));
                
                $newFile=$request->file($file);
                $extension=$newFile->getClientOriginalExtension();
                //Nombre de imagen en base de datos
                $fileName=$file.date('YmdHis').'.'.$extension;
                
                $newFile->move($this->storage, $fileName);
                $input[$file]=$fileName;
            }
            else{
                unset($input[$file]);
            }
        }

        $data->update($input);

        return redirect()->action([UsersController::class,'index']);
    }

    public function destroy($id)
    {
        $data=User::find($id);

        foreach($this->files as $file){
            $delete=$this->storage.$data->{$file};
            File::delete($delete);
        }

        $data->deleteTranslations();
        $data->delete();

        return redirect()->to(action([UsersController::class,'index']));
    }
}
