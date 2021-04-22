@extends('base')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Promotion</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES PROMOTIONS</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="{{ route('promotions.create') }}">Ajouter Une Nouvelle promotion</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Titre Promotion</th>
	                    <th>Nombre Etudiants</th>
	                    <th>Operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($promotions as $p)

		        		<tr>
		        			
		        		    <td>{{ $p->id }}</td>
		        		    <td>{{ $p->promo }}</td>
		        		    <td>{{ $p->nb_etudiants}}</td>
		        		    <td class="op">
		        		    <!-- (uses the edit method found at GET /promotions/{id}/edit -->
			                <a class="edit" href="{{ URL::to('promotions/' . $p->id . '/edit') }}"></a>
			                
		        			{{ Form::open(array('url' => 'promotions/' . $p->id, 'class' => 'delete')) }}
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