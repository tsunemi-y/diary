<?php

namespace App\Services;

use App\Repositories\DiaryRepository;

class DiaryService
{
    protected $diaryRepository;

    public function __construct(DiaryRepository $diaryRepository)
    {
        $this->diaryRepository = $diaryRepository;
    }

    public function getAllPaginated($perPage = 10)
    {
        return $this->diaryRepository->getAllPaginated($perPage);
    }

    public function getById($id)
    {
        return $this->diaryRepository->getById($id);
    }
}
