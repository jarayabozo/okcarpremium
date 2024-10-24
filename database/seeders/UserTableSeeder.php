<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'Juan Araya',
            'email' => 'jarayabozo@gmail.com',
            'password' => '$2y$12$rsWVnYnS24b2yJ9HelXoOeUXfhrnUDepxOLukUdieHSsL0RzUZm.O',
        ]);
        $user2 = User::create([
            'name' => 'Juan Araya',
            'email' => 'jarayabozo@laserenaweb.cl',
            'password' => '$2y$12$rsWVnYnS24b2yJ9HelXoOeUXfhrnUDepxOLukUdieHSsL0RzUZm.O',
        ]);
        // Asignar roles a los usuarios
        // $roleAdministrador = Role::where('name', 'Administrador')->first(); // Asegúrate de que el rol 'admin' existe
        // $roleBroker = Role::where('name', 'Broker')->first(); // Asegúrate de que el rol 'admin' existe
        // $roleOperaciones = Role::where('name', 'Operaciones')->first(); // Asegúrate de que el rol 'admin' existe
        // $user1->roles()->attach($roleAdministrador);
        // $user2->roles()->attach($roleBroker);


    }
}
