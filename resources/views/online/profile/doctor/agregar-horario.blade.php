@for($i=0; $i < $fil->count(); $i++)
<div class="modal hide fade in"" id="horario{{$i}}" tabindex="-1" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Añade un nuevo horario a esta fecha</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('horarios',$model->id)}}" method="post" id="nue {{$i}}">
            @csrf
        <input type="text" hidden value="{{ $fil[$i]->fecha }}" name="fecha" id="fec-solo{{$i}}">
        <input type="time" class="form-control" name="hora" id="hora-solo{{$i}}">
        </form>
      </div>
      <div class="modal-footer">
        <input  type="submit" onclick="save()" class="btn btn-primary" value="Añadir">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>
@endfor
