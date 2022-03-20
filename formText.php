<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 2: Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section class="ms-3">
        <h5 class="mt-3">Formulario de inscripción</h5>
        <form action="server.php" method="POST">
            <input type="text" class="mt-1 col-form-label" name="Nombre" placeholder="Nombre" require>
            <input type="text"class="ms-2 col-form-label" name="Apellidos" placeholder="Apellidos" require>
            <div class="mt-3 form-check">
                <input class="form-check-input" type="radio" name="flexRadioChecked" id="flexRadioChecked"> Invitar a un cafe ☕
            </div>
            <div class="mt-2 form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"> Suscribirme a Newsletter 👉
                <label class="form-check-label" for="flexCheckDefault">
            </div>
            <button type="submit" class="mt-3 btn btn-primary "name="Enviar" placeholder="Enviar">Enviar</button>
        </form>
    </section>
    
   
</body>
</html>