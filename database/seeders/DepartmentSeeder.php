<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $departments = [
            'Amazonas',
            'Áncash',
            'Apurímac',
            'Arequipa',
            'Ayacucho',
            'Cajamarca',
            'Cusco',
            'Huancavelica',
            'Huánuco',
            'Ica',
            'Junín',
            'La Libertad',
            'Lambayeque',
            'Lima',
            'Loreto',
            'Madre de Dios',
            'Moquegua',
            'Pasco',
            'Piura',
            'Puno',
            'San Martín',
            'Tacna',
            'Tumbes',
            'Ucayali'
        ];

        foreach ($departments as $department) {
            Department::create([
                'name' => $department
            ]);
        }
    }
}
