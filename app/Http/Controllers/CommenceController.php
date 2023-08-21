<?php

namespace App\Http\Controllers;

use App\Models\Commence;
use Illuminate\Http\Request;

class CommenceController extends Controller
{
    public function store(Request $request)
    {
        $commence = new Commence();
        $commence->loadFromRequest($request);
        $commence->save();
    }
}
