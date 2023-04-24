<?php

use App\Laravue\Models\User;
use App\Laravue\Models\RoletaOption;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Laravue\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
        $editor = User::create([
            'name' => 'Editor',
            'email' => 'editor@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
        $user = User::create([
            'name' => 'User',
            'email' => 'user@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
        $visitor = User::create([
            'name' => 'Visitor',
            'email' => 'visitor@laravue.dev',
            'password' => Hash::make('laravue'),
        ]);
        $option = RoletaOption::create([
            'option' => '0€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '5€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '10€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '15€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '20€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '25€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '30€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '35€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '40€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '45€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '50€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '55€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '60€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '65€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '70€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '75€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '80€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '85€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '90€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '95€',
            'isActive' => 1,
            'result' => 0,
        ]);
        $option = RoletaOption::create([
            'option' => '100€',
            'isActive' => 1,
            'result' => 0,
        ]);


        $adminRole = Role::findByName(\App\Laravue\Acl::ROLE_ADMIN);
        $managerRole = Role::findByName(\App\Laravue\Acl::ROLE_MANAGER);
        $editorRole = Role::findByName(\App\Laravue\Acl::ROLE_EDITOR);
        $userRole = Role::findByName(\App\Laravue\Acl::ROLE_USER);
        $visitorRole = Role::findByName(\App\Laravue\Acl::ROLE_VISITOR);
        $admin->syncRoles($adminRole);
        $manager->syncRoles($managerRole);
        $editor->syncRoles($editorRole);
        $user->syncRoles($userRole);
        $visitor->syncRoles($visitorRole);
        $this->call(UsersTableSeeder::class);
    }
}
