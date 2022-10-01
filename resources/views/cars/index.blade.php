@extends('layouts.admin')

@section('titulo-seccion')
    <span>
        Autos
    </span>
    <a href="" class="btn btn-primary btn-circle btn-modal-create" data-toggle="modal" data-target="#createMdl">
        <i class="fas fa-plus"></i>
    </a>
@endsection

@section('contenido')

    @include('cars.modals.create')

    <div class="card well">
        <div class="card-body">
            <table id="dt-users" class="table table-striped table-bordered dts" style="width:100%">
                <thead>
                <tr>
                    <th class="text-center">Modelo</th>
                    <th class="text-center">Imagen</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr class="text-center">
                        <td>{{$car->model}}</td>
                        <td><img src="" alt="car-"></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('/libs/datatables/dataTables.min.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('/libs/datatables/dataTables.min.js')}}"></script>
    <script src="{{asset('/libs/datatables/dataTables.bs4.min.js')}}"></script>
@endpush
