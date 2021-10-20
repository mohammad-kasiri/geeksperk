<?php

namespace App\Notice\Contract;

interface NoticeContract
{
    function  getHref();
    function  getCount();
    function  getTitle();
    function  getIcon();
    function  getColor();
}
