<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GuestController extends Controller
{
    public function index():View
    {
        $collections = Collection::limit(4)->get();
        return view('guest.index', ['collections' => $collections]);
    }
}
