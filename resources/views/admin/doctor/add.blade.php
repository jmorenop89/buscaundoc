@extends('layout.index')

@section('titulo')
    Doctor
@endsection

@section('titulo-seccion')
    Doctor
@endsection

@section('contenido')


			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Agregar Doctor</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Doctores</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Agregar Doctor</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Informacion Basica</header>
                                     <button id = "panel-button"
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right"
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">more_vert</i>
				                        </button>
				                        <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
				                           data-mdl-for = "panel-button">
				                           <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
				                           <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
				                        </ul>
                                </div>
                                <div class="card-body" id="bar-parent">
                                    <form action="#" id="form_sample_1" class="form-horizontal">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Nombres
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="firstname" data-required="1" placeholder="Ingresar Nombres" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Apellidos
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="lastname" data-required="1" placeholder="Ingresar Apellidos" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Correo Electronico
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                        <input type="text" class="form-control input-height" name="email" placeholder="Correo Electronico"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Contraseña
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="password" name="pswd" data-required="1" placeholder="Ingresar Contraseña" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Confirmar Contraseña
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="cnfmPwd" data-required="1" placeholder="Confirmar Contraseña" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Designacion
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="designation" data-required="1" placeholder="Ingresar tu Designacion" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Departamentos
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="department">
                                                        <option value="">Seleccionar...</option>
                                                        <option value="Category 1">Neurologia</option>
                                                        <option value="Category 2">Ortopedia</option>
                                                        <option value="Category 3">Ginecologia</option>
                                                        <option value="Category 3">Microbiologia</option>
                                                        <option value="Category 3">Radioterapia</option>
                                                        <option value="Category 3">Farmacia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Genero
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <select class="form-control input-height" name="gender">
                                                        <option value="">Seleccionar...</option>
                                                        <option value="Category 1">Masculino</option>
                                                        <option value="Category 2">Femenino</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Numero Celular
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="number" type="text" placeholder="Numero Celular" class="form-control input-height" /> </div>
                                            </div>
                                               <div class="form-group row">
                                                <label class="control-label col-md-3">Fecha de Nacimiento
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                <input class="form-control input-height" size="16" placeholder="Fecha de Nacimiento" type="text" value="">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            </div>
                                            <input type="hidden" id="dtp_input2" value="" />
                                                </div>
                                            </div>
                                        	 <div class="form-group row">
                                                <label class="control-label col-md-3">Direccion
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="address" placeholder="Direccion" class="form-control-textarea" rows="5" ></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Imagen de Perfil
                                                </label>
                                                <div class="compose-editor">
                                                  <input type="file" class="default" multiple>
                                              </div>
                                            </div>
											<div class="form-group row">
												<label class="control-label col-md-3">Educacion
												</label>
												<div class="col-md-5">
													<textarea name="address" class="form-control-textarea" placeholder="Educacion" rows="5"></textarea>
												</div>
											</div>
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Enviar</button>
                                                    <button type="button" class="btn btn-default">Cancelar</button>
                                                </div>
                                            	</div>
                                       		 </div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->

            @endsection
