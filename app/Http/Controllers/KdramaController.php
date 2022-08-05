<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kdrama;

class KdramaController extends Controller
{
    public function index() {
        $kdramas = Kdrama::with('kdrama_details')->get();

        return inertia('Kdrama',[
            'kdramas' => $kdramas
        ]);
    }
}
