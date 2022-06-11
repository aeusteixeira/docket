<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            // Get 10 last contents
            'contents' => Content::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }
}
