@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
        <a href="/etudiant/create" class="btn bg-gradient-dark w-100 my-4 mb-2">Cree Un Etudiant</a>
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>table des etudiants</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Etudiant</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Idantifiants</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($etudiants) > 0)
                    @foreach($etudiants as $etudiant)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$etudiant->nomet}} {{$etudiant->prenomet}}</h6>
                            <p class="text-xs text-secondary mb-0">{{$etudiant->emailet}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$etudiant->cne}}</p>
                        <p class="text-xs text-center text-secondary mb-0">{{$etudiant->ni}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{$etudiant->password}}</span>
                      </td>
                      <td class="align-middle">
                        <a href="/etudiant/{{$etudiant->cne}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Afficher
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    @else
                        <tr>pas d'étudiant dans cette branche</tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <h1>patients</h1>///patients/create -->
    
@endsection