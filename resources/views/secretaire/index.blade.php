
    <!-- <h1>patients</h1>///patients/create -->
    <a href="/etudiant/create">create etudiant</a>
    @if(count($etudiants) > 0)
        @foreach($etudiants as $etudiant)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/etudiant/{{$etudiant->cin}}">{{$etudiant->nomet}} {{$etudiant->prenomet}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No patients found</p>
    @endif
