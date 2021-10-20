<?php

namespace App\View\Components\layout\header;

use App\Notice\Comment;
use App\Notice\Order;
use App\Notice\Ticket;
use App\Notice\NoticeFactory;
use Illuminate\View\Component;

class notice extends Component
{
    public $hasNotice = true;
    public $notices   = [] ;


    public function __construct()
    {
        array_push($this->notices ,
            NoticeFactory::install(Comment::class),
            NoticeFactory::install(Ticket ::class),
            NoticeFactory::install(Order  ::class),
        );

        $this->notices   = array_filter($this->notices);
        $this->hasNotice = !empty($this->notices) ;
    }


    public function render()
    {
        return view('components.layout.header.notice.index');
    }
}
