<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

</html>
<body class="bg-gray-200">



    <div class="bg-white/30 backdrop-blur-sm backdrop-saturate-150 shadow-md sticky top-0 z-50">
        <nav class="container mx-auto py-4 px-6 ">
            <div class="flex justify-between items-center">
                <div>
                    <a href="{{route('home')}}" class="text-4xl font-bold text-blue-700">Quick Mail</a>
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





@yield('content')





    
<footer class="bg-gray-800 text-white py-10">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Logo & Description -->
        <div>
            <h2 class="text-2xl font-bold mb-4">QuickMail</h2>
            <p class="text-gray-400">
                A simple tool to send emails directly from your browser — fast, secure, and free.
            </p>
        </div>

        <!-- About the Project -->
        <div>
            <h3 class="text-xl font-semibold mb-4">About</h3>
            <p class="text-gray-400">
                This project was built to demonstrate how Laravel can be used to create powerful web applications,
                including user authentication and real-time email functionality.
            </p>
        </div>

        <!-- Contact Info -->
        <div>
            <h3 class="text-xl font-semibold mb-4">Contact</h3>
            <ul class="space-y-2 text-gray-300">
                <li>Email: <a href="mailto:quickmail@example.com" class="hover:text-white">quickmail@example.com</a></li>
                <li>Location: Alexandria, Egypt</li>
            </ul>
        </div>

    </div>
</footer>



</body>

</html>