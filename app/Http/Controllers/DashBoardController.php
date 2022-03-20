<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;

class DashBoardController extends Controller
{
     public function dashboard() {
        $expense_category= ExpenseCategory::with(['expenses'=>function($query){$query->orderBy('id','DESC');}])->withSum('expenses as total_debit','debit')->withSum('expenses as total_credit','credit')->get();
        // return $expense_category;
        $dashboard=true;
        return view('dashboard',compact('expense_category','dashboard'));
     }
        
}
