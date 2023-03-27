<?php

namespace App\Repositories;

use App\Models\Diary;

class DiaryRepository
{
    public function getAllPaginated($perPage = 10)
    {
        return Diary::latest()->paginate($perPage);
    }

    public function getById($id)
    {
        return Diary::findOrFail($id);
    }

    public function create(array $data)
    {
        return Diary::create([
            'title'   => $data['title'],
            'content' => $data['content'],
            'image'   => $data['image'],
        ]);
    }
}
