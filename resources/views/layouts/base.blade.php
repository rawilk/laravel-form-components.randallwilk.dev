@php($title = $title ?? '')

@push('head-top')

@endpush

@push('head')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i,900" rel="stylesheet">--}}
    {{--<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! mix('css/app.css') !!}">
@endpush

<x-app :title="$title">
    <div class="flex flex-col min-h-screen bg-gray-50">

        {{-- header --}}
        @include('layouts.partials.header')

        {{-- body --}}
        <main class="flex-grow relative flex flex-col">
            {{ $slot }}
        </main>

        {{-- footer --}}
        @include('layouts.partials.footer')
    </div>
</x-app>
