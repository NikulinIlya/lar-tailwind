<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Tailwind Example - Twitter</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    </head>
    <body class="bg-grey-light font-sans">
        <div class="bg-white">
            <div class="container mx-auto flex items-center py-5">
                <nav class="w-2/5">
                    <a href="#" class="top-nav-item"><i class="fas fa-home fa-lg"></i> Home</a>
                    <a href="#" class="top-nav-item"><i class="fas fa-bolt fa-lg"></i> Moments</a>
                    <a href="#" class="top-nav-item"><i class="fas fa-bell fa-lg"></i> Notifications</a>
                    <a href="#" class="top-nav-item"><i class="fas fa-envelope fa-lg"></i> Messages</a>
                </nav>
                <div class="w-1/5 text-center"><a href="#"><i class="fab fa-twitter fa-lg text-blue"></i></a></div>
                <div class="w-2/5 flex justify-end">
                    <div class="mr-4 relative">
                        <input type="text" class="bg-grey-lighter h-8 px-4 py-2 text-xs w-48 rounded-full" placeholder="Search in Twitter">
                        <span class="flex items-center absolute pin-r pin-y mr-3"><i class="fas fa-search text-grey"></i></span>
                    </div>
                    <div class="mr-4"><a href="#"><img src="/img/twitter/avatar.jpg" alt="avatar" class="h-8 w-8 rounded-full"></a></div>
                    <div><button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Tweet</button></div>
                </div>
            </div>
        </div>

        <div class="hero h-112 bg-cover"></div>
        <div class="bg-white shadow">
            <div class="container mx-auto flex items-center relative">
                <div class="w-1/4">
                    <img src="/img/twitter/tailwind_logo.jpg" alt="logo" class="rounded-full h-48 w-48 absolute pin-l pin-t -mt-24">
                </div>
                <div class="w-1/2">
                    <ul class="list-reset flex">
                        <li class="text-center py-3 px-4 border-b-2 border-solid border-teal">
                            <a href="#" class="text-green-darker hover:no-underline">
                                <div class="text-sm font-bold tracking-tight mb-1">Tweets</div>
                                <div class="text-lg font-bold tracking-tight text-teal">50</div>
                            </a>
                        </li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                            <a href="#" class="text-green-darker hover:no-underline">
                                <div class="text-sm font-bold tracking-tight mb-1">Following</div>
                                <div class="text-lg font-bold tracking-tight hover:text-teal">10</div>
                            </a>
                        </li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                            <a href="#" class="text-green-darker hover:no-underline">
                                <div class="text-sm font-bold tracking-tight mb-1">Followers</div>
                                <div class="text-lg font-bold tracking-tight hover:text-teal">500</div>
                            </a>
                        </li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                            <a href="#" class="text-green-darker hover:no-underline">
                                <div class="text-sm font-bold tracking-tight mb-1">Likes</div>
                                <div class="text-lg font-bold tracking-tight hover:text-teal">50</div>
                            </a>
                        </li>
                        <li class="text-center py-3 px-4 border-b-2 border-solid hover:border-teal">
                            <a href="#" class="text-green-darker hover:no-underline">
                                <div class="text-sm font-bold tracking-tight mb-1">Moments</div>
                                <div class="text-lg font-bold tracking-tight hover:text-teal">5</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-1/2 flex justify-end items-center">
                    <div class="mr-6">
                        <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full">Following</button>
                    </div>
                    <div>
                        <a href="#" class="text-grey-dark"><i class="fas fa-ellipsis-v fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto flex mt-3 text-sm leading-normal">
            <div class="w-1/4 pr-6 mt-8 mb-4">
                <h1><a href="#" class="text-black">Tailwind CSS</a></h1>
                <div class="mb-4"><a href="#" class="text-grey-darker ">@tailwindcss</a></div>

                <div class="mb-4">
                    A utility-first CSS framework for rapid UI development. By <a href="#">@adamwathan</a>, <a href="#">@reinink</a>,
                    <a href="#">@davidhemphill</a>, and <a href="#">@steveschoger</a>.
                </div>

                <div class="mb-2"><i class="fas fa-link fa-lg text-grey-darker mr-1"></i><a href="#"> tailwindcss.com</a></div>
                <div class="mb-4"><i class="fas fa-calendar-alt fa-lg text-grey-darker mr-1"></i><a href="#"> Joined august 2017</a></div>

                <div class="mb-4">
                    <button class="bg-teal hover:bg-teal-dark text-white font-medium py-2 px-4 rounded-full w-full h-10">Tweet to Tailwind.css</button>
                </div>

                <div class="mb-4"><i class="fas fa-user fa-lg text-grey-dark mr-1"></i><a href="#"> 20 Followers you know</a></div>

                <div class="mb-4">
                    <a href="#"><img src="/img/twitter/follower01.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower02.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower03.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower04.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower05.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower06.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower07.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower08.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower09.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                    <a href="#"><img src="/img/twitter/follower10.jpg" alt="avatar" class="rounded-full h-12 w-12"></a>
                </div>

                <div class="mb-4"><i class="far fa-image fa-lg text-grey-dark mr-1"></i><a href="#"> Photos and videos</a></div>

                <div class="mb-4">
                    <a href="#"><img src="/img/twitter/photo1.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1"></a>
                    <a href="#"><img src="/img/twitter/photo2.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1"></a>
                    <a href="#"><img src="/img/twitter/photo3.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1"></a>
                    <a href="#"><img src="/img/twitter/photo4.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1"></a>
                    <a href="#"><img src="/img/twitter/photo5.jpg" alt="photo" class="h-20 w-20 mr-1 mb-1"></a>
                </div>
            </div>

            <div class="w-1/2"></div>
            <div class="w-1/4"></div>
        </div>

    </body>
</html>
