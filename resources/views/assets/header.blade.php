<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="logo-pro">
                {{-- <h3 class="font-extrabold">PAYROLL</h3> --}}
                {{-- <a class="res-logo" href="/"><img class="main-logo" src="https://img.icons8.com/external-kiranshastry-gradient-kiranshastry/64/000000/external-save-money-ecommerce-kiranshastry-gradient-kiranshastry.png"/> <h3 class="font-extrabold">PAYROLL</h3></a> --}}
                {{-- <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a> --}}
            </div>
        </div>
    </div>
</div>
<div class="header-advance-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="educate-icon educate-nav"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item"><a href="/" class="nav-link">DashBoard</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                        <li class="nav-item">
                                            <a class="res-logo" href="/">
                                                <h3 class="font-extrabold">PAYROLL</h3>
                                            </a>
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                {{-- <img src="img/product/pro4.jpg" alt="" /> --}}
                                                <span class="admin-name">Prof.Anderson</span>
                                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                            </a>

                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                </li>
                                                <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>Change Password</a>
                                                </li>


                                                <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">

                                <li><a href="events.html">Event</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=1') }}">Electricity</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=2') }}">Furniture</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=3') }}">Lunch</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=4') }}">Miscellaneous</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=5') }}">Expenses</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=6') }}">Office Rent</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=7') }}">Salary</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=8') }}">Stationery</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=9') }}">Travel Expenses</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=10') }}">Vehicle Fair</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=11') }}">Vehicle Maintenance</a></li>
                                <li><a href="{{ URL::to('/Expenses-Entries?expense_category_id=12') }}">Cash Book</a></li>


                                <li>
                                    <a class="has-arrow" href="mailbox.html" aria-expanded="false"> Personals</a>
                                    <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                                        @foreach ($personals as $personal)
                                        <li><a title="Notifications" href="{{ URL::to('/Expenses-Entries?expense_category_id='.$personal->id) }}"><span class="mini-sub-pro">{{$personal->expense_category}}</span></a></li>
                                        @endforeach
                                        <li>
                                            <span class="mini-sub-pro ml-5 hover:cursor-pointer text-blue-600 hover:text-blue-200" type="button" data-modal-toggle="personal-modal">Add New</span></a>
                                            {{-- <button class="text-blue-600 hover:text-blue-200" type="button" data-modal-toggle="authentication-modal">
                                                Toggle modal
                                            </button> --}}

                                        </li>
                                    </ul>
                                </li>
                                <li id="removable" style="margin-bottom: 40px">
                                    <a class="has-arrow" href="#" aria-expanded="false"> <span class="mini-click-non">Companies</span></a>
                                    <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                        @foreach ($companies as $company)
                                        <li><a title="Notifications" href="{{ URL::to('/Expenses-Entries?expense_category_id='.$company->id) }}"><span class="mini-sub-pro">{{$company->expense_category}}</span></a></li>
                                        @endforeach
                                        <li>
                                            <span class="mini-sub-pro ml-5 hover:cursor-pointer text-blue-600 hover:text-blue-200" type="button" data-modal-toggle="company-modal">Add New</span>
                                        </li>


                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu end -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            @if (session('success'))
                            <div id="noti" style="background-color: #006DF0;color:white" class=" toast alert-dismissible  col-lg-6 col-md-6 col-sm-6 col-xs-12" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <strong class="mr-auto">Success</strong>
                                    <button type="button" style="color:white" onclick="hideCancelButton()" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body my-5">
                                    <h4>{{ session('success') }}</h4>
                                </div>
                            </div>
                            {{-- <div style="background-color: #006DF0;color:white" class="alert alert-primary col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            {{ session('success') }}
                        </div> --}}
                        <div id="show-el" style="display: none" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        </div>
                        @else
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        </div>
                        @endif
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="/">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">{{$breadcum}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="personal-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
        <div class="relative px-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-lg shadow ">
                <div class="flex justify-end p-2">
                    <button type="button" class="hover:text-white text-blue-600  hover:bg-blue-600  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="personal-modal">

                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form method="POST" class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="{{route('Expenses-Category.store')}}">
                    @csrf
                    <h3 class="text-xl font-medium text-gray-900">Add New Personal Account</h3>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Person Name</label>
                        <input type="text" name="name" id="email" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 " placeholder="eg Alex" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Share/Salary</label>
                        <select required name="salary_share" id="" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Choose</option>
                            <option value="salary">Share</option>
                            <option value="share">Salary</option>
                        </select>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Category</label>
                        <input type="text" readonly name="category" id="password" placeholder="" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="personal" required>
                    </div>

                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>

                </form>
            </div>
        </div>
    </div>
    <div id="company-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
        <div class="relative px-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-lg shadow ">
                <div class="flex justify-end p-2">
                    <button type="button" class="hover:text-white text-blue-600  hover:bg-blue-600  rounded-lg text-sm p-1.5 ml-auto inline-flex items-center " data-modal-toggle="company-modal">

                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <form method="POST" class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="{{route('Expenses-Category.store')}}">
                    @csrf
                    <h3 class="text-xl font-medium text-gray-900">Add New Company </h3>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Company Name</label>
                        <input type="text" name="name" id="email" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 " placeholder="eg Microsoft" required>
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Category</label>
                        <input type="text" readonly name="category" id="password" placeholder="" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="company" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Salary/Share</label>
                        <input type="text" readonly name="share_salary" id="password" placeholder="" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="share" required>
                    </div>

                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
