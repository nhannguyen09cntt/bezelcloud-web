<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hostinza - Index Ten</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700,700i%7CRubik:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" type="image/png" href="favicon.ico">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="body">
        @include('layout.menu')
        <!-- Page Content -->
        @yield('content')
        <!-- End Page Content -->
        @include('layout.footer')
    </div>
</body>

</html>
