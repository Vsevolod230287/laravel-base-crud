<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
  <main>

    @yield('main')

  </main>

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="./js/app.js" charset="utf-8"></script>
</body>

</html>
