<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $user = new User();
        $user->user_group = 1; //super admin
        $user->name = "Elearn Admin";
        $user->email = "elearn@gmail.com";
        $user->password = bcrypt("elearn@gmail");
        $user->save();

        $user = new User();
        $user->user_group = 3; //student
        $user->name = "Student One";
        $user->email = "student@gmail.com";
        $user->password = bcrypt("student@gmail");
        $user->save();
    }
}
