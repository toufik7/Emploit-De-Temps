@extends('base')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Specialite</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES SPECIALITES</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="{{ route('specialites.create') }}">Ajouter Une Nouvelle specialite</a>
			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Titre Specialite</th>
	                    <th>Nombre Etudiants</th>
	                    <th>Operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($specialites as $s)

		        		<tr>
		        			
		        		    <td>{{ $s->id }}</td>
		        		    <td>{{ $s->titre }}</td>
		        		    <td>{{ $s->nb_etudiants}}</td>
		        		    <td class="op">
		        		    	<!-- (uses the edit method found at GET /specialites/{id}/edit -->
			                <a class="edit" href="{{ URL::to('specialites/' . $s->id . '/edit') }}"></a>
			                {{ Form::open(array('url' => 'specialites/' . $s->id, 'class' => 'delete')) }}
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
