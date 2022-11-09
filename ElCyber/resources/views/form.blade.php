@extends('plantilla')
@section('cont')
    <style>
        div.xd{
            width: 50%;
            margin-top: 120px;
            border-color: black;
            border-style: solid;
            background-color: white;
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
        <div class="text-center">
            <h3>Registro</h3>
        </div>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Debes llenar todo el registro!!!</strong>{{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
        <form method="post" action="saveR">
            @csrf
            <div>
                <label class="form-label">Usuario:</label>
                <input type="text" class="form-control" name="user" value="{{old('user')}}">
                <p lass="fv-bold text-danger">{{$errors->first('user')}}</p>
            </div>
            <div>
                <label class="form-label">No. Computadora:</label>
                <input type="number" class="form-control" name="comp" value="{{old('comp')}}">
                <p lass="fv-bold text-danger">{{$errors->first('comp')}}</p>
            </div>
            <div>
                <label class="form-label">Tiempo:</label>
                <input type="time" class="form-control" name="times" value="{{old('times')}}">
                <p lass="fv-bold text-danger">{{$errors->first('times')}}</p>
            </div>
            <div>
                <label class="form-label">Fecha:</label>
                <input type="date" class="form-control" name="dates" value="{{old('dates')}}">
                <p lass="fv-bold text-danger">{{$errors->first('dates')}}</p>
            </div>
            <div class="text-center">
                <button type="submit" name="btnMandar" class="btn btn-success mb-3">Mandar datos</button>
            </div>
        </form>
    </div>
@stop
