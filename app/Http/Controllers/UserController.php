<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;

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
        'roleEdit' => 'admin.users.roleEdit'
    ];
    protected $permissions=[
        'index',
        'create',
        'update',
        'delete'

    ];
    protected $files=[
        
    ];

    //Protección de rutas con roles
    public function __construct()
    {
        //Ponemos el permiso y luego el método que protege
        // $this->middleware('can:users.index')->only('index');
        foreach ($this->permissions as $permission) {
            $this->middleware('can:'.$this->variableP.'.'.$permission)->only($permission);
        }
    }
    
    public function index()
    {
        return view($this->viewRoutes['index']);
    }

    public function create()
    {
        return view($this->viewRoutes['create']);
    }

    public function store(StoreUserRequest $request)
    {
        $data = $request->all();

        // foreach($this->files as $file){
        //     $newFile=$request->file($file);
        //     $extension=$newFile->getClientOriginalExtension();
        //     $fileName=$file.date('YmdHis').'.'.$extension;
        //     $newFile->move($this->storage, $fileName);
        //     $data[$file]=$fileName;
        // }

        unset($data->password_confirmation);
        $input['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect()->action([UserController::class,'index']);
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

    //Método para edición de roles GET
    public function roleEdit($id)
    {
        $roles = Role::all();
        $user = User::find($id);
        return view($this->viewRoutes['roleEdit'], compact('user', 'roles'));
    }

    //Método para edición de roles POST
    public function roleUpdate(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route($this->viewRoutes['roleEdit'], $user->id)->with('info', 'Se asginaron los roles correctamente');
    }


    public function update(UpdateUserRequest $request, $id)
    {
        $input=$request->all();
        $data=User::find($id);

        // foreach($this->files as $file){
        //     if($request->hasFile($file))
        //     {
        //         $oldFile=$this->storage.$data->{$file};
        //         File::delete(public_path($oldFile));
                
        //         $newFile=$request->file($file);
        //         $extension=$newFile->getClientOriginalExtension();
        //         //Nombre de imagen en base de datos
        //         $fileName=$file.date('YmdHis').'.'.$extension;
                
        //         $newFile->move($this->storage, $fileName);
        //         $input[$file]=$fileName;
        //     }
        //     else{
        //         unset($input[$file]);
        //     }
        // }
        unset($input->password_confirmation);
        $input['password'] = Hash::make($input['password']);
        $data->update($input);

        return redirect()->action([UserController::class,'index']);
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

        return redirect()->to(action([UserController::class,'index']));
    }
}
