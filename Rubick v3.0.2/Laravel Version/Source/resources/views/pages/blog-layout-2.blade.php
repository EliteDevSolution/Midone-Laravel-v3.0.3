@extends('../layout/' . $layout)

@section('subhead')
    <title>Blog - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Blog Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Add New Post</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Post
                        </a>
                        <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                            <i data-feather="download" class="w-4 h-4 mr-2"></i> Download Post
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Blog Layout -->
        @foreach (array_slice($fakers, 0, 6) as $faker)
            <div class="intro-y blog col-span-12 md:col-span-6 box">
                <div class="blog__preview image-fit">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-t-md" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                    <div class="absolute w-full flex items-center px-5 pt-6 z-10">
                        <div class="w-10 h-10 flex-none image-fit">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                        </div>
                        <div class="ml-3 text-white mr-auto">
                            <a href="" class="font-medium">{{ $faker['users'][0]['name'] }}</a>
                            <div class="text-xs mt-0.5">{{ $faker['formatted_times'][0] }}</div>
                        </div>
                        <div class="dropdown ml-3">
                            <a href="javascript:;" class="blog__action dropdown-toggle w-8 h-8 flex items-center justify-center rounded-full" aria-expanded="false">
                                <i data-feather="more-vertical" class="w-4 h-4 text-white"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> Edit Post
                                    </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete Post
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                        <span class="blog__category px-2 py-1 rounded">{{ $faker['products'][0]['category'] }}</span>
                        <a href="" class="block font-medium text-xl mt-3">{{ $faker['news'][0]['title'] }}</a>
                    </div>
                </div>
                <div class="p-5 text-gray-700 dark:text-gray-600">{{ $faker['news'][0]['short_content'] }}</div>
                <div class="flex items-center px-5 py-3 border-t border-gray-200 dark:border-dark-5">
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full border border-gray-400 dark:border-dark-5 dark:bg-dark-5 dark:text-gray-300 text-gray-600 mr-2 tooltip" title="Bookmark">
                        <i data-feather="bookmark" class="w-3 h-3"></i>
                    </a>
                    <div class="intro-x flex mr-2">
                        <div class="intro-x w-8 h-8 image-fit">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][0]) }}" title="{{ $faker['users'][0]['name'] }}">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][1]) }}" title="{{ $faker['users'][1]['name'] }}">
                        </div>
                        <div class="intro-x w-8 h-8 image-fit -ml-4">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $faker['photos'][2]) }}" title="{{ $faker['users'][2]['name'] }}">
                        </div>
                    </div>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-14 dark:bg-dark-5 dark:text-gray-300 text-theme-10 ml-auto tooltip" title="Share">
                        <i data-feather="share-2" class="w-3 h-3"></i>
                    </a>
                    <a href="" class="intro-x w-8 h-8 flex items-center justify-center rounded-full bg-theme-1 text-white ml-2 tooltip" title="Download PDF">
                        <i data-feather="share" class="w-3 h-3"></i>
                    </a>
                </div>
                <div class="px-5 pt-3 pb-5 border-t border-gray-200 dark:border-dark-5">
                    <div class="w-full flex text-gray-600 text-xs sm:text-sm">
                        <div class="mr-2">
                            Comments: <span class="font-medium">{{ $faker['totals'][0] }}</span>
                        </div>
                        <div class="mr-2">
                            Views: <span class="font-medium">{{ $faker['totals'][1] }}k</span>
                        </div>
                        <div class="ml-auto">
                            Likes: <span class="font-medium">{{ $faker['totals'][2] }}k</span>
                        </div>
                    </div>
                    <div class="w-full flex items-center mt-3">
                        <div class="w-8 h-8 flex-none image-fit mr-3">
                            <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                        </div>
                        <div class="flex-1 relative text-gray-700 dark:text-gray-300">
                            <input type="text" class="form-control form-control-rounded border-transparent bg-gray-200 pr-10 placeholder-theme-13" placeholder="Post a comment...">
                            <i data-feather="smile" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"></i>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- END: Blog Layout -->
        <!-- BEGIN: Pagiantion -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
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
        <!-- END: Pagiantion -->
    </div>
@endsection