<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = "direction";
        $role_employee->description = "La direction est informé de tous comportement inadéquat dans l'école. De plus, elle
                                        a accès à toutes la liste des jeunes de ses écoles.";
        $role_employee->save();

        $role_manager = new Role();
        $role_manager->name = "enseignant";
        $role_manager->description = "L'enseignant à le droit de voir tous les comportements des jeunes de sa classe
                                        peut importe qui à attribuer le comportement.";
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = "enseignant_anglais";
        $role_manager->description = "Le spécialiste en anglais à le droit de voir tous les jeunes de ses groupes
                                        auxquels il a attribué un comportement.";
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = "enseignant_musique";
        $role_manager->description = "Le spécialiste en musique à le droit de voir tous les jeunes de ses groupes
                                        auxquels il a attribué un comportement.";
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = "enseignant_education_physique";
        $role_manager->description = "Le spécialiste en éducation physique à le droit de voir tous les jeunes de ses groupes
                                        auxquels il a attribué un comportement.";
        $role_manager->save();


        $role_manager = new Role();
        $role_manager->name = "responsable_sdg";
        $role_manager->description = "Le responsable du SDG à le droit de voir tous les jeunes de ses groupes
                                        auxquels les éducatrices ont attribué un comportement.";
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = "educatice_sdg";
        $role_manager->description = "L'éducatrice du SDG a le droit de voir tous les jeunes de ses groupes
                                        auxquels elle a attribué un comportement.";
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = "parent";
        $role_manager->description = "Le parent voit les informations sur son ou ses enfants.";
        $role_manager->save();
    }
}
