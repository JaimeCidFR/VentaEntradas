<?php
include_once("Conexion.php");
include_once("Socio.php");

class SocioModelo extends Socio{
    public function __construct($titulo, $autor, $ano,$duracion,$imaxe){
        parent::__construct($titulo, $autor, $ano,$duracion,$imaxe);
     }   
/*---------------------POR EMAIL--------------------*/
    public static function buscaPorEmail($email){
        $conexion = new Conexion();
        try {
            
            $pdoStmt = $conexion->prepare("SELECT numSocio, nomeCompleto,email,telefono FROM socios WHERE email like ?");
            $pdoStmt->bindParam(1, $email); 
            $pdoStmt->execute(); 
        
        } catch (PDOException $e) {
            die ("Houbo un erro en buscaPorEmail". $e->getMessage());
        }
        return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
    }
/*--------------------POR NOME COMPLETO-----------------*/
    public static function buscaPorNomeCompleto($nomeCompleto){
        $conexion = new Conexion();
        $nomeBuscar = "%".$nomeCompleto."%";
        try {
            
            $pdoStmt = $conexion->prepare("SELECT numSocio, nomeCompleto,email,telefono FROM socios WHERE nomeCompleto like ?");
            $pdoStmt->bindParam(1, $nomeBuscar); 
            $pdoStmt->execute(); 
        
        } catch (PDOException $e) {
            die ("Houbo un erro en buscaPorNomeCompleto". $e->getMessage());
        }
        return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
    }
/*------------------POR DNI--------------------*/
    public static function buscaPorDNI($dni){
        $conexion = new Conexion();
        $dniBuscar = $dni."%";
        try {
            
            $pdoStmt = $conexion->prepare("SELECT numSocio, nomeCompleto,email,telefono FROM socios WHERE DNI like ?");
            $pdoStmt->bindParam(1, $dniBuscar); 
            $pdoStmt->execute(); 
        
        } catch (PDOException $e) {
            die ("Houbo un erro en buscaPorTelefono". $e->getMessage());
        }
        return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
    }
/*------------------POR NUMERO SOCIO--------------------*/
public static function buscaPorNumSocio($numSocio){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("SELECT numSocio, nomeCompleto,email,telefono FROM socios WHERE numSocio like ?");
        $pdoStmt->bindParam(1, $numSocio); 
        $pdoStmt->execute(); 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en buscaPorTelefono". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}

/*------------------AÑADIR SOCIO--------------------*/
public static function addSocio($NomeCompleto,$DNI,$email,$telefono,$IBAN,$rua,$numeroCasa,$poboacion,$dataAlta,$observacións){
    $conexion = new Conexion();
    try {
        
        $pdoStmt = $conexion->prepare("INSERT INTO socios(NomeCompleto, DNI, email, telefono, IBAN, rua, numeroCasa, poboacion, dataAlta, observacións) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $pdoStmt->bindParam(1, $NomeCompleto); 
        $pdoStmt->bindParam(2, $DNI); 
        $pdoStmt->bindParam(3, $email); 
        $pdoStmt->bindParam(4, $telefono); 
        $pdoStmt->bindParam(5, $IBAN); 
        $pdoStmt->bindParam(6, $rua); 
        $pdoStmt->bindParam(7, $numeroCasa); 
        $pdoStmt->bindParam(8, $poboacion); 
        $pdoStmt->bindParam(9, $dataAlta); 
        $pdoStmt->bindParam(10, $observacións); 
        
        if($pdoStmt->execute()){
            socioAddCorrect();
        } 
    
    } catch (PDOException $e) {
        die ("Houbo un erro en buscaPorTelefono". $e->getMessage());
    }
    return $pdoStmt; //DEVOLVEMOS TODAS AS FILAS nun PDOStatement
}
}