<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a message
     */
    public function index()
{
    return response()->json([
        'status' => 'SUCCESS',
        'message' => 'Students retrieved successfully',
        'data' => [] // You can populate this with actual student data later
    ], 200);
}
}
