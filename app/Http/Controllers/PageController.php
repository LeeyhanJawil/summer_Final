<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Kdrama;


class PageController extends Controller
{
    public function home() {
        return inertia('Home');
    }
    public function about() {
        return inertia('About');
    }
    public function contact() {
        return inertia('Contact');
    }
}
