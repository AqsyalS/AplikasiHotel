<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Fasilitas</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </head>

<div class="container">
    <header class="bg-dark p-4 border border-dark shadow mb-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h1 class="text-white">Hotel Hebat</h1>
    
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('Admin') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/editfasilitaskamar">Admin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('Admin') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/resepsionis">Resepsionis</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('/') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('kamar') ? 'disabled text-decoration-underline' : '' }}" href="/kamar">Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ Request::is('fasilitas') ? 'disabled text-decoration-underline' : '' }}" href="/fasilitas">Fasilitas</a>
                </li>
                <li class="nav-item">
                <form action="/logout" method="post">
            @csrf
                    <button type="submit" class=""><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                </form>
            </li>
            </ul>
        </div>

    <div class="hero mt-4 mb-5 border border-dark"></div>
    </header>
</div>
<body>
    <div class="container bg-dark shadow border border-dark">
        <div class="row justify-content-center p-4 text-white">
            <h2 class="mb-4" align='center'>Fasilitas</h2>
            @foreach($fasilitashotel as $item)
            <div class="col-5">
                
                <div class=""><img src="{{ asset('image/'. $item->Gambar ) }}" height='200%' width='100%'></div>
            </div>
           
            @endforeach
        </div>
    </div>
</body>
</html>