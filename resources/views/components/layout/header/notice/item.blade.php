<div class="d-flex align-items-center mb-6">
    <!--begin::سیمبل-->
    <div class="symbol symbol-40 symbol-light-{{$notice["color"]}} mr-5">
        <span class="symbol-label">
            <span class="svg-icon svg-icon-lg svg-icon-primary">
                <!--begin::Svg Icon | path:assets/media/svg/icons/home/کتابخانه.svg-->
                    <i class="flaticon-{{ $notice["icon"] }}"></i>
                <!--end::Svg Icon-->
            </span>
        </span>
    </div>
    <!--end::سیمبل-->

    <!--begin::متن-->
    <div class="d-flex flex-column font-weight-bold">
        <a href="{{$notice["href"] }}"  class="text-dark text-hover-primary mb-1 font-size-lg">
            {{$notice["title"]}}
        </a>
        <span class="text-muted">
            {{$notice["subtitle"]}}
        </span>
    </div>
    <!--end::متن-->
</div>
