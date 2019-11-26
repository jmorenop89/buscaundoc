<div class="modal fade" id="deta{{$key+1}}" tabindex="-1" role="dialog">
  <div class="modal-dialog ">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Detalles de Cita</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>

      <div class="modal-body container">
        <div class="row">
          <span class="col-4"><b>Paciente:</b></span>
          <span class="col-8">{{$cita->paciente->nombres." ".$cita->paciente->apellidos}}</span>
        </div>
        <br>
        <div class="row">
          <span class="col-4"><b>Fecha de la cita:</b></span>
          <span class="col-8">{{ucfirst(strftime("%A %d de %B del %Y",strtotime($cita->disponibilidad->fecha)))}}</span>
        </div>
        <br>
        <div class="row">
          <span class="col-4"><b>Horario:</b></span>
          <span class="col-8">{{strftime("%I:%M %p",strtotime($cita->disponibilidad->hora))}}</span>
        </div>

      </div>
    </div>
  </div>
</div>
