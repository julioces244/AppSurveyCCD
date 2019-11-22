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

      <h1></h1>


      @foreach($person as $per)

      <h3 style="color:#C03A59;">Nombres: {{$per->name}}</h3>

      <img src="../images/{{$per->image}}" alt="90px" height="150px">

      @endforeach

      <h3 style="margin-top:100px">Estadísticas Habilidades Blandas</h3>

      <canvas id="myChart" width="300" height="100">Canvas</canvas>

      <button style="margin-top: 100px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
        Orientation resultados
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Orientation a resultados</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb1">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <button style="margin-top: 100px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
        Trabajo en equipo
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Trabajo en equipo</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb2">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <button style="margin-top: 100px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3">
        Flexibilidad
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Flexibilidad</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb3">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>


      <button style="margin-top: 0px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter4">
        Responsabilidad
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Responsabilidad</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb4">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <button style="margin-top: 0px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter5">
        Visión de negocio
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Visión de negocio</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb5">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <button style="margin-top: 0px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter6">
        Planificación y Organización
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Planificación y Organización del trabajo</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb6">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <button style="margin-top: 0px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter7">
        Gestión de uno
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Gestión de uno mismo</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb7">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <button style="margin-top: 0px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter8">
        Comunicación
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Comunicación</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb8">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>


      <button style="margin-top: 0px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter9">
        Desarrollo de personas
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Desarrollo de personas</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb9">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

      <button style="margin-top: 0px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter10">
        Equilibrio emocional y relaciones
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              @foreach($person as $per)
              <h5 class="modal-title" id="exampleModalLongTitle">{{$per->name}} - Equilibrio emocional y relaciones laborales</h5>
              @endforeach
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <canvas id="hb10">Canvas</canvas>

            </div>
            <div class="modal-footer">

              <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>







      <h3 style="margin-top:100px">Estadísticas Experiencia</h3>

      <canvas id="myChart2" width="300" height="100">Canvas</canvas>

      <h3 style="margin-top:100px">Estadísticas Potencial</h3>

      <canvas id="myChart3" width="300" height="100">Canvas</canvas>

      <h3 style="margin-top:100px">Resultado total</h3>

      <canvas id="myChart4" width="300" height="100">Canvas</canvas>
    </div>

    <!-- Resultados finales gráficos de triangulo -->

    <div class="container">

          <!-- Button trigger modal -->
      <button style="margin-top: 100px; margin-bottom: 50px; width:300px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Resultado Final
      </button>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
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
                @if($finalscore >= 75)
                <h5 style="color:green;">Aprobado - Puntaje: {{$finalscore}}</h5>
                @else
                <h5 style="color:red;">Desaprobado - Puntaje: {{$finalscore}}</h5>
                @endif
                <canvas id="myChart5">Canvas</canvas>

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
        labels: ['Sí, Siempre(%)', 'Frecuentemente(%)', 'A veces(%)', 'No, Nunca(%)'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            data: [{{$percentagehb1}}, {{$percentagehb2}}, {{$percentagehb3}}, {{$percentagehb4}}],
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
        },
        animation: {
            duration: 4000
        }
    }
});
</script>


<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            data: [{{$percentageexp1}}, {{$percentageexp2}}, {{$percentageexp3}}, {{$percentageexp4}}],
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
        },
        animation: {
            duration: 4000
        }
    }
});
</script>

<script>
var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            data: [{{$percentagepot1}}, {{$percentagepot2}}, {{$percentagepot3}}, {{$percentagepot4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('myChart4').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            data: [{{$finalgraph1}}, {{$finalgraph2}}, {{$finalgraph3}}, {{$finalgraph4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>


<script>
var ctx = document.getElementById('myChart5').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Total'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$finalscore}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>


<script>
var ctx = document.getElementById('hb1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentageresultados1}},{{$percentageresultados2}},{{$percentageresultados3}},{{$percentageresultados4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('hb2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentagework1}},{{$percentagework2}},{{$percentagework3}},{{$percentagework4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('hb3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentageflex1}},{{$percentageflex2}},{{$percentageflex3}},{{$percentageflex4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>


<script>
var ctx = document.getElementById('hb4').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentagerespon1}},{{$percentagerespon2}},{{$percentagerespon3}},{{$percentagerespon4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('hb5').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentagevis1}},{{$percentagevis2}},{{$percentagevis3}},{{$percentagevis4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('hb6').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentageplani1}},{{$percentageplani2}},{{$percentageplani3}},{{$percentageplani4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('hb7').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentagemana1}},{{$percentagemana2}},{{$percentagemana3}},{{$percentagemana4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('hb8').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentagecomu1}},{{$percentagecomu2}},{{$percentagecomu3}},{{$percentagecomu4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('hb9').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentagepeople1}},{{$percentagepeople2}},{{$percentagepeople3}},{{$percentagepeople4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>

<script>
var ctx = document.getElementById('hb10').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sí, Siempre', 'Frecuentemente', 'A veces', 'No, Nunca'],
        datasets: [{
            label: 'Resultados',
            barPercentage: 0.5,
            maxBarThickness: 100,
            data: [{{$percentagepresion1}},{{$percentagepresion2}},{{$percentagepresion3}},{{$percentagepresion4}}],
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
    },
    animation: {
        duration: 4000
    }
});
</script>



  </body>
</html>
