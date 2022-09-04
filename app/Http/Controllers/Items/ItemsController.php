<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Items\ItemsService;

class ItemsController extends Controller
{
    public ItemsService $itemsService;

    public function __construct(ItemsService $itemsService)
    {
        $this->itemsService = $itemsService;
    }

    public function list()
    {
        $items = $this->itemsService->list();
        return response()->json(['items' => $items]);
    }
}
