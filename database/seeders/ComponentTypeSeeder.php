<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ComponentType;

class ComponentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // COMPONENT TYPES
        ComponentType::create([
            'name' => 'Blade'
        ]);
        ComponentType::create([
            'name' => 'Rotor'
        ]);
        ComponentType::create([
            'name' => 'Hub'
        ]);
        ComponentType::create([
            'name' => 'Generator'
        ]);
    }
}
