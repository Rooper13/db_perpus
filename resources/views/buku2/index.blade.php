<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/topnav.css">
</head>
<body>
    
    <div class="topnav">
      <a class="active" href="/">Home</a>
      <a href="{{route('buku.index')}}">News</a>
      <a href="/contact">Contact</a>
      <a href="/about">About</a>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>judul</th>
                <th>penulis</th>
            </tr>
        </thead>
    <tbody>
    @forelse ($buku2s as $buku)
    
    <tr>
        <td>{{$buku-> title}}</td> 
        <td>{{$buku-> author}}</td> 
    </tr>
    @empty
        data belum tersedia
    @endforelse
    
    </tbody>
    </table>
</body>
</html>
