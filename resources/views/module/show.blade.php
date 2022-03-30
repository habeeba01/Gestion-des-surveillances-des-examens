
@extends('layouts.app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
        <a href="/module" class="btn bg-gradient-dark w-100 my-4 mb-2">Retour</a>
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>table des elements</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom element</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Coeff</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Coeff Ds</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Exam</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Coeff Exam</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Coeff TP</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Note Finale</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($elements) > 0)
                    @foreach($elements as $element)
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                         
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$element->nomelem}}</h6>
                          </div>
                        </div>
                      </td>
                      @if(isset($notes[$element->id]))
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$notes[$element->id]->noteds}}</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$notes[$element->id]->coeffds}}</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$notes[$element->id]->noteexam}}</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$notes[$element->id]->coeffexam}}</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$notes[$element->id]->notetp}}</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$notes[$element->id]->coefftp}}</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">{{$notes[$element->id]->notefinale}}</p>
                      </td>
                      @else
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">0</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">0</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">0</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">0</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">0</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">0</p>
                      </td>
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">0</p>
                      </td>
                      @endif
                      <td>
                        <p class="text-xs text-center font-weight-bold mb-0">0</p>
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

