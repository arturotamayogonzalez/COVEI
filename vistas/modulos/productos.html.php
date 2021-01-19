<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          Agregar producto
        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablas">

          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Imagen</th>
              <th>Código</th>
              <th>Descripción</th>
              <th>Categoría</th>
              <th>Cantidad</th>
              <th>Precio de compra</th>
              <th>Precio de venta</th>
              <th>Agregado</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>0001</td>
              <td>Lorem ipsum dolor sit</td>
              <td>Lorem ipsum dolor</td>
              <td>20</td>
              <td>5.00</td>
              <td>10.00</td>
              <td>2019-12-11 12:05:32</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>0001</td>
              <td>Lorem ipsum dolor sit</td>
              <td>Lorem ipsum dolor</td>
              <td>20</td>
              <td>5.00</td>
              <td>10.00</td>
              <td>2019-12-11 12:05:32</td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                  <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                </div>
              </td>
            </tr>

            <tr>
              <td>1</td>
              <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
              <td>0001</td>
              <td>Lorem ipsum dolor sit </td>
              <td>Lorem ipsum dolor</td>
              <td>20</td>
              <td>5.00</td>
              <td>10.00</td>
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
MODAL AGREGAR PRODUCTO
======================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">
  
    <div class="modal-content">

      <form role="form" method="POST" enctype="multipart/form-data">

        <!--===================
          CABEZA DEL MODAL 
        =====================-->
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Producto</h4>
        
        </div>

        <!--==============
          CUERPO DEL MODAL 
        ==============-->
        
        <div class="modal-body">
        
          <div class="box-body">

            <!--ENTRADA PARA EL CODIGO -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar codigo" required>

              </div>

            </div>

            <!--ENTRADA PARA LA DESCRIPCIÓN -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>

              </div>

            </div>

            <!--ENTRADA SELECCIONAR CATEGORIA -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                <select class="form-control input-lg" name="nuevaCategoria">
                  <option value="">Seleccionar categoria</option>
                  <option value="Maquina">Maquina</option>
                  <option value="Cilindros">Cilindros</option>
                  <option value="Computadoras">Compputadoras</option>
                </select>

              </div>

            </div>

            <!--ENTRADA PARA EL STOCK -->
            <div class="form-group">
            
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Cantidad" required>

              </div>

            </div>

              <!--ENTRADA PARA EL PRECIO COMPRA -->
            <div class="form-group row">
            
              <div class="col-xs-6">
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0" placeholder="Precio de compra" required>

                </div>
              </div>

              <!--ENTRADA PARA EL PRECIO DE VENTA -->
              <div class="col-xs-6">

                <div class="input-group">
                
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                  <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" placeholder="Precio de venta" required>

                </div>

                <br>

                  <!-- CHECKBOX PARA PORCENTAJE -->
                <div class="col-xs-6">

                  <div class="form-group">
                    
                    <label>
                      <input type="checkbox" class="minimal procentaje" checked>
                      Utilizar pocentaje
                    </label>

                  </div>

                </div>
                <!-- ENTRADA PARA PORCENTAJE -->

                <div class="col-xs-6" style="padding:0">

                  <div class="input-group">
                  
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>
                
                </div>

              </div>

            </div>

            <!--ENTRADA SELECCIONAR SU PERFIL -->
            <div class="form-group">

              <div class="panel">SUBIR IMAGEN</div>
              <input type="file" id="nuevaImagen" name="nuevaImagen">
              <p class="help-block">Peso máximo 2MB</p>
              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">

            </div>


          </div>
        
        </div>
        
        <!--================
          PIE DEL MODAL 
        ==================-->
        <div class="modal-footer">
          
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Producto</button>
      
        </div>

      </form>

    </div>
  
  </div>

</div>
