@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Ajouter Specialite<strong></strong></h1>

        <div>
       
             
            {!! Form::open(array('route'=>'specialites.store')) !!}
               <p>
               	{!! Form::label('titre','Entrer le Titre de la Specialite') !!}
               	{!! Form::text('titre',null,['class'=>'form-control']) !!}
               </p>

               <p>
                {!! Form::label('nb_etudiants','Entrer le nombre des etudiants') !!}
                {!! Form::text('nb_etudiants',null,['class'=>'form-control']) !!}
              </p>
              

              <p>
               	{!! Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('specialites.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </p>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
