@extends('principale')

@section('titre')
    Affichage 
@stop

@section('contenu')
    <h3>{{$todo->A_faire}} : </h3>
    <p>A faire avant le 
       <span class="dt">{{$todo->Date}}</span> 
        <span class="dt">{{$todo->Heure}}</span>
    </p>
    
@stop


@section('ajout')
    <div class="retour"><a href="/To_Do" class="operation" title="Retour ">
                <i class="glyphicon glyphicon-chevron-left"></i></a></div>
    </div>
    
@stop