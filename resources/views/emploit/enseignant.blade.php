@extends('base')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Enseignant</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES ENSEIGNANTS</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="{{ route('enseignent.create') }}">Ajouter Un(e) Nouveau(elle) enseignant(e)</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Nom</th>
	                    <th>Prenom</th>
	                    <th>Emploit</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($enseignents as $ens)

		        		<tr>
		        			
		        		    <td>{{ $ens->id }}</td>
		        		    <td>{{ $ens->nom }}</td>
		        		    <td>{{ $ens->prenom}}</td>
		        		    <td>{{ $ens->emploit['Titre']}}</td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /enseignent/{id}/edit -->
			                <a class="edit" href="{{ URL::to('enseignent/' . $ens->id . '/edit') }}"></a>
			                {{ Form::open(array('url' => 'enseignent/' . $ens->id, 'class' => 'delete')) }}
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