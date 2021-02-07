@extends('layouts.app')
@section('title', 'Customers')

@section('content')
@include('partials.nav')
    <h1>Customer Profile</h1>
    <div>
        <a href="/customers">back</a>
    </div>
    <strong>Name: {{ $customer->name }}</strong>
    <p>Email: {{ $customer->email }}</p>
    <a href="/customers/{{ $customer->id }}/edit">edit</a>
    <form action="/customers/{{ $customer->id }}" method="POST">
        @method('DELETE')
        @csrf
        <button>delete</button>
    </form>
@endsection
