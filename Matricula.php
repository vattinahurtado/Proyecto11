<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario de Matrícula</title>
    <link rel="stylesheet" href="Matricula.css">
</head>
<body>
<header>
    <img src="logo-icit-png.png" alt="Logo" class="logo">
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Inscripción.php">Inscripciones</a></li>
            <li><a href="Matricula.php">Matriculas</a></li>
        </ul>
    </nav>
</header>
<h1>Formulario de Matrícula</h1>
<form>
    <label for="documento_identidad">Documento de Identidad:</label>
    <input type="text" id="documento_identidad" name="documento_identidad"><br><br>
    <input type="submit" value="Iniciar Matricula">
</form>
<div id="matricula-form">
    <!-- Campos de opción múltiple se agregarán aquí -->
</div>

<script>
    // Función para mostrar los campos de opción múltiple
    function mostrarMatriculaForm() {
        document.getElementById("matricula-form").innerHTML = `
        <label for="grado_matricular">Grado a Matricular:</label>
        <select id="grado_matricular" name="grado_matricular">
          <option value="Sexto Grado">Sexto Grado</option>
          <option value="Septimo Grado">Septimo Grado</option>
          <option value="Octavo Grado">Octavo Grado</option>
          <option value="Noveno Grado">Noveno Grado</option>
          <option value="Decimo Grado">Decimo Grado</option>
          <option value="Undecimo Grado">Undecimo Grado</option>
        </select><br><br>
        <label for="salon_matricular">Salon a Matricular:</label>
        <select id="salon_matricular" name="salon_matricular">
          <option value="Salon 1">Salon 1</option>
          <option value="Salon 2">Salon 2</option>
        </select><br><br>
        <input type="submit" value="Matricular">
      `;
    }

    // Agregar evento al botón "Iniciar Matrícula"
    document.querySelector("input[type='submit']").addEventListener("click", function(event) {
        event.preventDefault();
        mostrarMatriculaForm();
    });


</script>
</body>
</html>