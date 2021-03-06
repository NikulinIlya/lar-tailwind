<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WP Pusher</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i">
    <link rel="stylesheet" href="/css/wp-pusher.css">
</head>
<body class="bg-grey-lighter font-wp-pusher antialiased">
    <div class="nav-container mx-16">
        <div class="navbar flex flex-col md:flex-row justify-between items-center border-b-2 border-grey-light py-8 mb-16">
            <a href="#" class="mb-4 md:mb-0"><img src="/img/wp-pusher/logo.png" alt="logo"></a>
            <div class="flex flex-col md:flex-row font-bold text-sm">
                <div class="mb-2 md:mb-0">
                    <a href="#" class="hover:text-grey-darker">Download</a>
                </div>
                <div class="ml-0 md:ml-10 mb-2 md:mb-0">
                    <a href="#" class="hover:text-grey-darker">Learn more</a>
                </div>
                <div class="ml-0 md:ml-10 mb-2 md:mb-0">
                    <a href="#" class="hover:text-grey-darker">Pricing</a>
                </div>
                <div class="ml-0 md:ml-10 mb-8 md:mb-0">
                    <a href="#" class="hover:text-grey-darker">Help</a>
                </div>
                <div class="ml-0 md:ml-10 mb-2 md:mb-0">
                    <a href="#" class="px-4 py-3 rounded-lg border-2 border-black hover:bg-black hover:text-white">Account</a>
                </div>
            </div>
        </div>
    </div>

    <div class="checkout max-w-wp-pusher mx-auto">
        <div class="panel flex flex-col md:flex-row mb-8 shadow-lg">
            <div class="panel-left w-full md:w-2/3 bg-white rounded-l">
                <form action="">
                    <h1 class="text-3xl font-normal p-10 border-b border-grey-light">Checkout</h1>
                    <div class="p-10 pt-8 border-b border-grey-light">
                        <div class="flex items-center mb-4">
                            <div class="border-2 border-blue-wp-pusher py-2 px-3 rounded-full font-bold mr-2 text-blue-wp-pusher">1</div>
                            <h2 class="text-lg">Your Basic Information</h2>
                        </div>

                        <div class="flex flex-wrap">
                            <div class="w-3/4 md:w-1/2-almost mb-4 md:mb-0">
                                <label for="first_name" class="block text-sm mb-2">First Name</label>
                                <input type="text" id="first_name" class="w-full text-sm bg-grey-light text-grey-darkest rounded px-3 py-3 outline-0">
                            </div>
                            <div class="w-3/4 md:w-1/2-almost mb-4 ml-0 md:ml-4">
                                <label for="last_name" class="block text-sm mb-2">Last Name</label>
                                <input type="text" id="last_name" class="w-full text-sm bg-grey-light text-grey-darkest rounded px-3 py-3 outline-0">
                            </div>
                            <div class="w-3/4">
                                <label for="email" class="block text-sm mb-2">E-mail</label>
                                <input type="email" id="email" class="w-full text-sm bg-grey-light text-grey-darkest rounded px-3 py-3 outline-0">
                            </div>
                        </div>
                    </div>

                    <div class="p-10 pt-8 border-b border-grey-light">
                        <div class="flex items-center mb-4">
                            <div class="border-2 border-blue-wp-pusher py-2 px-3 rounded-full font-bold mr-2 text-blue-wp-pusher">2</div>
                            <h2 class="text-lg">Your Payment Information</h2>
                        </div>
                        <div class="w-full">
                            <label for="payment" class="block text-sm mb-2">Credit Card</label>
                            <input type="text" id="email" class="w-full text-sm bg-grey-light text-grey-darkest rounded px-3 py-3 outline-0">
                        </div>
                    </div>

                    <div class="p-10 pt-8">
                        <button type="submit" class="bg-green-wp-pusher text-white w-full rounded px-4 py-4 mb-6 text-lg hover:bg-green-dark">
                            Buy WP Pusher
                        </button>
                        <div class="flex items-center justify-center mb-8">
                            <img class="mr-2" src="{{ asset('img/wp-pusher/question_mark.svg') }}" alt="powered">
                            <div>
                                <span class="font-bold">Need any help?</span>
                                <span class="text-grey-darker">Don't hesitate to <a href="#" class="text-grey-darker underline">contact support</a>!</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <img src="{{ asset('img/wp-pusher/powered_by_stripe.png') }}" alt="stripe">
                        </div>
                    </div>
                </form>
            </div>

            <div class="panel-right w-full md:w-1/3 bg-blue-wp-pusher text-white rounded-r">
                <div class="p-10">
                    <h2 class="font-bold text-xl mb-4">Freelancer</h2>
                    <div class="mb-4">
                        <span class="text-2xl align-top">$</span>
                        <span class="text-4xl font-light lh-fix">99</span>
                        <span class="text-lg">/ year</span>
                    </div>
                    <div class="italic w-3/4 leading-normal mb-8">
                        Automatically renews after 1 year
                    </div>
                    <div class="list-items mb-8">
                        <div class="flex items-center mb-4">
                            <img class="mr-2" src="{{ asset('img/wp-pusher/checkmark.svg') }}" alt="mark">
                            <div>Use on <span class="font-bold">5</span> client sites</div>
                        </div>
                        <div class="flex items-center mb-4">
                            <img class="mr-2" src="{{ asset('img/wp-pusher/checkmark.svg') }}" alt="mark">
                            <div>Private Repositories</div>
                        </div>
                        <div class="flex items-center mb-4">
                            <img class="mr-2" src="{{ asset('img/wp-pusher/checkmark.svg') }}" alt="mark">
                            <div>Email support</div>
                        </div>
                    </div>
                    <div class="mb-10 pb-2">
                        <div class="mb-2">Need <span class="font-bold">20</span> clients?</div>
                        <a href="#" class="text-white font-bold border-b-2 border-blue-light">Switch to the Agency plan.</a>
                    </div>
                    <div class="border-b border-blue-light"></div>
                    <div class="testimonial pt-10 text-lg italic leading-normal mb-4">
                        FTP is horrible to deal with. <span class="font-bold">WP Pusher</span> solves that issue, and the customer support is awesome!
                    </div>
                    
                    <div class="flex items-center">
                        <img src="{{ asset('img/wp-pusher/avatar.png') }}" alt="avatar" class="rounded-full mr-2">
                        <div class="text-lg font-bold">Kirk Beard</div>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright text-grey-dark text-center text-sm mb-8">
            &copy; 2018 WP Pusher IVS &middot; <a href="#" class="text-blue-wp-pusher">Terms of Service</a>
        </div>
    </div>
</body>
</html>