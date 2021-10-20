@props(["href" , "icon" , "title"])

<li class="menu-item " aria-haspopup="true" >
    <a  href="{{$href}}" class="menu-link ">
        <i class="menu-icon flaticon-{{$icon}}"></i>
        <span class="menu-text">{{$title}}</span>
    </a>
</li>
