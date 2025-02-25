<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestRequest;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
       $tests = Test::get(['name', 'age']);
         return response()->json($tests);
    }

    public function store(StoreTestRequest $request)
    {
         Test::create($request->validated());
        return response()->json('created successfully', 201);
    }

    public function destroy($id){
        $test = Test::find($id);
        if($test){
            $test->delete();
            return response()->json('deleted successfully', 200);
        }
        return response()->json('not found', 404);
    }
}
