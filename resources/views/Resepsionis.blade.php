<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Resepsionis</title>
        

    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  </head>
  <body>

  <div class="container">
  <header class="bg-dark p-4 border border-dark shadow">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h1 class="text-white">Resepsionis</h1>
    
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('/') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::is('resepsionis') ? 'disabled text-decoration-underline' : '' }}" aria-current="page" href="/resepsionis">Resepsionis</a>
            </li>
            <li class="nav-item">
                <form action="/logout" method="post">
            @csrf
                    <button type="submit" class="" onclick="return confirm('Ingin keluar?')"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                </form>
            </li>
        </ul>
    </div>
</header>
  </div>
  <div>
  </div>
  <div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Tamu</th>
      <th scope="col">Tanggal Chek In</th>
      <th scope="col">Tipe Kamar</th>
      <th scope="col">Jumlah Kamar</th>
      <th scope="col">Tanggal Chek Out</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  @foreach($datapesanan as $item)
  <tbody>
    <tr>
      <th scope="row  ">{{$loop->iteration}}</th>
      <td>{{$item->Nama}}</td>
      <td>{{$item->Check_in}}</td>
      <td>{{$item->kamar_id}}</td>
      <td>{{$item->Jumlah_Kamar}}</td>
      <td>{{$item->Check_out}}</td>
      <td><a href="/editpesanan/{{$item->id}}">Edit</a> | <a href="/deletedata/{{$item->id}}" onclick="return confirm('Hapus?')">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>