<!-- incluyendo cabecera -->
<?php include 'redirect.php'?>
<?php include 'header.php' ?>
<!-- main -->
 <!-- main -->
  <!-- main -->
    <h1 class="text-center p-3">Buscador</h1>
    <!--Contenido-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <!-- Disable debug
                                <h1 class="box-title">TEST:<button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                                -->
                            <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                        <div class="panel-body table-responsive" id="listadoregistros">
                            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                                <thead>
                                    <th>ID</th>
                                    <th>APS</th>
                                    <th>Nivel organizacional</th>
                                    <th>URL del proyecto</th>
                                    <th>Estatus</th>
                                    <th>Arquitecto</th>
                                    <th>Programador</th>
                                    <th>Tester</th>
                                    <th>Gerente</th>
                                    <th>Usuario</th>
                                    <th>Fecha y hora</th>
                                    <th>Version</th>
                                </thead>
                                <tbody>                            
                                </tbody>
                                <tfoot>
                                    <th>ID</th>
                                    <th>APS</th>
                                    <th>Nivel organizacional</th>
                                    <th>URL del proyecto</th>
                                    <th>Estatus</th>
                                    <th>Arquitecto</th>
                                    <th>Programador</th>
                                    <th>Tester</th>
                                    <th>Gerente</th>
                                    <th>Usuario</th>
                                    <th>Fecha y hora</th>
                                    <th>Version</th>
                                </tfoot>
                            </table>
                        </div>
                        <div class="panel-body" style="height: 400px;" id="formularioregistros">
                            <form name="formulario" id="formulario" method="POST">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Nombre:</label>
                                    <input type="hidden" name="idcategoria" id="idcategoria">
                                    <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Descripción:</label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripción">
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                                    <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                </div>
                            </form>
                        </div>
                    <!--Fin centro -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
    <!--Fin-Contenido-->



    <div class="d-flex justify-content-end p-5 ">
        <div class="w-50 d-flex justify-content-end">
            <a class="btn btn-primary w-25" href="./" role="button">Atras</a>
        </div>
    </div>


  <!-- cerrando main -->
 <!-- cerrando main -->
<!-- cerrando main -->
<?php include "footer.php" ?>
<script type="text/javascript" src="scripts/buscador.js"></script>