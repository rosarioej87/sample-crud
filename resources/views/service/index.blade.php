@extends('layouts.app')
@section('title', 'Services')

@section('content')
@include('partials.nav')
    <h1>Services</h1>

    <form action="/service" method="POST">
        @csrf
        <input type="text" name="name" autocomplete="off">
        <button>Add Service</button>
    </form>
    <p style="color:red">
        @error('name')
        {{ $message }}
    @enderror
    </p>

    @forelse ($services as $service)
    <ul>
        <li>{{ $service->name }}</li>
    </ul>
    @empty
    <ul>
        <li>No services available</li>
    </ul>
    @endforelse
@endsection
