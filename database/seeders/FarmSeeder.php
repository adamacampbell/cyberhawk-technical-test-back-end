<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Farm;
use App\Models\Turbine;
use App\Models\Component;
use App\Models\ComponentType;
use App\Models\Inspection;
use App\Models\Grade;
use App\Models\GradeType;

class FarmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Start With Farms
        Farm::factory(10)->create()->each(function($farm) {
            // Provide Farms With Turbines
            Turbine::factory(rand(1, 10))->create([
                'farm_id' => $farm->id
            ])->each(function($turbine) {
                // Provide Turbines With Components
                Component::factory(rand(1, 10))->create([
                    'turbine_id' => $turbine->id,
                    'component_type' => ComponentType::inRandomOrder()->first()->id
                ]);
                // Provide Turbines With Inspections
                Inspection::factory(rand(1, 5))->create([
                    'turbine_id' => $turbine->id
                ])->each(function($inspection) {
                    // Provide Inspections With Grades
                    Grade::factory(1)->create([
                        'inspection_id' => $inspection->id,
                        'component_id' => Component::inRandomOrder()->first->id,
                        'grade_type_id' => GradeType::inRandomOrder()->first->id
                    ]);
                });
            });
        });
    }
}
