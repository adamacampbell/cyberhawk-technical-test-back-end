<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\ComponentType>
 */
class ComponentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->randomElement([
            'Blade', 
            'Rotor', 
            'Hub',
            'Generator'
        ]);

        return [
            'name' => $name
        ];
    }
}
