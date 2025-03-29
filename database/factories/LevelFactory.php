<?php

namespace Database\Factories;

use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevelFactory extends Factory
{
    /**
     * اسم النموذج الذي يتبع هذا المصنع.
     *
     * @var string
     */
    protected $model = Level::class;

    /**
     * تعريف بيانات المصنع.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'img' => $this->faker->text,
            
        ];
    }
}

