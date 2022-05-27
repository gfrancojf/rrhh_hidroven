<div class="form-group row">


<div class="col-sm-4 mb-3">
                                <input name="dni"                                                         
                                type="text" class="form-control" placeholder="Cedula *"style="text-transform:uppercase" required >
                                                                                 
                            </div>

                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input name="name" 
                                type="text" class="form-control"  placeholder="Nombre(s) *" required style="text-transform:uppercase">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input name="first_lastname" type="text" class="form-control"
                                    placeholder="Apellido Paterno *" required style="text-transform:uppercase">
                            </div>
                            <div class="col-sm-4">
                                <input name="second_lastname" type="text" class="form-control"
                                    placeholder="Apellido Materno *"   value="{{ old('second_lastname') }}"required style="text-transform:uppercase">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input name="email" type="email" 
                               
                                
                                class="form-control" placeholder="Correo Electrónico *"
                                    required style="text-transform:uppercase">
                            </div>
                            <div class="col-sm-4 mb-3">
                                <input name="phone" type="tel"
                         
                                
                                pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required
 class="form-control" placeholder="Ejemplo 02125555555" style="text-transform:uppercase">
                            </div>
                            <div class="col-sm-4">
                                <input name="cell_phone" 
                               
                                type="tel" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" 
                                placeholder="Ejemplo 04125555555" class="form-control"  style="text-transform:uppercase">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select name="department_id" class="form-control"
                              
                                required="" style="text-transform:uppercase">
                                    <option value="" selected>Selecciona un departamento *</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select name="company_id" class="form-control" required="" style="text-transform:uppercase"
                                                  >
                                    
                                
                                <option value="" selected>Selecciona una empresa *</option>
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label class="col-sm-12 col-form-label">Fecha de Nacimiento *</label>
                                <input name="birthday"
                               
                                
                                type="date" class="form-control"
                                    placeholder="Fecha de Nacimiento *" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label class="col-sm-12 col-form-label" style="text-transform:uppercase">Fecha de Ingreso *</label>
                                <input name="date_of_admission" type="date" class="form-control"

                           
                                    placeholder="Fecha de Ingreso  *" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label class="col-sm-12 col-form-label" style="text-transform:uppercase">Fecha de Egreso *</label>
                                <input name="date_of_egress" type="date" class="form-control"
                                    placeholder="Fecha de Egreso *">
                            </div>
                            <div class="col-sm-6">
                               <label class="col-sm-12 col-form-label" style="text-transform:uppercase">Género</label>
                                 <div class="form-group row">
                                 <div class="col-sm-6">
                                <select name="gener" class="form-control"
                              
                                required="" style="text-transform:uppercase">
                                    <option value="0" selected="" disabled="">Seleccione su Genero*</option>
                                    <option value="M" > MUJER</option>
                                    <option value="H"> HOMBRE</option>
                                </select>
                            </div>
                                   
                           


                                </div> 

                             



                            </div>
                        </div>