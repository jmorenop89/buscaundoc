@extends('template.layout')

@section('tittle')
        BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.
@endsection

@section('css')
    <link href="/assets/online/css/date_picker.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/online/assets/profile-doctor.css">
    <link rel="stylesheet" href="/assets/plugins/croppic/croppic.css">
@endsection

@section('content')
<section>

    <div id="breadcrumb">
        <div class="position-relative">
            <div class="ml-5">
            <ul>
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li>Perfil</li>
            </ul>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block alert-dismissible fade show" role="alert">
                {{ $message }}
            <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        @endif
        @if($message = Session::get('error'))
            <div class="alert alert-danger alert-block alert-dismissible fade show" role="alert">
                {{ $message }}
            <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        @endif
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="container margin_60">
        <div class="row">

            <aside class="col-xl-3 col-lg-4" id=""> <!--id="sidebar"-->
                <div class="box_profile">
                    <figure>
                        <div class="croppic" style="width: 250px;height: 250px;margin:0px"
                            id="cropImgProfile"
                            data-model="{{ $model->id }}"
                            data-id="{{ $model->id }}"
                            data-image="{{ $model->imagen?true:false }}"
                            data-width="500"
                            data-placement="bottom">
                            @if($model->imagen)
                                <img src="/{{ config('app.dir_image').$model->imagen }}" class="croppedImg">
                            @endif
                        </div>
                    </figure>

                    <small>{{$model-> especialidad->nombre}}</small>
                    <h1>Dr. {{ $model->nombres }} {{ $model->apellidos }}</h1>
                    <span>{{$model-> ciudad->nombre}}</span>


                    <hr>
                    <div class="nav text-justify nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link" href="{{route('profile')}}">Agregar Horarios</a>
                      <a class="nav-link active" href="{{route('doctor.hor')}}">Ver Horarios</a>
                      <a class="nav-link" href="{{route('doctor.cit')}}">Ver Citas</a>
                      <a class="nav-link" href="{{route('doctor.conf')}}">Editar Perfil</a>
                    </div>
                </div>
            </aside>
            <!-- /asdide -->

            <div class="col-xl-9 col-lg-8">

                <div class="tabs_styled_2">
                    <!--/nav-tabs -->
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane active" id="eliminar-ho" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="main_title_4">
                                    <h3><i class="icon_circle-slelected"></i>Selecciona fecha para eliminar horarios
                                    </h3>
                                </div>
                                      <hr>
                                <div class="row add_bottom_45">
                                    <div class="col-lg-12">
                                        <div class="form-group ">
                                            @csrf
                                            <table class="table letra table-responsive" id="horarios">
                                                    @include('online.profile.doctor.agregar-horario',array($fil,$model))
                                                    @for($i=0; $i < $fil->count(); $i++)
                                                    <tr class="celda table-responsive vertical" id="d-d">
                                                        <th class="celda">
                                                            {{ $fil[$i]->fecha }}
                                                            <button type="button" class="btn close btn-info btn-lg" data-toggle="modal" data-target="#horario{{$i}}" id="mas">+</button>
                                                        </th>
                                                        @foreach($fil[$i]->hora as $h)
                                                        <td class="celda">
                                                            {{ $h['hora'] }}
                                                            <a href="{{ route('dispo.e',$h['id'])}}"  class="btn close" aria-label="Close" id="equis">
                                                              &times;
                                                            </a>
                                                        </td>
                                                        @endforeach
                                                    </tr>
                                                    @endfor
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                   <hr>
                                <!-- <div class="text-center"><a href="booking-page.html" class="btn_1 medium">Eliminar</a></div> -->
                            </div>

                        </div>
                    <!-- /tab-content -->
                </div>
                <!-- /tabs_styled -->
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</section>
<!-- /main -->
@endsection

