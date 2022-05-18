<?php

namespace App\Http\Controllers;

use App\Models\payslip;
use App\Http\Requests\StorepayslipRequest;
use App\Http\Requests\UpdatepayslipRequest;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorepayslipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepayslipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payslip  $payslip
     * @return \Illuminate\Http\Response
     */
    public function show(payslip $payslip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payslip  $payslip
     * @return \Illuminate\Http\Response
     */
    public function edit(payslip $payslip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepayslipRequest  $request
     * @param  \App\Models\payslip  $payslip
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepayslipRequest $request, payslip $payslip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payslip  $payslip
     * @return \Illuminate\Http\Response
     */
    public function destroy(payslip $payslip)
    {
        //
    }
}
