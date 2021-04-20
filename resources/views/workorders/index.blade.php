@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('workorders.create') }}">Generar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('workorders.index') }}">Reportes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=>Asignadas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('workorders.show') }}">Seguimiento</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Indicadores</a>
                        </li>
                      </ul>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#O.T. </th>
                                    <th>Fecha de creacion</th>
                                    <th>Sede</th>
                                    <th>Equipo</th>
                                    <th>Descripcion</th>
                                    <th>Prioridad</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($workorders as $work)
                                    <tr>
                                        <td>{{$work->id}}</td>
                                        <td>{{$work->created_at}}</td>
                                        <td>{{$work->campus->name}}</td>
                                        <td>{{$work->equipment->name}}</td>
                                        <td>{{$work->description}}</td>
                                        <td>
                                            @if ( $work->order=='Programada')
                                            <a class="btn btn-sm btn-outline-warning" href="{{ route('workorders.edit',$work) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                                                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                                              </svg> Programar</a>
                                            @elseif( $work->order=='Urgente')
                                            <a class="btn btn-sm btn-outline-danger" href="{{ route('workorders.edit', ['workorders'=>$work->id]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                                                <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                                                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                                              </svg> Programar</a>
                                        @endif
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{ $workorders->links()}}
@endsection
