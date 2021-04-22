@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Ajouter Une Nouveau Module<strong></strong></h1>

        <div>
       
             
            {!! Form::open(array('route'=>'module.store')) !!}
               <div class="form-group">
               	{!! Form::label('titre','Entrer le titre') !!}
               	{!! Form::text('titre',null,['class'=>'form-control']) !!}
               </div>
               <div class="form-group">
                {!! Form::label('nb_heurs','Entrer le nombre des heurs') !!}
                {!! Form::text('nb_heurs',null,['class'=>'form-control']) !!}
               </div>
               <div class="form-group">
                {!! Form::label('enseignant','choisit un enseignant') !!}
                {!! Form::select('id_enseignent', $data['ens'],null, ['class'=>'slc','placeholder' => 'choisit un enseignant...']) !!}
               </div>
             
               <div class="form-group">
               	
               	{!! Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('module.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
