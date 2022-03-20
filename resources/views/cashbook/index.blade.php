@extends('assets.master')
@section('title',"Payroll | CashBook")
@section('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd add-button-outer">
                        <div class="main-sparkline13-hd">
                            <h1>CashBook Entries <span class="table-project-n"></span> Table</h1>
                        </div>
                        <button  class="btn btn-primary" data-modal-toggle="cashbook-add-modal">Add <i class="fa fa-plus" aria-hidden="true"></i> </button>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar" class="ml-6">
                                <div class="credit">
                                    <h2>Amount: </h2>
                                    <div class="credit-debit-icons-amount">
                                        <h1 class=" ml-2 font-bold text-blue-500 text-xl">{{$total}}</h1>
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
                                        <th data-field="phone" data-editable="true">Amount</th>
                                        <th data-field="date" data-editable="true">Remarks</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cashBooks as $cashBook)
                                    <tr>
                                        {{-- <td></td> --}}
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$cashBook->date}}</td>
                                        <td>{{$cashBook->bill_no}}</td>
                                        <td>{{$cashBook->amount}}</td>
                                        <td>{{$cashBook->remarks}}</td>
                                        <td class="datatable-ct">
                                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            <a style="color:#006DF0" href="{{route('CashBook.edit',$cashBook->id)}}"><i style="margin-left:4px" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            {{-- <a style="color:red" href="{{route('Expenses-Entries.destroy',$expense->id)}}"><i style="margin-left:4px" class="fa fa-trash" aria-hidden="true"></i></a> --}}
                                           
                                            <a class="dropdown-item" href="#" style="color:red" onclick="event.preventDefault();                             
                                               document.getElementById('cashbook-destroy-form-{{$cashBook->id}}').submit();">
                                                <i style="margin-left:4px" class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <form id="cashbook-destroy-form-{{$cashBook->id}}" action="{{ route('CashBook.destroy',$cashBook->id) }}" method="POST" style="display: none;">
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


<div id="cashbook-add-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">

        <div class="relative bg-white rounded-lg shadow ">
            
            <form method="POST" class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="{{route('CashBook.store')}}">
                @csrf
                <div class="flex justify-end p-2">

                    <h3 class="text-xl font-medium text-gray-900">Add New CashBook </h3>
                    <button type="button" class="hover:text-white text-blue-600  hover:bg-blue-600  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="cashbook-add-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <label for="Date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Date</label>
                    <input value="{{date('Y-m-d')}}" type="date" name="date" id="email" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 "  required>
                </div>
                
                <div>
                    <label for="bill_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Bill No</label>
                    <input type="text"  name="bill_no" id="password" placeholder="xyz" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="xyz" required>
                </div>
                <div>
                    <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Amount</label>
                    <input type="number"  name="amount" id="password" placeholder="12231.23" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  required>
                </div> 
                <div>
                    <label for="remark" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Remark</label>
                    <input type="text"  name="remarks" id="password" placeholder="sold item" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="xyz" required>
                </div>

                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>

            </form>
        </div>
    </div>
</div>

@endsection
