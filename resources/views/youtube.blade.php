<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-Tailwind Example - Youtube</title>
    <link rel="stylesheet" href="/css/youtube.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body class="bg-grey-lightest">
    <div class="top-bar bg-white shadow grid grid-columns-12 px-8 py-2">
        <div class="col-span-3 flex items-center">
            <div class="mr-8"><a href="#"><i class="fas fa-bars text-grey-dark"></i></a></div>
            <div class="w-24 py-2"><a href="#"><img src="{{ asset('img/youtube/YouTube_Logo_2017.svg') }}" alt="Logo"></a></div>
        </div>
        <div class="col-span-6">
            <div>
                <form action="#" class="flex py-2">
                    <input type="text" class="border border-grey py-2 px-2 w-128 " placeholder="Search">
                    <button type="submit" class="border-t border-r border-b border-grey py-2 px-6 bg-grey-lighter hover:bg-grey-light">
                        <i class="fas fa-search text-grey-darker"></i>
                    </button>
                </form>
            </div>

        </div>
        <div class="col-span-3 flex justify-end">
            <div class="flex items-center">
                <a href="#"><i class="fas fa-video text-grey-dark mr-8"></i></a>
                <a href="#"><i class="fas fa-th text-grey-dark mr-8"></i></a>
                <a href="#"><i class="fas fa-comment text-grey-dark mr-8"></i></a>
                <a href="#"><i class="fas fa-bell text-grey-dark mr-8"></i></a>
                <a href="#"><img src="{{ asset('img/youtube/avatar-google.jpg') }}" alt="avatar" class="rounded-full w-8"></a>
            </div>
        </div>
    </div>

    <div class="youtube-body grid grid-columns-12">
        <div class="left-sidebar col-span-2 py-6 bg-grey-custom min-h-screen">
            <div class="mb-6">
                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-home fa-lg fa-fw text-red mr-4"></i>
                    <span class="font-normal text-sm">Home</span>
                </a>
                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-fire fa-lg fa-fw text-grey-dark mr-4"></i>
                    <span class="font-normal text-sm">Trending</span>
                </a>
                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fab fa-youtube-square fa-lg fa-fw text-grey-dark mr-4"></i>
                    <span class="font-normal text-sm">Subscriptions</span>
                </a>
            </div>

            <div class="mb-6">
                <div class="uppercase px-6 text-grey-darkest text-sm mb-4">Library</div>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="far fa-clock fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">History</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-clock fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Watch later</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-list-ul fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Laravel Ecommerce</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-thumbs-up fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Liked videos</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-chevron-down fa-fw text-grey-dark ml-1 mr-5"></i>
                    <div class="text-sm">Show more</div>
                </a>
            </div>

            <div class="mb-6">
                <div class="uppercase px-6 text-grey-darkest text-sm mb-4">Subscriptions</div>

                <a href="#" class="flex items-center py-3 px-6 text-black transition hover:bg-grey-light">
                    <img src="/img/youtube/avatar1.jpg" alt="avatar" class="rounded-full w-6 mr-5">
                    <div class="text-sm">freeCodeCamp</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-chevron-down fa-fw text-grey-dark ml-1 mr-5"></i>
                    <div class="text-sm">Show 100 more</div>
                </a>
            </div>

            <div class="mb-6">
                <div class="uppercase px-6 text-grey-darkest text-sm mb-4">More From YouTube</div>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fab fa-youtube fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">YouTube Premium</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-film fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">YouTube Movies</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-gamepad fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Gaming</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-6 text-black transition hover:bg-grey-light">
                    <i class="fas fa-broadcast-tower fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Live</div>
                </a>

                {{--<hr class="border border-grey-light">--}}

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-cog fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Settings</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-flag fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Report history</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-question-circle fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Help</div>
                </a>

                <a href="#" class="flex items-center py-3 px-6 mb-2 text-black transition hover:bg-grey-light">
                    <i class="fas fa-exclamation-triangle fa-lg fa-fw text-grey-dark mr-4"></i>
                    <div class="text-sm">Send Feedback</div>
                </a>
            </div>

            <div class="px-6 text-sm mb-4">
                <a href="#" class="pr-2 text-sm text-grey-dark">About</a>
                <a href="#" class="pr-2 text-sm text-grey-dark">Press</a>
                <a href="#" class="pr-2 text-sm text-grey-dark">Copyright</a>
                <a href="#" class="pr-2 text-sm text-grey-dark">Contact us</a>
                <a href="#" class="pr-2 text-sm text-grey-dark">Creators</a>
                <a href="#" class="pr-2 text-sm text-grey-dark">Developers</a>
            </div>

            <div class="px-6 text-sm mb-4">
                <a href="#" class="pr-2 text-sm text-grey-dark">Terms</a>
                <a href="#" class="pr-2 text-sm text-grey-dark">Privacy</a>
                <a href="#" class="pr-2 text-sm text-grey-dark">Policy & Safety</a>
                <a href="#" class="pr-2 text-sm text-grey-dark">Test new features</a>
            </div>

            <div class="px-6 text-sm text-grey-darker">&copy; 2018 YouTube, LLC</div>
        </div>

        <div class="youtube-videos col-span-10 container mx-auto py-6">
            <div class="font-semibold mb-6">
                Recommended
            </div>
            <div class="grid grid-columns-5 grid-gap-2 mb-6">
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail001.jpg') }}" alt="thumb" class="mb-1"> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail002.jpg') }}" alt="thumb" class="mb-1"> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail003.jpg') }}" alt="thumb" class="mb-1 "> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail004.jpg') }}" alt="thumb" class="mb-1 "> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail005.jpg') }}" alt="thumb" class="mb-1 "> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
            </div>

            <div class="grid grid-columns-5 grid-gap-2 mb-6">
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail006.jpg') }}" alt="thumb" class="mb-1"> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail007.jpg') }}" alt="thumb" class="mb-1"> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail008.jpg') }}" alt="thumb" class="mb-1 "> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail009.jpg') }}" alt="thumb" class="mb-1 "> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('img/youtube/thumbnail10.jpg') }}" alt="thumb" class="mb-1 "> {{--transition-slow hover:opacity-75--}}
                        <div class="font-bold mb-2"><a href="#" class="text-black">Title</a></div>
                        <div class="text-sm mb-1">
                            <a href="#" class="text-grey-dark">
                                <span class="hover:text-black">Channel name</span>
                                <i class="fas fa-check-circle fa-sm"></i>
                            </a>
                        </div>
                        <div class="text-sm text-grey-dark">Number of views &middot; period ago</div>
                    </a>
                </div>
            </div>

            <div class="mb-6">
                <a href="#" class="text-sm text-grey-dark uppercase">Show more</a>
            </div>

            <div class="border-b border-solid mb-6 border-grey-lighter"></div>

            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center">
                    <a href="#"><img src="{{ asset('img/youtube/thumbnail11.jpg') }}" alt="avatar" class="rounded-full w-8 h-8 mr-2"></a>
                    <a href="#" class="font-bold text-black">Channel name</a>
                </div>
                <a href="#"><div class="text-2xl font-light text-grey-dark hover:text-grey-darkest">&times;</div></a>
            </div>

            <div class="flex flex-col lg:flex-row">
                <a href="#" class="mr-4"><img src="{{ asset('img/youtube/thumbnail12.jpg') }}" alt="thumb" class="mb-1 transition-slow hover:opacity-75"></a>
                <div class="w-128 max-w-full">
                    <div class="mb-1"><a href="#" class="text-black font-bold">Video name</a></div>
                    <div class="text-sm mb-3"><a href="#" class="text-grey-dark hover:text-black">Channel &middot; 12K views &middot; 3 months ago <i class="fas fa-check-circle"></i></a></div>
                    <div class="text-sm"><a href="#" class="text-grey-dark leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad temporibus explicabo, possimus labore non atque eveniet id modi inventore reprehenderit deleniti. Porro alias illo minima ratione. Quos possimus, natus.</a></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>