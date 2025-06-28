@extends('layout.app')

@section('title')
    Quick Mail - Form
@endsection

@section('content')


    @if (session('success'))
        <div id="successAlert"
            class="fixed bottom-5 right-5 bg-green-100 border border-green-500 text-green-700 px-5 py-3 rounded shadow-lg z-50 flex items-start gap-3">
            <svg class="w-6 h-6 text-green-500 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <div class="flex-1">
                <strong class="block mb-1">Success</strong>
                <p>{{ session('success') }}</p>
            </div>
            <button onclick="document.getElementById('successAlert').remove()"
                class="ml-4 text-green-700 hover:text-green-900 text-lg">&times;</button>
        </div>
    @endif

    @if (session('danger'))
        <div id="dangerAlert"
            class="fixed bottom-5 right-5 bg-red-100 border border-red-500 text-red-700 px-5 py-3 rounded shadow-lg z-50 flex items-start gap-3 mt-3">
            <svg class="w-6 h-6 text-red-500 mt-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="flex-1">
                <strong class="block mb-1">Deleted</strong>
                <p>{{ session('danger') }}</p>
            </div>
            <button onclick="document.getElementById('dangerAlert').remove()"
                class="ml-4 text-red-700 hover:text-red-900 text-lg">&times;</button>
        </div>
    @endif


<div class="flex justify-center items-center w-screen h-screen">
    <!-- COMPONENT CODE -->
    <div class="container mx-auto my-4 px-4 lg:px-20">
        <div class="w-full p-8 my-4 md:px-12 mr-auto rounded-2xl shadow-2xl">
            <div class="flex">
                <h1 class="font-bold text-blue-700 uppercase text-4xl">Send The <br /> Email</h1>
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
                        class="uppercase text-sm font-bold tracking-wide bg-blue-700 hover:bg-blue-900 transition duration-300 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline"
                    >
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


    <script>
        setTimeout(() => {
            const successAlert = document.getElementById('successAlert');
            const dangerAlert = document.getElementById('dangerAlert');

            if (successAlert) successAlert.remove();
            if (dangerAlert) dangerAlert.remove();
        }, 5000);
    </script>



@endsection


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'));
        toastElList.forEach(toastEl => {
            new bootstrap.Toast(toastEl).show();
        });
    });
</script>
