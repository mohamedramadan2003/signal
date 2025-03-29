<?php

namespace Database\Factories;

use App\Models\Specialcourse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialcourse>
 */
class SpecialcourseFactory extends Factory
{
    protected $model = Specialcourse::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'img' => $this->faker->text,
            'review' => $this->faker->text,
        ];
    }
}
