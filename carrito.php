<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Carrito de compras Plaza vea</title>
</head>

<style>
   h1 {
      color: yellow;
   }
</style>

<body>
   <h1>Formulario</h1>
   <form action="index.php" method="post">
      <label>
         Nombre completo:
         <input type="text" name="nombre">
      </label>
      <br>
      <br>
      <label>
         Apellido completo:
         <input type="text" name="apellido">
      </label>
      <br>
      <br>
      <label>
         Masculino
         <input type="radio" name="genero" value="masculino">
         Femenino
         <input type="radio" name="genero" value="femenino">
      </label>
      <br>
      <br>
      <button type="submit">Enviar</button>
   </form>
</body>

</html>
