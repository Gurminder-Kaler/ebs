@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<nav class="nav navbar">
    <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About Us</a></li>
    <li><a href="#">Services</a>
        <ul>
        <li><a href="{{ url('services/web_development') }}">Web Development</a></li>
        <li><a href="{{ url('services/web_designing') }}">Web Designing</a></li>
        <li><a href="{{ url('services/mobile_app_development') }}">Mobile App Development</a></li>
        <li><a href="{{ url('services/web_hosting') }}">Web Hosting</a></li>
        <li><a href="{{ url('services/content_writing') }}">Content Writing</a></li>
        <li><a href="{{ url('services/digital_marketing') }}">Digital Marketing</a></li>
        </ul>
    </li>
    <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
    <li><a href="{{ url('/blog') }}">Blog</a></li>
    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
    </ul>
</nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
