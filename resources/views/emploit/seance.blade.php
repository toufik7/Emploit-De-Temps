@extends('base')
@section('content')

   <div class="container well">
		<h1 class="text-center">LISTE DES SEANCES</h1>
		<div style="height: 600px;">

			<a class="btn btn_conf" href="{{ route('seance.create') }}">Ajouter Une Nouvelle seance</a>

			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    
	                    <th>Id</th>
	                    <th>Emploit</th>
	                    
	                    <th>Type Seance</th>
	                    <th>Module</th>
	                    <th>Enseignant</th>
	                    <th>Salle</th>
	                    <th>groupes</th>
	                    <th>jour</th>
	                    <th>Heure Debut</th>
	                    <th>Heure Fin</th>
	                    <th>operation</th>
	              	</tr>
	          	</thead>
	        	<tbody>
	        		@foreach($seances as $sc)

		        		<tr>
		        			
		        		    <td>{{ $sc->id }}</td>
		        		   <td> {{ $sc->emploit->Titre}}</td>
		        		    <td>{{ $sc->type->type}}</td>
		        		    <td>{{ $sc->module->titre }}</td>
		        		    <td>{{ $sc->ens->nom}}-{{ $sc->ens->prenom}}</td>
		        		    <td>{{ $sc->salle->nom }}</td>
		        		    <td>@foreach($sc->groupes as $grp)
						        {{ $grp->nom }}
						    @endforeach</td>

		        		    <td>{{ $sc->jour}}</td>
		        		    <td>{{ $sc->debut}}</td>
		        		    <td>{{ $sc->fin}}</td>
		        		    <td class="op">
			                <!-- (uses the edit method found at GET /seance/{id}/edit -->
			                <a class="edit" href="{{ URL::to('seance/' . $sc->id . '/edit') }}"></a>
		        			<!-- (uses the delete method found at DELETE /types/{id} -->
			                {{ Form::open(array('url' => 'seance/' . $sc->id, 'class' => 'delete')) }}
		                    {{ Form::hidden('_method', 'DELETE') }}
		                    {{ Form::submit('', array('class' => 'delete_btn')) }}
		                	{{ Form::close() }}
		                </td>
		        		</tr>
		        		@endforeach
	        	</tbody>
      		</table>

      		
		</div>

@endsection