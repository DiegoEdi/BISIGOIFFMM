<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomes = Income::all();
        return response()->json($incomes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'provider_id' => 'required|exists:people,id',
            'user_id' => 'required|exists:users,id',
            'receipt_type' => 'required|string|max:20',
            'receipt_series' => 'nullable|string|max:7',
            'receipt_number' => 'required|string|max:10',
            'date' => 'required|date',
            'tax' => 'required|numeric|between:0,99.99',
            'total' => 'required|numeric|between:0,99999999.99',
            'status' => 'required|string|max:20',

        ]);

        $income = Income::create($request->all());
        return response()->json($income, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $income = Income::findOrFail($id);
        return response()->json($income);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'provider_id' => 'required|exists:people,id',
            'user_id' => 'required|exists:users,id',
            'receipt_type' => 'required|string|max:20',
            'receipt_series' => 'nullable|string|max:7',
            'receipt_number' => 'required|string|max:10',
            'date' => 'required|date',
            'tax' => 'required|numeric|between:0,99.99',
            'total' => 'required|numeric|between:0,99999999.99',
            'status' => 'required|string|max:20',
        ]);

        $income = Income::findOrFail($id);
        $income->update($request->all());
        return response()->json($income);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $income = Income::findOrFail($id);
        $income->delete();
        return response()->json(null, 204);
    }
}
