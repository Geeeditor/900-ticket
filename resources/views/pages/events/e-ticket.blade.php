@extends('layouts.app')
@section('title', 'Here is your E-Ticket')
@section('hero')
    <div class="relative top-[0] flex h-[14vh] w-full justify-center bg-black md:h-[20vh]">
        {{-- <img class="h-full w-full object-cover" src="{{ asset('image/eventhero.png') }}" alt="lorem ipsum"> --}}
        {{-- hero content --}}
    </div>
@endsection
@section('content')
    <div class="mx-4 my-10 rounded-lg border bg-red-800 p-2">
        <div class="flex items-center justify-between">
            <img class="w-[80px] shadow shadow-white" src="{{asset('image/logo_alt.svg')}}" alt="900 logo">

            <div class="text-right text-lg font-bold text-white md:text-base">
                <div id="clock" class="text-md font-mono"></div>
                <div id="date" class="text-md font-mono"></div>
            </div>
        </div>
        <div class="mt-8 text-lg font-bold capitalize text-white md:text-base">
            <p>blockchain builders meetup </p>

            <div class="mt-6">
                <h4 class="text-md">address</h4>
                <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, ut!</p>
            </div>
        </div>

        <div class="mt-8 flex items-center justify-between text-lg font-bold capitalize text-white md:text-base">
            <div>
                <h4 class="text-md">guest</h4>
                <p class="text-sm">chigozie godwin</p>
            </div>
            <div>
                <h4 class="text-md">host</h4>
                <p class="text-sm">900Tickets</p>
            </div>
        </div>
        <div id="qrcode" class="mt-10 flex items-center justify-center"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/qrcodejs@1.0.0/qrcode.min.js"></script>
    <script>
      function updateClock() {
      const now = new Date();


      let hours = now.getHours();
      const minutes = String(now.getMinutes()).padStart(2, '0');
      const seconds = String(now.getSeconds()).padStart(2, '0');


      const ampm = hours >= 12 ? 'PM' : 'AM';


      hours = hours % 12;
      hours = hours ? hours : 12;


      const timeString = `${hours}:${minutes} ${ampm}`;
      document.getElementById('clock').textContent = timeString;
    }


    setInterval(updateClock, 1000);
    updateClock();

    function updateDate() {
      const now = new Date();
      const monthNames = [
        "Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"
      ];
      const month = monthNames[now.getMonth()];
      const day = now.getDate();
      const year = now.getFullYear();
      const dateString = `${month} ${day}, ${year}`;
      document.getElementById('date').textContent = dateString;
    }

    updateDate();


        const qrText = "https://example.com";

        const qrcode = new QRCode(document.getElementById("qrcode"), {
          text: qrText,
          width: 128,
          height: 128,
          colorDark : "#000000",
          colorLight : "#fff",
          correctLevel : QRCode.CorrectLevel.H
        });
    </script>
@endsection