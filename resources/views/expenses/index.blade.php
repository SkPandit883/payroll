@extends('assets.master')
@section('title','Payroll | Electricity')
@section('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd add-button-outer">
                        <div class="main-sparkline13-hd">
                            <h1>{{$expense_category->name}} <span class="table-project-n">Debit/Credit</span> Table</h1>
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
                                        <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/20/000000/external-arrow-arrow-line-royyan-wijaya-detailed-outline-royyan-wijaya-17.png"/>
                                    </div>
                                </div> 
                                <div class="debit">
                                    <h6>Debit: </h6>
                                    <div class="credit-debit-icons-amount">
                                        <h4 class="debit-amount">{{$expense_category->total_debit}}</h4>
                                        <img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/20/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-6.png"/>
                                    </div>
                                </div>
                                <div class="debit">
                                    <h6>Total: </h6>
                                    <div class="credit-debit-icons-amount">
                                        @php
                                         $total=$expense_category->total_credit-$expense_category->total_debit   
                                        @endphp
                                        @if($total>0)
                                           <h4 class="credit-amount">{{$total}}</h4>
                                           <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/20/000000/external-arrow-arrow-line-royyan-wijaya-detailed-outline-royyan-wijaya-17.png"/>
                                        @elseif($total<0)
                                            <h4 class="debit-amount">{{$total}}</h4>
                                            <img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/20/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-6.png"/>
                                        @else
                                            <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/20/000000/external-arrow-arrow-line-royyan-wijaya-detailed-outline-royyan-wijaya-17.png"/>
                                            <img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/20/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-6.png"/>
                                        @endif
                                    </div>
                                </div>
                            </div>
                          
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
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
                                            @if($expense->credit<=0)
                                                <td></td>
                                            @else
                                                <td class="credit-td">{{$expense->credit}}</td>   
                                            @endif
                                            @if($expense->debit<=0)
                                              <td></td>
                                            @else
                                              <td class="datatable-ct debit-td"><span class="pie">{{$expense->debit}}</span> </td>
                                            @endif
                                            <td>{{$expense->remarks}}</td>
                                            <td class="datatable-ct"> 
                                                <a href="{{route('Expenses-Entries.show',$expense->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a> 
                                                <a style="color:#006DF0" href="{{route('Expenses-Entries.edit',$expense->id)}}"><i style="margin-left:4px" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                {{-- <a style="color:red" href="{{route('Expenses-Entries.destroy',$expense->id)}}"><i style="margin-left:4px" class="fa fa-trash" aria-hidden="true"></i></a> --}}
                                                <a class="dropdown-item" href="#" style="color:red"
                                                    onclick="event.preventDefault();
                                                                                        document.getElementById('destroy-form').submit();">
                                                      <i style="margin-left:4px" class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>

                                                    <form id="destroy-form" action="{{ route('Expenses-Entries.destroy',$expense->id) }}" method="POST" style="display: none;">
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
@endsection