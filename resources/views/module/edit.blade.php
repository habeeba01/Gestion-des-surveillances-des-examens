    <h1>Edit etudiant</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\EtudiantController@update', $etudiant->cne], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('cne', 'CIN')}}
            {{Form::text('cne', $etudiant->cne, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('ni', 'Numero d\'inscription ')}}
            {{Form::text('ni', $etudiant->ni, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('nomet', 'Nom')}}
            {{Form::text('nomet', $etudiant->nomet, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('prenomet', 'Prenom')}}
            {{Form::text('prenomet', $etudiant->prenomet, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('emailet', 'Email')}}
            {{Form::email('emailet', $etudiant->emailet, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::text('password', $etudiant->password, ['class' => 'form-control', 'placeholder' => ''])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}