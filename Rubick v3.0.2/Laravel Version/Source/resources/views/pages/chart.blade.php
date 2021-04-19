@extends('../layout/' . $layout)

@section('subhead')
    <title>Chart - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Chart</h2>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Bar Chart -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Vertical Bar Chart</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#vertical-bar-chart" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="vertical-bar-chart" class="p-5">
                    <div class="preview">
                        <canvas id="vertical-bar-chart-widget" height="200"></canvas>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-vertical-bar-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-vertical-bar-chart" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <canvas id="vertical-bar-chart-widget" height="200"></canvas>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Bar Chart -->
            <!-- BEGIN: Horizontal Bar Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Horizontal Bar Chart</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#horizontal-bar-chart" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="horizontal-bar-chart" class="p-5">
                    <div class="preview">
                        <canvas id="horizontal-bar-chart-widget" height="200"></canvas>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-horizontal-bar-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-horizontal-bar-chart" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <canvas id="horizontal-bar-chart-widget" height="200"></canvas>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Horizontal Bar Chart -->
            <!-- BEGIN: Donut Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Donut Chart</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#donut-chart" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="donut-chart" class="p-5">
                    <div class="preview">
                        <canvas id="donut-chart-widget" height="200"></canvas>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-donut-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-donut-chart" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <canvas id="donut-chart-widget" height="200"></canvas>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Donut Chart -->
        </div>
        <div class="col-span-12 lg:col-span-6">
            <!-- BEGIN: Stacked Bar Chart -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Stacked Bar Chart</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#stacked-bar-chart" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="stacked-bar-chart" class="p-5">
                    <div class="preview">
                        <canvas id="stacked-bar-chart-widget" height="200"></canvas>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-stacked-bar-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-stacked-bar-chart" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <canvas id="stacked-bar-chart-widget" height="200"></canvas>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Stacked Bar Chart -->
            <!-- BEGIN: Line Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Line Chart</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#line-chart" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="line-chart" class="p-5">
                    <div class="preview">
                        <canvas id="line-chart-widget" height="200"></canvas>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-line-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-line-chart" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <canvas id="line-chart-widget" height="200"></canvas>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Line Chart -->
            <!-- BEGIN: Pie Chart -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Pie Chart</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#pie-chart" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="pie-chart" class="p-5">
                    <div class="preview">
                        <canvas id="pie-chart-widget" height="200"></canvas>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-pie-chart" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-pie-chart" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <canvas id="pie-chart-widget" height="200"></canvas>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Pie Chart -->
        </div>
    </div>    
@endsection