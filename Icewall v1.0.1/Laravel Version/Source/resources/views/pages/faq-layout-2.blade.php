@extends('../layout/' . $layout)

@section('subhead')
    <title>FAQ - Icewall - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="p-5">
                    <a class="flex items-center text-theme-17 dark:text-white font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> About Our Products
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Related License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Single Application License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Multi Application License
                    </a>
                </div>
                <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Trem of Use
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Author Fees
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Product Review
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Privacy Policy
                    </a>
                </div>
                <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> About Our Products
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Related License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Single Application License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Multi Application License
                    </a>
                </div>
            </div>
        </div>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">About Our Products</h2>
                </div>
                <div id="faq-accordion-1" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-bs-parent="#faq-accordion-1">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Related License</h2>
                </div>
                <div id="faq-accordion-2" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-bs-parent="#faq-accordion-2">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-2">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-bs-parent="#faq-accordion-2">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-bs-parent="#faq-accordion-2">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Single Application License</h2>
                </div>
                <div id="faq-accordion-3" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-bs-parent="#faq-accordion-3">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-3">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-bs-parent="#faq-accordion-3">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-bs-parent="#faq-accordion-3">
                            <div class="accordion-body text-gray-700 dark:text-gray-600 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>
@endsection
