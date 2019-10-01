@extends('templateadmin.layout')

@section('tittle')
	Lista de Pacientes
@endsection

@section('content')
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Lista de Pacientes</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Lista de Pacientes</li>
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
																	<th> Email </th>
					                                                <th> Fecha de Nacimiento</th>
					                                                <th> Celular</th>
					                                                <th> Accion</th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
																@foreach ($pac as $pacs)
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="" alt="">
																	</td>
																	<td>{{ $pacs->nombres }}</td>
																	<td>{{ $pacs->apellidos}}</td>
																	<td>{{ $pacs->user->email}}</td>
																	<td>{{ $pacs->fecha_nac}}</td>
																	<td>{{ $pacs->celular}}</td>
																	<td>
																		<a href="{{ route('pac.edit', $pacs->id)}}" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
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
											@foreach ($pac as $pacs)
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">{{ $pacs->nombres}}  {{ $pacs->apellidos}}</div>
															</div>
															<div>{{ $pacs->user->email}}</div>
				                                                <p><br />{{ $pacs->fecha_nac}}</p> 
				                                                <div><p><i class="fa fa-phone"></i>{{ $pacs->celular}}</p> </div>
					                                        <div class="profile-userbuttons">
					                                            <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
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
@endsection