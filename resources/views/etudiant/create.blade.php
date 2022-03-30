@extends('layouts.app')
@section('content')
<section>
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register with</h5>
            </div>
            <div class="card-body">
              {!! Form::open(['action' => 'App\Http\Controllers\EtudiantController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data','role'=>"form text-left"]) !!}
                <div class="mb-3">
                  {{Form::text('cne', '', ['class' => 'form-control', 'placeholder' => 'CNE'])}}
                </div>
                <div class="mb-3">
                {{Form::text('ni', '', ['class' => 'form-control', 'placeholder' => 'Numero d\'inscription'])}}
                </div>
                <div class="mb-3">
                {{Form::text('nomet', '', ['class' => 'form-control', 'placeholder' => 'Nom'])}}
                </div>
                <div class="mb-3">
                {{Form::text('prenomet', '', ['class' => 'form-control', 'placeholder' => 'Prenom'])}}
                </div>
                <div class="mb-3">
                {{Form::email('emailet', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                </div>
                <div class="mb-3">
                {{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'PAssword'])}}
                </div>
                <div class="text-center">
                  {{Form::submit('Valider', ['class'=>'btn bg-gradient-dark w-100 my-4 mb-2'])}}
                </div>
                {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
   
    
