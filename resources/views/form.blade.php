
                         <div class="row">
                               <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="identificacion" id="identificacion" type="text" placeholder="name@example.com" value="{{old('identificacion', )}}" />
                                        @error('identificacion')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        <label for="nombres">Identificacion</label>
                                    </div>
                              </div>
                               <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="nombres" id="nombres" type="text" placeholder="name@example.com" value="{{old('nombres')}}"/>
                                        @error('nombres')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror                                        
                                        <label for="nombres">Nombres</label>
                                    </div>
                              </div>                              
                         </div>
                        <select class="form-select mb-3" id="tipo_empleado" name="tipo_empleado" aria-label="Default select example">
                                <option selected>Tipo</option>
                                <option>Empleado de planta</option>
                                <option>Empleado de contrastista</option>
                          </select>
                         <div class="row">
                               <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="salario" id="salario" type="text" placeholder="name@example.com" value="{{old('salario')}}"/>
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
