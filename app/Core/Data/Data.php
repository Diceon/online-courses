<?php

namespace App\Core\Data;


/**
 * Class Data
 * @package App\Core\Data
 */
class Data
{
    /**
     * @var array
     */
    private static $_DATA = [];

    /**
     * Data constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return array
     */
    public static function getData(): array
    {
        return self::$_DATA;
    }

    /**
     * @param $name
     * @return mixed
     */
    public static function get($name = null)
    {
        if (is_null($name)) {
            return self::$_DATA;
        }

        return self::$_DATA[$name] ?? null;
    }

    /**
     * @param $name
     * @param $value
     */
    public static function set($name, $value)
    {
        self::$_DATA[$name] = $value;
    }
}
