<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1, viewport-fit=cover" />

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name') }}</title>

  @vite(['resources/scss/index.scss', 'resources/js/index.js'])

  @stack('head')
</head>

<body>
  @yield('body')
  @stack('body')
</body>

</html>
