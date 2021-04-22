@extends('base')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>emploit App</title>
    
    <link rel="stylesheet" href=" {{asset('css/table.css')}}">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
<div class="container">


<h1>Emploit de Temps {{ $data['emp']->Titre }}</h1>

    <div class="jumbotron text-center">
        
        <table class="emploit">
          <tr id="dim">
            <th>Dimanche</th>
            @foreach ($data['scs_dim'] as $sc)
            <td>
                <a href="{{ URL::to('seance/' . $sc->id .'/edit') }}"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : {{ $sc->id }} <br>-->
                    <p id="type">{{ $sc->type->type }}<br></p>  
                    <p id="mod">{{ $sc->module->titre }}<br></p>
                    {{ $sc->ens->nom}}-{{ $sc->ens->prenom}}<br>
                    <p id="sl">{{ $sc->salle->nom }}<br></p>
                    <p>groupe: 
                        @foreach($sc->groupes as $grp)
                            {{ $grp->nom }} {{ $grp->specialite->titre }}
                        @endforeach
                    </p>
                    <!--{{ $sc->jour }} <br>-->
                    <p id="temps">{{ $sc->debut }} - {{ $sc->fin }}</p>
                </div></a>
            </td>
            @endforeach
          </tr>

          <tr id="lun">
            <th>Lundi</th> 
            @foreach ($data['scs_lun'] as $sc)
            <td>
                <a href="{{ URL::to('seance/' . $sc->id .'/edit') }}"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : {{ $sc->id }} <br>-->
                        
                    <p id="type">{{ $sc->type->type }}<br></p>  
                    <p id="mod">{{ $sc->module->titre }}<br></p>
                    {{ $sc->ens->nom}}-{{ $sc->ens->prenom}}<br>
                    <p id="sl">{{ $sc->salle->nom }}<br></p>
                    <!--{{ $sc->jour }} <br>-->
                    <p id="temps">{{ $sc->debut }} - {{ $sc->fin }}</p>
                </div></a>
            </td>
            @endforeach
          </tr>

          <tr id="mar">
            <th>Mardi</th>
            @foreach ($data['scs_mar'] as $sc)
            <td>
                <a href="{{ URL::to('seance/' . $sc->id .'/edit') }}"><div class="seance" style="font-size: 12px; text-align: center">
                    <p><!--Id seance : {{ $sc->id }} <br>-->
                    <p id="type">{{ $sc->type->type }}<br></p>  
                    <p id="mod">{{ $sc->module->titre }}<br></p>
                    {{ $sc->ens->nom}}-{{ $sc->ens->prenom}}<br>
                    <p id="sl">{{ $sc->salle->nom }}<br></p>
                    <!--{{ $sc->jour }} <br>-->
                    <p id="temps">{{ $sc->debut }} - {{ $sc->fin }}</p>
                </div></a>
            </td>
            @endforeach
          </tr>

          <tr id="mer">
            <th>Mercredi</th>
            @foreach ($data['scs_mer'] as $sc)
            <td>
                <a href="{{ URL::to('seance/' . $sc->id .'/edit') }}"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : {{ $sc->id }} <br>-->
                    <p id="type">{{ $sc->type->type }}<br></p>  
                    <p id="mod">{{ $sc->module->titre }}<br></p>
                    {{ $sc->ens->nom}}-{{ $sc->ens->prenom}}<br>
                    <p id="sl">{{ $sc->salle->nom }}<br></p>
                    <!--{{ $sc->jour }} <br>-->
                    <p id="temps">{{ $sc->debut }} - {{ $sc->fin }}</p>
                </div></a>
            </td>
            @endforeach  
          </tr>

          <tr id="jeu">
            <th>Jeudi</th>
            @foreach ($data['scs_jeu'] as $sc)
            <td>
                <a href="{{ URL::to('seance/' . $sc->id .'/edit') }}"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : {{ $sc->id }} <br>-->
                    <p id="type">{{ $sc->type->type }}<br></p>  
                    <p id="mod">{{ $sc->module->titre }}<br></p>
                    {{ $sc->ens->nom}}-{{ $sc->ens->prenom}}<br>
                    <p id="sl">{{ $sc->salle->nom }}<br></p>
                    <!--{{ $sc->jour }} <br>-->
                    <p id="temps">{{ $sc->debut }} - {{ $sc->fin }}</p>
                </div></a>
            </td>
            @endforeach
          </tr>

          <tr id="ven">
            <th>Vendredi</th>
            @foreach ($data['scs_vend'] as $sc)
            <td>
                <a href="{{ URL::to('seance/' . $sc->id .'/edit') }}"><div class="seance" style="font-size: 12px; text-align: center">
                    <!--Id seance : {{ $sc->id }} <br>-->
                    <p id="type">{{ $sc->type->type }}<br></p>  
                    <p id="mod">{{ $sc->module->titre }}<br></p>
                    {{ $sc->ens->nom}}-{{ $sc->ens->prenom}}<br>
                    <p id="sl">{{ $sc->salle->nom }}<br></p>
                    <!--{{ $sc->jour }} <br>-->
                    <p id="temps">{{ $sc->debut }} - {{ $sc->fin }}</p>
                </div></p>
            </td>
            @endforeach
            
          </tr>

          <tr id="sam">
            <th>Samedi</th>
            @foreach ($data['scs_sam'] as $sc)
            <td>
                <a href="{{ URL::to('seance/' . $sc->id .'/edit') }}"><div class="seance" style="font-size: 12px; text-align: center">
                   <!--Id seance : {{ $sc->id }} <br>-->
                    <p id="type">{{ $sc->type->type }}<br></p>  
                    <p id="mod">{{ $sc->module->titre }}<br></p>
                    {{ $sc->ens->nom}}-{{ $sc->ens->prenom}}<br>
                    <p id="sl">{{ $sc->salle->nom }}<br></p>
                    <!--{{ $sc->jour }} <br>-->
                    <p id="temps">{{ $sc->debut }} - {{ $sc->fin }}</p>
                </div></p>
            </td>
            @endforeach
          </tr>
</table>
<br>


        
       <!-- <p>
           
        </p>-->
    </div>

</div>
</body>
<script>

   
    $("#dim").find("td").on({
        mouseenter: ()=>{   $("#dim").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black )","color":"black"});  },
        mouseleave: function(){  $("#dim").find("th").css({"background":"black","color":"white"}); }

    });
    $("#lun").find("td").on({
        mouseenter: ()=>{   $("#lun").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#lun").find("th").css({"background":"black","color":"white"}); }

    });
    $("#mar").find("td").on({
        mouseenter: ()=>{   $("#mar").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#mar").find("th").css({"background":"black","color":"white"}); }

    });
    $("#mer").find("td").on({
        mouseenter: ()=>{   $("#mer").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#mer").find("th").css({"background":"black","color":"white"}); }

    });
    $("#jeu").find("td").on({
        mouseenter: ()=>{   $("#jeu").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#jeu").find("th").css({"background":"black","color":"white"}); }

    });
    $("#ven").find("td").on({
        mouseenter: ()=>{   $("#ven").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#ven").find("th").css({"background":"black","color":"white"}); }

    });
    $("#sam").find("td").on({
        mouseenter: ()=>{   $("#sam").find("th").css({"background-image": "linear-gradient(to right,#2ECC71,black)","color":"black"});  },
        mouseleave: function(){  $("#sam").find("th").css({"background":"black","color":"white"}); }

    });



</script>
</html>


@endsection


