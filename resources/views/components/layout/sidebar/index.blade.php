@extends("components.layout.sidebar.structure")
@section("items")
<x-layout.sidebar.list title="عنوان لیست" icon="group">
    <x-layout.sidebar.list-item  title="زیر دسته"  href="@@"/>
</x-layout.sidebar.list>

<x-layout.sidebar.menu-section title="کاربران"/>

<x-layout.sidebar.item title="منو شماره یک" href="###" icon="user"/>
@endsection
