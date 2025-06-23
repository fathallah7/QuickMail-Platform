@extends('layout.app')

@section('title')
    Quick Mail
@endsection

@section('content')


    <div class="container mx-auto mt-30 mb-30 px-4 max-w-4xl  ">
        @if (auth()->check())
            <h1 class="mb-6 font-bold text-5xl text-center">Hello , <span class="text-blue-700">{{auth()->user()->name}}</span>
                <br>Let's Start Sending 📤 </h1>
            <p class="mb-8 text-gray-600 font-medium text-center">Multidisciplinary Web Template Built with Your Favourite
                Technology - HTML Bootstrap, Tailwind and React NextJS.</p>
            <div class="flex justify-center space-x-4">
                <a
                    class="bg-white hover:bg-gray-100 transition duration-300 font-bold px-8 py-3 rounded-md shadow-md hover:shadow-lg">
                    Manage Your Account</a>
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
                <a href="{{route('signup')}}"
                    class="bg-blue-700 text-white hover:bg-white hover:text-black transition duration-300 font-bold px-8 py-3 rounded-md shadow-md hover:shadow-lg">
                    Sign Up Now
                </a>
            </div>
        @endif
    </div>


    <div class="bg-gray-900 py-16">
        <div class="mx-auto max-w-4xl px-6 text-center">
            <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                Send Emails Easily, Anytime 
            </h2>
            <p class="mt-4 text-lg text-gray-300">
                QuickMail lets you send emails to any address directly from your browser — no  extra setup needed.
            </p>

        </div>
    </div>




@endsection