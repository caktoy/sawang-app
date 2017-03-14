<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        return response()
        ->json([
            'model' => News::filterPaginateOrder()
        ]);
    }
}
