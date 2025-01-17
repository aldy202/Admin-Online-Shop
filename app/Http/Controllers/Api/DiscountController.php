<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = \App\Models\Discount::all();
        return response()->json(['status' => 'success', 'data' => $discounts], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'value' => 'required',
        ]);

        $discount = \App\Models\Discount::create($request->all());

        return response()->json(['status' => 'success', 'data' => $discount], 201);

    }
}
