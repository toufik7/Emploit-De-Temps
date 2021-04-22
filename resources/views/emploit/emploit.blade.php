@extends('base')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Emploit de Temps</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES EMPLOITS DE TEMPS</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="{{ route('emploit.create') }}">Ajouter Un Nouveau emploit de temps</a>



			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Titre</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($emploits as $emp)

		        		<tr>
		        			
		        		    <td>{{ $emp->id }}</td>
		        		    <td><a class="title" href="{{ URL::to('emploit/' . $emp->id) }}">{{ $emp->Titre }}</a></td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /emploit/{id}/edit -->
			                <a class="edit" href="{{ URL::to('emploit/' . $emp->id . '/edit') }}"></a>
			                <!-- (uses the delete method found at DELETE /types/{id} -->
			                {{ Form::open(array('url' => 'emploit/' . $emp->id, 'class' => 'delete')) }}
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
<script type="text/javascript">
	var btn = document.getElementByClassName("delete_btn");
	btn
</script>
@endsection