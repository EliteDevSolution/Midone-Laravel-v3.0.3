@extends('../layout/' . $layout)

@section('subhead')
    <title>Dashboard - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 xxl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Notification -->
                <div class="col-span-12 mt-6 -mb-6 intro-y">
                    <div class="alert alert-dismissible show box bg-theme-26 text-white flex items-center mb-6" role="alert">
                        <span>Introducing new dashboard! Download now at <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">themeforest.net</a>.</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i data-feather="x" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
                <!-- BEGIN: Notification -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                        <select class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </select>
                    </div>
                    <div class="report-box-2 intro-y mt-12 sm:mt-5">
                        <div class="box sm:flex">
                            <div class="px-8 py-12 flex flex-col justify-center flex-1">
                                <i data-feather="shopping-bag" class="w-10 h-10 text-theme-23"></i>
                                <div class="relative text-3xl font-bold mt-12 pl-4">
                                    <span class="absolute text-xl top-0 left-0">$</span> 54.143
                                </div>
                                <div class="report-box-2__indicator bg-theme-10 tooltip cursor-pointer" title="47% Higher than last month">
                                    47% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                </div>
                                <div class="mt-4 text-gray-600 dark:text-gray-600">Sales earnings this month after associated author fees, & before taxes.</div>
                                <button class="btn btn-outline-secondary relative justify-start rounded-full mt-12">
                                    Download Reports
                                    <span class="w-8 h-8 absolute flex justify-center items-center bg-theme-17 dark:bg-theme-26 text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="px-8 py-12 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-gray-300 dark:border-dark-5 border-dashed">
                                <div class="text-gray-600 dark:text-gray-600 text-xs">TOTAL TRANSACTION</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">4.501</div>
                                    <div class="text-theme-24 flex text-xs font-medium tooltip cursor-pointer ml-2" title="2% Lower than last month">
                                        2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                                <div class="text-gray-600 dark:text-gray-600 text-xs mt-5">CANCELATION CASE</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">2</div>
                                    <div class="text-theme-24 flex text-xs font-medium tooltip cursor-pointer ml-2" title="0.1% Lower than last month">
                                        0.1% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                                <div class="text-gray-600 dark:text-gray-600 text-xs mt-5">GROSS RENTAL VALUE</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">$72.000</div>
                                    <div class="text-theme-10 flex text-xs font-medium tooltip cursor-pointer ml-2" title="49% Higher than last month">
                                        49% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                                <div class="text-gray-600 dark:text-gray-600 text-xs mt-5">GROSS RENTAL PROFIT</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">$54.000</div>
                                    <div class="text-theme-10 flex text-xs font-medium tooltip cursor-pointer ml-2" title="52% Higher than last month">
                                        52% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                                <div class="text-gray-600 dark:text-gray-600 text-xs mt-5">NEW USERS</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">2.500</div>
                                    <div class="text-theme-10 flex text-xs font-medium tooltip cursor-pointer ml-2" title="52% Higher than last month">
                                        52% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Visitors -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Visitors</h2>
                        <a href="" class="ml-auto text-theme-26 dark:text-theme-33 truncate">View on Map</a>
                    </div>
                    <div class="report-box-2 intro-y mt-5">
                        <div class="box p-5">
                            <div class="flex items-center">
                                Realtime active users
                                <div class="dropdown ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block -mr-2" href="javascript:;" aria-expanded="false">
                                        <i data-feather="more-vertical" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i>
                                    </a>
                                    <div class="dropdown-menu w-40">
                                        <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export
                                            </a>
                                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-2xl font-medium mt-2">214</div>
                            <div class="border-b border-gray-200 flex pb-2 mt-4">
                                <div class="text-gray-600 dark:text-gray-600 text-xs">Page views per second</div>
                                <div class="text-theme-10 flex text-xs font-medium tooltip cursor-pointer ml-auto" title="49% Lower than last month">
                                    49% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                </div>
                            </div>
                            <div class="mt-2 border-b broder-gray-200">
                                <div class="-mb-1.5 -ml-2.5">
                                    <canvas id="report-bar-chart" height="111"></canvas>
                                </div>
                            </div>
                            <div class="text-gray-600 dark:text-gray-600 text-xs border-b border-gray-200 flex mb-2 pb-2 mt-4">
                                <div>Top Active Pages</div>
                                <div class="ml-auto">Active Users</div>
                            </div>
                            <div class="flex">
                                <div>/letz-lara…review/2653</div>
                                <div class="ml-auto">472</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>/icewall…review/1674</div>
                                <div class="ml-auto">294</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>/profile…review/46789</div>
                                <div class="ml-auto">83</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>/profile…review/24357</div>
                                <div class="ml-auto">21</div>
                            </div>
                            <button class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4">Real-Time Report</button>
                        </div>
                    </div>
                </div>
                <!-- END: Visitors -->
                <!-- BEGIN: Users By Age -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2 lg:mt-6 xl:mt-2">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Users By Age</h2>
                        <a href="" class="ml-auto text-theme-26 dark:text-theme-33 truncate">Show More</a>
                    </div>
                    <div class="report-box-2 intro-y mt-5">
                        <div class="box p-5">
                            <div class="boxed-tabs nav nav-tabs justify-center w-4/5 bg-gray-200 text-gray-600 dark:bg-dark-1 dark:text-gray-500 rounded-md mx-auto" role="tablist">
                                <a data-toggle="tab" data-target="#active-users" href="javascript:;" class="btn flex-1 border-0 shadow-none py-1 px-2 active" id="active-users-tab" role="tab" aria-controls="active-users" aria-selected="true">Active</a>
                                <a data-toggle="tab" data-target="#inactive-users" href="javascript:;" class="btn flex-1 border-0 shadow-none py-1 px-2" id="inactive-users-tab" role="tab" aria-selected="false">Inactive</a>
                            </div>
                            <div class="tab-content mt-6">
                                <div class="tab-pane active" id="active-users" role="tabpanel" aria-labelledby="active-users-tab">
                                    <div class="relative">
                                        <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                                        <div class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0">
                                            <div class="text-2xl font-medium">2.501</div>
                                            <div class="text-gray-600 dark:text-gray-600 mt-0.5">Active Users</div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-theme-17 rounded-full mr-3"></div>
                                            <span class="truncate">17 - 30 Years old</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">62%</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-35 rounded-full mr-3"></div>
                                            <span class="truncate">31 - 50 Years old</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">33%</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-theme-23 rounded-full mr-3"></div>
                                            <span class="truncate">>= 50 Years old</span>
                                            <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                            <span class="font-medium xl:ml-auto">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Users By Age -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 lg:col-span-8 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700 dark:text-gray-300">
                            <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by city">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                        <div class="report-maps mt-5 bg-gray-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-gray-600 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-theme-10 text-white cursor-pointer font-medium">137 Sales</div>
                                </div>
                            </div>
                        @endforeach
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-theme-27 dark:border-dark-5 text-theme-28 dark:text-gray-600">View More</a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: Ads 1 -->
                <div class="col-span-12 lg:col-span-6 mt-6">
                    <div class="ads-box box p-8 relative overflow-hidden bg-theme-17 intro-y">
                        <div class="ads-box__title w-full sm:w-72 text-white text-xl -mt-3">Transact safely with Lender’s Fund Account (RDL)</div>
                        <div class="w-full sm:w-72 leading-relaxed text-white text-opacity-70 dark:text-gray-600 dark:text-opacity-100 mt-3">Apply now, quick registration</div>
                        <button class="btn w-32 bg-white dark:bg-dark-2 dark:text-white mt-6 sm:mt-10">Start Now</button>
                        <img class="hidden sm:block absolute top-0 right-0 w-2/5 -mt-3 mr-2" alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/woman-illustration.svg') }}">
                    </div>
                </div>
                <!-- END: Ads 1 -->
                <!-- BEGIN: Ads 2 -->
                <div class="col-span-12 lg:col-span-6 mt-6">
                    <div class="ads-box box p-8 relative overflow-hidden intro-y">
                        <div class="ads-box__title w-full sm:w-52 text-theme-17 dark:text-white text-xl -mt-3">Invite friends to get <span class="font-medium">FREE</span> bonuses!</div>
                        <div class="w-full sm:w-60 leading-relaxed text-gray-600 mt-2">Get a IDR 100,000 voucher by inviting your friends to fund #BecomeMember</div>
                        <div class="w-48 relative mt-6 cursor-pointer tooltip" title="Copy referral link">
                            <input class="form-control" value="https://dashboard.in">
                            <i data-feather="copy" class="absolute right-0 top-0 bottom-0 my-auto mr-4 w-4 h-4"></i>
                        </div>
                        <img class="hidden sm:block absolute top-0 right-0 w-1/2 mt-1 -mr-12" alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/phone-illustration.svg') }}">
                    </div>
                </div>
                <!-- END: Ads 2 -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Products</h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-gray-700 dark:text-gray-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-gray-700 dark:text-gray-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="Icewall Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Icewall Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="Icewall Tailwind HTML Admin Template" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $faker['products'][0]['category'] }}</div>
                                        </td>
                                        <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-theme-24' : 'text-theme-10' }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="">
                                                    <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                                </a>
                                                <a class="flex items-center text-theme-24" href="">
                                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                        <ul class="pagination">
                            <li>
                                <a class="pagination__link" href="">
                                    <i class="w-4 h-4" data-feather="chevrons-left"></i>
                                </a>
                            </li>
                            <li>
                                <a class="pagination__link" href="">
                                    <i class="w-4 h-4" data-feather="chevron-left"></i>
                                </a>
                            </li>
                            <li>
                                <a class="pagination__link" href="">...</a>
                            </li>
                            <li>
                                <a class="pagination__link" href="">1</a>
                            </li>
                            <li>
                                <a class="pagination__link pagination__link--active" href="">2</a>
                            </li>
                            <li>
                                <a class="pagination__link" href="">3</a>
                            </li>
                            <li>
                                <a class="pagination__link" href="">...</a>
                            </li>
                            <li>
                                <a class="pagination__link" href="">
                                    <i class="w-4 h-4" data-feather="chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a class="pagination__link" href="">
                                    <i class="w-4 h-4" data-feather="chevrons-right"></i>
                                </a>
                            </li>
                        </ul>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 xxl:col-span-3">
            <div class="xxl:border-l border-theme-25 -mb-10 pb-10">
                <div class="xxl:pl-6 grid grid-cols-12 gap-6">
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 mt-3 xxl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2">
                                <i data-feather="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2">
                                <i data-feather="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-gray-500 mt-1">20 Hours ago</div>
                                        <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-gray-500 mt-1">20 Hours ago</div>
                                        <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-gray-500 mt-1">20 Hours ago</div>
                                        <div class="text-gray-600 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                            <a href="" class="ml-auto text-theme-26 dark:text-theme-33 truncate">Show More</a>
                        </div>
                        <div class="report-timeline mt-5 relative">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="report-timeline__image">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-gray-600 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="report-timeline__image">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/' . $fakers[8]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-gray-600">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[0]['products'][0]['name'] }}">
                                                <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][0]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[1]['products'][0]['name'] }}">
                                                <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][1]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[2]['products'][0]['name'] }}">
                                                <img alt="Icewall Tailwind HTML Admin Template" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][2]) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-gray-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="report-timeline__image">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/' . $fakers[7]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-gray-600 mt-1">Has changed <a class="text-theme-12 dark:text-gray-300" href="">{{ $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="report-timeline__image">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/' . $fakers[6]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-gray-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-gray-600 mt-1">Has changed <a class="text-theme-12 dark:text-gray-300" href="">{{ $fakers[6]['products'][0]['name'] }}</a> description</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="Icewall Tailwind HTML Admin Template" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="text-gray-600 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                        </div>
                                        <div class="{{ $faker['true_false'][0] ? 'text-theme-24' : 'text-theme-10' }}">{{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-theme-27 dark:border-dark-5 text-theme-28 dark:text-gray-600">View More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Schedules -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 xxl:col-span-12 xl:col-start-1 xl:row-start-2 xxl:col-start-auto xxl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                            <a href="" class="ml-auto text-theme-26 dark:text-gray-400 truncate flex items-center">
                                <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i>
                                        <div class="font-medium text-base mx-auto">April</div>
                                        <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-gray-600">29</div>
                                        <div class="py-0.5 rounded relative text-gray-600">30</div>
                                        <div class="py-0.5 rounded relative text-gray-600">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 bg-theme-29 dark:bg-theme-10 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 bg-theme-26 dark:bg-theme-17 text-white rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 bg-theme-30 dark:bg-theme-22 rounded relative">23</div>
                                        <div class="py-0.5 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 bg-theme-31 dark:bg-theme-23 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-gray-600">1</div>
                                        <div class="py-0.5 rounded relative text-gray-600">2</div>
                                        <div class="py-0.5 rounded relative text-gray-600">3</div>
                                        <div class="py-0.5 rounded relative text-gray-600">4</div>
                                        <div class="py-0.5 rounded relative text-gray-600">5</div>
                                        <div class="py-0.5 rounded relative text-gray-600">6</div>
                                        <div class="py-0.5 rounded relative text-gray-600">7</div>
                                        <div class="py-0.5 rounded relative text-gray-600">8</div>
                                        <div class="py-0.5 rounded relative text-gray-600">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 dark:border-dark-5 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-theme-22 rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-26 dark:bg-theme-10 rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span>
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-theme-23 rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
@endsection
