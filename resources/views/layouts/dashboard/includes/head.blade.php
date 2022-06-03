<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard/images/favicon/favicon.ico') }} ">

    <!-- Libs CSS -->

    <link href="{{ asset('dashboard/dashboard/libs/bootstrap-icons/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/libs/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/libs/prismjs/themes/prism-okaidia.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        .docket{
            font-family: 'Pacifico', cursive;
        }
    </style>
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/theme.min.css') }}">
    @stack('styles')
    <title>
        {{ $title . ' - ' . 'BPO Innova' ?? env('APP_NAME') }}
    </title>
</head>
