<?php

namespace App\Services;

use App\Services\FileService;
use App\Repositories\DiaryRepository;

class DiaryService
{
    protected $diaryRepository;
    private $fileService;

    public function __construct(DiaryRepository $diaryRepository, FileService $fileService)
    {
        $this->diaryRepository = $diaryRepository;
        $this->fileService = $fileService;
    }

    public function getAllPaginated($perPage = 10)
    {
        return $this->diaryRepository->getAllPaginated($perPage);
    }

    public function getById($id)
    {
        return $this->diaryRepository->getById($id);
    }

    public function create(array $data)
    {
        $data['image'] = $this->fileService->upload($data['image']);
        return $this->diaryRepository->create($data);
    }
}
