 <!-- incluyendo cabecera -->
 <?php include 'redirect.php'?>
<?php include "header.php" ?>



 <!-- main -->
  <!-- main -->
   <!-- main -->
    <h1 class="text-center p-5 ">Registro</h1>

    <div id="selecciona-estatus" class="text-center">
        <label for="estatus">Seleccione el estatus: </label>
        <select name="estatus" id="estatus">
            <option value="null" disabled="true" selected>Selecciona</option>
            <option value="probado">Probado</option>
            <option value="vobotransito">VoBo Transito</option>
            
        </select>

    </div>
    <div class="container">
        <div class="row">

            <div id="selecciona-asignacion" class="col-8">
                <!-- <label for="asignacion">Asignación</label> -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Estatus</th>
                            <th scope="col">Asignado</th>
                        </tr>
                    </thead>

                    <tr>
                        <td>Arquitecto</td>
                        <td>
                            <select name="asignacion_arquitecto" id="asignacion_arquitecto">
                                <option value="null" disabled="true" selected>Selecciona</option>
                                <option value="arqui1">arqui1</option>
                                <option value="arqui2">arqui2</option>   
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Programador</td>
                        <td>
                            <select name="asignacion_programador" id="asignacion_programador">
                                <option value="null" disabled="true" selected>Selecciona</option>
                                <option value="programador1">programador1</option>
                                <option value="programador2">programador2</option>   
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Tester</td>
                        <td>
                            <select name="asignacion_Tester" id="asignacion_Tester">
                                <option value="null" disabled="true" selected>Selecciona</option>
                                <option value="Tester1">Tester1</option>
                                <option value="Tester2">Tester2</option>   
                            </select>
                        </td>
                    </tr>
                </table>



                <div>
                    <textarea placeholder="Agrega una nota..." name="" id="" cols="45" rows="10"></textarea>
                </div>
            </div>


            <div class="col-4 d-flex flex-column">
                <label for="usuario">Selecciona un Gerente</label>
                <select name="usuario" id="">
                    <option value="nombreg1">Gerente 1</option>
                    
                </select>

                <label for="usuario">Selecciona un Usuario</label>
                <select name="usuario" id="">
                    <option value="nombreu1">Usuario 1</option>
                        
                </select>


                <label for="fecha">Fecha/Hora De Pruebas:</label>
                <input type="datetime-local" name="fecha" id="fecha">

                <label for="notasfecha">Notas De Fecha/Hora De Pruebas</label>
                <textarea name="notasfecha" id="" cols="25" rows="10" placeholder="Agrega una nota..."></textarea>

            </div>



        </div>
    </div>
    </div>






    <div class="d-flex justify-content-end p-5 ">
        <div class="w-50 d-flex justify-content-end">
            <a class="btn btn-primary w-25" href="./" role="button">Atras</a>
            <button class="btn-primary  w-25">Siguiente</button>
        </div>
    </div>


 <!-- cerrando main -->
  <!-- cerrando main -->
   <!-- cerrando main -->



   <?php include "footer.php" ?>