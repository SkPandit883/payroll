@extends('assets.master')
@section('title',"Payroll | $expense_category->expense_category")
@section('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd add-button-outer">
                        <div class="main-sparkline13-hd">
                            <h1>{{$expense_category->expense_category}} <span class="table-project-n">Debit/Credit</span> Table</h1>
                            @if ($expense_category->category!='utility')
                                <div>
                                    <span class="ml-5 text-blue-600 mini-sub-pro hover:cursor-pointer hover:text-blue-200" type="button" data-modal-toggle="category-edit-modal"><img src="https://img.icons8.com/material-outlined/24/3552bd/pencil--v1.png" /></span></a>
                                    <a data-modal-toggle="category-delete-modal" class="dropdown-item" href="#" style="color:red" >
                                        <img src="https://img.icons8.com/material-outlined/24/ff0022/trash--v1.png" />
                                    </a>
                                    <form id="category-destroy-form" action="{{ route('Expenses-Category.destroy',$expense_category->id) }}" method="POST" style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </div>
                            @endif
                        </div>
                        <a href="{{ URL::to("/Expenses-Entries/create?expense_category_id=$expense_category->id") }}" class="btn btn-primary">Add <i class="fa fa-plus" aria-hidden="true"></i> </a>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar" class="debit-credit-outer ">
                                <div class="credit">
                                    <h6>Credit: </h6>
                                    <div class="credit-debit-icons-amount">
                                        <h4 class="credit-amount">{{$expense_category->total_credit}}</h4>
                                        <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/20/000000/external-arrow-arrow-line-royyan-wijaya-detailed-outline-royyan-wijaya-17.png" />
                                    </div>
                                </div>
                                <div class="debit">
                                    <h6>Debit: </h6>
                                    <div class="credit-debit-icons-amount">
                                        <h4 class="debit-amount">{{$expense_category->total_debit}}</h4>
                                        <img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/20/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-6.png" />
                                    </div>
                                </div>
                                <div class="debit">
                                    <h6>Total: </h6>
                                    <div class="credit-debit-icons-amount">
                                        @php
                                        $total=$expense_category->total_credit-$expense_category->total_debit
                                        @endphp
                                        @if($total>0)
                                        <h4 class="credit-amount">{{number_format($total,2)}}</h4>
                                        <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/20/000000/external-arrow-arrow-line-royyan-wijaya-detailed-outline-royyan-wijaya-17.png" />
                                        @elseif($total<0) <h4 class="debit-amount">{{number_format($total,2)}}</h4>
                                            <img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/20/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-6.png" />
                                            @else
                                            <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/20/000000/external-arrow-arrow-line-royyan-wijaya-detailed-outline-royyan-wijaya-17.png" />
                                            <img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/20/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-6.png" />
                                            @endif
                                    </div>
                                </div>
                            </div>

                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>

                                    <tr>
                                        {{-- <th data-field="state" data-checkbox="true"></th> --}}
                                        <th data-field="id">SN</th>
                                        <th data-field="name" data-editable="true">Date</th>
                                        <th data-field="email" data-editable="true">Bill No</th>
                                        <th data-field="phone" data-editable="true">Particular</th>
                                        <th data-field="task" data-editable="true">Credit</th>
                                        <th data-field="complete">Debit</th>
                                        <th data-field="date" data-editable="true">Remarks</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expense_category->expenses as $expense)
                                    <tr>
                                        {{-- <td></td> --}}
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$expense->date}}</td>
                                        <td>{{$expense->bill_no}}</td>
                                        <td>{{$expense->particular}}</td>
                                        @if($expense->credit<=0) <td>
                                            </td>
                                            @else
                                            <td class="credit-td">{{$expense->credit}}</td>
                                            @endif
                                            @if($expense->debit<=0) <td>
                                                </td>
                                                @else
                                                <td class="datatable-ct debit-td"><span class="pie">{{$expense->debit}}</span> </td>
                                                @endif
                                                <td>{{$expense->remarks}}</td>
                                                <td class="datatable-ct">
                                                    <a href="{{route('Expenses-Entries.show',$expense->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a style="color:#006DF0" href="{{route('Expenses-Entries.edit',$expense->id)}}"><i style="margin-left:4px" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    {{-- <a style="color:red" href="{{route('Expenses-Entries.destroy',$expense->id)}}"><i style="margin-left:4px" class="fa fa-trash" aria-hidden="true"></i></a> --}}
                                                    <a class="dropdown-item" href="#" style="color:red" onclick="event.preventDefault();
                                                                                        document.getElementById('entry-destroy-form').submit();">
                                                        <i style="margin-left:4px" class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>

                                                    <form id="entry-destroy-form" action="{{ route('Expenses-Entries.destroy',$expense->id) }}" method="POST" style="display: none;">
                                                        @method('DELETE')
                                                        @csrf
                                                    </form>
                                                </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full" id="category-delete-modal" aria-hidden="true">
    <div class="relative w-full h-full max-w-md px-4 md:h-auto">

        <div class="relative bg-white rounded-lg shadow">

            <div class="flex justify-end p-2">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-400 hover:text-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="category-delete-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="p-6 pt-0 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>

                <h3 class="text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete?</h3>
                <h6 class="mb-5 text-red-500">All the Entries Corresponding to {{$expense_category->expense_category}} will also be deleted.</h6>
                <button onclick="event.preventDefault();
                         document.getElementById('category-destroy-form').submit();" data-modal-toggle="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                </button>
                <button data-modal-toggle="category-delete-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-400 focus:ring-4 focus:ring-gray-300 rounded-lg  text-sm font-medium px-5 py-2.5 hover:text-gray-100 focus:z-10">No, cancel</button>
            </div>
        </div>
    </div>
</div>
<div id="category-edit-modal" aria-hidden="true" class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 h-modal md:h-full md:inset-0">
    <div class="relative w-full h-full max-w-md px-4 md:h-auto">

        <div class="relative bg-white rounded-lg shadow ">
            <div class="flex justify-end p-2">
                <button type="button" class="hover:text-white text-blue-600  hover:bg-blue-600  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="category-edit-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form method="POST" class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="{{route('Expenses-Category.update',$expense_category->id)}}">
                @csrf
                @method('patch')
                <h3 class="text-xl font-medium text-gray-900">Edit {{$expense_category->expense_category}}</h3>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Person Name</label>
                    <input type="text" name="name" id="email" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 " placeholder="eg Alex" value="{{$expense_category->expense_category}}" required>
                </div>
                @if($expense_category->category==="personal")
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Share/Salary</label>
                        <select required name="share_salary" id="" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            {{-- <option value="">Choose</option> --}}
                            <option @if($expense_category->salary_share==="share") selected @endif value="share">Share</option>
                            <option @if($expense_category->salary_share==="salary") selected @endif value="salary">Salary</option>
                        </select>
                    </div>
                @else
                    <div>
                        <label for="share_salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Salary/Share</label>
                        <input type="text" readonly name="share_salary" id="password" placeholder="" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="share" required>
                    </div>
                @endif
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Category</label>
                    <input type="text" readonly name="category" id="password" placeholder="" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{$expense_category->category}}" required>
                </div>

                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>

            </form>
        </div>
    </div>
</div>

@endsection
