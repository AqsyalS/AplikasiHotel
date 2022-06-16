<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
        

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </head>
  <body>

  <div class="container">
  <header class="bg-dark p-4 border border-dark shadow">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="text-white">Admin</h1>
    
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('/') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('Kamar') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/admin">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('fasilitas') ? 'disabled text-decoration-underline' : '' }}" href="/editfasilitaskamar">Fasilitas Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('fasilitas') ? 'disabled text-decoration-underline' : '' }}" href="/editfasilitashotel">Fasilitas Hotel</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
            @csrf
                    <button type="submit" class=""><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                </form>
            </li>
        </ul>
    </div>
</header>
  </div>
   
  <div class='table'>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tipe Kamar</th>
      <th scope="col">Jumlah Kamar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Deluxe</td>
      <td>1</td>
      <td><a href="">Edit</a> | <a href="">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Superior</td>
      <td>1</td>
      <td><a href="">Edit</a> | <a href="">Delete</a></td>
    </tr>   
  </tbody>
</table>
</div>
 <div>
      <a href='' class="btn btn-dark">Tambah Jumlah Kamar</a>
    </div>