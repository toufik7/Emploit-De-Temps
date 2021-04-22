@extends('base')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Modules</title>
</head>
<body>

   <div class="container well">
		<h1 class="text-center">LISTE DES MODULES</h1>
		<div style="height: 600px;">

		<a class="btn btn_conf"  href="{{ route('module.create') }}">Ajouter Un Nouveau module</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Titre</th>
	                    <th>Enseignant</th>
	                    <th>Nombre D'Heurs</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($modules as $mod)

		        		<tr>
		        			
		        		    <td>{{ $mod->id }}</td>
		        		    <td>{{ $mod->titre }}</td>
		        		    <td>@foreach($mod->enseignents as $ens)
						        {{ $ens->nom }}
						    @endforeach</td>
		        		    
		        		    <td>{{ $mod->nb_heurs}}</td>
		        		    <td class="op">
		        		    	<!-- (uses the edit method found at GET /modules/{id}/edit -->
			                <a class="edit" href="{{ URL::to('module/' . $mod->id . '/edit') }}"></a>
			                {{ Form::open(array('url' => 'module/' . $mod->id, 'class' => 'delete')) }}
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