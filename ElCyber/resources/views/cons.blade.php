@extends('plantilla')
@section('cont')

<style>
    div.xd{
        width: 50%;
        margin-top: 120px;
    }
</style>

<div class="container xd">
    <h1 class="text-center">Consulta de tiempos</h1>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">No. Computadora</th>
            <th scope="col">Tiempo</th>
            <th scope="col">Fecha</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Angel</th>
            <td>16</td>
            <td>15:00</td>
            <td>25/10/22</td>
        </tr>
        <tr>
            <th scope="row">Lola</th>
            <td>15</td>
            <td>12:00</td>
            <td>26/10/22</td>
        </tr>
        </tbody>
    </table>

</div>
@stop
