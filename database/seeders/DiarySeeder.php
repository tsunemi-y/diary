<?php

namespace Database\Seeders;

use App\Models\Diary;
use Illuminate\Database\Seeder;

class DiarySeeder extends Seeder
{
    public function run()
    {
        Diary::factory()->count(30)->create();
    }
}
