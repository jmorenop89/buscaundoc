@extends('templateadmin.layout')

@section('tittle')
   DASHBOARD
@endsection

@section('content')
<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">DASHBOARD</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">

                                <li class="active">DASHBOARD</li>
                            </ol>
                        </div>
                    </div>

					<!-- start widget -->
					<div class="state-overview">
						<div class="row">
					        <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">CITAS ATENDIDAS</span>
					              <span class="info-box-number">450</span>
					              <div class="progress">
					                <div class="progress-bar bg-primary" style="width: 40%"></div>
					              </div>
					              <span class="progress-description">
					                    40% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-primary"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">CITAS CANCELADAS</span>
					              <span class="info-box-number">50</span>
					              <div class="progress">
					                <div class="progress-bar bg-primary" style="width: 40%"></div>
					              </div>
					              <span class="progress-description">
					                    40% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					    </div>
                    </div>
                        <div class="row">
                        	<div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-success"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">NUMERO DE PACIENTES</span>
					              <span class="info-box-number">{{$pac}}</span>
					              <div class="progress">
					                <div class="progress-bar bg-success" style="width: 50%"></div>
					              </div>
					              <span class="progress-description">
					                    85% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
                            </div>
                            <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-success"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">NUMERO DE DOCTORES</span>
					              <span class="info-box-number">{{$doc}}</span>
					              <div class="progress">
					                <div class="progress-bar bg-success" style="width: 50%"></div>
					              </div>
					              <span class="progress-description">
					                    85% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
                        </div>


					<!-- end widget -->

                    <!-- start new patient list -->
                     <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>DOCTORES MÁS SOLICITADOS</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>No</th>
														<th>Doctor</th>
														<th>Cantidad de Citas</th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach($cont as $key=>$index)
													<tr>
														<td>{{$key}}</td>
														<td>{{$index['nombre']}}</td>

														<td class="text-center">
															<span class="label label-success">{{$index['nro']}}</span>
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
@endsection
