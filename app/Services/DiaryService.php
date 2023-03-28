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

    public function getAllPaginated($perPage = 5)
    {
        return $this->diaryRepository->getAllPaginated($perPage);
    }

    public function create(array $data)
    {
        $data['image'] = $this->fileService->upload($data['image']);
        return $this->diaryRepository->create($data);
    }

    public function update($diary, array $data)
    {
        $data['image'] = $this->fileService->upload($data['image']);
        $this->fileService->delete($diary->image);
        return $this->diaryRepository->update($diary->id, $data);
    }

    public function delete($diary)
    {
        $this->fileService->delete($diary->image);
        return $this->diaryRepository->delete($diary);
    }
}
