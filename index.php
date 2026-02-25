<?php

$mensaje_exito = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $padres = htmlspecialchars($_POST['padres']);
    $bebe = htmlspecialchars($_POST['bebe']);
    
    
    $mensaje_exito = "¡Gracias $padres! Hemos recibido la información de $bebe correctamente.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Koala Aprende a Comer</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; max-width: 600px; margin: 20px auto; padding: 0 10px; color: #333; }
        form { background: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd; }
        div { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input[type="text"], input[type="number"], textarea, select { width: 100%; padding: 8px; box-sizing: border-box; }
        button { background-color: #ff8c00; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        .mensaje { background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
    </style>
</head>
<body>

    <header>
        <h1>Koala Aprende a Comer</h1>
        <p>Cuéntanos sobre tu bebé para brindarte la mejor asesoría.</p>
    </header>

    <main>
        <?php if ($mensaje_exito): ?>
            <div class="mensaje"><?php echo $mensaje_exito; ?></div>
        <?php endif; ?>

        <form action="index.php" method="POST">
            <div>
                <label for="padres">Nombres y Apellidos de los padres/cuidadores:</label>
                <input type="text" id="padres" name="padres" required>
            </div>

            <div>
                <label for="bebe">Nombre del bebé:</label>
                <input type="text" id="bebe" name="bebe" required>
            </div>

            <div>
                <label for="edad">Edad del bebé (meses):</label>
                <input type="number" id="edad" name="edad" min="0" required>
            </div>

            <div>
                <label>¿Ya ha iniciado Alimentación Complementaria (AC)?</label>
                <input type="radio" id="ac_si" name="inicio_ac" value="si" required> <label style="display:inline" for="ac_si">Sí</label>
                <input type="radio" id="ac_no" name="inicio_ac" value="no"> <label style="display:inline" for="ac_no">No</label>
            </div>

            <div>
                <label for="alergias">¿Presenta alergias alimentarias?</label>
                <select id="alergias" name="alergias">
                    <option value="no">No</option>
                    <option value="si">Sí</option>
                    <option value="desconocido">No lo sé aún</option>
                </select>
            </div>

            <div>
                <label for="cuales">¿Cuáles? (Si aplica):</label>
                <textarea id="cuales" name="cuales" rows="3"></textarea>
            </div>

            <button type="submit">Enviar Información</button>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Koala Aprende a Comer</p>
    </footer>

</body>
</html>