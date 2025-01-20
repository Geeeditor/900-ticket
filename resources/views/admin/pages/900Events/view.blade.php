@extends('layouts.admin')
@section('content')
    <section>
        <div class="font-[600] event-hero md:mb-10">VIEW EVENT LIST</div>

        @if(session()->has('message')){
            <span class="font-[600] text-[20px]">{{ session('message') }}</span>
        }
        @endif


        <div class="flex flex-wrap max-w-full">
            @forelse ($events as $event)
                <div class=" w-full md:w-1/2 p-2">

                    <div class="flex flex-col rounded-xl bg-white text-gray-700 shadow-md">
                        <div
                            class="h-40 overflow-hidden rounded-xl bg-blue-gray-500 text-white shadow-lg shadow-blue-gray-500/40 bg-gradient-to-r from-blue-500 to-blue-600">
                            <img class="object-cover w-full h-full" src="{{ asset('storage/' . $event->hero_image) }}"
                                alt="lorem ipsum">
                        </div>
                        <div class="p-6">
                            <h5 class="text-xl font-semibold text-blue-gray-900">
                                {{ $event->title }}
                            </h5>
                            <p class="text-base font-light leading-relaxed">
                                {{ $event->description }}
                            </p>
                        </div>
                        <div class="p-6 -mt-4 pt-0 w-fit">

                            <div
                                class="flex overflow-hidden bg-white border divide-x rounded-lg rtl:flex-row-reverse dark:bg-gray-900 dark:border-gray-700 dark:divide-gray-700">
                                <button
                                    class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 sm:px-6 dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                    <a href="{{route('admin.event.view', $event->id )}}">
                                        <span class="mdi mdi-open-in-new"></span>
                                    </a>

                                </button>

                                <button
                                    class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 sm:px-6 dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                     <a href="{{route('admin.events.edit', ['id'=>$event])}}">
                                        <span class="mdi mdi-file-edit"></span>

                                    </a>
                                </button>

                                <button
                                    class="px-4 py-2 font-medium text-gray-600 transition-colors duration-200 sm:px-6 dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                     <a href="">

                                        <span class="mdi mdi-delete-empty-outline"></span>
                                    </a>
                                </button>
                            </div>

                        </div>
                    </div>




                </div>
            @empty
                <div>
                    <div class="flex items-center flex-col justify-center gap-0">
                        <img src="{{ asset('image/error.svg') }}" alt="lorem ipsum">
                        Sorry no events created
                        <div class="text-[13px] font-[300]">
                            <a href="{{ route('admin.create.event') }}">Create an event</a>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>










    </section>
@endsection
