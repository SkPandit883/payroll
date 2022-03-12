<?php

namespace App\Http\Controllers;

use App\Models\DebitCredit;
use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use Illuminate\Support\Facades\URL;

class ExpensesEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $expense_category= ExpenseCategory::with(['expenses'=>function($query){$query->orderBy('id','DESC');}])->withSum('expenses as total_debit','debit')->withSum('expenses as total_credit','credit')->findOrFail($request->expense_category_id);
       return view('expenses.index',compact('expense_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $expense_category_id= $request->expense_category_id;
        return view('expenses.create',compact('expense_category_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->debit===null && $request->credit===null){
            return redirect()->back()->with('error','at least one of the credit or debit must be assigned');
        }
        DebitCredit::create([
            'expenses_category_id'=>$request->expense_category_id,
            'date'=>$request->date,
            'bill_no'=>$request->bill_no,
            'particular'=>$request->particular,
            'debit'=>$request->debit,
            'credit'=>$request->credit,
            'remarks'=>$request->remarks
        ]);
        return redirect(URL::to("/Expenses-Entries?expense_category_id=$request->expense_category_id"))->with('success','Successfully created a record');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $entry=DebitCredit::findOrFail($id);
       return view('expenses.edit',compact('entry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->debit===null && $request->credit===null){
            return redirect()->back()->with('error','at least one of the credit or debit must be assigned');
        }
        DebitCredit::where('id',$id)->update([
            'date'=>$request->date,
            'bill_no'=>$request->bill_no,
            'particular'=>$request->particular,
            'debit'=>$request->debit,
            'credit'=>$request->credit,
            'remarks'=>$request->remarks
        ]);
        return redirect(URL::to("/Expenses-Entries?expense_category_id=$request->expense_category_id"))->with('success','Successfully updated a record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DebitCredit::findOrFail($id)->delete();
         return redirect()->back()->with('success','Successfully deleted a record');
    }
}
