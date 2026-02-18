<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
        public function index()
    {
        // Devolvemos JSON puro, código 200 OK
        return response()->json([
            'status' => 'success',
            'total' => News::count(),
            'data' => News::all()
        ], 200);
    }
}
