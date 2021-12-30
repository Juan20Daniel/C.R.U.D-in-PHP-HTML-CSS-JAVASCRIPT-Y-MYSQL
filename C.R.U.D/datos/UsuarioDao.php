<?php

include 'Conexion.php';
include '../entidades/Usuario.php';

class UsuarioDao extends Conexion
{
    protected static $cnx;

    private static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cnx = null;
    }

    /**
     * Metodo que sirve para validar el login
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function login($usuario)
    {
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas["usuario"] == $usuario->getUsuario()
                && $filas["password"] == $usuario->getPassword()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Metodo que sirve obtener un usuario
     *
     * @param      object         $usuario
     * @return     object
     */
    public static function getUsuario($usuario)
    {
        $query = "SELECT id,clave,email,usuario,privilegio,telefono FROM usuarios WHERE usuario = :usuario AND password = :password";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());

        $resultado->execute();

        $filas = $resultado->fetch();

        $usuario = new Usuario();
        $usuario->setId($filas["id"]);
        $usuario->setClave($filas["clave"]);
        $usuario->setUsuario($filas["usuario"]);
        $usuario->setEmail($filas["email"]);
        $usuario->setPrivilegio($filas["privilegio"]);
        $usuario->setTelefono($filas["telefono"]);
        

        return $usuario;
    }

    /**
     * Metodo que sirve para registrar usuarios
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function registrar($usuario)
    {
        $query = "INSERT INTO usuarios (clave,email,usuario,password,privilegio,telefono) VALUES (:clave,:email,:usuario,:password,:privilegio,:telefono)";

        self::getConexion();

        $resultado = self::$cnx->prepare($query);

        $resultado->bindValue(":clave", $usuario->getClave());
        $resultado->bindValue(":email", $usuario->getEmail());
        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":password", $usuario->getPassword());
        $resultado->bindValue(":privilegio", $usuario->getPrivilegio());
        $resultado->bindValue(":telefono", $usuario->getTelefono());

        if ($resultado->execute()) {
            return true;
        }

        return false;
    }
}
