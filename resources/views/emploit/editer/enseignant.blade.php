@extends('base')
@section('content') 
<div class="container">

		<h1 class="text-center">Modifier Enseigant<strong></strong></h1>

        <div>
       
             
              {{ Form::model($data['ens'],array('route'=>array('enseignent.update',$data['ens']->id),'method'=>'PUT')) }}
               <div class="form-group">
               	{!! Form::label('nom','Entrer le nom') !!}
               	{!! Form::text('nom',null,['class'=>'form-control']) !!}
               </div>
               <div class="form-group">
                {!! Form::label('prenom','Entrer le prenom') !!}
                {!! Form::text('prenom',null,['class'=>'form-control']) !!}
               </div>
               <div class="form-group">
                {!! Form::label('id_emploit','Entrer emploit associé') !!}
                {!! Form::select('id_emploit', $data['emp'], $data['ens']->emploits, ['class' => 'form-control']) !!}
               </div>

               <div class="form-group">
               	
               	{!! Form::button('Update',['type'=>'submit','class'=>'btn btn_sucess']) !!}
                {{ link_to_route('enseignent.index','Annuler',null,['class'=>'btn btn_cnl']) }}
               </div>

            {!! Form::close() !!}

        </div>

	
</div>

@endsection
