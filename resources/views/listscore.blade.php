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
            <th>Pregunta6</th>
            <th>Pregunta7</th>
            <th>Pregunta8</th>
            <th>Pregunta9</th>
            <th>Pregunta10</th>
            <th>Pregunta11</th>
            <th>Pregunta12</th>
            <th>Pregunta13</th>
            <th>Pregunta14</th>
            <th>Pregunta15</th>
            <th>Pregunta16</th>
            <th>Pregunta17</th>
            <th>Pregunta18</th>
            <th>Pregunta19</th>
            <th>Pregunta20</th>
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
          <td>{{$evaluated->pivot->answer6}}</td>
          <td>{{$evaluated->pivot->answer7}}</td>
          <td>{{$evaluated->pivot->answer8}}</td>
          <td>{{$evaluated->pivot->answer9}}</td>
          <td>{{$evaluated->pivot->answer10}}</td>
          <td>{{$evaluated->pivot->answer11}}</td>
          <td>{{$evaluated->pivot->answer12}}</td>
          <td>{{$evaluated->pivot->answer13}}</td>
          <td>{{$evaluated->pivot->answer14}}</td>
          <td>{{$evaluated->pivot->answer15}}</td>
          <td>{{$evaluated->pivot->answer16}}</td>
          <td>{{$evaluated->pivot->answer17}}</td>
          <td>{{$evaluated->pivot->answer18}}</td>
          <td>{{$evaluated->pivot->answer19}}</td>
          <td>{{$evaluated->pivot->answer20}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
