@extends('layouts.app');
@section('title', 'Contact')
@section('main-container')
    <main>
        <div class="container-fluid p-3 bg-success text-white">
            Contact Page
        </div>
        <h3>
            <a href="{{ url('/about') }}">
                Go to about us Page
            </a>
        </h3>
        <h3>
            <a href="{{ route('contact') }}">
                Go to Contact Us Page
            </a>
        </h3>
    </main>



@endsection
