<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Categories\CategoryService;

class CategoryController extends Controller
{
    public CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function update($id, Request $request)
    {
        $category = $request->get("category");
        $this->categoryService->update($id, $category);
    }

    public function create(Request $request)
    {
        $category = $request->get("category");
        $this->categoryService->create($category);
    }

    public function destroy($id)
    {
        $this->categoryService->destroy($id);
    }
}
