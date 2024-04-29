<?php
namespace magexpress\car;
class audi{
    function __construct()
    {
        echo self::welcome();
    }
    public static function welcome(){
        $text="Test içindir";
        return $text;
    }
}
?>