<?php

namespace App\Notice;

use App\Notice\Contract\Notice;
use App\Notice\Contract\NoticeContract;
use Exception;

class NoticeFactory
{
    public static function install($class)
    {
        $object = new $class;

        if (!$object instanceof  Notice)
        {
            throw new Exception("Can't Define An Notice Object On This Class");
        }

        return $object->get();
    }
}
