@extends('layout.app')

@section('title')
    Quick Mail
@endsection

@section('content')


<section class="py-10 my-auto bg-white">
    <div class="lg:w-[80%] md:w-[90%] w-[96%] mx-auto flex gap-4">
        <div class="lg:w-[88%] sm:w-[88%] w-full mx-auto shadow-2xl p-4 rounded-xl h-fit self-center bg-white">
            <div class="py-4">
                <h1 class="lg:text-3xl md:text-2xl text-xl font-serif font-extrabold mb-2 text-gray-900">
                    Profile
                </h1>
                <h2 class="text-gray-600 text-sm mb-4">Create Profile</h2>
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
                    <!-- Cover Image -->
                    <div class="w-full rounded-lg bg-[url('https://images.unsplash.com/photo-1449844908441-8829872d2607?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxob21lfGVufDB8MHx8fDE3MTA0MDE1NDZ8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover bg-center bg-no-repeat items-center">
                        <!-- Profile Image -->
                        <div class="mx-auto flex justify-center w-[120px] h-[120px] bg-blue-300/20 rounded-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ $user->profile_image ? asset('storage/profile/'.$user->profile_image) : asset('unknown.webp') }}');">
                            <div class="bg-white rounded-full w-6 h-6 text-center ml-28 mt-4">
                                <input name="profile" type="file" id="upload_profile" hidden >
                                <label for="upload_profile">
                                    <svg class="w-6 h-5 text-blue-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                                    </svg>
                                </label>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            
                            <div class="bg-white flex items-center gap-2 rounded-tl-md px-2 text-center font-semibold">
                                <label for="upload_cover" class="inline-flex items-center gap-1 cursor-pointer">Cover
                                    <svg class="w-6 h-5 text-blue-700" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z"></path>
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-center mt-1 font-semibold text-gray-700">Upload Profile and Cover Image</h2>
                    <div class="flex flex-col lg:flex-row gap-2 justify-center w-full">
                        <div class="w-full mb-4 mt-6">
                            <label class="mb-2 text-gray-700">Name</label>
                            <input name="name" type="text"
                                   class="mt-2 px-4 py-2 w-full border-2 rounded-lg text-gray-900 border-gray-300 bg-white"
                                   value="{{$user['name']}}">
                        </div>
                        <div class="w-full mb-4 lg:mt-6">
                            <label class="text-gray-700">Email</label>
                            <input name="email" type="text"
                                   class="mt-2 px-4 py-2 w-full border-2 rounded-lg text-gray-900 border-gray-300 bg-white"
                                   value="{{$user['email']}}">
                        </div>
                    </div>


                    <div class="w-full flex justify-end mt-4 text-white text-lg font-semibold">
                        <button type="submit"
    class="rounded-lg w-1/3 p-4 bg-blue-500 text-white text-lg font-semibold 
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





