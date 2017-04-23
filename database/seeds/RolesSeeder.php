<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;
use App\Permission;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('truncate table permission_role');
        DB::statement('truncate table role_user');
        Role::truncate();
        Permission::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $roles= [
                    ['name'=>'admin','display_name'=>'Project Admin','description'=>'Administrator'],
                    ['name'=>'manager','display_name'=>'Project manager','description'=>'manage all user'],
                ];

        foreach ($roles as $key => $role) {
            Role::create($role);
        }
        

        $admin=Role::findorfail(1);
        $user= User::findorfail(1);
        $user->attachRole($admin);



        $permissions=[
                        ['name'=>'create-user','display_name'=>'create users','description'=>'create new verified users'],
                        ['name'=>'edit-user','display_name'=>'edit users','description'=>'edit all users'],
                        ['name'=>'block-user','display_name'=>'block users','description'=>'can block users'],
                        ['name'=>'authorise-user','display_name'=>'authorise users','description'=>'can give roles and permissions to users'],
                        ['name'=>'delete-message','display_name'=>'Delete Any Message','description'=>'Can Delete any Message of any User']

                     ];

        foreach ($permissions as $key => $permission)
            {
                $newPermission= Permission::create($permission);     
                $admin->attachPermission($newPermission);
            }            

          $manager = Role::findorfail(2);
          $manager->attachPermission(2);
          $manager->attachPermission(3);  

    }
}
