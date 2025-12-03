@props(['id', 'title', 'province', 'expand' => true, 'titleAsLink' => false])

<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}" aria-expanded="{{ $expand }}" aria-controls="{{ $id }}">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">
                @if($titleAsLink)
                    <a href="javascript:;">{{ $title ?? '' }}</a>
                @else
                    {{ $title ?? '' }}
                @endif
            </h3>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Content-->
    <div id="{{ $id }}" class="collapse @if($expand) show @endif" style="">
        <!--begin::Card body-->
        <div class="card-body border-top p-9">
            {{ $slot }}
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Content-->
</div>
