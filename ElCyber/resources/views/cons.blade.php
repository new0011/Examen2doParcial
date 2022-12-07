@extends('plantilla')
@section('cont')

<style>
    div.xd{
        width: 50%;
        margin-top: 120px;
    }
</style>

@if(session()->has('confirmForm'))
{!! "<script> Swal.fire('Listo', 'Enviando informacion al server', 'succes') </script>" !!}
<div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
    <strong>{{session('confirmForm')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="container xd">
    <h1 class="text-center">Consulta de tiempos</h1>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Usuario</th>
            <th scope="col">No. Computadora</th>
            <th scope="col">Tiempo</th>
            <th scope="col">Fecha Registro</th>
            <th scope="col">Fecha actualizacion</th>
            <th scope="col">Acciones</th>           
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($cyber as $c)
            <th scope="row">{{$c->ID}}</th>
            <td>{{$c->Usuario}}</td>
            <td>{{$c->NumeroCompu}}</td>
            <td>{{$c->Tiempo}}</td>
            <td>{{$c->created_at}}</td>
            <td>{{$c->updated_at}}</td>
            <td>
                <a href="{{route('upF.edit', $c->ID)}}" class="btn btn-success">Editar</a>
                <form action="{{route('cons.destroy', $c->ID)}}" method="post">
                  {!! method_field('DELETE') !!}
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">Eliminar</button>   
                </form> 
            </td>
            @endforeach
        </tr>
        </tbody>
    </table>

</div>
@stop
