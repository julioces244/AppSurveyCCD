<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/Chart.js">

    </script>
  </head>
  <body>

    <!-- Gráficos de barras para habilidades blandas, potencial y experiencia -->
    <div class="container">

      <h1>Respuesta n°Siempre: {{$siemprehb}}</h1>


      @foreach($person as $per)

      <h3 style="color:#C03A59;">Nombres: {{$per->name}}</h3>

      <img src="../images/{{$per->image}}" alt="90px" height="150px">

      @endforeach

      <h3 style="margin-top:100px">Estadísticas Habilidades Blandas</h3>

      <canvas id="myChart" width="300" height="100">Canvas</canvas>

      <h3 style="margin-top:100px">Estadísticas Experiencia</h3>

      <canvas id="myChart2" width="300" height="100">Canvas</canvas>

      <h3 style="margin-top:100px">Estadísticas Potencial</h3>

      <canvas id="myChart3" width="300" height="100">Canvas</canvas>
    </div>

    <!-- Resultados finales gráficos de triangulo -->

    <div class="container">

          <!-- Button trigger modal -->
      <button style="margin-top: 100px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Resultado Final
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}}</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <canvas id="triangle" width="600" height="400">Canvas</canvas>
            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

    </div>





<script>
  var ctx2 = document.getElementById('triangle').getContext('2d');
  var triangle = new Chart(ctx2, {
      type: 'radar',
      data: {
          labels: ['Habilidades Blandas', 'Potencial', 'Experiencia'],
          datasets: [{
              label: 'Resultados',
              barPercentage: 0.5,
              data: [35, 19, 40],
              backgroundColor: [
                //  'rgba(255, 99, 132, 0.2)',
                //  'rgba(54, 162, 235, 0.2)',
                //  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                //  'rgba(255, 99, 132, 1)',
                //  'rgba(54, 162, 235, 1)',
                //  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options : {
                  scale: {
                      angleLines: {
                          display: false
                      },
                      ticks: {
                          suggestedMin: 50,
                          suggestedMax: 100
                      }
                  }
                }
  });
</script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre(%)', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            data: [{{$siemprehb}}, {{$frecuentementehb}}, {{$aveceshb}}, {{$nuncahb}}],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
              //  'rgba(153, 102, 255, 0.2)',
              //  'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
              //  'rgba(153, 102, 255, 1)',
              //  'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre({{$siemprehb}}%)', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            data: [{{$siemprehb}}, 13, 35, 22],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
              //  'rgba(153, 102, 255, 0.2)',
              //  'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
              //  'rgba(153, 102, 255, 1)',
              //  'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

<script>
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre({{$siemprehb}}%)', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            data: [16, 3, 20, 22],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
              //  'rgba(153, 102, 255, 0.2)',
              //  'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
              //  'rgba(153, 102, 255, 1)',
              //  'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>


  </body>
</html>
