<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassModel;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        ClassModel::create(['level_id' => 1, 'title' => 'Clase 1.1', 'video_url' => 'url_del_video_1']);
        ClassModel::create(['level_id' => 1, 'title' => 'Clase 1.2', 'video_url' => 'url_del_video_2']);
        ClassModel::create(['level_id' => 1, 'title' => 'Clase 1.3', 'video_url' => 'url_del_video_3']);
        ClassModel::create(['level_id' => 2, 'title' => 'Clase 2.1', 'video_url' => 'url_del_video_4']);
        ClassModel::create(['level_id' => 2, 'title' => 'Clase 2.2', 'video_url' => 'url_del_video_5']);
    }
}