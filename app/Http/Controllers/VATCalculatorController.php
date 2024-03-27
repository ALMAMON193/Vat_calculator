<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VATCalculation;
use Illuminate\Support\Facades\Validator;

class VATCalculatorController extends Controller
{
    public function index()
    {
        $vatRate = 15; // Default VAT rate for Bangladesh in percentage
        return view('vat.calculator', compact('vatRate'));
    }

    public function calculate(Request $request)
    {
        $amount = $request->input('amount');
        $vatRate = $request->input('vat_rate');

        // Convert percentage to decimal
        $vatRateDecimal = $vatRate / 100;

        $vatAmount = $amount * $vatRateDecimal;
        $totalAmount = $amount + $vatAmount;


        $vatExcludedAmount = round(($amount / (1 + $vatRateDecimal)), 2);


        $calculation = new VatCalculation();
        $calculation->amount = $amount;
        $calculation->vat_rate = $vatRateDecimal;
        $calculation->vat_amount = $vatAmount;
        $calculation->total_amount = $totalAmount;
        $calculation->vat_excluded_amount = $vatExcludedAmount; // Assigning vat_excluded_amount
        $calculation->save();

        // Pass $amount to the view
        return view('vat.result', compact('amount', 'vatRate', 'vatAmount', 'totalAmount'));
    }
}
