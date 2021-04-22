@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Ajouter Une Salle<strong></strong></h1>

        <div>
       
             
            {!! Form::open(array('route'=>'salle.store')) !!}
            <p>
               <div class="form-group">
               	{!! Form::label('nom','Entrer nom de la salle') !!}
               	{!! Form::text('nom',null,['class'=>'form-control']) !!}
               </div>
             </p>

              <p>
               <div class="form-group">
                
                {!! Form::label('id_type_seance','id_type_seance') !!}
                {!! Form::select('id_type_seance', $data['type'],null, ['placeholder' => 'choisit un type de seance...']) !!}
               </div>
             </p>


             <p>
               <div class="form-group">
                {!! Form::label('token','Entrer Etat Salle') !!}
                {!! Form::select('token',array('libre' => 'libre', 'occupe' => 'occupée'),'libre',['class'=>'form-control']) !!}
               </div>
             </p>

               <div class="form-group">
               	
               	{!! Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('salle.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
