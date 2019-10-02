@extends('templateadmin.layout')

@section('titulo')
    Doctor
@endsection

@section('titulo-seccion')
    Doctor
@endsection

@section('content')
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Editar Doctor</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Doctores</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Editar Doctor</li>
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
                                    <form action="{{ route('doc.actualizar',$doc->id)}}" id="form_sample_1" class="form-horizontal" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Nombres
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="nombres" data-required="1" placeholder="Ingresar Nombres" value="{{ $doc->nombres }}" class="form-control input-height" /> </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Apellidos
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="apellidos" data-required="1" placeholder="Ingresar Apellidos" value="{{ $doc->apellidos }}" class="form-control input-height" /> </div>
                                            </div>
                    
                                               <div class="form-group row">
                                                <label class="control-label col-md-3">Fecha de Nacimiento
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <div class="input-group date form_date " data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                <input class="form-control input-height" size="16" name="fecha_nac"  placeholder="Fecha de Nacimiento" type="text" value="{{ $doc->fecha_nac }}">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            </div>                                            
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Codigo de Colegiatura
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input name="cod_colegiatura" type="text" placeholder="ingrese codigo" value="{{ $doc->cod_colegiatura }}" class="form-control input-height" /> </div>
                                            </div>
                                            <input type="hidden" id="dtp_input2" value="" />
                                                </div>
                                            </div>
                                        	 <div class="form-group row">
                                                <label class="control-label col-md-3">Direccion
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <textarea name="direccion" placeholder="Direccion" class="form-control-textarea" rows="5" value="{{ $doc->direccion }}">{{ $doc->direccion }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3">Imagen de Perfil
                                                </label>
                                                <div class="compose-editor">
                                                  <input type="file" class="default" multiple>
                                              </div>
                                            </div>
											
										</div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Guardar</button>
                                                    <button type="button" class="btn btn-default">Cancelar</button>
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
