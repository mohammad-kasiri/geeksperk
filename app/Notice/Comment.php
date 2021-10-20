<?php

namespace App\Notice;

use App\Notice\Contract\Notice;
use App\Notice\Contract\NoticeContract;

class Comment extends Notice
{
   public function getTitle()  {return "دیدگاه";}
   public function getIcon()   {return "comment";}
   public function getColor()  {return "primary";}
   public function getHref ()  {return route("hello");}
   public function getCount()  {return 0;}
}
