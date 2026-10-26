@extends('layouts.app')

@section('content')
    <main class="mx-auto w-full max-w-2xl space-y-4 px-4 py-6 sm:px-6">
        <h1 class="text-2xl font-bold sm:text-3xl">Contact us</h1>
        @if (session('status'))
            <p role="status">{{ session('status') }}</p>
        @endif
        <livewire:contact-enquiry-form />
    </main>
@endsection
