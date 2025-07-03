@extends('layout.app')

@section('title')
    Quick Mail
@endsection

@section('content')


    <section class="py-10 my-auto bg-white">
        <div class="lg:w-[80%] md:w-[90%] w-[96%] mx-auto flex gap-4">
            <div class="lg:w-[88%] sm:w-[88%] w-full mx-auto shadow-2xl p-4 rounded-xl h-fit self-center bg-white">
                <div class="py-4">
                    <h1 class="lg:text-4xl md:text-2xl text-xl font-bold mb-2 text-blue-700">
                        Profile
                    </h1>
                    <h2 class="text-gray-600 text-sm mb-4">Created At : {{$user['created_at']}}</h2>
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col lg:flex-row gap-2 justify-center w-full">
                            <div class="w-full mb-4 mt-6">
                                <label class="mb-2 text-gray-700">Name</label>
                                <input name="name" type="text"
                                    class="mt-2 px-4 py-2 w-full border-2 rounded-lg text-gray-900 border-gray-300 bg-white focus:outline-none focus:ring-1 focus:ring-blue-700 focus:border-blue-700"
                                    value="{{$user['name']}}">
                            </div>
                            <div class="w-full mb-4 lg:mt-6">
                                <label class="text-gray-700">Email</label>
                                <input name="email" type="text"
                                    class="mt-2 px-4 py-2 w-full border-2 rounded-lg text-gray-900 border-gray-300 bg-white focus:outline-none focus:ring-1 focus:ring-blue-700 focus:border-blue-700"
                                    value="{{$user['email']}}">
                            </div>
                        </div>

                        <div class="w-full flex justify-end mt-4 text-white text-lg font-semibold">
                            <button type="submit" class="rounded-lg w-1/3 p-4 bg-blue-700 text-white text-lg font-semibold 
                    hover:bg-blue-600 active:bg-blue-700 active:scale-95 
                    transition-all duration-150 ease-in-out">
                                Submit
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>



@endsection