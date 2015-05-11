@extends('principale')

@section('titre')
    Ajout
@stop

@section('contenu')
    {!! Form::open(['route'=> 'To_Do.store','method'=>'post','class'=>'form-horizontal']) !!}
    
      <div class="form-group">
        <label for="inputAfaire" class="col-sm-2 control-label">A faire : </label>
        <div class="col-sm-10">
            <input type="text" name="texte" class="form-control" id="inputAfaire"                               placeholder="Exemple : Dormir ...">
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputDate" class="col-sm-2 control-label">Date : </label>
        <div class="col-sm-10">
          <input type="date" name="date" class="form-control" id="inputDate" placeholder="A faire avant le : 2015-05-10">
        </div>
      </div>
      <div class="form-group">
        <label for="inputTime" class="col-sm-2 control-label">Heure : </label>
        <div class="col-sm-10">
          <input type="date" name="heure" class="form-control" id="inputTime" placeholder="A faire avant le : 10:00">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Ajouter</button>
        </div>
      </div>
    {!! Form::close() !!}
@stop