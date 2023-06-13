<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">
    @include ('partials.header')
    

    <main class="container">
        @yield( 'content' )
    </main>


    @include ('partials.footer')
</body>
</html>