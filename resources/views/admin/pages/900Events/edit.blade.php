@extends('layouts.admin')
@section('title', 'Update Event')
@section('content')
    <form method="post" action="{{ route('admin.events.edit.update', ['id' => $event->id] ) }}"
        class="font-[sans-serif] max-w-4xl mx-auto py-5 px-5 flex flex-col md:gap-3 gap-2" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="font-[600] event-hero leading-normal text-[20px]">UPDATE EVENT</div>

        @if (session('error'))
            <div class="flex flex-col gap-1 capitalize">
                <span class="text-[12px] font-[200] text-red-700">
                    @error('title')
                        {{ $message }} !!!
                    @enderror
                </span>

                <span class="text-[12px] font-[200] text-red-700">
                    @error('date')
                        {{ $message }} !!!
                    @enderror
                </span>

                <span class="text-[12px] font-[200] text-red-700">
                    @error('time')
                        {{ $message }} !!!
                    @enderror
                </span>

                <span class="text-[12px] font-[200] text-red-700">
                    @error('location')
                        {{ $message }} !!!
                    @enderror
                </span>

                <span class="text-[12px] font-[200] text-red-700">
                    @error('description')
                        {{ $message }} !!!
                    @enderror
                </span>



                <span class="text-[12px] font-[200] text-red-700">
                    @error('map_link')
                        {{ $message }} !!!
                    @enderror
                </span>

                <span class="text-[12px] font-[200] text-red-700">
                    @error('hero_image')
                        {{ $message }} !!!
                    @enderror
                </span>

                <span class="text-[12px] font-[200] text-red-700">
                    @error('ticket_price')
                        {{ $message }} !!!
                    @enderror
                </span>

                <span class="text-[12px] font-[200] text-red-700">
                    {{ session('error') }}
                </span>
            </div>


        @endif

        @if(session()->has('success'))
        <div>
              {{session('success')}}
        </div>
        @endif

        <div class="w-full">
            <div class="flex flex-wrap md:flex-nowrap h-fit align-items-start w-[100%] md:gap-4 gap-2">
                <div class="relative flex items-start content-start w-full md:w-1/2">

                    <input type="text" placeholder="Add Event Title" name="title"
                        class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent text-black w-full text-sm border outline-red-alt-800 rounded transition-all"
                        value="{{ $event->title }}" />
                    <img class="w-[13px] -ml-[25px] mt-[15px]" src="{{ asset('image/title.svg') }}" alt="lorem ipsum">

                </div>


                <div class="relative flex items-start flex-col w-full md:w-1/2">
                    <input type="date" name="date"
                        class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent text-black w-full text-sm border outline-red-alt-800 rounded transition-all"
                        value="{{ $event->date }}" />
                    <span class="font-[100] text-[10px] text-[#7f7f80] py-1">Pick Event Date</span>

                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="flex flex-wrap md:flex-nowrap h-fit align-items-start w-[100%] md:gap-4 gap-2">
                <div class="relative flex items-start content-start w-full md:w-1/2">
                    <input type="text" placeholder="Add Detailed Event Venue Address" name="location"
                        class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent text-black w-full text-sm border outline-red-alt-800 rounded transition-all"
                        value="{{ $event->location }}" />
                    <img class="w-[13px] -ml-[25px] mt-[15px]" src="{{ asset('image/location.svg') }}" alt="lorem ipsum">

                </div>

                <div class="relative flex items-start flex-col w-full md:w-1/2">
                    <input type="time" name="time"
                        class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent text-black w-full text-sm border outline-red-alt-800 rounded transition-all"
                        value="{{ $event->time }}" />
                    <span class="font-[100] text-[10px] text-[#7f7f80] py-1">Pick Event Time</span>

                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="flex flex-wrap md:flex-nowrap h-fit align-items-start w-[100%] md:gap-4 gap-2">


                <div class="relative flex items-start flex-col w-full md:w-1/2">
                    <textarea type="text" placeholder="Add Event Title" name="description"
                        class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent text-black w-full text-sm border outline-red-alt-800 rounded transition-all">
                        {{ $event->description }}
                    </textarea>
                    <span class="font-[100] text-[10px] text-[#7f7f80] py-1">Provide Detailed Event Description</span>

                </div>

                <div class="relative flex items-start content-start w-full md:w-1/2">
                    <input type="number" placeholder="Enter Events Price" name="ticket_price"
                        class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent text-black w-full text-sm border outline-red-alt-800 rounded transition-all"
                        value="{{ $event->ticket_price }}" />
                    <img class="w-[13px] -ml-[25px] mt-[15px]" src="{{ asset('image/price.svg') }}" alt="lorem ipsum">

                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="flex flex-wrap md:flex-nowrap h-fit align-items-start w-[100%] md:gap-4 gap-2">
                <div class="relative flex items-start content-start w-full md:w-1/2">
                    <input type="url" placeholder="Provide Map Link" name="map_link"
                        class="px-4 py-3 bg-[#f0f1f2] focus:bg-transparent text-black w-full text-sm border outline-red-alt-800 rounded transition-all"
                        value='{{ $event->map_link }}' />
                    <img class="w-[13px] -ml-[25px] mt-[15px]" src="{{ asset('image/map-pin.svg') }}" alt="lorem ipsum">

                </div>

                <div class="relative flex items-start flex-col w-full md:w-1/2">

                    <div class="grid w-full max-w-xs items-center gap-1.5">

                        <div class="w-full">
                          <img class="object-contain" src="{{asset('storage/'. $event->hero_image )}}" alt="lorem ipsum">
                        </div>

                        <input
                            class="flex w-full rounded-md border border-blue-300 border-input bg-white text-sm text-gray-400 file:border-0 file:bg-red-alt-800 file:text-white file:text-sm file:font-medium"
                            name="hero_image" type="file" id="picture"  />
                    </div>

                    <span class="font-[100] text-[10px] text-[#7f7f80] py-1">Upload Event Flier</span>


                </div>
            </div>
        </div>


        <button type="submit"
            class="mt-4 px-6 py-2.5 text-sm w-full bg-red-alt-800 hover:bg-red-alt-700 text-white rounded transition-all border border-white">Create
            Event</button>
    </form>
@endsection
