

@if ($paginator->hasPages())

    <div class="pagination_wrap clearfix" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center justify-content-lg-between">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <ul class="pagination_nav ul_li_right clearfix">

                    @if ($paginator->onFirstPage())

                    <li class="disabled"><span><i class="fal fa-angle-double-left"></i></span></li>
                    @else

                    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fal fa-angle-double-left"></i></a></li>
                    @endif



                    @foreach ($elements as $element)

                        @if (is_string($element))

                            <li class="disabled"><span>{{ $element }}</span></li>
                        @endif



                        @if (is_array($element))

                            @foreach ($element as $page => $url)

                                @if ($page == $paginator->currentPage())

                                    <li class="active my-active"><span>{{ $page }}</span></li>
                                @else

                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach


                    @if ($paginator->onLastPage())

                    <li class="disabled"><span><i class="fal fa-angle-double-right"></i></span></li>
                    @else

                    <li><a href="{{ $paginator->nextPageUrl() }}" rel="prev"><i class="fal fa-angle-double-right"></i></a></li>
                    @endif




                </ul>
            </div>
        </div>
    </div>
@endif
