@extends('frontend.layouts.main-container')
@section('title', 'Contact')
@section('main-container')<!-- Breadcumb Section   S T A R T -->
    <div class="breadcumb-section">
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content">
                            <h1 class="breadcumb-title">Contact</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="text-white">/</li>
                                <li class="active">Get in touch</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Us Section    S T A R T -->
    <div class="contact-us-section section-padding fix">
        <div class="contact-box-wrapper style1">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/location.png" alt="icon"></div>
                            <h3 class="title">Our Address</h3>
                            <p>5 Ways Chowk, Opposite Zafar Ali Stadium, Sahiwal</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/gmail.png" alt="icon"></div>
                            <h3 class="title">Email Address</h3>
                            <p><a href="mailto:info@emiratescousine.com">info@emiratescousine.com</a></p>
                            <p><a href="mailto:orders@emiratescousine.com">orders@emiratescousine.com</a></p>

                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/phone.png" alt="icon"></div>
                            <h3 class="title">Helpline</h3>
                            <p><a href="phone:+923001234567">+92 300 1234 567</a></p>
                            <p><a href="phone:+923001234567">+92 300 1234 567</a></p>

                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="contact-box style1">
                            <div class="contact-icon"><img src="assets/img/icon/clock.png" alt="icon"></div>
                            <h3 class="title">Opening Hours</h3>
                            <p>Monday-Sat: 9 AM – 6 PM Sunday: 9 AM – 4 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section    S T A R T -->
    <div class="contact-form-section section-padding pt-0 fix">
        <div class="contact-form-wrapper style2">
            <div class="container">
                <div class="row gx-60 gy-5">
                    <div class="col-xl-6">
                        <div class="contact-form-thumb">
                            <img src="assets/img/contact/contactThumb2_1.png" alt="thumb">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-form style2">
                            <h2>Get in Touch</h2>
                            {{-- @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block p-4 border-left-success">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </div>
                            @endif --}}
                            <form class="row" action="#" method="post">
                                @csrf
                                <div class="col-md-6">
                                    <input type="text" placeholder="Full Name" name="fullname">
                                    @if ($errors->has('fullname'))
                                        <span class="text-danger">
                                            {{ $errors->first('fullname') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email Address" name="email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <input type="number" placeholder="Phone Number" name="phone">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">
                                            {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <select class="single-select" aria-label="Shop order" name="subject">
                                        <option value="subject" selected="selected">Subject</option>
                                        <option value="complain">Complain</option>
                                        <option value="greetings">Greetings</option>
                                        <option value="date">Expire Date</option>
                                        <option value="price">About Price</option>
                                        <option value="order">About order</option>
                                    </select>
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">
                                            {{ $errors->first('subject') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <textarea id="message" class="form-control" placeholder="Write your message here..." rows="5" name="message"
                                        style="border: 1px solid #D4DCFF"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">
                                            {{ $errors->first('message') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="theme-btn w-100" type="submit">SUBMIT NOW <i
                                            class="fa-sharp fa-regular fa-arrow-right-long bg-transparent text-white"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section    S T A R T -->
    <div class="map-wrapper" style="line-height: 0;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.980603064583!2d73.10009409999999!3d30.6626747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b7e1db29a73b%3A0xb08d5ce54bb90773!2sEmirates%20Cuisine%20Restaurant!5e0!3m2!1sen!2s!4v1754469938965!5m2!1sen!2s"
            height="550" width="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
