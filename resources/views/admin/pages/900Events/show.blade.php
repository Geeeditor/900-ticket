@extends('layouts.admin')

@section('content')
    <section>
        <div class="flex md:gap-3">
            <div class="w-full md:w-[30%]">
                <div class="w-full max-h-[250px]">
                    <img class="object-contain max-h-[250px]" src="{{ asset('storage/' . $event->hero_image) }}" alt="lorem ipsum">
                </div>

                <div class="flex flex-col gap-1 py-4">


                    <p class="flex gap-2 text-[14px]">
                        <img src="{{ asset('image/date.svg') }}" alt="lorem ipsum"> {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}
                    </p>
                    <p class="flex gap-2 text-[14px]">
                        <img src="{{ asset('image/clock.svg') }}" alt="lorem ipsum"> 12:20
                    </p>
                    <p class="flex gap-2 text-[14px]">
                        <img src="{{ asset('image/map-pin.svg') }}" alt="lorem ipsum"> {{$event->location}}
                    </p>
                    <a class="flex gap-2 text-[14px]" href="{{ $event->map_link }}">
                        <img src="{{ asset('image/link.svg') }}" alt="lorem ipsum">
                        {{ $event->map_link }}
                    </a>
                </div>
            </div>

            <div class="w-full md:w-[70%]">
                <h1 class="font-[700] text-[23px] uppercase mb-2">
                    {{$event->title}}
                </h1>
                <p>
                    {!! nl2br(e($event->description)) !!}
                </p>
            </div>
        </div>
    </section>
@endsection
