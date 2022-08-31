<!doctype html>
<html lang="en">
  <head>
    <title>E-Com</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
      .custom-login{
        height: 500px;
        padding-top: 100px;
      }
      img.slider-img{
        height: 400px; !important
      }
      .custom-slider{
        height: 600px;
        margin-top: 50px
      }
      .trending-img{
        height: 150px;
      }
      .trending-items{
        float: left;
        width: 20%;
      }
      .trending-wrapper{
        margin: 20px
      }
      .detail-img{
        height: 200px;
      }
      .search-box{
        width: 500px; !important
      }
      .searched-wrapper{
        padding: 20px;
      }
      .cart-list-divider{
        border-bottom: 1px solid #cccccc;
        padding-bottom: 20px;

      }
    </style>
  </head>
  <body>
    @include('header')
    @yield('content')
    @include('footer')
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>

  
</html>