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
  <main class="bg-dark text-center vh-50">
    <section class="bg-dark">
      <section class="d-flex flex-row justify-content-around flex-wrap ">
        @foreach ($comics as $comic)
          <div class="card m-3" style="width: 18rem;">
            <a href="{{ route('card') }}">
              <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
              <div class="card-body">
                <p class="card-text">{{ $comic['title'] }}</p>
              </div>
            </a>
          </div>
        @endforeach  
          
      </section>
    </section>
  </main>    
  <footer class="vh-15">
    @include('partials.footer')
  </footer>
</body>
</html>





