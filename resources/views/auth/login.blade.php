


@extends('layout.app')

@section('title')
    Quick Mail - Login
@endsection

@section('content')


<div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-md bg-white rounded-3xl shadow-lg p-8 border border-indigo-100">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-blue-700">Welcome Back</h2>
            <p class="mt-2 text-sm text-gray-500">Please sign in to your account</p>
        </div>

        <form class="mt-8 space-y-6" action="{{ route('loginDone') }}" method="POST">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <div class="mt-1 relative">
                    <input type="email" name="email" id="email" autocomplete="email" required
                        class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-700 text-sm"
                        placeholder="you@example.com">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fas fa-envelope"></i>
                    </div>
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="mt-1 relative">
                    <input type="password" name="password" id="password" autocomplete="current-password" required
                        class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 text-gray-900 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-700 text-sm"
                        placeholder="••••••••">
                    <div class="absolute left-3 top-2.5 text-gray-400">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="text-red-600 text-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div>
                <button type="submit"
                    class="w-full flex justify-center items-center bg-blue-700 hover:bg-blue-500 text-white font-semibold py-2 rounded-lg shadow-md transition duration-300">
                    <i class="fas fa-sign-in-alt mr-2"></i> Sign In
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Don't have an account?
            <a href="{{ route('signup') }}" class="text-blue-700 font-semibold hover:underline">Create Account</a>
        </p>
    </div>
</div>



@endsection



