@extends('../layout/' . $layout)

@section('subhead')
    <title>Validation - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Form Validation</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Validation -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Implementation</h2>
                    <div class="w-full sm:w-auto flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <label class="form-check-label ml-0 sm:ml-2" for="show-example-1">Show example code</label>
                        <input id="show-example-1" data-target="#form-validation" class="show-code form-check-switch mr-0 ml-3" type="checkbox">
                    </div>
                </div>
                <div id="form-validation" class="p-5">
                    <div class="preview">
                        <!-- BEGIN: Validation Form -->
                        <form class="validate-form">
                            <div class="input-form">
                                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                    Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 2 characters</span>
                                </label>
                                <input id="validation-form-1" type="text" name="name" class="form-control" placeholder="John Legend" minlength="2" required>
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                    Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, email address format</span>
                                </label>
                                <input id="validation-form-2" type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row">
                                    Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 6 characters</span>
                                </label>
                                <input id="validation-form-3" type="password" name="password" class="form-control" placeholder="secret" minlength="6" required>
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-4" class="form-label w-full flex flex-col sm:flex-row">
                                    Age <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, integer only & maximum 3 characters</span>
                                </label>
                                <input id="validation-form-4" type="number" name="age" class="form-control" placeholder="21" required>
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">
                                    Profile URL <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Optional, URL format</span>
                                </label>
                                <input id="validation-form-5" type="url" name="url" class="form-control" placeholder="https://google.com">
                            </div>
                            <div class="input-form mt-3">
                                <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row">
                                    Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span>
                                </label>
                                <textarea id="validation-form-6" class="form-control" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Register</button>
                        </form>
                        <!-- END: Validation Form -->
                        <!-- BEGIN: Success Notification Content -->
                        <div
                            id="success-notification-content"
                            class="toastify-content hidden flex"
                        >
                            <i class="text-theme-9" data-feather="check-circle"></i>
                            <div class="ml-4 mr-4">
                            <div class="font-medium">Registration success!</div>
                            <div class="text-gray-600 mt-1">
                                Please check your e-mail for further info!
                            </div>
                            </div>
                        </div>
                        <!-- END: Success Notification Content -->
                        <!-- BEGIN: Failed Notification Content -->
                        <div
                            id="failed-notification-content"
                            class="toastify-content hidden flex"
                        >
                            <i class="text-theme-6" data-feather="x-circle"></i>
                            <div class="ml-4 mr-4">
                            <div class="font-medium">Registration failed!</div>
                            <div class="text-gray-600 mt-1">
                                Please check the fileld form.
                            </div>
                            </div>
                        </div>
                        <!-- END: Failed Notification Content -->
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-form-validation" class="copy-code btn py-1 px-2 btn-outline-secondary">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                        </button>
                        <div class="overflow-y-auto mt-3 rounded-md">
                            <pre id="copy-form-validation" class="source-preview">
                                <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                    {{ \Hp::formatCode('
                                        <!-- BEGIN: Validation Form -->
                                        <form class="validate-form">
                                            <div class="input-form">
                                                <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">
                                                    Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 2 characters</span>
                                                </label>
                                                <input id="validation-form-1" type="text" name="name" class="form-control" placeholder="John Legend" minlength="2" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">
                                                    Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, email address format</span>
                                                </label>
                                                <input id="validation-form-2" type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row">
                                                    Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 6 characters</span>
                                                </label>
                                                <input id="validation-form-3" type="password" name="password" class="form-control" placeholder="secret" minlength="6" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-4" class="form-label w-full flex flex-col sm:flex-row">
                                                    Age <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, integer only & maximum 3 characters</span>
                                                </label>
                                                <input id="validation-form-4" type="number" name="age" class="form-control" placeholder="21" required>
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">
                                                    Profile URL <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Optional, URL format</span>
                                                </label>
                                                <input id="validation-form-5" type="url" name="url" class="form-control" placeholder="https://google.com">
                                            </div>
                                            <div class="input-form mt-3">
                                                <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row">
                                                    Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span>
                                                </label>
                                                <textarea id="validation-form-6" class="form-control" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-5">Register</button>
                                        </form>
                                        <!-- END: Validation Form -->
                                        <!-- BEGIN: Success Notification Content -->
                                        <div
                                            id="success-notification-content"
                                            class="toastify-content hidden flex"
                                        >
                                            <i class="text-theme-9" data-feather="check-circle"></i>
                                            <div class="ml-4 mr-4">
                                            <div class="font-medium">Registration success!</div>
                                            <div class="text-gray-600 mt-1">
                                                Please check your e-mail for further info!
                                            </div>
                                            </div>
                                        </div>
                                        <!-- END: Success Notification Content -->
                                        <!-- BEGIN: Failed Notification Content -->
                                        <div
                                            id="failed-notification-content"
                                            class="toastify-content hidden flex"
                                        >
                                            <i class="text-theme-6" data-feather="x-circle"></i>
                                            <div class="ml-4 mr-4">
                                            <div class="font-medium">Registration failed!</div>
                                            <div class="text-gray-600 mt-1">
                                                Please check the fileld form.
                                            </div>
                                            </div>
                                        </div>
                                        <!-- END: Failed Notification Content -->
                                    ') }}
                                </code>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Form Validation -->
        </div>
    </div>    
@endsection