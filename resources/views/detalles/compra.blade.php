@extends("layouts.plantilla")

@section('contenido')
<form action="">
<h4 class="mb-3">Pago:</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Tarjeta de Credito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Tarjeta de Debito</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Nombre </label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Nombre completo como se muestra en la Tarjeta</small>
            <div class="invalid-feedback">
              Nombre es requerido
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Numero de Tarjeta</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Numero de Tarjeta requerido
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Vencimiento</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Fecha de Vencimiento es requerido
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Codigo de seguridad es requerido
            </div>
          </div>
        </div>
      <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Pagar compra</button>
      </form>
      <hr style="color: #0056b2;" />
      <h5 class="card-title">Subir comprobante de Pago OXXO:</h5><br>
      <td>

  <div class="mb-3">
    <label for="" class="form-label">Imagen: </label>
    <input id="codigo" name="imagen" type="file" class="form-control" tabindex="1">    
  </div>
  <a href="#" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </div>
    
  </div>
  


  @endsection
