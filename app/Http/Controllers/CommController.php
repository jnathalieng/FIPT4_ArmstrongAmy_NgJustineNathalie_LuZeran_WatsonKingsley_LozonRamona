<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommController extends Controller
{
    public function index()
    {
        $comm = Comm::all();
        
        return response()->json([
            'status' => 'success',
            'data' => $comm
        ]);
    }

    public function show($id)
    {
        $comm = Comm::find($id);
        
        if (!$comm) {
            return response()->json([
                'status' => 'error',
                'message' => 'Record not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $comm
        ]);
    }
}