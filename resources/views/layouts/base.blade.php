@php($title = $title ?? '')

@push('head-top')
    @include('layouts.partials.analytics')
@endpush

@push('head')
    @include('layouts.partials.meta')

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
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
