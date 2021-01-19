<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar clientes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar clientes</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
          Agregar cliente
        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Teléfono</th>
              <th>Dirección</th>
              <th>Fecha nacimiento</th>
              <th>Compras</th>
              <th>Última compra</th>
              <th>Ingreso al sistema</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td>Arturo Tamayo</td>
              <td>arturotg1607@hormail.com</td>
              <td>5534338800</td>
              <td>Calle 2 Manzana 2 Lote 3</td>
              <td>1995-16-07</td>
              <td>35</td>
              <td>2019-12-11 12:05:32</td>
              <td>2019-12-11 12:05:32</td>

              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>
          </tbody>
        
        </table>

      </div>

    </div>

  </section>

</div>

<!--=====================
MODAL AGREGAR CATEGORIA
======================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">
  
    <div class="modal-content">

      <form role="form" method="POST">

        <!--===================
          CABEZA DEL MODAL 
        =====================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Cliente</h4>
        
        </div>

        <!--==============
          CUERPO DEL MODAL 
        ==============-->
        
        <div class="modal-body">
        
          <div class="box-body">

            <!--ENTRADA PARA EL NOMBRE -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar Nombre" required>

              </div>

            </div>

            <!--ENTRADA PARA EL EMAIL -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control input-lg" name="nuevoEmial" placeholder="Ingresar email" required>

              </div>

            </div>

            <!--ENTRADA PARA EL TELEFONO -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar telefono" data-inputmask="'mask':'(99) 9999-9999'" data-mask required>

              </div>

            </div>

            <!--ENTRADA PARA LA DIRECCION -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar Direccion" required>

              </div>

            </div>

            <!--ENTRADA PARA LA FECHA DE NACIMIENTO -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias':'dd/mm/yyyy'" data-mask required>

              </div>

            </div>


          </div>
        
        </div>
        
        <!--================
          PIE DEL MODAL 
        ==================-->
        <div class="modal-footer">
          
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Cliente</button>
      
        </div>

      </form>

    </div>
  
  </div>

</div>
