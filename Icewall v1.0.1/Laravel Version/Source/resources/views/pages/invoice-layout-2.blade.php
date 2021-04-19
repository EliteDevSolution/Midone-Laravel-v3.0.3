@extends('../layout/' . $layout)

@section('subhead')
    <title>Invoice Layout - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Invoice Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Export Word
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Export PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <div class="intro-y box overflow-hidden mt-5">
        <div class="flex flex-col lg:flex-row pt-10 px-5 sm:px-20 sm:pt-20 lg:pb-20 text-center sm:text-left">
            <div class="font-semibold text-theme-17 dark:text-gray-300 text-3xl">INVOICE</div>
            <div class="mt-20 lg:mt-0 lg:ml-auto lg:text-right">
                <div class="text-xl text-theme-17 dark:text-gray-300 font-medium">Left4code</div>
                <div class="mt-1">left4code@gmail.com</div>
                <div class="mt-1">8023 Amerige Street Harriman, NY 10926.</div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row border-b px-5 sm:px-20 pt-10 pb-10 sm:pb-20 text-center sm:text-left">
            <div>
                <div class="text-base text-gray-600">Client Details</div>
                <div class="text-lg font-medium text-theme-17 dark:text-gray-300 mt-2">Arnold Schwarzenegger</div>
                <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                <div class="mt-1">260 W. Storm Street New York, NY 10025.</div>
            </div>
            <div class="mt-10 lg:mt-0 lg:ml-auto lg:text-right">
                <div class="text-base text-gray-600">Receipt</div>
                <div class="text-lg text-theme-17 dark:text-gray-300 font-medium mt-2">#1923195</div>
                <div class="mt-1">Jan 02, 2021</div>
            </div>
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-20">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">DESCRIPTION</th>
                            <th class="border-b-2 dark:border-dark-5 text-right whitespace-nowrap">QTY</th>
                            <th class="border-b-2 dark:border-dark-5 text-right whitespace-nowrap">PRICE</th>
                            <th class="border-b-2 dark:border-dark-5 text-right whitespace-nowrap">SUBTOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b dark:border-dark-5">
                                <div class="font-medium whitespace-nowrap">Icewall HTML Admin Template</div>
                                <div class="text-gray-600 text-xs whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-dark-5 w-32">2</td>
                            <td class="text-right border-b dark:border-dark-5 w-32">$25</td>
                            <td class="text-right border-b dark:border-dark-5 w-32 font-medium">$50</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-dark-5">
                                <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                                <div class="text-gray-600 text-xs whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-dark-5 w-32">1</td>
                            <td class="text-right border-b dark:border-dark-5 w-32">$25</td>
                            <td class="text-right border-b dark:border-dark-5 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-dark-5">
                                <div class="font-medium whitespace-nowrap">React Admin Template</div>
                                <div class="text-gray-600 text-xs whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-dark-5 w-32">1</td>
                            <td class="text-right border-b dark:border-dark-5 w-32">$25</td>
                            <td class="text-right border-b dark:border-dark-5 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                                <div class="text-gray-600 text-xs whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right w-32">3</td>
                            <td class="text-right w-32">$25</td>
                            <td class="text-right w-32 font-medium">$75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-gray-600">Bank Transfer</div>
                <div class="text-lg text-theme-17 dark:text-gray-300 font-medium mt-2">Elon Musk</div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div>
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-gray-600">Total Amount</div>
                <div class="text-xl text-theme-17 dark:text-gray-300 font-medium mt-2">$20.600.00</div>
                <div class="mt-1 tetx-xs">Taxes included</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->
@endsection
