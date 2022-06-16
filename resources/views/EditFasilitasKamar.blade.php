<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EditFasilitasKamar</title>
        

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
                <a class="nav-link text-white {{ Request::is('editfasilitaskamar') ? 'disabled text-decoration-underline' : '' }}" href="/editfasilitaskamar">Fasilitas Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('editfasilitashotel') ? 'disabled text-decoration-underline' : '' }}" href="/editfasilitashotel">Fasilitas Hotel</a>
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
    <h2>Superior</h2>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Fasiltas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  @foreach($fasilitaskamar as $item)
  <tbody>
    <tr>
    <th scope="row  ">{{$loop->iteration}}</th>
    <td>{{$item->Fasilitas_Kamar}}</td>
      <td><a href="/deletefasilitas/{{$item->id}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<div>
  <a href='/tambahfasilitaskamar' class="btn btn-dark">Tambah Fasilitas</a>
</div>
  <div class='table'>
    <h2>Deluxe</h2>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Fasiltas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  @foreach($fasilitaskamar2 as $item)
  <tbody>
    <tr>
    <th scope="row  ">{{$loop->iteration}}</th>
    <td>{{$item->Fasilitas_Kamar2}}</td>
      <td><a href="/deletefasilitas2/{{$item->id}}">Delete</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
<div>
  <a href='/tambahfasilitaskamar2' class="btn btn-dark">Tambah Fasilitas</a>
</div>