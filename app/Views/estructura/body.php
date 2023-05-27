<body>
<div class="container">
    <div class="row">
        <a href="http://localhost/cim4/index.php/home/formulario" class="btn btn-info" role="button" >Nuevo</a>
    <p>
    </div>

    <div class="row">
        
    
        <table class="table">
        <tr>
        <th scope="col"> Id Usuario </th>
        <th scope="col"> Nombre del evento </th>
        <th scope="col"> Tipo </th>
        <th scope="col"> Fecha </th>
        <th scope="col"> Hora </th>
        <th scope="col"> Descripcion </th>
        <th scope="col"> Organizador </th>
        <th scope="col"> Enlace </th>
        <th scope="col"> Imagen </th>
        <th scope="col"> Fecha de creacion </th>
        <th scope="col"> Acciones </th>
        </tr>
        <?php
        foreach($eventos as $user){
            echo "<tr  scope='row' >";
            echo "<td>".$user['Id_usuario']."</td>";
            echo "<td>".$user['Nombre_evento']."</td>";
            echo "<td>".$user['Tipo']."</td>";  
            echo "<td>".$user['Fecha']."</td>";
            echo "<td>".$user['Hora']."</td>";
            echo "<td>".$user['Descripcion']."</td>";
            echo "<td>".$user['Organizador']."</td>";
            echo "<td>".$user['Enlace']."</td>";
            echo "<td>".$user['Imagen']."</td>";
            echo "<td>".$user['Fecha_creacion']."</td>";
            echo "<td>";
            ?>
            <a href="http://localhost/cim4/index.php/home/editar?id=<?php echo $user['Id_usuario'] ?>" class="btn btn-warning" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-danger" role="button"><i class="fa-solid fa-trash-can"></i></a>
            <?php
            echo "</td>";
            echo "</tr>";

        }
        ?>
        </table>
    </div>
</div>
</body>

</html>