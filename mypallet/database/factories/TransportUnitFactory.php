<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TransportUnit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransportUnit>
 */

 class TransportUnitFactory extends Factory
 {
     protected $model = TransportUnit::class;
 
     public function definition(): array
     {
         return [
             'name' => $this->faker->company(), // Genererer et firmanavn som transportenhedens navn
             'type' => $this->faker->randomElement(['trailer', 'truck']), // Random type
         ];
     }
 }
