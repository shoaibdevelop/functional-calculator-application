<?php

namespace App\Http\Controllers;

use App\Models\CalculationHistory;
use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function save(Request $request)
    {
        $calculation = new CalculationHistory(); // Use CalculationHistory model
        $calculation->expression = $request->input('input');
        $calculation->result = $request->input('result');
        $calculation->save();

        return response()->json(['message' => 'Calculation saved successfully']);
    }

    public function history()
    {
        $history = CalculationHistory::latest()->get(); // Use CalculationHistory model
        return response()->json($history);
    }
}
