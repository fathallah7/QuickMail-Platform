@extends('layout.app')

@section('title')
    Quick Mail - Form
@endsection

@section('content')

<div class="flex justify-center items-center w-screen h-screen bg-white">
    <!-- COMPONENT CODE -->
    <div class="container mx-auto my-4 px-4 lg:px-20">
        <div class="w-full p-8 my-4 md:px-12 mr-auto rounded-2xl shadow-2xl">
            <div class="flex">
                <h1 class="font-bold text-blue-900 uppercase text-4xl">Send The <br /> Email</h1>
            </div>
            <form action="{{route('send.mail')}}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                    <input
                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="email"
                        name="to"
                        placeholder="Recipient Email*"
                        required
                    />
                    <input
                        class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        type="text"
                        name="subject"
                        placeholder="Subject*"
                        required
                    />
                </div>
                <div class="my-4">
                    <textarea
                        name="body"
                        placeholder="Message*"
                        class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                        required
                    ></textarea>
                </div>
                <div class="my-2 w-1/2 lg:w-1/4">
                    <button
                        type="submit"
                        class="uppercase text-sm font-bold tracking-wide bg-blue-900 hover:bg-blue-700 transition duration-300 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline"
                    >
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
