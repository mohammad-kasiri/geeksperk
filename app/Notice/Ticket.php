<?php

namespace App\Notice;

use App\Notice\Contract\Notice;
use App\Notice\Contract\NoticeContract;

class Ticket extends Notice
{
    public function getTitle()   {return "تیکت";}
    public function getIcon()    {return "envelope";}
    public function getColor()   {return "danger";}
    public function getHref ()   {return route("hello");}
    public function getCount()   {return 1;}
}
