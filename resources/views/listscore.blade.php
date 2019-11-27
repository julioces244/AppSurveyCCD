<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <!-- Compiled and minified CSS -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!-- Compiled and minified JavaScript -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>
  <body>


    <table class="table">
      <thead class="thead-dark">
        <tr>
            <th scope="col">ID(Resultados)</th>
            <th scope="col">Evaluador</th>
            <th scope="col">Evaluado</th>
            <th scope="col">Pregunta1</th>
            <th scope="col">Pregunta2</th>
            <th scope="col">Pregunta3</th>
            <th scope="col">Pregunta4</th>
            <th scope="col">Pregunta5</th>
            <th scope="col">Pregunta6</th>
            <th scope="col">Pregunta7</th>
            <th scope="col">Pregunta8</th>
            <th scope="col">Pregunta9</th>
            <th scope="col">Pregunta10</th>
            <th scope="col">Pregunta11</th>
            <th scope="col">Pregunta12</th>
            <th scope="col">Pregunta13</th>
            <th scope="col">Pregunta14</th>
            <th scope="col">Pregunta15</th>
            <th scope="col">Pregunta16</th>
            <th scope="col">Pregunta17</th>
            <th scope="col">Pregunta18</th>
            <th scope="col">Pregunta19</th>
            <th scope="col">Pregunta20</th>
            <th scope="col">Pregunta21</th>
            <th scope="col">Pregunta22</th>
            <th scope="col">Pregunta23</th>
            <th scope="col">Pregunta24</th>
            <th scope="col">Pregunta25</th>
            <th scope="col">Pregunta26</th>
            <th scope="col">Pregunta27</th>
            <th scope="col">Pregunta28</th>
            <th scope="col">Pregunta29</th>
            <th scope="col">Pregunta30</th>
            <th scope="col">Pregunta31</th>
            <th scope="col">Pregunta32</th>
            <th scope="col">Pregunta33</th>
            <th scope="col">Pregunta34</th>
            <th scope="col">Pregunta35</th>
            <th scope="col">Pregunta36</th>
            <th scope="col">Pregunta37</th>
            <th scope="col">Pregunta38</th>
            <th scope="col">Pregunta39</th>
            <th scope="col">Pregunta40</th>
            <th scope="col">Pregunta41</th>
            <th scope="col">Pregunta42</th>
            <th scope="col">Pregunta43</th>
            <th scope="col">Pregunta44</th>
            <th scope="col">Pregunta45</th>
            <th scope="col">Pregunta46</th>
            <th scope="col">Pregunta47</th>
            <th scope="col">Pregunta48</th>
            <th scope="col">Pregunta49</th>
            <th scope="col">Pregunta50</th>
            <th scope="col">Pregunta51</th>
            <th scope="col">Pregunta52</th>
            <th scope="col">Pregunta53</th>
            <th scope="col">Pregunta54</th>
            <th scope="col">Pregunta55</th>
            <th scope="col">Pregunta56</th>
            <th scope="col">Pregunta57</th>
            <th scope="col">Pregunta58</th>
        </tr>
      </thead>

      <tbody>
        @foreach($evaluator->evaluated as $evaluated)
        <tr>
          <td>{{$evaluated->pivot->id}}</td>
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
          <td>{{$evaluated->pivot->answer21}}</td>
          <td>{{$evaluated->pivot->answer22}}</td>
          <td>{{$evaluated->pivot->answer23}}</td>
          <td>{{$evaluated->pivot->answer24}}</td>
          <td>{{$evaluated->pivot->answer25}}</td>
          <td>{{$evaluated->pivot->answer26}}</td>
          <td>{{$evaluated->pivot->answer27}}</td>
          <td>{{$evaluated->pivot->answer28}}</td>
          <td>{{$evaluated->pivot->answer29}}</td>
          <td>{{$evaluated->pivot->answer30}}</td>
          <td>{{$evaluated->pivot->answer31}}</td>
          <td>{{$evaluated->pivot->answer32}}</td>
          <td>{{$evaluated->pivot->answer33}}</td>
          <td>{{$evaluated->pivot->answer34}}</td>
          <td>{{$evaluated->pivot->answer35}}</td>
          <td>{{$evaluated->pivot->answer36}}</td>
          <td>{{$evaluated->pivot->answer37}}</td>
          <td>{{$evaluated->pivot->answer38}}</td>
          <td>{{$evaluated->pivot->answer39}}</td>
          <td>{{$evaluated->pivot->answer40}}</td>
          <td>{{$evaluated->pivot->answer41}}</td>
          <td>{{$evaluated->pivot->answer42}}</td>
          <td>{{$evaluated->pivot->answer43}}</td>
          <td>{{$evaluated->pivot->answer44}}</td>
          <td>{{$evaluated->pivot->answer45}}</td>
          <td>{{$evaluated->pivot->answer46}}</td>
          <td>{{$evaluated->pivot->answer47}}</td>
          <td>{{$evaluated->pivot->answer48}}</td>
          <td>{{$evaluated->pivot->answer49}}</td>
          <td>{{$evaluated->pivot->answer50}}</td>
          <td>{{$evaluated->pivot->answer51}}</td>
          <td>{{$evaluated->pivot->answer52}}</td>
          <td>{{$evaluated->pivot->answer53}}</td>
          <td>{{$evaluated->pivot->answer54}}</td>
          <td>{{$evaluated->pivot->answer55}}</td>
          <td>{{$evaluated->pivot->answer56}}</td>
          <td>{{$evaluated->pivot->answer57}}</td>
          <td>{{$evaluated->pivot->answer58}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
