@extends('layouts.app')

@section('title')
 Empleados
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
@endsection
@section('contenido')
            <div class="row">
                <div class="col-lg-12 mt-4 text-center">
                    <h1>Crear empleados</h1>
                </div>
             </div>
             <div class="row justify-content-center mt-4">
                 <div class="col-lg-5">
                    <form action="{{route('store')}}" method="post"> 
                    @csrf
                          @include('form')
                    </form>
                 </div>
             </div>
                 <div class="col-lg-12">
                     <table id="empleados" class="table table-striped shadow-lg" style="width:100%">
                            <thead>
                                 <tr>
                                   <th >Id usuario</th>
                                   <th >Identificacion</th>
                                   <th >Tipo de empleado</th>
                                   <th >Nombres</th>
                                   <th >Salario</th>
                                   <th></th>
                                   <th></th>
                               </tr>
                          </thead>
                          <tbody>
                            @foreach($empleados as $empleado)
                            <tr>
                                <td>{{$empleado->id}}</td>
                                <td>{{$empleado->identificacion}}</td>
                                <td>{{$empleado->tipo_empleado}}</td>
                                <td>{{$empleado->nombres}}</td>
                                <td>{{$empleado->salario}}</td>
                                <td>
                                    <form action="{{route('delete', $empleado)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="submit" class="btn btn-danger" onclick="return confirm('¿Deseas borrar el usuario?')"value="Borrar" required> 

                                    </form>

                                </td>
                                <td> <a href="{{route('edit',$empleado)}}" class="btn btn-success">Editar</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                     </table>
                 </div>

   @section('js')  
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#empleados').DataTable();
        });
    </script>  
   @endsection   
@endsection
