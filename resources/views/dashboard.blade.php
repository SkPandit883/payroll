@extends('assets.master')
@section('title', 'Payroll | Dashboard')
@section('content')

<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            @foreach ($expense_category as $item)
            <div class="mt-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>{{$item->name}}</h5>
                        @php
                        $total=$item->total_credit-$item->total_debit
                        @endphp
                        <div class="flex flex-row items-center justify-between mt-2">
                            <h2 style="color:#1d1f1e">Amount</h2>
                            @if ($total > 0)
                            <h2 class="text-blue-700 counter" style="color:#006DF0">{{number_format($total,2)}}</h2>
                            @else
                            <h2 class="text-red-900 counter" style="color:red">{{number_format($total,2)}}</h2>
                            @endif
                        </div>
                        {{-- <span class="text-success">20%</span> --}}
                        <div class="progress m-b-0">
                            @if ($total>0)
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> <span class="sr-only"></span> </div>
                            @else
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%;background-color:red"> <span class="sr-only"></span> </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

<h1 class="m-5 text-2xl bg-white font-2xl">Expenses</h1>
<div class="flex flex-col">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
                <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                    <thead class="bg-silver-200 ">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-xs font-medium font-bold tracking-wider text-left text-gray-700 uppercase">
                                S.N.
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium font-bold tracking-wider text-left text-gray-700 uppercase">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium font-bold tracking-wider text-left text-gray-700 uppercase">
                                Amount
                            </th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($expense_category as $item)
                            @php
                                $total=$item->total_credit-$item->total_debit;
                            @endphp
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-100">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap ">{{$loop->index+1}}</td>
                                <td class="px-6 py-4 text-sm font-medium text-gray-500 whitespace-nowrap ">{{$item->name}}</td>
                                @if($total>0)
                                    <td class="px-6 py-4 text-sm font-medium text-blue-700 whitespace-nowrap ">{{number_format($total,2)}}</td>

                                @else
                                   <td class="px-6 py-4 text-sm font-medium text-red-900 whitespace-nowrap ">{{number_format($total,2)}}</td>

                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
