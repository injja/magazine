<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Categories\CategoriesService;

class CategoriesController extends Controller
{
    public CategoriesService $categoriesService;

    public function __construct(CategoriesService $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    public function list()
    {
        $categories = $this->categoriesService->list();
        return response()->json(['categories' => $categories]);
    }
}
