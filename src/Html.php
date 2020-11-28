<?php
namespace app\components;

class Html extends \yii\helpers\Html
{
    public static function __callStatic($name, $args)
    {
        if (stripos($name, 'begin') === 0){
            echo self::beginTag(strtolower(substr($name, 4)), $args);
        }
        if (stripos($name, 'end') === 0){
            echo self::endTag(strtolower(substr($name, 2)));
        }
        echo self::tag($name, $args[0], $args[1]);
    }

    public function __call($name, $args)
    {
        if (stripos($name, 'begin') === 0){
            echo self::beginTag(strtolower(substr($name, 4)), $args);
        }
        if (stripos($name, 'end') === 0){
            echo self::endTag(strtolower(substr($name, 2)));
        }
        echo self::tag($name, $args[0], $args[1]);
    }


}