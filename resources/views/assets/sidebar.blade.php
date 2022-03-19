<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
            <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="sidebar-list" href="/" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/office/22/000000/dashboard.png" /> <span class="mini-click-non">Dashboard</span></a>

                    </li>
                    {{-- <li>
                        <a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                    </li>  --}}
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=1') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/25/000000/external-electricity-energy-kiranshastry-lineal-kiranshastry.png" /> <span class="mini-click-non">Electricity</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=2') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/external-outline-agus-raharjo/22/000000/external-furniture-furniture-and-household-outline-agus-raharjo-10.png" /><span class="mini-click-non">Furniture</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=3') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/ios/22/000000/hamburger.png" /> <span class="mini-click-non">Lunch</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=4') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/ios/22/000000/box-important--v1.png" /> <span class="mini-click-non">Miscellaneous</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=5') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/external-line-rakhmat-setiawan/24/000000/external-office-office-and-work-room-line-rakhmat-setiawan-2.png" /> <span class="mini-click-non">Office Expenses</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=6') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/ios/23/000000/sell-property--v1.png" /> <span class="mini-click-non">Office Rent</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=7') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/external-becris-lineal-becris/24/000000/external-salary-customer-loyalty-program-becris-lineal-becris.png" /></span> <span class="mini-click-non">Salary</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=8') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-vitaly-gorbachev/24/000000/external-stationery-back-to-school-vitaliy-gorbachev-lineal-vitaly-gorbachev.png" /> <span class="mini-click-non">Stationery</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=9') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/ios/26/000000/passenger-with-baggage.png" /></span> <span class="mini-click-non">Travel Expenses</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=10') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/external-icongeek26-outline-icongeek26/25/000000/external-vehicle-war-icongeek26-outline-icongeek26.png" /></span> <span class="mini-click-non">Vehicle Fair</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=11') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/ios/21/000000/maintenance.png" /></span> <span class="mini-click-non">Vehicle Maintenance</span></a></li>
                    <li><a class="sidebar-list" href="{{ URL::to('/Expenses-Entries?expense_category_id=12') }}" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/external-smashingstocks-detailed-outline-smashing-stocks/25/000000/external-cash-social-marketing-smashingstocks-detailed-outline-smashing-stocks.png" /> <span class="mini-click-non">Cash Book</span></a></li>

                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/ios/25/000000/personal-trainer.png" /> <span class="mini-click-non">Personals</span></a>
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

                        </ul>
                    </li>
                    <li id="removable" style="margin-bottom: 40px">
                        <a class="has-arrow" href="#" aria-expanded="false"><img class="list-icon" src="https://img.icons8.com/external-outline-wichaiwi/19/000000/external-company-business-continuity-plan-outline-wichaiwi-3.png" /> <span class="mini-click-non">Companies</span></a>
                        <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            @foreach ($companies as $company)
                               <li><a title="Notifications" href="{{ URL::to('/Expenses-Entries?expense_category_id='.$company->id) }}"><span class="mini-sub-pro">{{$company->expense_category}}</span></a></li>                               
                           @endforeach
                            <li>
                                <span class="mini-sub-pro ml-5 hover:cursor-pointer text-blue-600 hover:text-blue-200" type="button" data-modal-toggle="company-modal">Add New</span>
                            </li>
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

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
