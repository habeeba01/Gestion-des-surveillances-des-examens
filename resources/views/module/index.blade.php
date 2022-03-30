@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>table des modules</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom Module</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre Elements</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($modules) > 0)
                    @foreach($modules as $module)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$module->nommod}}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$module->nbelem}}</p>
                      <td class="align-middle">
                        <a href="/module/{{$module->id}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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


