<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $admin = new \App\Models\User;
        $admin->name = "admin";
        $admin->username = "admin";
        $admin->nik = "3209210404040008";
        $admin->telp = "085310714071";
        $admin->role = "admin";
        $admin->password = \Hash::make('12345678');
        $admin->save();


    }
}
