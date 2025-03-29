<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;


class VideoFactory extends Factory
{
   protected $model = Video::class ;
    public function definition(): array
    {
        return [
            'name'=> $this->faker->word ,
            'video_name'=> $this->faker->text,
            'img'=> $this->faker->text,
        ];
    }
}
