@extends('layouts.app')
@section('title', 'Customers')

@section('content')
@include('partials.nav')
    <h1>Customers</h1>

    <a href="/customers/create">Add Customer</a>
    <a href="/customers?active=1">Active</a>
    <a href="/customers?active=0">Inactive</a>

    @forelse ($customers as $customer)
    <ul>
        <li><a href="/customers/{{ $customer->id}}">{{ $customer->name }}</a></li>
        <strong>{{ $customer->email }}</strong>
    </ul>
    @empty
    <ul>
        <li>No customer available</li>
    </ul>
    @endforelse
@endsection
