@extends('base')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Salles</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES SALLES</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="{{ route('salle.create') }}">Ajouter Une Nouvelle salle</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Nom</th>
	                    <th>Type Salle</th>
	                    <th>Etat</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($salles as $sl)

		        		<tr>
		        			
		        		    <td>{{ $sl->id }}</td>
		        		    <td>{{ $sl->nom }}</td>
		        		    <td>{{ $sl->type->type}}</td>
		        		    <td>{{ $sl->token}}</td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /salle/{id}/edit -->
			                <a class="edit" href="{{ URL::to('salle/' . $sl->id . '/edit') }}"></a>
			                {{ Form::open(array('url' => 'salle/' . $sl->id, 'class' => 'delete')) }}
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