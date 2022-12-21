<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new ModelsUser();
        $user->name='Antonio';
        $user->email='togu.320@gmail.com';
        //$user->email_verified_at=now();//En caso de que no requieras validar el correo.
        $user->password=Hash::make('Favicon45');
        $user->save();

        $user2=new ModelsUser();
        $user2->name='Antonio2';
        $user2->email='togu2.320@gmail.com';
        //$user->email_verified_at=now();//En caso de que no requieras validar el correo.
        $user2->password=Hash::make('favicon45');
        $user2->save();

        $user3=new ModelsUser();
        $user3->name='Antonio3';
        $user3->email='togu3.320@gmail.com';
        //$user->email_verified_at=now();//En caso de que no requieras validar el correo.
        $user3->password=Hash::make('favicon45');
        $user3->save();

        $user4=new ModelsUser();
        $user4->name='Rodolfo';
        $user4->email='fuzzyrodo@gmail.com';
        //$user->email_verified_at=now();//En caso de que no requieras validar el correo.
        $user4->password=Hash::make('favicon45');
        $user4->save();

        $user4=new ModelsUser();
        $user4->name='Antonio4';
        $user4->email='togu4.320@gmail.com';
        //$user->email_verified_at=now();//En caso de que no requieras validar el correo.
        $user4->password=Hash::make('favicon45');
        $user4->save();

        $user5=new ModelsUser();
        $user5->name='Antonio5';
        $user5->email='togu5.320@gmail.com';
        //$user->email_verified_at=now();//En caso de que no requieras validar el correo.
        $user5->password=Hash::make('favicon45');
        $user5->save();

        $user6=new ModelsUser();
        $user6->name='Antonio6';
        $user6->email='togu6.320@gmail.com';
        //$user->email_verified_at=now();//En caso de que no requieras validar el correo.
        $user6->password=Hash::make('favicon45');
        $user6->save();

        //Asignación de rol
        $user->assignRole('Admin');
    }
}
