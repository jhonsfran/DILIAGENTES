<?php namespace orm\core\exception;

use orm\core\exception\CustomBDException as CustomBDException;

class ExceptionHandler {

    public $var;

    const THROW_NONE = 0;
    /* Errores del usuario comienzan con el sufijo 85 */
    const CONSULTA_SIN_RESULTADOS = 851000;
    const REGISTRO_DUPLICADO = 851001;
    const REGISTRO_NO_EXISTE = 851002;
    const PROVEEDOR_BASE_DATOS_NO_EXISTE = 851003;

    /* fin error usuario */

    function __construct($codigoError = self::THROW_NONE) {

        switch ($codigoError) {
            case self::CONSULTA_SIN_RESULTADOS:
                throw new CustomBDException('Consulta sin resultados', 851000);
                break;
            case self::REGISTRO_DUPLICADO:
                throw new CustomBDException('Registro Duplicado ', 851001);
                break;
            case self::REGISTRO_NO_EXISTE:
                throw new CustomBDException('Registro no existe ', 851002);
                break;
            case self::PROVEEDOR_BASE_DATOS_NO_EXISTE:
                throw new CustomBDException('El proveedor de bases de datos no existe! ', 851003);
                break;
            default:
                // No exception, object will be created.
                $this->var = $codigoError;
                break;
        }
    }

}
