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
            <th>Evaluador</th>
            <th>Evaluado</th>
            <th>Pregunta1</th>
            <th>Pregunta2</th>
            <th>Pregunta3</th>
            <th>Pregunta4</th>
            <th>Pregunta5</th>
        </tr>
      </thead>

      <tbody>
        @foreach($evaluator->evaluated as $evaluated)
        <tr>
          <td>{{$evaluator->name}}</td>
          <td>{{$evaluated->name}}</td>
          <td>{{$evaluated->pivot->answer1}}</td>
          <td>{{$evaluated->pivot->answer2}}</td>
          <td>{{$evaluated->pivot->answer3}}</td>
          <td>{{$evaluated->pivot->answer4}}</td>
          <td>{{$evaluated->pivot->answer5}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
