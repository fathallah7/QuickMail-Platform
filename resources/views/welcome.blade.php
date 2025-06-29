@extends('layout.app')

@section('title')
    Quick Mail
@endsection

@section('content')

<!-- Hero Section - Light Modern UI -->
<div class="min-h-screen  flex items-center px-6 py-20">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Left Side (Image or Icon Illustration) -->
        <div class="text-center md:text-left">
            <img src="{{asset('logo.png')}}" alt="Send Email" class="min-w-14  mx-auto md:mx-0" />
        </div>

        <!-- Right Side (Text Content) -->
        <div class="text-center md:text-left">
            @if (auth()->check())
                <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 leading-tight mb-4">
                    Hello <span class="text-blue-600">{{ auth()->user()->name }}</span> 👋
                </h1>
                <p class="text-gray-600 text-lg mb-6">
                    You’re all set to send emails beautifully and effortlessly — right from your browser.
                </p>
                <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-4">
                    <a class="px-6 py-3 bg-white border border-gray-300 rounded-full shadow-sm hover:bg-gray-100 transition font-semibold">
                        Manage Account
                    </a>
                    <a href="{{ route('mail') }}"
                        class="px-6 py-3 bg-gradient-to-r from-blue-500 to-blue-800 text-white rounded-full font-semibold hover:from-blue-800 hover:to-blue-500 transition duration-400 shadow-md">
                        Start Sending 📤
                    </a>
                </div>
            @else
                <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 leading-tight mb-4">
                    Send Smarter. Faster. 📬
                </h1>
                <p class="text-gray-600 text-lg mb-6">
                    No configs. No delays. Just sign up and start sending professional emails in seconds.
                </p>
                <a href="{{ route('signup') }}"
                    class="px-6 py-3 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-full font-semibold hover:from-indigo-600 hover:to-blue-600 transition shadow-md">
                    Get Started 🚀
                </a>
            @endif
        </div>
    </div>
</div>


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
            <div class="bg-blue-50 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <h3 class="text-lg font-semibold text-blue-700 mb-2">⚡ Fast Setup</h3>
                <p class="text-gray-600">Get started without any technical setup. Just login and go.</p>
            </div>
            <div class="bg-indigo-50 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <h3 class="text-lg font-semibold text-indigo-700 mb-2">🎨 Beautiful UI</h3>
                <p class="text-gray-600">Modern, mobile-friendly design made with Tailwind CSS.</p>
            </div>
            <div class="bg-green-50 p-6 rounded-xl shadow-sm hover:shadow-md transition">
                <h3 class="text-lg font-semibold text-green-700 mb-2">🔐 Secure</h3>
                <p class="text-gray-600">Your emails and data are always safe and encrypted.</p>
            </div>
        </div>
    </div>
</div>


@endsection