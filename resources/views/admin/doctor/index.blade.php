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
                                <div class="page-title">Lista de Doctores</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Lista Doctores</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                               <ul class="nav nav-pills nav-pills-rose">
									<li class="nav-item tab-all"><a class="nav-link active show"
										href="#tab1" data-toggle="tab">Vista de Lista</a></li>
									<li class="nav-item tab-all"><a class="nav-link" href="#tab2"
										data-toggle="tab">Vista en Cuadricula</a></li>
								</ul>
                                <div class="tab-content">
                                    <div class="tab-pane active fontawesome-demo" id="tab1">
                                        <div class="row">
					                        <div class="col-md-12">
					                            <div class="card  card-box">
					                                <div class="card-head">
					                                    <header></header>
					                                    <div class="tools">
					                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
						                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
						                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
					                                    </div>
					                                </div>
					                                <div class="card-body ">
					                                  <div class="table-scrollable">
					                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
					                                        <thead>
					                                            <tr>
					                                            	<th></th>
					                                                <th> Nombres </th>
					                                                <th> Apellidos </th>
					                                                <th> Fecha de Nacimiento </th>
					                                                <th> Codigo de Colegiatura</th>
					                                                <th> Direccion </th>
					                                                <th> Email </th>
					                                                <th> Accion </th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
																@foreach ($doc as $docs)
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/doc/doc1.jpg" alt="">
																	</td>
																	<td>{{ $docs->nombres}}</td>
																	<td class="left">{{ $docs->apellidos}}</td>
																	<td class="left">{{ $docs->fecha_nac}}</td>
																	<td class="left">{{ $docs->cod_colegiatura}}</td>
																	<td> {{ $docs->direccion}}</td>
																	<td> {{ $docs->user->email }}</td>
																	<td class="center">
																		<a href="{{ route('doc.editar', $docs->id)}}" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a href="{{ route('doc.eliminar', $docs->id)}}" class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																@endforeach
															</tbody>
					                                    </table>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="row">
										@foreach ($doc as $docs)
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/doc/doc10.jpg" class="doctor-pic" alt="">
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">{{ $docs->nombres}}  {{ $docs->apellidos}}</div>
					                                            <div class="name-center"> {{ $docs->fecha_nac}}</div>
															</div>
															<div>{{ $docs->user->email }}</div>
				                                                <p>{{ $docs->cod_colegiatura}} <br />{{ $docs->direccion}}</p>
				                                                
					                                        <div class="profile-userbuttons">
					                                            <a href="{{route('doc.index')}}" class="btn btn-circle deepPink-bgcolor btn-sm">Leer Mas</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                	@endforeach
                    					</div>
                    			
                    					</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->


@endsection
