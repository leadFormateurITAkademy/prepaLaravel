<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
  </head>
  <body>
    <header>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/series">All series</a></li>
        <li><a href="/addseries">Add one serie</a></li>
      </ul>
    </header>
    <main>
        @yield('content')
    </main>
    <script type="text/javascript" src="{{ asset('./js/script.js') }}"></script>
  </body>
</html>
