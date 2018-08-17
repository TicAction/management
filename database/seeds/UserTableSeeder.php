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
        $role_direction = Role::where("name", "direction")->first();
        $role_teacher  = Role::where("name", "enseignant")->first();

        $direction = new User();
        $direction->name = "Hélène Laforest";
        $direction->email = "direction@example.com";
        $direction->identification = "dir0001";
        $direction->password = bcrypt("123123");
        $direction->save();

        $direction->roles()->attach($role_direction);

        $teacher = new User();
        $teacher->name = "Ghislain Girard";
        $teacher->email = "ghischa@gmail.com";
        $teacher->identification = "ens0002";
        $teacher->password = bcrypt("123123");
        $teacher->save();

        $teacher->roles()->attach($role_teacher);


        $teacher = new User();
        $teacher->name = "Chantal Nolet";
        $teacher->email = "Chantal.nolet39@gmail.com";
        $teacher->identification = "ens0002";
        $teacher->password = bcrypt("123123");
        $teacher->save();

        $teacher->roles()->attach($role_teacher);
    }
}
