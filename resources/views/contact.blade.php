@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')

    <!-- ==================== BANNER SECTION ==================== -->
    <section class="container">
        <div class="container-banner">
            <img src="{{asset('storage/'.$data->contact)}}" alt="" class="w-100">
        </div>
    </section>
    <!-- ==================== BANNER SECTION END ==================== -->

    <!-- ==================== MESSAGE SECTION ==================== -->
    <section class="container">
        <div class="section-title">
            <h4>HAVE ANY QUESTIONS?</h4>
        </div>
        <div class="message">
            <div class="row align-items-center">
                <div class="col-md-6 d-none d-md-block"><img src="{{asset('assets/')}}/img/mail.png" alt="" class="img-fluid"></div>
                <div class="col-md-6">
                    <form action="{{route('message')}}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="name" id="" placeholder="Your Name">
                        </div>
                        <div class="input-group">
                            <input type="text" name="email" id="" placeholder="Your email">
                        </div>
                        <div class="input-group">
                            <textarea name="message" id="" placeholder="Your question..."></textarea>
                        </div>
                        <div class="input-group">
                            <input type="submit" name="" id="" placeholder="Name">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== MESSAGE SECTION END ==================== -->

    <!-- ==================== CONTACT SECTION ==================== -->
    <section class="container">
        <div class="contact-section">
            <div class="d-flex align-items-center">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.26554250830796!2d90.37521570036317!3d23.738509889587817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfd5c1abd79e2a08c!2zMjPCsDQ0JzE4LjgiTiA5MMKwMjInMzEuNyJF!5e0!3m2!1sen!2sbd!4v1653547232070!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-detail">
                    <h2>Contact Us</h2>
                    <div class="item">
                        <div class="d-flex align-items-center">
                            <a href=""><i class="fa-solid fa-location-dot"></i></a>
                            <p>780/24 Mohammadpur, Dhaka, Bangladesh.​</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-flex align-items-center">
                            <a href=""><i class="fa-solid fa-envelope"></i></a>
                            <p>gvibangladesh@gmail.com​</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="d-flex align-items-center">
                            <a href=""><i class="fa-solid fa-phone"></i></a>
                            <p>+880 1404-000120</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== CONTACT SECTION END ==================== -->
@stop
@section('js')
@stop
