<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>
  <body>


    <table>
      <thead>
        <tr>
            <th>Name</th>
            <th>Item Name</th>
            <th>Item Price</th>
        </tr>
      </thead>

      <tbody>
        @foreach($evaluator->evaluated as $evaluated)
        <tr>
          <td>{{$evaluator->idEvaluator}}</td>
          <td></td>
          <td>{{$evaluated->pivot->answer1}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
