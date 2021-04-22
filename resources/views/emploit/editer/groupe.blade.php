@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier Un Groupe<strong></strong></h1>

        <div>
       
             
             {{ Form::model($data['grp'],array('route'=>array('groupe.update',$data['grp']->id),'method'=>'PUT')) }}
       
               <p>
               <div class="form-group">
               	{!! Form::label('Nom','Entrer le nom du groupe') !!}
               	{!! Form::text('nom',null,['class'=>'form-control']) !!}
               </div>
               </p>

               <p>
               <div class="form-group">
                {!! Form::label('id_specialite','Entrer id_specialite') !!}
                {!! Form::select('id_promotion', $data['pm'], $data['grp']->promotion->id, ['class' => 'form-control']) !!}
               </div>
               </p>

               <p>
               <div class="form-group">
                {!! Form::label('id_promotion','Entrer id_promotion') !!}
                {!! Form::select('id_specialite', $data['sp'], $data['grp']->specialite->id, ['class' => 'form-control']) !!}
               </div>
               </p>

               <p>
               <div class="form-group">
                {!! Form::label('nb_etudiants','Entrer nb_etudiants') !!}
                {!! Form::text('nb_etudiants',null,['class'=>'form-control']) !!}
               </div>
               </p>

               <p>
               <div class="form-group">
               	{!! Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                  {{ link_to_route('groupe.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>
               </p>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
