<?php

namespace App\Exception;

class SameFighterException extends \Exception
{
protected $message="A fighter must not fight versus himself !";

}