@php
    $title = $category->name ?? "Tất cả các khóa";
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
                <h1 class="bold" id="h1-title">{{$category->name??"Tất cả khóa học"}}</h1>
            </div>
            <div class="row">
                <div class="flat-post-ordering clearfix">
                    <div class="sort-views">
                        <label class="modern-select">
                            <select name="select_category" class="orderby" id="category_select">
                                <option
                                    value=""
                                    @if(!isset($category))
                                        selected="selected"
                                    @endif
                                >
                                    Danh mục
                                </option>
                                @if(isset($categories))
                                    @foreach($categories as $category2)
                                        <option
                                            value="{{$category2->slug}}"
                                            @if(isset($category))
                                                @if($category->slug == $category2->slug)
                                                    selected="selected"
                                            @endif
                                            @endif
                                        >
                                            {{$category2->name}}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </label>
                        <label class="modern-select">
                            <select name="select_category" class="orderby" id="sort_select">
                                <option value="" selected="selected">Sắp xếp theo</option>
                                <option value="newest">Mới nhất</option>
                                <option value="oldest">Cũ nhất</option>
                                {{--                                <option value="cheap">Giá thấp đến cao</option>--}}
                                {{--                                <option value="expensive">Giá cao đến thấp</option>--}}
                            </select>
                        </label>
                        <div class="list-grid">
                            <a data-layout="course-grid" class="course-grid-view active" href="#"><i class="fa fa-th"
                                                                                                     aria-hidden="true"></i></a>
                            <a data-layout="course-list" class="course-list-view" href="#"><i class="fa fa-list"
                                                                                              aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
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
@section("script")
    <script>
        let slug = null
        let sort = null
        let page = 1
        $("#category_select").change(function (e) {
            slug = $("#category_select").find(":selected").val().trim()
            let name = $("#category_select").find(":selected").text().trim()
            if (slug === "") {
                slug = null
                name = "Tất cả khóa học"
            }
            $("#li-title").text(name)
            $("#h1-title").text(name)
            $("#h2-title").text(name)
            page = 1
            filter()
        });
        $("#sort_select").change(function (e) {
            sort = $("#sort_select").find(":selected").val().trim()
            if (sort === "") sort = null
            page = 1
            filter()
        })

        function filter() {
            $.ajax({
                url: '{{route("grade.filter")}}',
                type: 'GET',
                dataType: 'html',
                data: {
                    slug: slug,
                    sort: sort,
                    page: page,
                }
            }).done(function (data) {
                console.log(data)
                $('#courses').html(data);
            });
        }
    </script>
@endsection
