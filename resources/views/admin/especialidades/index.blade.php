@extends('templateadmin.layout')

@section('tittle')
	Lista de Especialidades
@endsection

@section('content')
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Lista de Especialidades</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dash.index')}}">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Lista de Especialidades</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable-line">
                                <ul class="nav nav-pills nav-pills-rose">
									<li class="nav-item tab-all"><a class="nav-link active show"
										href="#tab1" data-toggle="tab">Vista de Lista</a></li>
									
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
					                                                <th> Especialidades </th>
					                                                <th> Accion</th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
																@foreach ($espec as $especs)
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="" alt="">
																	</td>
																	<td>{{ $especs->nombre }}</td>
																	
																	<td>
																		<a href="{{ route('espec.editar', $especs->id)}}" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection