<?php

namespace laravel\app\Http\Controllers;

use Illuminate\Http\Request;
use laravel\app\Models\Contact;

class CalculatorController extends Controller
{
    public function calc_check(Request $request) {
        $firstnumber = $request->input('firstnumber');
        $secondnumber = $request->input('secondnumber');
        $operator = $request->input('operator');
        $result = 0;

        if ($operator == '+') {
            $result = $firstnumber + $secondnumber;
        } elseif ($operator == '-') {
            $result = $firstnumber - $secondnumber;
        } elseif ($operator == '*') {
            $result = $firstnumber * $secondnumber;
        } elseif ($operator == '/') {
            $result = $firstnumber / $secondnumber;
        } elseif ($operator == '%') {
            $result = $firstnumber % $secondnumber;
        } else {
            $result = 0;
        }



        $primer = new Contact();
        $primer->firstnumber = $request->input('firstnumber');
        $primer->secondnumber = $request->input('secondnumber');
        $primer->operator = $request->input('operator');
        $primer->result = $result;

        $primer->save();
        return redirect('/')->with('message', $firstnumber . ' ' . $operator. ' ' . $secondnumber . ' = ' . $result);
    }
}
