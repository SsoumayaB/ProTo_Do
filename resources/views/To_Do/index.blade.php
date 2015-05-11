@extends('principale')

@section('titre')
    To Do
@stop


@section('contenu')
    <table class="table table-hover">
            <thead>
                <tr>
                    <th colspan="3"><h4>A faire :</h4></th>
                </tr>
            </thead>
            <tbody>
               @foreach($todo as $element)
                    <tr>
                        <td><span class="badge">{{$element->id}}</span></td>
                        <td>{{$element->A_faire}}</td>
                        <td>
                            <a href="/To_Do/{{$element->id}}" class="operation" title="Afficher détaille"><i class="glyphicon glyphicon-zoom-in"></i></a>
                            <a href="/To_Do/{{$element->id}}/edit" class="operation" title="Modifier"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="/To_Do/destroy/{{$element->id}}" class="operation" title="Supprimer"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table> 

@stop


@section('ajout')
    <div><a href="/To_Do/create" class="operation" title="Ajouter nouveau ">
                <i class="glyphicon glyphicon-plus"></i></a></div>
    </div>
    
@stop