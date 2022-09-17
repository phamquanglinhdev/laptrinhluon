@php
    $title = "Các khóa đang học";
@endphp
@extends("layouts.client")
@section("content")
    <div class="page-title parallax parallax4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2 class="title" id="h2-title">{{$title}}</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{route("index")}}">Home</a></li>
                            <li id="li-title">{{$title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="main-content blog-posts flat-row course-grid">
        <div class="container">
            <div class="blog-title clearfix">
                <h1 class="bold" id="h1-title">{{$title}}</h1>
            </div>
            <div class="row">
                <div class="post-warp clearfix" id="courses" style="display: flex;flex-wrap: wrap">
                    {!! $data !!}
                </div>
                {{--                <div class="blog-pagination">--}}
                {{--                    <ul class="flat-pagination">--}}
                {{--                        <li><span class="active">1</span></li>--}}
                {{--                        <li><a href="#">2</a></li>--}}
                {{--                        <li><a href="#">3</a></li>--}}
                {{--                        <li class="next">--}}
                {{--                            <a href="#">Next</a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
@endsection
