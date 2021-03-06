<?php

namespace App\Http\Controllers;

use App\PaymentTransaction;
use Illuminate\Http\Request;
use App\Payment;
use App\Student;

class PaymentTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentTransactions = PaymentTransaction::all();
        $payments            = Payment::all();
        $paymentMethod       = ['Cash', 'Transfer'];

        return view('admin.paymentTransactions.index', [
            'paymentTransactions' => $paymentTransactions,
            'payments'            => $payments,
            'paymentMethod'       => $paymentMethod
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentTransaction  $paymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentTransaction $paymentTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentTransaction  $paymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentTransaction $paymentTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentTransaction  $paymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentTransaction $paymentTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentTransaction  $paymentTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentTransaction $paymentTransaction)
    {
        //
    }

    public function search(Request $request)
    {
        $students = Student::where('account_number', $request->account_number);
        $payments = Payment::where('id', $request->payment);

        return view('admin.paymentTransactions.search', [
            'students' => $students,
            'payments' => $payments
        ]);
    }
}
