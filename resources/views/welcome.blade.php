<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>



</html>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="src/output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-200">







    <div class="bg-white/30 backdrop-blur-sm backdrop-saturate-150 shadow-md sticky top-0 z-50">
        <nav class="container mx-auto py-4 px-6 ">
            <div class="flex justify-between items-center">
                <div>
                    <a class="text-4xl font-bold text-blue-700">Quick Mail</a>
                </div>
                <div class="hidden md:flex space-x-6 items-center">
                    {{-- <a class="font-bold hover:text-blue-700 transition duration-300">Home</a>
                    <a class="font-bold hover:text-blue-700 transition duration-300">Projects</a>
                    <a class="font-bold hover:text-blue-700 transition duration-300">Codes</a>
                    <a class="font-bold hover:text-blue-700 transition duration-300">Help</a> --}}
                    <div>
                        @if (auth()->check())
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="inline-block bg-red-800 text-white font-bold hover:bg-red-900 px-5 py-1.5 rounded-full text-sm leading-normal">
                                    Log Out
                                </button>
                            </form>
                        @else
                            <button type="submit"
                                class="inline-block bg-white hover:bg-gray-100 transition duration-300 font-bold shadow-md hover:shadow-lg px-5 py-1.5 rounded-full text-sm leading-normal">
                                <a href="{{route('login')}}">Login</a>
                            </button>
                            <button type="submit"
                                class="inline-block bg-blue-700 text-white hover:bg-white hover:text-black transition duration-300 font-bold shadow-md hover:shadow-lg px-5 py-1.5 rounded-full text-sm leading-normal">
                                <a href="{{route('signup')}}">Sign Up</a>
                            </button>
                        @endif
                    </div>
                </div>
                <button id="mobile-btn" class="md:hidden">
                    <i class="fas fa-bars text-3xl"></i>
                </button>
            </div>
        </nav>
    </div>








    <div class="container mx-auto mt-22 mb-22 px-4 max-w-4xl  ">
        @if (auth()->check())
            <h1 class="mb-6 font-bold text-5xl text-center">Hello , <span
                    class="text-blue-700">{{auth()->user()->name}}</span> <br>Let's Start Sending 📤 </h1>
            <p class="mb-8 text-gray-600 font-medium text-center">Multidisciplinary Web Template Built with Your Favourite
                Technology - HTML Bootstrap, Tailwind and React NextJS.</p>
            <div class="flex justify-center space-x-4">
                <a
                    class="bg-white hover:bg-gray-100 transition duration-300 font-bold px-8 py-3 rounded-md shadow-md hover:shadow-lg">Start
                    Free Trial</a>
                <a
                    class="bg-blue-700 text-white hover:bg-white hover:text-black transition duration-300 font-bold px-8 py-3 rounded-md shadow-md hover:shadow-lg">
                    Start Now
                </a>
            </div>
        @else
            <h1 class="mb-6 font-bold text-5xl text-center">Let's Start Sending 📤</h1>
            <p class="mb-8 text-gray-600 font-medium text-center">Multidisciplinary Web Template Built with Your Favourite
                Technology - HTML Bootstrap, Tailwind and React NextJS.</p>
            <div class="flex justify-center space-x-4">
                <a
                    class="bg-blue-700 text-white hover:bg-white hover:text-black transition duration-300 font-bold px-8 py-3 rounded-md shadow-md hover:shadow-lg">
                    Sign Up Now
                </a>
            </div>
        @endif
    </div>


<div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
    {{-- خلفية ديكورية --}}
    <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
        <div class="aspect-1097/845 w-[274.25px] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
         aria-hidden="true">
        <div class="aspect-1097/845 w-[274.25px] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
             style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>

    {{-- المحتوى الرئيسي --}}
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0 text-center sm:text-left">
            <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Send Emails Effortlessly</h2>
            <p class="mt-8 text-lg font-medium text-gray-300 sm:text-xl">
                QuickMail is a simple platform that lets you send professional emails to anyone — directly from your browser. No Gmail or third-party apps required.
            </p>
        </div>

        {{-- الروابط --}}
        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                <a href="{{ route('signup') }}">Create an Account <span aria-hidden="true">&rarr;</span></a>
                <a href="{{ route('login') }}">Login to Start Sending <span aria-hidden="true">&rarr;</span></a>
                <a href="#">How it Works <span aria-hidden="true">&rarr;</span></a>
                <a href="#">Contact Support <span aria-hidden="true">&rarr;</span></a>
            </div>

            {{-- الإحصائيات --}}
            <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col-reverse gap-1">
                    <dt class="text-base text-gray-300">Emails Sent</dt>
                    <dd class="text-4xl font-semibold tracking-tight text-white">15,000+</dd>
                </div>
                <div class="flex flex-col-reverse gap-1">
                    <dt class="text-base text-gray-300">Active Users</dt>
                    <dd class="text-4xl font-semibold tracking-tight text-white">500+</dd>
                </div>
                <div class="flex flex-col-reverse gap-1">
                    <dt class="text-base text-gray-300">Avg. Delivery Time</dt>
                    <dd class="text-4xl font-semibold tracking-tight text-white">1.2s</dd>
                </div>
                <div class="flex flex-col-reverse gap-1">
                    <dt class="text-base text-gray-300">Spam Score</dt>
                    <dd class="text-4xl font-semibold tracking-tight text-white">Low</dd>
                </div>
            </dl>
        </div>
    </div>
</div>



    </div>






    <footer class="bg-gray-800 text-white py-10 ">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Logo & Description -->
            <div>
                <h2 class="text-2xl font-bold mb-4">ABDO</h2>
                <p class="text-gray-400">
                    Building smart and creative solutions for web and network systems.
                </p>
            </div>

            <!-- Useful Links -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-gray-300">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <li><a href="#" class="hover:text-white">Projects</a></li>
                    <li><a href="#" class="hover:text-white">About</a></li>
                    <li><a href="#" class="hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-300">
                    <li>Email: <a href="mailto:abdo@example.com" class="hover:text-white">abdo@example.com</a></li>
                    <li>Phone: +20 100 000 0000</li>
                    <li>Location: Alexandria, Egypt</li>
                </ul>
            </div>

        </div>

    </footer>


</body>

</html>