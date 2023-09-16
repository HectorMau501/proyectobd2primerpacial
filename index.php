<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Bootstrap</title>
    <!-- Agrega los enlaces a las hojas de estilo y scripts de Bootstrap aquí -->
    <link href="../proyectobd2primerpacial/css/bootstrap.min.css" rel = "stylesheet">
    <script src="../proyectobd2primerpacial/js/bootstrap.bundle.min.js"></script>
    <script src="../proyectobd2primerpacial/js/bootstrap.bundle.min.js.map"></script>
    <!-- Bootstrap CSS -->
<link href="../proyectobd2primerpacial/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    
    .img-custom {
    max-width: 150px; /* Ajusta el ancho máximo deseado */
    height: auto; /* La altura se ajustará automáticamente para mantener la relación de aspecto */
  }




    </style>
</head>
<body>
    <!-- Encabezado -->
    <header class="bg-primary">
        <!-- Agrega aquí tu encabezado personalizado, como el menú de navegación -->
        <nav class="bg-dark navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <h1 class="text-light">Bases de Datos Documentales</h1>
          </div>
        </nav>
    </header>

    <!-- Contenido principal -->
    <main class="container mt-4 mb-5">
        <form action="index.php" method="POST">
          <h2 class="display-4  mb-4">Videojuego a buscar</h1>

          <div class="form-group">
              <input type="text" class="form-control  mb-4" id="buscar" name="buscar" placeholder="Id, Nombre o Costo">
          </div>
          <button class="btn btn-primary btn-block  mb-4" type="submit">Encontrar</button>
        </form>  
        <table class="table table-bordered table-striped table-hover">
          <tr>
            <th>id</th>
            <th>juego</th>
            <th>link</th>
            <th>Costo</th>
            <th>Año</th>
          </tr>

          <!-- PHP -->
          <?php
           include '../proyectobd2primerpacial/php/buscar.php';
           if ($sql_query !== null) {
           while($row = mysqli_fetch_array($sql_query)){ 
            ?>

          <tr>
            <td><?=  $row['id'];  ?></td>
            <td><?=  $row['nombre'] ?></td>
            <td class="text-center">
            <a href="<?= $row['google_drive_link']; ?>" target="_blank">
          <!-- Imagen en miniatura -->
          <img src="/proyectobd2primerpacial/img/<?= $row['link']; ?>" alt="imagen auto" class="img-custom">
          </a> 
           </td>
            <td><?=  $row['costo'] ?></td>
            <td><?=  $row['anio'] ?></td>
            
          </tr>
          <?php } }?>
          <!-- <caption  mb-3>Libros</caption> -->
        </table>
    </main>

    <!-- Pie de página -->
    <footer class = "bg-dark text-light text-center py-3">
        <!-- Agrega aquí tu pie de página personalizado -->
        <p>Bases de datos documentales</p>
    </footer>

  </body>
</html>
