@extends('layouts.app')
@section('content')
<section>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-7 mx-auto">
        <a href="/etudiant" class="btn bg-gradient-dark w-100 my-4 mb-2">Retour</a>
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Information Etudiant</h5>
            </div>
            <div class="card-body">
            {!! Form::open(['action' => ['App\Http\Controllers\EtudiantController@update', $etudiant->cne], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="mb-3">
                  {{Form::text('cne', $etudiant->cne, ['class' => 'form-control', 'placeholder' => 'CNE'])}}
                </div>
                <div class="mb-3">
                {{Form::text('ni', $etudiant->ni, ['class' => 'form-control', 'placeholder' => 'Numero d\'inscription'])}}
                </div>
                <div class="mb-3">
                {{Form::text('nomet', $etudiant->nomet, ['class' => 'form-control', 'placeholder' => 'Nom'])}}
                </div>
                <div class="mb-3">
                {{Form::text('prenomet',  $etudiant->prenomet, ['class' => 'form-control', 'placeholder' => 'Prenom'])}}
                </div>
                <div class="mb-3">
                {{Form::email('emailet',  $etudiant->emailet, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                </div>
                <div class="mb-3">
                {{Form::text('password',  $etudiant->password, ['class' => 'form-control', 'placeholder' => 'PAssword'])}}
                </div>
                <div class="text-center">
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Edit', ['class'=>'btn bg-gradient-dark w-100 my-4 mb-2'])}}
                </div>
                
                {!! Form::close() !!}
                {!!Form::open(['action' => ['App\Http\Controllers\EtudiantController@destroy', $etudiant->cne], 'method' => 'POST'])!!}
                {{Form::hidden('cne', $etudiant->cne, ['class' => 'form-control', 'placeholder' => 'CNE'])}}
                    {{Form::hidden('_method', 'DELETE')}}
                    <div class="col-12">
                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}
                {!!Form::close()!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
   