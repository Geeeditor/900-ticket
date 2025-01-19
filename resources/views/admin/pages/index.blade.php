@extends('layouts.admin')
@section('title', 'Admin Management Page')
@section('style')
@endsection
@section('content')
    <div class="flex flex-wrap py-1 md:py-0">
                    <div class="w-full md:w-1/2 md:p-2">
                        <a href="#" class="block bg-gray-200 p-4 md:p-10 shadow-sm shadow-gray-400 hover:scale-[1.03] duration-75 font-[700]  rounded-md">No of Users</a>
                    </div>
                    <div class="w-full md:w-1/2 md:p-2">
                        <a href="#" class="block bg-gray-200 p-4 md:p-10 shadow-sm shadow-gray-400 hover:scale-[1.03] duration-75 font-[700] rounded-md">Manage Orders</a>
                    </div>
                    <div class="w-full md:w-1/2 md:p-2">
                        <a href="#" class="block bg-gray-200 p-4 md:p-10 shadow-sm shadow-gray-400 hover:scale-[1.03] duration-75 font-[700] rounded-md">Complaints Desk</a>
                    </div>
                    <div class="w-full md:w-1/2 md:p-2">
                        <a href="#" class="block bg-gray-200 p-4 md:p-10 shadow-sm shadow-gray-400 hover:scale-[1.03] duration-75 font-[700] rounded-md">Send an Announcement</a>
                    </div>
                </div>
@endsection
