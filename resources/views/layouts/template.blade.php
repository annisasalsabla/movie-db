<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie DB -  @yield ('title','Homepage')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-success" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">Movie DB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/movie/create">Input Movie</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container my-2">
   @yield('content') 

</div>



    {{-- <div class="container py-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($movies as $movie)
          <div class="col">
            <div class="card h-100">
              <img src="{{ $movie->cover_image }}" class="card-img-top" alt="{{ $movie->title }}">
              <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ Str::limit($movie->synopsis, 100) }}</p>
                <p class="text-muted"><strong>Tahun:</strong> {{ $movie->year }}</p>
                <p class="text-muted"><strong>Pemeran:</strong> {{ $movie->actors }}</p>
                <a href="#" class="btn btn-primary">Detail</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div> --}}

    <div class="bg-success py-2 text-white text-center">
    Copyright &copy; 2025 develop by icha
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>