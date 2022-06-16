<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PesanKamar</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </head>
  <body>

  <div class="container">
  <header class="bg-dark p-4 border border-dark shadow">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="text-white">Hotel Hebat</h1>
    
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('Admin') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/admin">Admin</a>
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

<h1>Pesan Hotel</h1>
    <div>
        <form action="/simpandata" method="post" >
            @csrf
            <div class="row justify-content-center p-4">
            <div>
                <h4>Nama</h4>
                <input type="text" id="Nama" name="Nama" placeholder='Nama Pemesan' required autofocus>
            </div>
            <div>
                <h4>Check in</h4>
                <input type="datetime-local" id="Tanggal" name="Check_in" required>
            </div>
            
            <div>
                <h4>Tipe Kamar</h4>
                <select id="Tipe" name="kamar_id">
                    <option value="1">Deluxe</option>
                    <option value="2">Superior</option>
                </select>
            </div>
            <div>
                <h4>Jumlah Kamar</h4>
                <input type="number" id="Jumlah" name="Jumlah_Kamar" placeholder='Jumlah' required>
            </div>
            <div>
                <h4>Check out</h4>
                <input type="datetime-local" id="Tanggal" name="Check_out" required>
            </div>
            <div class="col-md-2">
            <button type="submit" class="btn btn-dark">Pesan</button>
            </div>
            </div>
        </form>
    </div>