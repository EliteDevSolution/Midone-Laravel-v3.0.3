@extends('../layout/' . $layout)

@section('subhead')
    <title>Regular Form - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Regular Form</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Input</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#input" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="regular-form-1" class="form-label">Input Text</label>
                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-2" class="form-label">Rounded</label>
                            <input id="regular-form-2" type="text" class="form-control form-control-rounded" placeholder="Rounded">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-3" class="form-label">With Help</label>
                            <input id="regular-form-3" type="text" class="form-control" placeholder="With help">
                            <div class="form-help">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-4" class="form-label">Password</label>
                            <input id="regular-form-4" type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <label for="regular-form-5" class="form-label">Disabled</label>
                            <input id="regular-form-5" type="text" class="form-control" placeholder="Disabled" disabled>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label for="regular-form-1" class="form-label">Input Text</label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-2" class="form-label">Rounded</label>
                                            <input id="regular-form-2" type="text" class="form-control form-control-rounded" placeholder="Rounded">
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-3" class="form-label">With Help</label>
                                            <input id="regular-form-3" type="text" class="form-control" placeholder="With help">
                                            <div class="form-help">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-4" class="form-label">Password</label>
                                            <input id="regular-form-4" type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-5" class="form-label">Disabled</label>
                                            <input id="regular-form-5" type="text" class="form-control" placeholder="Disabled" disabled>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input -->
            <!-- BEGIN: Input Sizing -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Input Sizing</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-2">Show example code</label>
                        <input id="show-example-2" data-target="#input-sizing" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-sizing" class="p-5">
                    <div class="preview">
                        <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                        <input type="text" class="form-control mt-2" placeholder="Default input" aria-label="default input example">
                        <input type="text" class="form-control form-control-sm mt-2" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-sizing" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-sizing" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <input type="text" class="form-control form-control-lg" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                                        <input type="text" class="form-control mt-2" placeholder="Default input" aria-label="default input example">
                                        <input type="text" class="form-control form-control-sm mt-2" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Sizing -->
            <!-- BEGIN: Input Groups -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Input Groups</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-3">Show example code</label>
                        <input id="show-example-3" data-target="#input-groups" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-groups" class="p-5">
                    <div class="preview">
                        <div class="input-group">
                            <div id="input-group-email" class="input-group-text">@</div>
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="input-group-email">
                        </div>
                        <div class="input-group mt-2">
                            <input type="text" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="input-group-price">
                            <div id="input-group-price" class="input-group-text">.00</div>
                        </div>
                        <div class="input-group mt-2">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" placeholder="Price" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-text">.00</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-groups" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-groups" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="input-group">
                                            <div id="input-group-email" class="input-group-text">@</div>
                                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="input-group-email">
                                        </div>
                                        <div class="input-group mt-2">
                                            <input type="text" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="input-group-price">
                                            <div id="input-group-price" class="input-group-text">.00</div>
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-text">@</div>
                                            <input type="text" class="form-control" placeholder="Price" aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-text">.00</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input Groups -->
            <!-- BEGIN: Input State -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Input State</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-4">Show example code</label>
                        <input id="show-example-4" data-target="#input-state" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="input-state" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="input-state-1" class="form-label">Input Success</label>
                            <input id="input-state-1" type="text" class="form-control border-theme-10" placeholder="Input text">
                            <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-theme-10"></div>
                                <div class="col-span-3 h-full rounded bg-theme-10"></div>
                                <div class="col-span-3 h-full rounded bg-theme-10"></div>
                                <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-1"></div>
                            </div>
                            <div class="text-theme-10 mt-2">Strong password</div>
                        </div>
                        <div class="mt-3">
                            <label for="input-state-2" class="form-label">Input Warning</label>
                            <input id="input-state-2" type="text" class="form-control border-theme-23" placeholder="Input text">
                            <div class="text-theme-23 mt-2">Attempting to reconnect to server...</div>
                        </div>
                        <div class="mt-3">
                            <label for="input-state-3" class="form-label">Input Error</label>
                            <input id="input-state-3" type="text" class="form-control border-theme-24" placeholder="Input text">
                            <div class="text-theme-24 mt-2">This field is required</div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input-state" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-input-state" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label for="input-state-1" class="form-label">Input Success</label>
                                            <input id="input-state-1" type="text" class="form-control border-theme-10" placeholder="Input text">
                                            <div class="w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                                <div class="col-span-3 h-full rounded bg-theme-10"></div>
                                                <div class="col-span-3 h-full rounded bg-theme-10"></div>
                                                <div class="col-span-3 h-full rounded bg-theme-10"></div>
                                                <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-1"></div>
                                            </div>
                                            <div class="text-theme-10 mt-2">Strong password</div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-state-2" class="form-label">Input Warning</label>
                                            <input id="input-state-2" type="text" class="form-control border-theme-23" placeholder="Input text">
                                            <div class="text-theme-23 mt-2">Attempting to reconnect to server...</div>
                                        </div>
                                        <div class="mt-3">
                                            <label for="input-state-3" class="form-label">Input Error</label>
                                            <input id="input-state-3" type="text" class="form-control border-theme-24" placeholder="Input text">
                                            <div class="text-theme-24 mt-2">This field is required</div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Input State -->
            <!-- BEGIN: Select Options -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Select Options</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-5">Show example code</label>
                        <input id="show-example-5" data-target="#select-options" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="select-options" class="p-5">
                    <div class="preview">
                        <div class="flex flex-col sm:flex-row items-center">
                            <select class="form-select form-select-lg sm:mt-2 sm:mr-2" aria-label=".form-select-lg example">
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                            <select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example">
                                <option>Chris Evans</option>
                                <option>Liam Neeson</option>
                                <option>Daniel Craig</option>
                            </select>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-select-options" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-select-options" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="flex flex-col sm:flex-row items-center">
                                            <select class="form-select form-select-lg sm:mt-2 sm:mr-2" aria-label=".form-select-lg example">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                            <select class="form-select form-select-sm mt-2" aria-label=".form-select-sm example">
                                                <option>Chris Evans</option>
                                                <option>Liam Neeson</option>
                                                <option>Daniel Craig</option>
                                            </select>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Select Options -->
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Vertical Form -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Vertical Form</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-6">Show example code</label>
                        <input id="show-example-6" data-target="#vertical-form" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="vertical-form" class="p-5">
                    <div class="preview">
                        <div>
                            <label for="vertical-form-1" class="form-label">Email</label>
                            <input id="vertical-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Password</label>
                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                        </div>
                        <div class="form-check mt-5">
                            <input id="vertical-form-3" class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="vertical-form-3">Remember me</label>
                        </div>
                        <button class="btn btn-primary mt-5">Login</button>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-vertical-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-vertical-form" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label for="vertical-form-1" class="form-label">Email</label>
                                            <input id="vertical-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="mt-3">
                                            <label for="vertical-form-2" class="form-label">Password</label>
                                            <input id="vertical-form-2" type="text" class="form-control" placeholder="secret">
                                        </div>
                                        <div class="form-check mt-5">
                                            <input id="vertical-form-3" class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label" for="vertical-form-3">Remember me</label>
                                        </div>
                                        <button class="btn btn-primary mt-5">Login</button>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Vertical Form -->
            <!-- BEGIN: Horizontal Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Horizontal Form</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-7">Show example code</label>
                        <input id="show-example-7" data-target="#horizontal-form" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="horizontal-form" class="p-5">
                    <div class="preview">
                        <div class="form-inline">
                            <label for="horizontal-form-1" class="form-label sm:w-20">Email</label>
                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="form-inline mt-5">
                            <label for="horizontal-form-2" class="form-label sm:w-20">Password</label>
                            <input id="horizontal-form-2" type="password" class="form-control" placeholder="secret">
                        </div>
                        <div class="form-check sm:ml-20 sm:pl-5 mt-5">
                            <input id="horizontal-form-3" class="form-check-input" type="checkbox" value="">
                            <label class="form-check-label" for="horizontal-form-3">Remember me</label>
                        </div>
                        <div class="sm:ml-20 sm:pl-5 mt-5">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-horizontal-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-horizontal-form" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="form-inline">
                                            <label for="horizontal-form-1" class="form-label sm:w-20">Email</label>
                                            <input id="horizontal-form-1" type="text" class="form-control" placeholder="example@gmail.com">
                                        </div>
                                        <div class="form-inline mt-5">
                                            <label for="horizontal-form-2" class="form-label sm:w-20">Password</label>
                                            <input id="horizontal-form-2" type="password" class="form-control" placeholder="secret">
                                        </div>
                                        <div class="form-check sm:ml-20 sm:pl-5 mt-5">
                                            <input id="horizontal-form-3" class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label" for="horizontal-form-3">Remember me</label>
                                        </div>
                                        <div class="sm:ml-20 sm:pl-5 mt-5">
                                            <button class="btn btn-primary">Login</button>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Horizontal Form -->
            <!-- BEGIN: Inline Form -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Inline Form</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-8">Show example code</label>
                        <input id="show-example-8" data-target="#inline-form" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="inline-form" class="p-5">
                    <div class="preview">
                        <div class="grid grid-cols-12 gap-2">
                            <input type="text" class="form-control col-span-4" placeholder="Input inline 1" aria-label="default input inline 1">
                            <input type="text" class="form-control col-span-4" placeholder="Input inline 2" aria-label="default input inline 2">
                            <input type="text" class="form-control col-span-4" placeholder="Input inline 3" aria-label="default input inline 3">
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-inline-form" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-inline-form" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div class="grid grid-cols-12 gap-2">
                                            <input type="text" class="form-control col-span-4" placeholder="Input inline 1" aria-label="default input inline 1">
                                            <input type="text" class="form-control col-span-4" placeholder="Input inline 2" aria-label="default input inline 2">
                                            <input type="text" class="form-control col-span-4" placeholder="Input inline 3" aria-label="default input inline 3">
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Inline Form -->
            <!-- BEGIN: Checkbox & Switch -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Checkbox & Switch</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-9">Show example code</label>
                        <input id="show-example-9" data-target="#checkbox-switch" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="checkbox-switch" class="p-5">
                    <div class="preview">
                        <div>
                            <label>Vertical Checkbox</label>
                            <div class="form-check mt-2">
                                <input id="checkbox-switch-1" class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="checkbox-switch-1">Chris Evans</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="checkbox-switch-2" class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="checkbox-switch-2">Liam Neeson</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="checkbox-switch-3" class="form-check-input" type="checkbox" value="">
                                <label class="form-check-label" for="checkbox-switch-3">Daniel Craig</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Horizontal Checkbox</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input id="checkbox-switch-4" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-4">Chris Evans</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-5">Liam Neeson</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="checkbox-switch-6" class="form-check-input" type="checkbox" value="">
                                    <label class="form-check-label" for="checkbox-switch-6">Daniel Craig</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Switch</label>
                            <div class="mt-2">
                                <div class="form-check">
                                    <input id="checkbox-switch-7" class="form-check-switch" type="checkbox">
                                    <label class="form-check-label" for="checkbox-switch-7">Default switch checkbox input</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-checkbox-switch" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-checkbox-switch" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Vertical Checkbox</label>
                                            <div class="form-check mt-2">
                                                <input id="checkbox-switch-1" class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label" for="checkbox-switch-1">Chris Evans</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input id="checkbox-switch-2" class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label" for="checkbox-switch-2">Liam Neeson</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input id="checkbox-switch-3" class="form-check-input" type="checkbox" value="">
                                                <label class="form-check-label" for="checkbox-switch-3">Daniel Craig</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Horizontal Checkbox</label>
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                    <input id="checkbox-switch-4" class="form-check-input" type="checkbox" value="">
                                                    <label class="form-check-label" for="checkbox-switch-4">Chris Evans</label>
                                                </div>
                                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                                    <input id="checkbox-switch-5" class="form-check-input" type="checkbox" value="">
                                                    <label class="form-check-label" for="checkbox-switch-5">Liam Neeson</label>
                                                </div>
                                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                                    <input id="checkbox-switch-6" class="form-check-input" type="checkbox" value="">
                                                    <label class="form-check-label" for="checkbox-switch-6">Daniel Craig</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Switch</label>
                                            <div class="mt-2">
                                                <div class="form-check">
                                                    <input id="checkbox-switch-7" class="form-check-switch" type="checkbox">
                                                    <label class="form-check-label" for="checkbox-switch-7">Default switch checkbox input</label>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Checkbox & Switch -->
            <!-- BEGIN: Radio Button -->
            <div class="intro-y box mt-5">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Radio</h2>
                    <div class="form-check w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-10">Show example code</label>
                        <input id="show-example-10" data-target="#radio" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="radio" class="p-5">
                    <div class="preview">
                        <div>
                            <label>Vertical Radio Button</label>
                            <div class="form-check mt-2">
                                <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans">
                                <label class="form-check-label" for="radio-switch-1">Chris Evans</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                                <label class="form-check-label" for="radio-switch-2">Liam Neeson</label>
                            </div>
                            <div class="form-check mt-2">
                                <input id="radio-switch-3" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-daniel-craig">
                                <label class="form-check-label" for="radio-switch-3">Daniel Craig</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Horizontal Radio Button</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input id="radio-switch-4" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                    <label class="form-check-label" for="radio-switch-4">Chris Evans</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="radio-switch-5" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                    <label class="form-check-label" for="radio-switch-5">Liam Neeson</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input id="radio-switch-6" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-daniel-craig">
                                    <label class="form-check-label" for="radio-switch-6">Daniel Craig</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-radio" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-radio" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <div>
                                            <label>Vertical Radio Button</label>
                                            <div class="form-check mt-2">
                                                <input id="radio-switch-1" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-chris-evans">
                                                <label class="form-check-label" for="radio-switch-1">Chris Evans</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input id="radio-switch-2" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-liam-neeson">
                                                <label class="form-check-label" for="radio-switch-2">Liam Neeson</label>
                                            </div>
                                            <div class="form-check mt-2">
                                                <input id="radio-switch-3" class="form-check-input" type="radio" name="vertical_radio_button" value="vertical-radio-daniel-craig">
                                                <label class="form-check-label" for="radio-switch-3">Daniel Craig</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label>Horizontal Radio Button</label>
                                            <div class="flex flex-col sm:flex-row mt-2">
                                                <div class="form-check mr-2">
                                                    <input id="radio-switch-4" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-chris-evans">
                                                    <label class="form-check-label" for="radio-switch-4">Chris Evans</label>
                                                </div>
                                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                                    <input id="radio-switch-5" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-liam-neeson">
                                                    <label class="form-check-label" for="radio-switch-5">Liam Neeson</label>
                                                </div>
                                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                                    <input id="radio-switch-6" class="form-check-input" type="radio" name="horizontal_radio_button" value="horizontal-radio-daniel-craig">
                                                    <label class="form-check-label" for="radio-switch-6">Daniel Craig</label>
                                                </div>
                                            </div>
                                        </div>
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Radio Button -->
        </div>
    </div>
@endsection
