@extends('theme.master')
@section('title', 'Register')
@section('contect')
    @include('theme.partials.hero', ['title' => 'Register Page'])

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form class="form-contact contact_form" id="contactForm" action="#/" action="contact_process.php"
                        method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control border" id="name" name="name" type="text"
                                        placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <input class="form-control border" id="email" name="email" type="email"
                                        placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control border" id="name" name="password" type="password"
                                        placeholder="Enter your password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control border" name="password_confirmation" type="password"
                                        placeholder="Enter your password confirmation">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-md-right mt-3 text-center">
                            <button class="button button--active button-contactForm" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
