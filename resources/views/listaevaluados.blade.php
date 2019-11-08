<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>

    <div class="container">
      <div class="row justify-content-center justify-content-md-center">

        @foreach($evaluateds as $evaluated)
        <div class="card" style="width: 12rem; margin: 10px;">
          <img class="card-img-top" src="images/{{$evaluated->image}}" style="width: 11.9rem; height: 200px;">
          <div class="card-body">
            <h5 class="card-title">{{$evaluated->name}}</h5>
            <a href="#" class="btn btn-primary">Ver detalles</a>
          </div>
        </div>
        @endforeach

      </div>
    </div>


  </body>
</html>
