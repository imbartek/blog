@extends('website.template.master')

@section('content')
<!-- Page Header -->
<header class="masthead" style="margin-top: 15vh">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Skontaktuj się z nami</h1>
                    <span class="subheading">Masz pytania? My mamy odpowiedzi!</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Chcesz się z nami skontaktować? Wypełnij poniższy formularz, aby wysłać nam wiadomość, a my skontaktujemy się z Tobą tak szybko, jak to możliwe!</p>

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session('message')}}
            </div>
            @endif
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            {!! Form::open(['route' => 'contact.submit']) !!}
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Imię i nazwisko</label>
                    <input type="text" name="name" class="form-control" placeholder="Imię i nazwisko" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Adres email</label>
                    <input type="email" name="email" class="form-control" placeholder="Adres email" id="email" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Numer telefonu</label>
                    <input type="tel" name="tel" class="form-control" placeholder="Numer telefonu" id="phone" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                    <label>Treść</label>
                    <textarea rows="5" name="message" class="form-control" placeholder="Treść" id="message" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning" id="sendMessageButton">Wyślij</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection()