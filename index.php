<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de informacion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="form-card">
        <h1>Bienvenidos</h1>
        <p>Complete el formulario.</p>
        <form action=" " method="post">
            <div class="container">
                <label for="nombre">Nombre completo</label>
                <input id="nombre" name="nombre" type="text" placeholder="Ej: Juanito Lopez" required minlength="7">
                <p class="hint">Debe tener al menos 7 caracteres.</p>
            </div>

            <div class="container">
                <label for="email">Correo electronico</label>
                <input id="email" name="email" type="email" placeholder="ejemplo@dominio.com" required>
                <p class="hint">Formato valido: usuario@dominio.ext</p>
            </div>

            <div class="container">
                <label>Categoría</label>
                <select id="categoria" name="categoria" required>
                    <option value="">Seleccione una opcion</option>
                    <option value="diseño">Diseño</option>
                    <option value="usabilidad">Usabilidad</option>
                    <option value="accesibilidad">Accesibilidad</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comentario">Comentario</label>
                <textarea id="comentario" name="comentario" rows="5" placeholder="Describe tu experiencia" required minlength="10"></textarea>
                <p class="hint"> Escriba al menos 4 palabras.</p>
            </div>

            <button type="submit" class="submit-btn">Enviar evaluacion</button>
        </form>
    </main>
</body>
</html>