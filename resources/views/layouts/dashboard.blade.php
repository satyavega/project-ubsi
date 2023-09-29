<!DOCTYPE html>
<html class="scroll-smooth" lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    @vite('resources/css/app.css')
    <title>{{ Str::title($title) }} | UBSI</title>
    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none
        }

        trix-editor {
            min-width: 100%;
            min-height: 150px;
        }
    </style>
</head>

<body>
    <div class="flex flex-col w-full">
        @yield('container')
        <div class="py-5">
            @yield('secContainer')
        </div>
    </div>
</body>

</html>
