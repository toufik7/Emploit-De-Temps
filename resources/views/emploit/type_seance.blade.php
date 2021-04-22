@extends('base')
@section('content')



   <div class="container well">
		<h1 class="text-center">LISTE DES Types DE SEANCES</h1>

		
		<a class="btn btn_conf" href="{{ route('types.create') }}">Ajouter Un Nouveau Type de seance</a>

		<div style="height: 600px;">
			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Type</th>
	                    <th>Operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($types as $t)

		        		<tr>
		        			
		        		    <td>{{ $t->id }}</td>
		        		    <td>{{ $t->type }}</td>
		        			
 
		     
		        			<td class="op">
			                <!-- (uses the edit method found at GET /types/{id}/edit -->
			                <a class="edit" href="{{ URL::to('types/' . $t->id . '/edit') }}"></a>
			                <!-- (uses the delete method found at DELETE /types/{id} -->
			                {{ Form::open(array('url' => 'types/' . $t->id, 'class' => 'delete')) }}
		                    {{ Form::hidden('_method', 'DELETE') }}
		                    {{ Form::button('', ['type' => 'submit','class' => 'delete_btn','id' => 'dbtn']) }}
		                	{{ Form::close() }}

						    
						    
						   </td>
		        		</tr>
		        		@endforeach
	        	</tbody>
      		</table>

      		
		</div>
		


@endsection