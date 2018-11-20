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
<body class="bg-grey-lighter">
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

</body>
</html>