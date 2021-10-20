<?php

namespace App\Notice;

use App\Notice\Contract\Notice;
use App\Notice\Contract\NoticeContract;

class Order  extends Notice
{
   public function getTitle()  {return "سفارش";}
   public function getIcon()   {return "coins";}
   public function getColor()  {return "warning";}
   public function getHref ()  {return route("hello");}
   public function getCount()  {return 0;}
}
