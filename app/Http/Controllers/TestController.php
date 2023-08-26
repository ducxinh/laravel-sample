<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestValidationRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(TestValidationRequest $request)
    {
        return response()->json([
            'success'  => true,
            'data' => $request->all()
        ]);
    }

    public function getTest(Request $request)
    {
        return response()->json([
            'success'  => true,
            'data' => $request->all()
        ]);
    }
}
