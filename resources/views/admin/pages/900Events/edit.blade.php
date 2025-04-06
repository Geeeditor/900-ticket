@extends('layouts.admin')
@section('title', 'Update Event')
@section('content')
    <form  action="{{ route('admin.events.edit.update', ['id' => $event->id]) }}"
        class="mx-auto flex max-w-4xl flex-col gap-2 px-5 py-5 font-[sans-serif] md:gap-3" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')

        <div class="event-hero text-[20px] font-[600] leading-normal">UPDATE PARTY TIKET</div>

       @if (session('error') && session('error')->any())
            {{ session('error')}}
        @endif

        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        <div class="w-full">
            {{-- <input type="text" name="event_reference" value="{{ $event->event_reference }}"
                class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                placeholder="Event Reference" /> --}}
            <div class="align-items-start flex h-fit w-[100%] flex-wrap gap-2 md:flex-nowrap md:gap-4">
                <div class="relative flex w-full content-start items-start md:w-1/2">

                    <input type="text" placeholder="Add Event Title" name="title"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value="{{ $event->title }}" />
                    <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/title.svg') }}" alt="lorem ipsum">
                     @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="relative flex w-full flex-col items-start md:w-1/2">
                    <input type="date" name="date"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value="{{ $event->date }}" />
                    <span class="py-1 text-[10px] font-[100] text-[#7f7f80]">Pick Event Date</span>
                      @error('date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="align-items-start flex h-fit w-[100%] flex-wrap gap-2 md:flex-nowrap md:gap-4">
                <div class="relative flex w-full content-start items-start md:w-1/2">
                    <input type="text" placeholder="Add Detailed Event Venue Address" name="location"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value="{{ $event->location }}" />
                    <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/location.svg') }}" alt="lorem ipsum">

                </div>

                <div class="relative flex w-full flex-col items-start md:w-1/2">
                    <input type="time" name="time"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                        value="{{ $event->time }}" />
                    <span class="py-1 text-[10px] font-[100] text-[#7f7f80]">Pick Event Time</span>
                        @error('time')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                </div>
            </div>
        </div>

        <div class="w-full">
            <div class="align-items-start flex h-fit w-[100%] flex-wrap gap-2 md:flex-nowrap md:gap-4">


                <div class="relative flex w-full flex-col items-start md:w-1/2">
                    <textarea placeholder="Event Description" name="description"
                        class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent">{{ trim($event->description) }}</textarea>
                    <span class="py-1 text-[10px] font-[100] text-[#7f7f80]">Provide Detailed Event Description</span>
                    @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror

                </div>

                <div class="flex w-full flex-col gap-1 md:w-1/2">
                    <div class="relative flex content-start items-start">
                        <input type="number" placeholder="Enter Events Price" name="regular_ticket_price" min="0" step="0.01"
                            class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                            value="{{ $event->regular_ticket_price !== null ? $event->regular_ticket_price : 0 }}" />
                        <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/price.svg') }}" alt="lorem ipsum">
                          @error('regular_ticket_price')
                <div class="text-danger">{{ $message }}</div>
            @enderror

                    </div>
                    <div class="relative flex content-start items-start">
                        <input type="number" placeholder="Enter Events Price" name="vip_ticket_price" min="0" step="0.01"
                            class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                            value="{{ $event->vip_ticket_price !== null ? $event->vip_ticket_price : 0 }}" />
                        <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/price.svg') }}" alt="lorem ipsum">
                         @error('vvip_ticket_price')
                <div class="text-danger">{{ $message }}</div>
            @enderror

                    </div>
                    <div class="relative flex content-start items-start">
                        <input type="number" placeholder="Enter Events Price" name="vvip_ticket_price" min="0" step="0.01"
                            class="w-full rounded border bg-[#f0f1f2] px-4 py-3 text-sm text-black outline-red-alt-800 transition-all focus:bg-transparent"
                            value="{{ $event->vvip_ticket_price !== null ? $event->vvip_ticket_price : 0 }}" />
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
                        value='{{ $event->map_link }}' />
                    <img class="-ml-[25px] mt-[15px] w-[13px]" src="{{ asset('image/map-pin.svg') }}" alt="lorem ipsum">
                     @error('map_link')
                <div class="text-danger">{{ $message }}</div>
            @enderror

                </div>

                <div class="relative flex w-full flex-col items-start md:w-1/2">

                    <div class="grid w-full max-w-xs items-center gap-1.5">

                        <div class="w-full">
                            <img class="object-contain"
                                src="{{ asset('./image/events/' . basename($event->hero_image)) }}" alt="lorem ipsum">
                        </div>

                        <input
                            class="border-input flex w-full rounded-md border border-blue-300 bg-white text-sm text-gray-400 file:border-0 file:bg-red-alt-800 file:text-sm file:font-medium file:text-white"
                            name="hero_image" type="file" id="picture"  accept="image/*"  />
                                 @error('hero_image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
                    </div>

                    <span class="py-1 text-[10px] font-[100] text-[#7f7f80]">Upload Party Ticket Flier</span>


                </div>
            </div>
        </div>


        <button type="submit"
            class="mt-4 w-full rounded border border-white bg-red-alt-800 px-6 py-2.5 text-sm text-white transition-all hover:bg-red-alt-700">Update
            Party Ticket</button>
    </form>
@endsection
