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
                    <h1>Editar empleado</h1>
                </div>
             </div>
             <div class="row justify-content-center mt-4">
                 <div class="col-lg-5">
                   <form action="{{route('update', $empleado)}}" method="post">
                         @csrf
                         {{ method_field('PATCH') }}
                         <div class="row">
                               <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="identificacion" id="identificacion" type="text" placeholder="name@example.com" value="{{old('identificacion',$empleado->identificacion)}}" />
                                        @error('identificacion')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        <label for="nombres">Identificacion</label>
                                    </div>
                              </div>
                               <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="nombres" id="nombres" type="text" placeholder="name@example.com" value="{{old('nombres',$empleado->nombres)}}"/>
                                        @error('nombres')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror                                        
                                        <label for="nombres">Nombres</label>
                                    </div>
                              </div>                              
                         </div>
                         <div class="row">
                               <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="salario" id="salario" type="text" placeholder="name@example.com" value="{{old('salario',$empleado->salario)}}"/>
                                        @error('salario')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror                                        
                                        <label for="nombres">Salario</label>
                                    </div>
                              </div>                            
                         </div> 
                         <div class="d-grid gap-2">
                            <button class="btn btn-outline-primary" type="submit">Guardar</button>
                        </div>  
                  </form>

                 </div>
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