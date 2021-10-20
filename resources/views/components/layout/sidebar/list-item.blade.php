@props(["title" , "href"])
<li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
    <a  href="{{ $href }}" class="menu-link ">
        <i class="menu-bullet menu-bullet-dot">
            <span></span>
        </i>
        <span class="menu-text">{{ $title }}</span>
    </a>
</li>
