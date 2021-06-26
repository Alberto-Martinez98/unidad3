@extends("layouts.plantilla")

@section("contenido")

 <div class="form-group">
      <label>Beneficiarios con productos no pagados:</label>
      <select onchange="mostrarUsuario(this.value)">
            <option  value="">Seleccione un cliente</option>
            @foreach ($clientes as $cliente)
            <option  value="{{$cliente->id}}">{{$cliente->name}}</option>
            @endforeach
      </select>
  </div>  
<br>
<hr style="color: #0056b2;" />
<table class="table" style="width:100%" id="tabla">
  <thead>
     
        <tr>
          <th scope="col">ClAVE DEL PRODUCTO</th>
          <th scope="col">CANTIDAD</th>
          <th scope="col">MONTO</th>
          <th scope="col">&nbsp;</th>
        </tr>
    </thead>

    <tbody id="tbody">
      

    </tbody>

    <div id="info"></div>
</table>
<br>
<form action="#" method="get">
  @csrf
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Nota: </label>
    <input type="text" name="nota" class="form-control" id="exampleFormControlTextarea1"></input>
  </div>
  <button type="button" class="btn btn-primary">Enviar</button>
</form>


@section("script")


<script type="text/javascript">

  var resultado = document.getElementById("tbody");
    function mostrarUsuario(usuarioSeleccionado){

      if (usuarioSeleccionado === "") {
        resultado.innerHTML = "";
      }
      else{

     $.ajax({
            url: '/lista',
            method: 'post',
            data:{
                cliente:usuarioSeleccionado,
                _token:$('input[name="_token"').val()
            }
          }).done(function(resp){
              var arreglo = JSON.parse(resp);
              for(var x=0; x<arreglo.length;x++){
                  var todo='<tr><td>'+arreglo[x].producto_id+'</td>';
                  todo+='<td>'+arreglo[x].cantidad+'</td>';
                  todo+='<td>'+arreglo[x].monto+'</td>';
                  todo+='<td></td></tr>';
                  resultado.innerHTML = todo;
              }
          });
      }
  }




</script>



{{--

<script>
  $(document).ready(function(){
    $('#cliente').blur(function(){
      var  tbody = '';
            $.ajax({
            url: '/lista',
            method: 'post',
            data:{
                cliente:1,
                _token:$('input[name="_token"').val()
            }
          }).done(function(resp){
              var arreglo = JSON.parse(resp);
              for(var x=0; x<arreglo.length;x++){
                  var todo='<tr><td>'+arreglo[x].producto_id+'</td>';
                  todo+='<td>'+arreglo[x].cantidad+'</td>';
                  todo+='<td>'+arreglo[x].monto+'</td>';
                  todo+='<td></td></tr>';
                  $('#tbody').append(todo);
              }
          });
     });
  });
</script>--}}
@endsection
@endsection