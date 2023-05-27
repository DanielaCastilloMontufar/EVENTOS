<div class="container">

<FORM action="http://localhost/cim4/index.php/home/guarda" method="POST"  enctype="multipart/form-data">

<?php
    if (isset($user)) {
        
        $Nombre_evento=$user[0]['Nombre del evento'];
        $Tipo=$user[0]['Tipo'];
        $Fecha=$user[0]['Fecha'];
        $Hora=$user[0]['Hora'];
        $Descripcion=$user[0]['Descripcion'];
        $Organizador=$user[0]['Organizador'];
        $Enlace=$user[0]['Enlace'];
        $Imagen=$user[0]['Imagen'];
    }
    else {
        $Nombre_evento="";
        $Tipo="";
        $Fecha="";
        $Hora="";
        $Descripcion="";
        $Organizador="";
        $Enlace="";
        $Imagen="";
    }

    ?>
    <div class="form-group">
    <P>
    <P> 
    <LABEL for="Nombre_evento">Nombre evento: </LABEL>
              <INPUT type="text" id="Nombre_evento" name="Nombre_evento" class="form-control" value="<?php echo $Nombre_evento ?>"><BR><BR>

	<LABEL for="Tipo">Tipo de evento: </LABEL><BR>
    <INPUT type="radio" name="Tipo" value="Privado"> Privado<BR>
    <INPUT type="radio" name="Tipo" value="Publico"> Publico<BR><BR>

	<LABEL for="Fecha">Fecha: </LABEL>
              <INPUT type="date" id="Tipo" name="Fecha" class="form-control"><BR><BR>

	<LABEL for="Hora">Hora: </LABEL>
              <INPUT type="time" id="Hora" name="Hora" class="form-control"><BR><BR>

	<LABEL for="Descripcion">Descripcion: </LABEL>
              <textarea id="Descripcion" cols="30"
            rows="10" name="Descripcion" class="form-control"></textarea><BR><BR>

	<LABEL for="Organizador">Organizador: </LABEL>
              <INPUT type="text" id="Organizador" name="Organizador" class="form-control"><BR><BR>

	<LABEL for="Enlace">Enlace: </LABEL>
              <INPUT type="text" id="Enlace" name="Enlace" class="form-control"><BR><BR>

	<LABEL for="Imagen">Imagen: </LABEL>
              <input type="file" name="Imagen" class="form-control"><BR><BR>
<BR><BR><BR>
    <INPUT type="submit" value="Enviar" class="btn btn-primary"> <INPUT type="reset" class="btn btn-primary">

    <input type="hidden" name="Id" value=['Id_usuario']>



    </div>
 </FORM>

 </div>