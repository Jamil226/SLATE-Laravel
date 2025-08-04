@extends('layouts.app')
@section('title', 'Home')
@section('main-container')
    <main>
        <div class="container-fluid p-3 bg-success text-white">
            Home Page
        </div>
        <div class="container">
            <h1>
                Hello World Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores est recusandae labore
                aspernatur voluptas doloremque ex deleniti odio, iure suscipit totam eligendi repellat eos vitae fugit sint
                cupiditate? Esse, nobis?
            </h1>
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
