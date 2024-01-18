<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Customer::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //here we call AdminsTableSeeder before we wirte db:seed command
//        $this->call(AdminsTableSeeder::class);
//        $this->call(CategoryTableSeeder::class);
//        $this->call(ProductTableSeeder::class);


    }
}
