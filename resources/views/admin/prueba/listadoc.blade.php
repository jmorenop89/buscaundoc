@extends('templateadmin.layout')

@section('tittle')
   Lista Doctores del Sistema
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
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">INICIO</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
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
					        <!-- /.col -->
					        <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-warning"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">CITAS CANCELADAS</span>
					              <span class="info-box-number">55</span>
					              <div class="progress">
					                <div class="progress-bar bg-warning" style="width: 40%"></div>
					              </div>
					              <span class="progress-description">
					                    40% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->


					        <!-- /.col -->
					      </div>

                        <div class="row">

                        <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-success"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">NUMERO DE PACIENTES</span>
					              <span class="info-box-number">120</span>
					              <div class="progress">
					                <div class="progress-bar bg-success" style="width: 85%"></div>
					              </div>
					              <span class="progress-description">
					                    85% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>
					        <!-- /.col -->
					        <div class="col-12 col-sm-12 col-md-6">
					          <div class="info-box bg-white">
					            <span class="info-box-icon push-bottom bg-info"><i class="material-icons">person</i></span>
					            <div class="info-box-content">
					              <span class="info-box-text">NUMERO DE DOCTORES</span>
					              <span class="info-box-number">44</span><span></span>
					              <div class="progress">
					                <div class="progress-bar bg-info" style="width: 50%"></div>
					              </div>
					              <span class="progress-description">
					                    50% de aumento en 28 dias.
					                  </span>
					            </div>
					            <!-- /.info-box-content -->
					          </div>
					          <!-- /.info-box -->
					        </div>

                        </div>

						</div>
					<!-- end widget -->

                    <!-- start new patient list -->
                     <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
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
													<tr>
														<td>01</td>
														<td>Dr.Rajesh</td>

														<td>
															<span class="label label-sm label-success">70</span>
														</td>

													</tr>
													<tr>
														<td>02</td>
														<td>Dr.Sarah Smith</td>

														<td>
															<span class="label label-sm label-success"> 65 </span>
														</td>

													</tr>
													<tr>
														<td>03</td>
														<td>Dr.John Deo</td>

														<td>
															<span class="label label-sm label-success">60</span>
														</td>

													</tr>
													<tr>
														<td>04</td>
														<td>Dr.Jay Soni </td>

														<td>
															<span class="label label-sm label-success ">55</span>
														</td>

													</tr>
													<tr>
														<td>05</td>
														<td>Dr.Jacob Ryan</td>

														<td>
															<span class="label label-sm label-success ">50</span>
														</td>

													</tr>
													<tr>
														<td>06</td>
														<td>Dr.Megha Trivedi </td>

														<td>
															<span class="label label-sm label-warning">45</span>
														</td>

													</tr>


                                                    <tr>
														<td>07</td>
														<td>Dr. Mark</td>

														<td>
															<span class="label label-sm label-warning">40</span>
														</td>

													</tr>

                                                    <tr>
														<td>08</td>
														<td>Dr.Felix</td>

														<td>
															<span class="label label-sm label-warning">35</span>
														</td>

													</tr>

                                                    <tr>
														<td>09</td>
														<td>Dr.Beryl</td>

														<td>
															<span class="label label-sm label-warning">30</span>
														</td>

													</tr>

                                                    <tr>
														<td>10</td>
														<td>Dr.Jayesh</td>

														<td>
															<span class="label label-sm label-warning">20</span>
														</td>

													</tr>

												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
                        </div>





                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                             <div class="card card-box">
                                 <div class="card-head">
                                     <header>LISTA DE DOCTORES</header>
                                 </div>
                                 <div class="card-body ">
                                 <div class="row">
                                        <ul id="homeDoctorList" class="docListWindow small-slimscroll-style">
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Disponible</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc4.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jay Soni</a> - (BHMS)
                                                    </div>
													<div>
														<span class="clsOnLeave">De vacaciones</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc5.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc6.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Disponible</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                        </ul>
                                        <div class="text-center full-width">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                 </div>
                             </div>
						</div>
                    </div>
                    <!-- end new patient list -->


                     <!-- start new patient list -->
                     <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>LISTA DE PACIENTES</header>
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
														<th>Nombre</th>
														<th>Doctor Asignado</th>
														<th>Enfermedad</th>

													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Jens Brincker</td>
														<td>Dr.Kenny Josh</td>
														<td>
															<span class="label label-sm label-success">Influenza</span>
														</td>

													</tr>
													<tr>
														<td>2</td>
														<td>Mark Hay</td>
														<td>Dr. Mark</td>
														<td>
															<span class="label label-sm label-warning"> colera </span>
														</td>

													</tr>
													<tr>
														<td>4</td>
														<td>David Perry</td>
														<td>Dr.Felix </td>
														<td>
															<span class="label label-sm label-danger">ictericia</span>
														</td>

													</tr>
													<tr>
														<td>5</td>
														<td>Anthony Davie</td>
														<td>Dr.Beryl</td>
														<td>
															<span class="label label-sm label-success ">Leptospirosis</span>
														</td>

													</tr>
													<tr>
														<td>7</td>
														<td>Mark Hay</td>
														<td>Dr.Jayesh</td>
														<td>
															<span class="label label-sm label-success ">tifoidea</span>
														</td>

													</tr>
													<tr>
														<td>8</td>
														<td>Sue Woodger</td>
														<td>Dr.Sharma</td>
														<td>
															<span class="label label-sm label-danger">Malaria</span>
														</td>

													</tr>
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
                        </div>





                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                             <div class="card card-box">
                                 <div class="card-head">
                                     <header>LISTA DE DOCTORES</header>
                                 </div>
                                 <div class="card-body ">
                                 <div class="row">
                                        <ul id="homeDoctorList" class="docListWindow small-slimscroll-style">
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Disponible</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc4.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jay Soni</a> - (BHMS)
                                                    </div>
													<div>
														<span class="clsOnLeave">De vacaciones</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc5.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Jacob Ryan</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc6.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Megha Trivedi</a> - (MBBS,MS)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc1.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Rajesh</a> -(MBBS,MD)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">Disponible</span>
                                                        </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc2.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.Sarah Smith</a> -(MBBS,MD)
                                                    </div>
													<div>
														<span class="clsAvailable">Disponible</span>
													</div>
												</div>
                                            </li>
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="../assets/img/doc/doc3.jpg" alt="" width="40" height="40">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="#">Dr.John Deo</a> - (BDS,MDS)
                                                    </div>
													<div>
														<span class="clsNotAvailable">No Disponible</span>
													</div>
												</div>
                                            </li>
                                        </ul>
                                        <div class="text-center full-width">
                                            <a href="#">View all</a>
                                        </div>
                                    </div>
                                 </div>
                             </div>
						</div>
                    </div>
                    <!-- end new patient list -->




                </div>
            </div>

@endsection('content')