@section('js')
    <script src="/assets/plugins/croppic/croppic.min.js"></script>
    <script src="/assets/online/scripts/croppic.js"></script>
    <script src="/assets/online/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        $(document).ready(function() {
            function save(){
                var body_request={
                    "_token" : "CQT7iWnk5SlVdNHg0bvKFpGS4AKWnRilFECdvioY",
                    "fecha" : "2019-10-14",
                    "hora" : "09:01"
                }
                $.ajax({
                    type: "POST",
                    url: "/profile/horas/1",
                    data: body_request,
                    success: function(response) {
                        console.log(response.responseText);
                        console.log("si se agrega");
                    },
                    error: function(response){
                        console.log("no se pudo");
                    }
                })
            }
        });
    </script>
    <script>
        var app = new Vue({
          el: '#agregar-ho',
          data: {
            fec:'',
            horas:[
                {hora:"" ,fecha:"", name:""}
            ],
            dessa:["2019/10/03"],
          }
        })
        var fecha = @json($fil);
        var fedes = [];
        // console.log(fecha[0].fecha);
         for (var i = 0; i < fecha.length; i++) {
            console.log(fecha[i].fecha);
            app.dessa.push(fecha[i].fecha);
         }
        console.log(app.dessa);
    </script>
    <script>
        $(document).ready(function(){

            var curr = new Date; // get current date
            var first = curr.getDate() - curr.getDay()+1; // First day is the day of the month - the day of the week
            var last = first + 6; // last day is the first day + 6

            var firstday = new Date(curr.setDate(first));
            var lastday = new Date(curr.setDate(last));


            var dd = $('.calendar').datepicker({
                todayHighlight: true,
                daysOfWeekDisabled: [0],
                weekStart: 1,
                format: "yyyy-mm-dd",
                datesDisabled: app.dessa,
                startDate:firstday,
                endDate:lastday,
            }).on('changeDate', function(e) {
                console.log(e.date)
                    desactivar = e.format("yyyy/mm/dd")
                    app.fec = (e.format('yyyy-mm-dd'));
                // `e` here contains the extra attributes
                    var fecha = $('#fecha')
                    fecha.value= app.fec
                    console.log(fecha)
                    console.log(app.dessa)
            });
        });
    </script>
    <script>
        var hi = $('#hora_i')
        var hf = $('#hora_f')
        var inter = $('#inter')
        var botn = $('#crear')
        var resul = $('#horas')
        $(document).ready(function(){
            $('#horas li label').hide()
            $('#enviar_ho').hide()
        })
        botn.on('click',()=>{
            if (app.fec.length == 0) {
                console.log("falta seleccionar una fecha")
            }
            else{
                if (hi.val() == 0 || hf.val()== 0 || inter.val() == 0) {
                    console.log("falta crear sus intervalos")
                }
                else{
                    $('#horas li').remove()
                    $('#horas li label').show()
                    $('#enviar_ho').show()
                      inMi = parseInt(hi.val().substr(3,2));
                      inHo = parseInt(hi.val().substr(0,2));

                      intMi = parseInt(inter.val().substr(3,2))
                      intHo = parseInt(inter.val().substr(0,2))

                      finMi = parseInt(hf.val().substr(3,2));
                      finHo = parseInt(hf.val().substr(0,2));

                    var i= 1
                  do {
                    if (inMi>=60) {
                    inMi = inMi - 60
                    inHo = inHo + 1
                    inMi = inMi.toString()
                    if (inMi.length<2) {
                        inMi = "0"+inMi
                    }
                    if (inHo === finHo) {
                        if (inMi>=finMi){
                            console.log("mal")
                        }
                        else{
                            hresu = inHo+":"+inMi
                            horp = inHo+"."+inMi
                            console.log(inHo+":"+inMi)
                            // resul.append("<li><input type='radio' id='radio"+i+"' name='radio_time[]' value='"+horp+"'form='hor_doc'/><label for='radio"+i+"'>"+hora+"</label></li>")
                            app.horas.push({
                                hora:hresu ,fecha:app.fec, name:"radio"+i
                            })
                        }
                    }
                    else{
                        hresu = inHo+":"+inMi
                        horp = inHo+"."+inMi
                        console.log(inHo+":"+inMi)
                        app.horas.push({
                                hora:hresu ,fecha:app.fec, name:"radio"+i
                            })
                    }
                    }
                    else{
                        inMi = inMi.toString()
                    if (inMi.length<2) {
                        inMi = "0"+inMi
                    }
                    if (inHo === finHo) {
                        if (inMi>=finMi){
                            console.log("mal")
                        }
                        else{
                        hresu = inHo+":"+inMi
                        horp = inHo+"."+inMi
                        console.log(inHo+":"+inMi)
                        app.horas.push({
                                hora:hresu ,fecha:app.fec, name:"radio"+i
                            })
                        }
                    }
                    else{
                        hresu = inHo+":"+inMi
                        horp = inHo+"."+inMi
                        console.log(inHo+":"+inMi)
                        app.horas.push({
                                hora:hresu ,fecha:app.fec, name:"radio"+i
                            })
                    }
                    }
                    inMi = parseInt(inMi)
                    inMi = inMi + intMi
                    i = i +1

                    }while (inHo < finHo);
                }
            }
        })
        fn_croppic('cropImgProfile', "{{ route('profile.image.store') }}", "{{ route('profile.image.delete') }}");
    </script>
@endsection
