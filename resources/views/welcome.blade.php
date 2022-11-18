@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diva's Catalog</title>
    <link rel="stylesheet" href="style.css" class="css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
</head>
<body>
    <section class="home">
        <a class="logo"> DIVA WORLD</a>
    <div class="description">
        <h3><b>Wedding Bands</b></h3>
        <h6>A wedding ring is a symbol of love, loyalty, and commitment in a marriage. You can say that a wedding ring is like a seal that secures your love and ties two people together. Furthermore, a wedding ring also indicates that a person is in a marriage, and they are not interested in new relationships. If you are willing to learn more about the significance of wedding rings, have a look at the famous wedding rings quotes.</h6>
    </div>
    <img src="../storage/rings.jpeg">
    <div class="social-container">
        <ul class="social-icons">
            <li><i class="fa fa-facebook-square"></i></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
    </section>
    
</body>
</html>  
@endsection
