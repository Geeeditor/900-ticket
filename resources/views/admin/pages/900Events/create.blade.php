@extends('layouts.admin')
@section('title', 'Create a Party Ticket')

@section('content')

    <form method="post" action="{{ route('admin.create.store') }}"
        class="mx-auto flex max-w-4xl flex-col gap-2 px-5 py-5 font-[sans-serif] md:gap-3" enctype="multipart/form-data">
        @csrf
        <div class="event-hero font-[600]">CREATE AN EVENT</div>
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

        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        <div class="w-full">
            <div class="align-items-start flex h-fit w-[100%] flex-wrap gap-2 md:flex-nowrap md:gap-4">
                <div class="relative flex w-full content-start items-start md:w-1/2">

                    <input type="text" placeholder="Add Event Title" name="title"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value="{{ old('title') }}" />
                    <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/title.svg') }}" alt="lorem ipsum">

                </div>


                <div class="relative flex w-full flex-col items-start md:w-1/2">
                    <input type="date" name="date"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value="{{ old('date') }}" />
                    <span class="py-1 text-[10px] font-[100] text-[#7f7f80]">Pick Event Date</span>

                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="align-items-start flex h-fit w-[100%] flex-wrap gap-2 md:flex-nowrap md:gap-4">
                <div class="relative flex w-full content-start items-start md:w-1/2">
                    <input type="text" placeholder="Add Detailed Event Venue Address" name="location"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value="{{ old('location') }}" />
                    <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/location.svg') }}" alt="lorem ipsum">

                </div>

                <div class="relative flex w-full flex-col items-start md:w-1/2">
                    <input type="time" name="time"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value="{{ old('time') }}" />
                    <span class="py-1 text-[10px] font-[100] text-[#7f7f80]">Pick Event Time</span>

                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="align-items-start flex h-fit w-[100%] flex-wrap gap-2 md:flex-nowrap md:gap-4">


                <div class="relative flex w-full flex-col items-start md:w-1/2">
                    <textarea type="text" placeholder="Add Event Title" name="description"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent">
                        {{ old('description') }}
                    </textarea>
                    <span class="py-1 text-[10px] font-[100] text-[#7f7f80]">Provide Detailed Event Description</span>

                </div>
                <div class="flex w-full flex-col gap-1 md:w-1/2">
                    <div class="relative flex content-start items-start">
                        <input type="number" placeholder="Enter Events Price" name="regular_ticket_price" min="0" step="0.01"
                            class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                            value="{{ old('regular_ticket_price') !== null ? old('regular_ticket_price') : 0 }}" />
                        <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/price.svg') }}" alt="lorem ipsum">

                    </div>
                    <div class="relative flex content-start items-start">
                        <input type="number" placeholder="Enter Events Price" name="vip_ticket_price" min="0" step="0.01"
                            class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                            value="{{ old('vip_ticket_price') !== null ? old('vip_ticket_price') : 0 }}" />
                        <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/price.svg') }}" alt="lorem ipsum">

                    </div>
                    <div class="relative flex content-start items-start">
                        <input type="number" min="0" step="0.01" placeholder="Enter Events Price" name="vvip_ticket_price"
                            class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                            value="{{ old('vvip_ticket_price') !== null ? old('vvip_ticket_price') : 0 }}" />
                        <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/price.svg') }}" alt="lorem ipsum">

                    </div>
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="align-items-start flex h-fit w-[100%] flex-wrap gap-2 md:flex-nowrap md:gap-4">
                <div class="relative flex w-full content-start items-start md:w-1/2">
                    <input type="url" placeholder="Provide Map Link" name="map_link"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value='{{ old('map_link') }}' />
                    <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/map-pin.svg') }}" alt="lorem ipsum">

                </div>

                <div class="relative flex w-full flex-col items-start md:w-1/2">

                    <div class="grid w-full max-w-xs items-center gap-1.5">

                        <input
                            class="border-input flex w-full rounded-md border border-blue-300 bg-white text-sm text-gray-400 file:border-0 file:bg-red-alt-800 file:text-sm file:font-medium file:text-white"
                            name="hero_image" type="file" id="picture" value="{{ old('hero_image') }}" />
                    </div>

                    <span class="py-1 text-[10px] font-[100] text-[#7f7f80]">Upload Event Flier</span>


                </div>
            </div>
        </div>


        <button type="submit"
            class="mt-4 w-full rounded border border-white bg-red-alt-800 px-6 py-2.5 text-sm text-white transition-all hover:bg-red-alt-700">Create
            Event</button>
    </form>
@endsection
