<?php

namespace Database\Seeders;

use App\Models\Component;
use App\Models\ComponentType;
use App\Models\Farm;
use App\Models\Grade;
use App\Models\GradeType;
use App\Models\Inspection;
use App\Models\Turbine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //* FIXED FIELDS *//
        $this->call(GradeTypeSeeder::class);
        $this->call(ComponentTypeSeeder::class);

        //* DYNAMIC FIELDS *//
        $this->call(FarmSeeder::class);
    }
}
