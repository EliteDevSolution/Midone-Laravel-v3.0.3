@extends('../layout/' . $layout)

@section('subhead')
    <title>Calendar - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Calendar</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print Schedule</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Calendar Side Menu -->
        <div class="col-span-12 xl:col-span-4 xxl:col-span-3">
            <div class="box p-5 intro-y">
                <button type="button" class="btn btn-primary w-full mt-2">
                    <i class="w-4 h-4 mr-2" data-feather="edit-3"></i> Add New Schedule
                </button>
                <div class="border-t border-b border-gray-200 dark:border-dark-5 mt-6 mb-5 py-3" id="calendar-events">
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-theme-22 rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">VueJS Amsterdam</div>
                                <div class="text-gray-600 text-xs mt-0.5">
                                    <span class="event__days">2</span> Days <span class="mx-1">•</span> 10:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-feather="edit" class="w-4 h-4 text-gray-600"></i>
                        </a>
                    </div>
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-theme-23 rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">Vue Fes Japan 2019</div>
                                <div class="text-gray-600 text-xs mt-0.5">
                                    <span class="event__days">3</span> Days <span class="mx-1">•</span> 07:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-feather="edit" class="w-4 h-4 text-gray-600"></i>
                        </a>
                    </div>
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-gray-200 dark:hover:bg-dark-1 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-theme-22 rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">Laracon 2021</div>
                                <div class="text-gray-600 text-xs mt-0.5">
                                    <span class="event__days">4</span> Days <span class="mx-1">•</span> 11:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-feather="edit" class="w-4 h-4 text-gray-600"></i>
                        </a>
                    </div>
                    <div class="text-gray-600 p-3 text-center hidden" id="calendar-no-events">No events yet</div>
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="checkbox-events">Remove after drop</label>
                    <input class="show-code form-check-switch ml-auto" type="checkbox" id="checkbox-events">
                </div>
            </div>
            <div class="box p-5 intro-y mt-5">
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
                <div class="border-t border-gray-200 dark:border-dark-5 pt-5 mt-5">
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
        <!-- END: Calendar Side Menu -->
        <!-- BEGIN: Calendar Content -->
        <div class="col-span-12 xl:col-span-8 xxl:col-span-9">
            <div class="box p-5">
                <div class="full-calendar" id="calendar"></div>
            </div>
        </div>
        <!-- END: Calendar Content -->
    </div>
@endsection
