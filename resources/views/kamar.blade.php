<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kamar</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </head>
  <body>
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
                    <button type="submit" class="" onclick="return confirm('Ingin keluar?')"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                </form>
            </li>
              </ul>
          </div>
      
          <div class="hero mt-4 mb-5 border border-dark"></div>
      </header>
    </div>  

    <div class="bg-dark p-4 mb-4 border border-dark clearfix text-white shadow">
        <img src="/img/Superior.jpg" alt="Kamar Superior" class="gambar-kamar float-start border border-dark me-5">
        <h2>Tipe Superior</h2>
        <p>Fasilitas : </p>
        <ul>
            @foreach($fasilitaskamar as $item)
            <li>{{$item->Fasilitas_Kamar}}</li>
            @endforeach
        </ul>
    </div>
    <div class="bg-dark p-4 mb-4 border border-dark clearfix text-white shadow">
        <img src="/img/Deluxe.jpg" alt="Kamar Deluxe" class="gambar-kamar float-start border border-dark me-5"> 

        <h2>Tipe Deluxe</h2>
        <p>Fasilitas : </p>
        <ul>
        @foreach($fasilitaskamar2 as $item)
            <li>{{$item->Fasilitas_Kamar2}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>