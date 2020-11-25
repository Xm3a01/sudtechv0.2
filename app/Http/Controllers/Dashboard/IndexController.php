<?php

namespace App\Http\Controllers\Dashboard;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Index');
    }
}
