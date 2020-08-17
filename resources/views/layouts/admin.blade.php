<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BKKSOFT') }}</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
    
    <div id="doc" class="layout-admin">

        <x-header />

        {{-- <x-sidebar /> --}}
        <sidebar-component></sidebar-component>

        <div id="main" class="content-area">
            @yield('content')
        </div>
        
    </div>

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>