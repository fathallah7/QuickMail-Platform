
@extends('layout.app')

@section('title')
    Quick Mail - Admin - User Info
@endsection

@section('content')


<div class="max-w-7xl mx-auto p-6">

    <!-- بطاقة بيانات المستخدم -->
    <div class="bg-white shadow-xl rounded-2xl p-6 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">User Profile</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <p class="text-sm text-gray-500">Name</p>
                <p class="text-lg font-medium text-gray-900">{{$data->name}}</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">Email</p>
                <p class="text-lg font-medium text-gray-900">{{$data->email}}</p>
            </div>
            <div>
                <p class="text-sm text-gray-500">Joined At</p>
                <p class="text-lg font-medium text-gray-900">{{$data->created_at}}</p>
            </div>
        </div>
    </div>

    <!-- جدول الإيميلات المرسلة -->
    <div class="bg-white shadow-xl rounded-2xl p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Sent Emails</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Subject</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">To</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Sent At</th>
                        <th class="px-4 py-2 text-left font-semibold text-gray-700">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-200 transition duration-500">
                        <td class="px-4 py-3 text-gray-900">Meeting Reminder</td>
                        <td class="px-4 py-3 text-gray-600">manager@company.com</td>
                        <td class="px-4 py-3 text-gray-600">2 hours ago</td>
                        <td class="px-4 py-3">
                            <span class="inline-block px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Sent</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-200 transition duration-500" >
                        <td class="px-4 py-3 text-gray-900">Invoice #2025</td>
                        <td class="px-4 py-3 text-gray-600">client@business.com</td>
                        <td class="px-4 py-3 text-gray-600">Yesterday</td>
                        <td class="px-4 py-3">
                            <span class="inline-block px-3 py-1 text-xs font-semibold text-red-700 bg-red-100 rounded-full">Failed</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-200 transition duration-500">
                        <td class="px-4 py-3 text-gray-900">Event Invitation</td>
                        <td class="px-4 py-3 text-gray-600">friend@mail.com</td>
                        <td class="px-4 py-3 text-gray-600">3 days ago</td>
                        <td class="px-4 py-3">
                            <span class="inline-block px-3 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Sent</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>




@endsection

