<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Classroom;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $payments = Payment::all();

        return view('vendor.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classrooms = Classroom::all();

        return view('vendor.payments.create', [
            'classrooms'    => $classrooms
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'payment'   => 'required',
            'nominal'   => 'required',
            'classroom' => 'required'
        ]);

        Payment::create($request->all());

        return redirect('/payments')->with('status', 'Payment data was successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $classrooms = Classroom::all();

        return view('vendor.payments.edit', [
            'payment'   => $payment,
            'classrooms' => $classrooms
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'payment'   => 'required',
            'nominal'   => 'required|numeric',
            'classroom' => 'required'
        ]);

        $payment->update($request->all());

        return redirect('/payments')->with('status', 'Payment data has been changed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        Payment::destroy($payment->id);

        return redirect('/payments');
    }
}
