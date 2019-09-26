@extends('templateadmin.layout')
​
@section('titulo')
    Lista de Pacientes
@endsection
​
@section('titulo-seccion')
   Lista de  Pacientes
@endsection
​
@section('contenido')
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
                                <li><a class="parent-item" href="">Pacientes</a>&nbsp;<i class="fa fa-angle-right"></i>
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
										href="#tab1" data-toggle="tab">List View</a></li>
									<li class="nav-item tab-all"><a class="nav-link" href="#tab2"
										data-toggle="tab">Grid View</a></li>
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
					                                                <th> Nombre </th>
					                                                <th> Sexo</th>
					                                                <th> Direccion </th>
					                                                <th> Celualr</th>
					                                                <th> Dia Cumpleaños</th>
					                                                <th>Edad</th>
					                                                <th>Grupo Sanguineo</th>
					                                                <th>Estado Civil</th>
					                                                <th> Accion</th>
					                                            </tr>
					                                        </thead>
					                                        <tbody>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user1.jpg" alt="">
																	</td>
																	<td>Rajesh</td>
																	<td class="center">Male</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:4444565756">
																			4444565756 </a></td>
																	<td class="center">11 Jan 1983</td>
																	<td class="center">27</td>
																	<td class="center">AB++</td>
																	<td class="center">Discharge</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user10.jpg" alt="">
																	</td>
																	<td>Pooja Patel</td>
																	<td class="center">Female</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444786876">
																			444786876 </a></td>
																	<td class="center">18 Jan 1983</td>
																	<td class="center">23</td>
																	<td class="center">O+</td>
																	<td class="center">Operation</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user2.jpg" alt="">
																	</td>
																	<td>Sarah Smith</td>
																	<td class="center">Feale</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:44455546456">
																			44455546456 </a></td>
																	<td class="center">22 Jan 1987</td>
																	<td class="center">27</td>
																	<td class="center">O+</td>
																	<td class="center">Operation</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user3.jpg" alt="">
																	</td>
																	<td>John Deo</td>
																	<td class="center">Male</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td class="center">11 Jan 1983</td>
																	<td class="center">23</td>
																	<td class="center">A+</td>
																	<td class="center">Discharge</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user4.jpg" alt="">
																	</td>
																	<td>Jay Soni</td>
																	<td class="center">Male</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td class="center">22 Jan 1987</td>
																	<td class="center">27</td>
																	<td class="center">O+</td>
																	<td class="center">Check up</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user5.jpg" alt="">
																	</td>
																	<td>Jacob Ryan</td>
																	<td class="center">Male</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td class="center">22 Jan 1987</td>
																	<td class="center">23</td>
																	<td class="center">AB-</td>
																	<td class="center">Check up</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user6.jpg" alt="">
																	</td>
																	<td>Megha Trivedi</td>
																	<td class="center">Female</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td class="center">11 Jan 1983</td>
																	<td class="center">27</td>
																	<td class="center">O+</td>
																	<td class="center">Operation</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user1.jpg" alt="">
																	</td>
																	<td>Rajesh</td>
																	<td class="center">Male</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:4444565756">
																			4444565756 </a></td>
																	<td class="center">09 Jan 1985</td>
																	<td class="center">23</td>
																	<td class="center">A+</td>
																	<td class="center">Check up</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user10.jpg" alt="">
																	</td>
																	<td>Pooja Patel</td>
																	<td class="center">Female</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444786876">
																			444786876 </a></td>
																	<td class="center">22 Jan 1987</td>
																	<td class="center">29</td>
																	<td class="center">O+</td>
																	<td class="center">Operation</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user2.jpg" alt="">
																	</td>
																	<td>Sarah Smith</td>
																	<td class="center">Female</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:44455546456">
																			44455546456 </a></td>
																	<td class="center">11 Jan 1983</td>
																	<td class="center">29</td>
																	<td class="center">A-</td>
																	<td class="center">Check up</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user3.jpg" alt="">
																	</td>
																	<td>John Deo</td>
																	<td class="center">Male</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td class="center">17 Jan 1992</td>
																	<td class="center">23</td>
																	<td class="center">O+</td>
																	<td class="center">Discharge</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user4.jpg" alt="">
																	</td>
																	<td>Jay Soni</td>
																	<td class="center">Male</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td class="center">22 Jan 1987</td>
																	<td class="center">23</td>
																	<td class="center">A+</td>
																	<td class="center">Check up</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user5.jpg" alt="">
																	</td>
																	<td>Jacob Ryan</td>
																	<td class="center">Male</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td class="center">17 Jan 1992</td>
																	<td class="center">29</td>
																	<td class="center">O+</td>
																	<td class="center">Operation</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
																<tr class="odd gradeX">
																	<td class="patient-img">
																			<img src="../assets/img/user/user6.jpg" alt="">
																	</td>
																	<td>Megha Trivedi</td>
																	<td class="center">Female</td>
																	<td class="center">18,Ajay flats, satadhar, ahmedabad</td>
																	<td><a href="tel:444543564">
																			444543564 </a></td>
																	<td class="center">22 Jan 1987</td>
																	<td class="center">23</td>
																	<td class="center">AB+</td>
																	<td class="center">Operation</td>
																	<td class="center">
																		<a href="edit_patient.html" class="btn btn-tbl-edit btn-xs">
																			<i class="fa fa-pencil"></i>
																		</a>
																		<a class="btn btn-tbl-delete btn-xs">
																			<i class="fa fa-trash-o "></i>
																		</a>
																	</td>
																</tr>
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
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user10.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Pooja Patel </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                            <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user1.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Rajesh </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user2.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Sarah Smith </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user3.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">John Deo </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user4.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Jay Soni </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user5.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Jacob Ryan </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user6.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Megha Trivedi </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user1.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Rajesh </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user2.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Sarah Smith </div>
					                                            <div class="name-center"> Anaesthetics </div>
					                                        </div>
				                                                <p>456, Estern evenue, Courtage area, <br />New York</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
                    					</div>
                    					<div class="row">
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user10.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Pooja Patel </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user1.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">Rajesh </div>
					                                        </div>
				                                                <p>45, Krishna Tower, Near Bus Stop, Satellite, <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
					                                        </div>
				                                        </div>
				                                    </div>
				                                </div>
					                        </div>
					                        <div class="col-md-4">
				                                <div class="card card-box">
				                                    <div class="card-body no-padding ">
				                                    	<div class="doctor-profile">
				                                                <img src="../assets/img/user/user3.jpg" class="doctor-pic" alt=""> 
					                                        <div class="profile-usertitle">
					                                            <div class="doctor-name">John Deo </div>
					                                        </div>
				                                                <p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p> 
				                                                <div><p><i class="fa fa-phone"></i><a href="tel:(123)456-7890">  (123)456-7890</a></p> </div>
					                                        <div class="profile-userbuttons">
					                                             <a href="patient_profile.html" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
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
            </div>
            @endsection('contenido')