<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        $admin=Admin::create([
            'name'=>'Super Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt(123456789),
        ]);
    }
}
