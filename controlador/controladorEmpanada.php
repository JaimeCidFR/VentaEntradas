<?php
include_once('../modelo/ReservaModelo.php');
include_once('../modelo/SocioModelo.php');
include_once('../vista/vistaEmpanada.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Carballeira</title>
    <link rel="stylesheet" href="../style/style.css" />
</head>
<body>
    <?php
echo "<div class='mapaBusqueda'>";
 
mapaMesas();


busquedaSocio();
/*CASOS DE BUSQUEDA DE SOCIOS PARA RESERVAR */

if(isset($_GET['numSocio']) && $_GET['numSocio'] != ""){
    $numero = $_GET['numSocio'];
    $salida = SocioModelo::buscaPorNumSocio($numero);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarSocios($filasArray);

}
if(isset($_GET['nome']) && $_GET['nome'] != ""){
    $nome = $_GET['nome'];
    $salida = SocioModelo::buscaPorNomeCompleto($nome);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarSocios($filasArray);

}
if(isset($_GET['dni']) && $_GET['dni'] != ""){
    $dni = $_GET['dni'];
    $salida = SocioModelo::buscaPorDNI($dni);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarSocios($filasArray);
}
if(isset($_GET['email']) && $_GET['email'] != ""){
    $email = $_GET['email'];
    $salida = SocioModelo::buscaPorEmail($email);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarSocios($filasArray);
}
echo "</div>";

echo "<div class='formularios'>";

formulariosBusquedaReservas();
if(isset($_GET['reservar'])){
    $nomeCompleto = $_GET['nomeCompleto'];
    $telefono = $_GET['tlf'];
    $email = $_GET['email'];
    $pena = $_GET['pena'];
    if($_GET['socio'] == "SI"){
        $socio = 1;
        $idSocio = $_GET['idSocio'];

    }if($_GET['socio'] == "NO"){
        $socio = 0;
        $idSocio = null;
    }
   

    $ubicacion = $_GET['zona'];
    $observacions = $_GET['observacions'];
    $mesasEscogidas = $_GET['mesasEscogidas'];
    $numeroMesas = $_GET['numeroMesas'];
    $precio = $_GET['precio'];

    ReservaModelo::añadirReserva($pena, $nomeCompleto,$email,$telefono,$socio,$idSocio,$numeroMesas,$mesasEscogidas,$ubicacion,$observacions,$precio);
}
echo '
    <form action="controladorEmpanada.php" method="post">
        <input type="submit" name="buscadorReserva" value="Buscar Reserva" />
    </form>
    ';
if(isset($_POST['buscadorReserva'])){
    formularioEliminarReserva();
}
echo '
    <form action="controladorEmpanada.php" method="post">
        <input type="submit" name="addSocio" value="Engadir Socio" />
    </form>
    ';
if(isset($_POST['addSocio'])){
    addSocio();
}
if(isset($_GET['addSocioEnviar'])){
    $NomeCompleto = $_GET['nomeCompletoAddSocio'];
    $DNI = $_GET['dniAddSocio'];
    $email = $_GET['emailAddSocio'];
    $telefono = $_GET['telefonoAddSocio'];
    $IBAN = $_GET['ibanAddSocio'];
    $rua = $_GET['ruaAddSocio'];
    $numeroCasa = $_GET['numeroAddSocio'];
    $poboacion = $_GET['poboacionAddSocio'];
    $dataAlta = $_GET['dataAltaAddSocio'];
    if(isset($_GET['observaciónsAddSocio'])){

        $observacións = $_GET['observacións'];
    }else{
        $observacións = "";
    }
    SocioModelo::addSocio($NomeCompleto,$DNI,$email,$telefono,$IBAN,$rua,$numeroCasa,$poboacion,$dataAlta,$observacións);
} 
/*CASOS DE BUSQUEDA DE RESERVAS PARA ELIMINAR */
if(isset($_GET['numReserva']) && $_GET['numReserva'] != ""){
    $numero = $_GET['numReserva'];
    $salida = ReservaModelo::buscaReservaPorNumReserva($numero);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarReservas($filasArray);

}
if(isset($_GET['nomePena']) && $_GET['nomePena'] != ""){
    $numero = $_GET['nomePena'];
    $salida = ReservaModelo::buscaReservaPorNomePena($numero);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarReservas($filasArray);

}
if(isset($_GET['nomePersoa']) && $_GET['nomePersoa'] != ""){
    $numero = $_GET['nomePersoa'];
    $salida = ReservaModelo::buscaReservaPorNomeCompleto($numero);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarReservas($filasArray);

}
if(isset($_GET['email']) && $_GET['email'] != ""){
    $numero = $_GET['email'];
    $salida = ReservaModelo::buscaReservaPorEmail($numero);
    $filasArray = $salida->fetchAll(PDO::FETCH_OBJ);
    mostrarReservas($filasArray);

}

if(isset($_GET['numReservaEliminar'])){
    $numReservaEliminar = $_GET['numReservaEliminar'];
    ReservaModelo::eliminarReserva($numReservaEliminar);
} 
echo "</div>";

echo"
    <div class='mesasOculto'>";
    ReservaModelo::mesasOcupadas();
echo "</div>

    ";


    ?>

</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../script/zoom.js"></script>
    <script src="../script/checkmesa.js"></script>
    <script src="../script/copiarForm.js"></script>
</html>