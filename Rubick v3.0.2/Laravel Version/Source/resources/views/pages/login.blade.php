@extends('../layout/' . $layout)

@section('head')
    <title>Login - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Rubick Tailwind HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3">
                        Ru<span class="font-medium">bick</span>
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Rubick Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/illustration.svg') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">A few more clicks to <br> sign in to your account.</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-500">Manage all your e-commerce accounts in one place</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign In</h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 border-gray-300 block" placeholder="Email">
                        <input type="password" class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4" placeholder="Password">
                    </div>
                    <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                        </div>
                        <a href="">Forgot Password?</a>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                        <button class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign up</button>
                    </div>
                    <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">
                        By signin up, you agree to our <br> <a class="text-theme-1 dark:text-theme-10" href="">Terms and Conditions</a> & <a class="text-theme-1 dark:text-theme-10" href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>    
@endsection