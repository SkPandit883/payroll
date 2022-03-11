@extends('assets.master')
@section('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar" class="debit-credit-outer ">
                                <div class="credit">
                                    <h6>Credit: </h6>
                                    <div class="credit-debit-icons-amount">
                                        <h4 class="credit-amount">300.0</h4>
                                        <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/20/000000/external-arrow-arrow-line-royyan-wijaya-detailed-outline-royyan-wijaya-17.png"/>
                                    </div>
                                </div> 
                                <div class="debit">
                                    <h6>Debit: </h6>
                                    <div class="credit-debit-icons-amount">
                                        <h4 class="debit-amount">200.0</h4>
                                        <img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/20/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-6.png"/>
                                    </div>
                                </div>
                                <div class="debit">
                                    <h6>Total: </h6>
                                    <div class="credit-debit-icons-amount">
                                        <h4 class="debit-amount">100.0</h4>
                                        <img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/20/000000/external-arrow-arrows-those-icons-lineal-color-those-icons-6.png"/>
                                        <img src="https://img.icons8.com/external-royyan-wijaya-detailed-outline-royyan-wijaya/20/000000/external-arrow-arrow-line-royyan-wijaya-detailed-outline-royyan-wijaya-17.png"/>
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
                                        <th data-field="complete">Debit</th>
                                        <th data-field="task" data-editable="true">Credit</th>
                                        <th data-field="date" data-editable="true">Remarks</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td>Web Development</td>
                                        <td>admin@uttara.com</td>
                                        <td>+8801962067309</td>
                                        <td class="datatable-ct debit-td"><span class="pie">1/6</span> </td>
                                        <td class="credit-td">10%</td>
                                        <td>Jul 14, 2017</td>
                                        <td class="datatable-ct"> 
                                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a> 
                                            <a style="color:#006DF0" href=""><i style="margin-left:4px" class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <a style="color:red" href=""><i style="margin-left:4px" class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Graphic Design</td>
                                        <td>fox@itpark.com</td>
                                        <td>+8801762067304</td>
                                        <td class="datatable-ct"><span class="pie">230/360</span>
                                        </td>
                                        <td>70%</td>
                                        <td>fab 2, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Software Development</td>
                                        <td>gumre@hash.com</td>
                                        <td>+8801862067308</td>
                                        <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                        </td>
                                        <td>5%</td>
                                        <td>Seb 5, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Woocommerce</td>
                                        <td>kyum@frok.com</td>
                                        <td>+8801962066547</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Oct 10, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Joomla</td>
                                        <td>jams@game.com</td>
                                        <td>+8801962098745</td>
                                        <td class="datatable-ct"><span class="pie">200,133</span>
                                        </td>
                                        <td>80%</td>
                                        <td>Nov 20, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Wordpress</td>
                                        <td>flat@yem.com</td>
                                        <td>+8801962254781</td>
                                        <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                        </td>
                                        <td>30%</td>
                                        <td>Aug 25, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Ecommerce</td>
                                        <td>hasan@wpm.com</td>
                                        <td>+8801962254863</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>July 17, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Android Apps</td>
                                        <td>ATM@devep.com</td>
                                        <td>+8801962875469</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>June 11, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Prestashop</td>
                                        <td>presta@Prest.com</td>
                                        <td>+8801962067524</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>May 9, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Game Development</td>
                                        <td>Dev@game.com</td>
                                        <td>+8801962067457</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>April 5, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Angular Js</td>
                                        <td>gular@angular.com</td>
                                        <td>+8801962067124</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Dec 1, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Opencart</td>
                                        <td>open@cart.com</td>
                                        <td>+8801962067587</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Jan 6, 2017</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                   
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