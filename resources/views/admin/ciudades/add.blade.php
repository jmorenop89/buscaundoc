@extends('templateadmin.layout')

@section('tittle')
	Lista de Ciudades
@endsection

@section('content')
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Agregar Ciudad</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Ciudades</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Agregar Ciudad</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Ciudad</header>
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
                                    <form action="{{ route('ciud.agregar')}}" id="form_sample_1" class="form-horizontal" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-body">
                                        <div class="form-group row">
                                                <label class="control-label col-md-3">Nueva Ciudad
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-5">
                                                    <input type="text" name="nombre" data-required="1" placeholder="Ingresar Ciudad" class="form-control input-height" /> </div>
                                            </div>
                                            
											<div class="form-actions">
                                            <div class="row">
                                                <div class="offset-md-3 col-md-9">
                                                    <button type="submit" class="btn btn-info">Enviar</button>
                                                    <a class="btn btn-default" href="{{ route('ciud.index') }}">Cancelar</a>
                                                    {{-- <button type="button" class="btn btn-default">Cancelar</button> --}}
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
@endsection
