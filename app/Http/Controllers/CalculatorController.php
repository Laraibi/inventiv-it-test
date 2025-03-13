<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric',
            'operation' => 'required|in:add,subtract,multiply,divide',
        ]);

        $number1 = $request->number1;
        $number2 = $request->number2;
        $operation = $request->operation;

        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                $operationSymbol = '+';
                break;
            case 'subtract':
                $result = $number1 - $number2;
                $operationSymbol = '-';
                break;
            case 'multiply':
                $result = $number1 * $number2;
                $operationSymbol = '×';
                break;
            case 'divide':
                if ($number2 == 0) {
                    $result = 'Erreur : Division par zéro';
                    $operationSymbol = '/';
                } else {
                    $result = $number1 / $number2;
                    $operationSymbol = '/';
                }
                break;
        }

        return view('calculator', compact('result', 'number1', 'number2', 'operationSymbol'));
    }
}
