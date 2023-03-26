<?php

namespace Database\Factories;

use App\Models\Diary;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class DiaryFactory extends Factory
{
    protected $model = Diary::class;

    public function definition()
    {
        $image = $this->faker->image(null, 640, 480);
        $path = Storage::putFile('public/images', $image);
        $url = Storage::url($path);

        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'image' => $url,
        ];
    }
}
