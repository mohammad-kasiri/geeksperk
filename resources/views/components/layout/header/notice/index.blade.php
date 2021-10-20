@extends("components.layout.header.notice.structure")

@section("notices")
    @each("components.layout.header.notice.item", $notices , "notice"  , "components.layout.header.notice.empty")
@endsection
