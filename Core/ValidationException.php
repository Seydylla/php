<?php

namespace Core;

class ValidationException extends \Exception{
    public static function throw($errors) {
        $instance = new static();

        throw $instance;
    }
}