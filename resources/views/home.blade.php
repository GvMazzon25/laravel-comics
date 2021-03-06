<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav>
        @include('partials.header')
    </nav>
    <main class="bg-dark text-light text-center vh-50">
        <h1 class="m-3">DC COMICS</h1>
        <img src="{{ asset('images/dc-logo.png')}}" alt="Logo" width="500" height="500" class="m-5 d-inline-block align-text-top">
    </main>    
    <footer class="vh-15">
        @include('partials.footer')
    </footer>
</body>
</html>