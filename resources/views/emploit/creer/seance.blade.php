@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Ajouter Une Seance<strong></strong></h1>

        <div>
       
             
            {!! Form::open(array('route'=>'seance.store')) !!}
            <p>
               <div class="form-group">
                
               	{!! Form::label('id_emploit',' id_emploit') !!}
               	{!! Form::select('id_emploit', $data['emps'],null, ['placeholder' => 'choisit un emploit...']) !!}
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
                
                {!! Form::label('id_module',' id_module') !!}
                {!! Form::select('id_module', $data['mod'],null, ['placeholder' => 'choisit un module...']) !!}
               </div>
             </p>

             <P>
               <div class="form-group">
                
                {!! Form::label('id_enseignent',' id_enseignent') !!}
                {!! Form::select('id_enseignent', $data['ens'],null, ['placeholder' => 'choisit un enseignant...']) !!}
               </div>
             </P>

             <p>
               <div class="form-group">
                
                {!! Form::label('id_salle',' id_salle') !!}
                {!! Form::select('id_salle', $data['sl'],null, ['placeholder' => 'choisit une salle...']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('groupes','choisit des groupes') !!}
                {!! Form::select('id_groupe', $data['grp'],null, ['placeholder' => 'choisit des groupes...']) !!}
               </div>
             </p>

               <p>
               <div class="form-group">
                 {!! Form::label('jours','Selectionner le jour') !!}
                 {!! Form::select('jour', array('Dimanche' => 'Dimanche', 'Lundi' => 'Lundi','Mardi' => 'Mardi', 'Mercredi' => 'Mercredi','Jeudi' => 'Jeudi', 'Vendredi' => 'Vendredi','Samedi' => 'Samedi'), null, ['placeholder' => 'choisit un jour...']) !!}
                </div>
               </p>
               
               <p>
               <div class="form-group">
                {!! Form::label('debut','Entrer heur de debut') !!}
                {!! Form::time('debut',null,['class'=>'tm']) !!}
               </div>
               <p>
               
               <p>
               <div class="form-group">
                {!! Form::label('fin','Entrer heur de fin') !!}
                {!! Form::time('fin',null,['class'=>'tm']) !!}
               </div>
              </p>


              <p>
               <div class="form-group">
               	
               	{!! Form::button('Ajouter',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('seance.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>
             </p>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
