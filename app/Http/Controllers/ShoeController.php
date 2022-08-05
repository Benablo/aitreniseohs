<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    public function index() {
        $shoes = Shoe::get();

        return inertia('Shoe',[
            'shoes' => $shoes
        ]);
    }
    
}
