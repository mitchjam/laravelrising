<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">

        {{-- CSS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body >

        <div id="app" class="content">
            <div class="wrapper">
                <h1 class="heading">We &nbsp;<i class="fa fa-heart"></i></h1>
                
                <img class="sticker-image" src="{{ asset('images/sticker.png') }}">
                
                <input type="email" v-model="form.email" required>
                
                <section class="purchase-buttons">
                    <button @click="orderSticker()" class="sticker-button">I <i class="fa fa-heart fa-inverse"></i> stickers</button>
                    <button @click="orderSticker()" class="tattoo-button">I <i class="fa fa-heart fa-inverse"></i> tattoos</button>
                </section>
            </div>
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
