<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use App\Services\DiaryService;
use App\Http\Requests\CreateDiaryRequest;

use Illuminate\Support\Facades\Session;

class DiaryController extends Controller
{
    protected $diaryService;

    public function __construct(DiaryService $diaryService)
    {
        $this->diaryService = $diaryService;
    }

    public function index()
    {
        $diaries = $this->diaryService->getAllPaginated();

        return view('diaries.index', compact('diaries'));
    }

    public function create()
    {
        return view('diaries.create');
    }

    public function store(CreateDiaryRequest $request)
    {
        $this->diaryService->create($request->all());
        return redirect()->route('diaries.index');
    }

    public function show(Diary $diary)
    {
        return view('diaries.show', compact('diary'));
    }

    public function edit(Diary $diary)
    {
        return view('diaries.edit', compact('diary'));
    }

    public function update(CreateDiaryRequest $request, Diary $diary)
    {
        $this->diaryService->update($diary, $request->all());
        return redirect()->route('diaries.index');
    }

    public function destroy(Diary $diary)
    {
        $this->diaryService->delete($diary);
        return redirect()->route('diaries.index');
    }
}
