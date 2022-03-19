<?php

namespace App\Http\Controllers;

use App\Models\CashBook;
use Illuminate\Http\Request;

class CashBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total=CashBook::sum('amount');
        $cashBooks=CashBook::all();
        return view('cashbook.index',compact('cashBooks','total'));
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
        $cashBook=CashBook::create($request->all());
        return redirect()->back()->with('success','successfully added a record');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function show(CashBook $cashBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function edit(CashBook $CashBook)
    {
       return redirect()->route('CashBook.edit',compact('CashBook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashBook $CashBook)
    {
      $CashBook->update($request->all());
      return redirect()->back()->with('success','successfully updated a record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashBook $CashBook)
    {
        $CashBook->delete();
        return redirect()->back()->with('success','Successfully deleted');
    }
}
