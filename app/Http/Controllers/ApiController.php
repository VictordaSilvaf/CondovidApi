<?php

use App\Models\CondoVid;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(\App\Models\CondoVid::all());
        //return 1;
    }
}
