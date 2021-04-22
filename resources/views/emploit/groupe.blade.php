@extends('base')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Groupes</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES GROUPES</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="{{ route('groupe.create') }}">Ajouter Un Nouveau groupe</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Nom</th>
	                    <th>Specialite</th>
	                    <th>Promotion</th>
	                    <th>Nombre Etudiants</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($groupes as $grp)

		        		<tr>
		        			
		        		    <td>{{ $grp->id }}</td>
		        		    <td>{{ $grp->nom}}</td>
		        		    <td>{{ $grp->specialite->titre}}</td>
		        		    <td>{{ $grp->promotion->promo}}</td>
		        		    <td>{{ $grp->nb_etudiants}}</td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /groupe/{id}/edit -->
			                <a class="edit" href="{{ URL::to('groupe/' . $grp->id . '/edit') }}"></a>
		        			{{ Form::open(array('url' => 'groupe/' . $grp->id, 'class' => 'delete')) }}
		                    {{ Form::hidden('_method', 'DELETE') }}
		                    {{ Form::submit('', array('class' => 'delete_btn')) }}
		                	{{ Form::close() }}
		                </td>
		        		</tr>
		        		@endforeach
	        	</tbody>
      		</table>

      		
		</div>


</body>
</html>
@endsection