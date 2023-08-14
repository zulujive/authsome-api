<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function hello()
    {
        return response()->json(['message' => 'Hello, API from Controller!']);
    }
}
