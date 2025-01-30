<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trooper>
 */
class TrooperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $types = ["Snowtrooper", "Sandtrooper", "Flametrooper", "Deathtrooper"];
        $guns = ["DLT-19", "T-21B", "E-11D", " E-10C"];
        $helmet = ["Snow", "Sand", "Flame", "Death"];

        return [
            'name' => fake()->name(),
            "type" => fake()->randomElement($types),
            "helmet"  => fake()->randomElement($helmet),
            "gun" => fake()->randomElement($guns),
        ];
    }
}
