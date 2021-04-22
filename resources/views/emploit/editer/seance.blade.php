@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier Une Seance<strong></strong></h1>

        <div>
       
             
            {{ Form::model($data['sc'],array('route'=>array('seance.update',$data['sc']->id),'method'=>'PUT')) }}
            <p>
               <div class="form-group">
               	{!! Form::label('emploit','Entrer emploit') !!}
               	{!! Form::select('id_emploit', $data['emps'], $data['sc']->emploit->id, ['class' => 'form-control']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('id_type_seance','Entrer id_type_seance') !!}
                {!! Form::select('id_type_seance',$data['type'], $data['sc']->type->id,['class'=>'form-control']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('id_module','Entrer id_module') !!}
                {!! Form::select('id_module', $data['mod'], $data['sc']->module->id, ['class' => 'form-control']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('id_enseignent','Entrer id_enseignent') !!}
                {!! Form::select('id_enseignent', $data['ens'], $data['sc']->ens->id, ['class' => 'form-control']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('id_salle','Entrer id_salle') !!}
                {!! Form::select('id_salle', $data['sl'], $data['sc']->salle->id, ['class' => 'form-control']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('groupes','choisit des groupes') !!}
                {!! Form::select('id_groupe', $data['grp'],$data['sc']->groupes,['class'=>'form-control']) !!}
               </div>
             </p>

             <p>
               <div class="form-group">
                 
                 {!! Form::label('jours','Selectionner le jour') !!}
                 {!! Form::select('jour', $data['sc']->getJour()) !!}
                 
                </div>
             </p>

             <p>
               <div class="form-group">
                {!! Form::label('debut','Entrer heur de debut') !!}
                {!! Form::time('debut',null,['class'=>'tm']) !!}
               </div>
             </p>

             

             <p>
               <div class="form-group">
                {!! Form::label('fin','Entrer heur de fin') !!}
                {!! Form::time('fin',null,['class'=>'tm']) !!}
               </div>
             </p>

              <P>
               <div class="form-group">
               	
               	{!! Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('seance.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>
             </P>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
