<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where("name", "director")->first();
        $role_manager  = Role::where("name", "teacher")->first();

        $employee = new User();
        $employee->name = "Hélène Laforest";
        $employee->email = "employee@example.com";
        $employee->identification = "dir0001";
        $employee->password = bcrypt("secret");
        $employee->save();

        $employee->roles()->attach($role_manager);

        $manager = new User();
        $manager->name = "Ghislain Girard";
        $manager->email = "manager@example.com";
        $manager->identification = "ens0002";
        $manager->password = bcrypt("secret");
        $manager->save();

        $manager->roles()->attach($role_employee);
    }
}
