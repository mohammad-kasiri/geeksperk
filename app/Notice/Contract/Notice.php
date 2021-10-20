<?php

namespace App\Notice\Contract;

abstract class Notice implements NoticeContract
{
    public function get(){
         return ($this->getCount() == 0) ? null :
          [
            "title"     => $this->getTitle() . " های جدید" ,
            "subtitle"  => $this->getCount() . " " . $this->getTitle() . " جدید ثبت شده است" ,
            "icon"      => $this->getIcon()  ,
            "href"      => $this->getHref() ,
            "color"     => $this->getColor() ,
         ];
    }

}
