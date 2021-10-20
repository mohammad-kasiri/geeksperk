@props(["icon" , "title"])

<li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover">
    <a  href="javascript:;" class="menu-link menu-toggle">
        <i class="menu-icon flaticon2-{{$icon}}"></i>
        <span class="menu-text">{{$title}}</span>
        <i class="menu-arrow"></i>
    </a>
    <div class="menu-submenu ">
        <i class="menu-arrow"></i>
        <ul class="menu-subnav">
            {{$slot}}
        </ul>
    </div>
</li>
