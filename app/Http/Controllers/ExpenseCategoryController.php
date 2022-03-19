<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use Illuminate\Support\Facades\URL;

class ExpenseCategoryController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $expense_category=ExpenseCategory::create([
            'name'=>$request->name,
            'salary_share'=>$request->share_salary,
            'category'=>$request->category
        ]);
        return redirect(URL::to("/Expenses-Entries?expense_category_id=$expense_category->id"))->with('success',"Successfully created $request->category:$request->name  ");

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
        //
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
        $expense_category=ExpenseCategory::where('id',$id)->update([
            'name'=>$request->name,
            'salary_share'=>$request->salary_share,
            'category'=>$request->category
        ]);
        return redirect(URL::to("/Expenses-Entries?expense_category_id=$id"))->with('success',"Successfully updated $request->category:$request->name  ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $category=ExpenseCategory::find($id);
       $category->delete();
       return redirect('/')->with('success',"successfully deleted $category->name with all expenses entries");
    }
}
