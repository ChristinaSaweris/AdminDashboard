<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    // we create that seeder from "php artisan make:seeder AdminsTableSeeder" command
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //we run that seeder from "php artisan db:seed" after calling it in DatabaseSeeder.php
        $password = Hash::make('123456');
        $adminRecords = [
            ['name'=>'kouky', 'email'=>'kouky_11089@yahoo.com','type'=>'Full Stack Developer','phone'=>'01000783169', 'address'=>'cairo','password'=>$password],
        ];
        Admin::insert($adminRecords);
    }
}
