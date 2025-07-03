@extends('layout.app')

@section('title')
    Quick Mail
@endsection

@section('content')

    <!-- Hero Section - Light Modern UI -->
    <div class="my-12 px-6 py-32">
        <div class="max-w-6xl mx-auto  ">

            <!-- Right Side (Text Content) -->
            <div class="text-center">
                @if (auth()->check())
                    <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 leading-tight mb-4">
                        Hello <span class="text-blue-700">{{ auth()->user()->name }}</span> 👋
                    </h1>
                    <p class="text-gray-600 text-lg mb-6">
                        You’re all set to send emails beautifully and effortlessly — right from your browser.
                    </p>
                    <div class="flex justify-center space-x-5">
                        <a href="{{route('user.account')}}"
                            class="px-6 py-3 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-100 transition duration-400 font-semibold">
                            Manage Account
                        </a>
                        <a href="{{ route('mail') }}"
                            class="px-6 py-3 bg-blue-700 text-white hover:bg-white border hover:border-gray-300 hover:text-black rounded-md font-semibold transition duration-400 shadow-md">
                            Start Sending 📤
                        </a>
                    </div>
                @else
                    <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 leading-tight mb-4">
                        Let's Start Sending 📤
                    </h1>
                    <p class="text-gray-600 text-lg mb-6">
                        No configs. No delays. Just sign up and start sending professional emails in seconds.
                    </p>
                    <a href="{{ route('signup') }}"
                        class="px-7 py-3 bg-blue-700 text-white rounded-md font-bold hover:bg-white hover:text-blue-700 transition duration-300 shadow-xl hover:shadow-4xl">
                        Get Started
                    </a>
                @endif
            </div>
        </div>
    </div>


    <section class="relative z-10 overflow-hidden bg-primary py-14 bg-blue-950">
        <div class="mx-auto px-4 sm:container">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[325px] text-center lg:mb-0">
                        <h3 class="mb-4 text-4xl font-bold leading-[1.2] text-white lg:text-5xl">
                            {{$usersCount}}+
                        </h3>
                        <p class="text-base text-white sm:text-lg">
                            Users 
                        </p>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto mb-10 max-w-[325px] text-center lg:mb-0">
                        <h3 class="mb-4 text-4xl font-bold leading-[1.2] text-white lg:text-5xl">
                            {{$mailscount}}+
                        </h3>
                        <p class="text-base text-white sm:text-lg">
                            Mails
                        </p>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto max-w-[325px] text-center">
                        <h3 class="mb-4 text-4xl font-bold leading-[1.2] text-white lg:text-5xl">
                            500+
                        </h3>
                        <p class="text-base text-white sm:text-lg">
                            Visits
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section - Minimal and Light -->
    <div class="py-20 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6">
                Why Choose QuickMail?
            </h2>
            <p class="text-gray-500 mb-10 text-lg">
                Built for speed, simplicity, and modern web lovers.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 text-left">
                <div class="bg-indigo-100 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-blue-700 mb-2">⚡ Fast Setup</h3>
                    <p class="text-gray-600">Get started without any technical setup. Just login and go.</p>
                </div>
                <div class="bg-indigo-100 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-indigo-700 mb-2">🎨 Beautiful UI</h3>
                    <p class="text-gray-600">Modern, mobile-friendly design made with Tailwind CSS.</p>
                </div>
                <div class="bg-indigo-100 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                    <h3 class="text-lg font-semibold text-green-700 mb-2">🔐 Secure</h3>
                    <p class="text-gray-600">Your emails and data are always safe and encrypted.</p>
                </div>
            </div>
        </div>
    </div>



@endsection