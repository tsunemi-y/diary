<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileService
{
    public function upload($file)
    {
        $path = $file->store('public/images');
        return Storage::url($path);
    }
}
