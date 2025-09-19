<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Мой сайт')</title>
  @vite(['resources/main.ts'])
</head>

<body>
  @include('layouts.header')
  <main>
    @yield('content')
  </main>
  <footer>
    <p>© 2025 Мой сайт</p>
  </footer>
</body>

</html>
