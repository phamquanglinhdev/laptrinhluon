<div class="flat-course flat-hover-zoom" style="float: none!important;">
    <div class="featured-post">
        <div class="overlay">
            <div class="link"></div>
        </div>
        <div class="entry-image">
            <a href="{{route("grade",$course->code)}}"><img src="{{$course->thumbnail}}" alt=""></a>
        </div>
    </div>
    <div class="course-content">
        <h4><a href=""{{route("grade",$course->code)}}">{{$course->name}}</a></h4>
        <div class="price">{{number_format($course->getPrice())}} đ</div>
        <ul class="course-meta review clearfix">
            <li class="author">
                <div class="thumb">
                    <img src="{{$course->Category()->first()->thumbnail}}" alt="image">
                </div>
                <div class="text">
                    <a href="{{route("courses",$course->Category()->first()->slug)}}">{{$course->Category()->first()->name}}</a>
                    <p>Danh mục</p>
                </div>
            </li>
            {{--            <li class="review-stars">--}}
            {{--                <i class="fa fa-star"></i>--}}
            {{--                <i class="fa fa-star"></i>--}}
            {{--                <i class="fa fa-star"></i>--}}
            {{--                <i class="fa fa-star-half"></i>--}}
            {{--                <i class="fa fa-star-o"></i>--}}
            {{--            </li>--}}
            {{--            <li>25 Reviews</li>--}}
        </ul>
        <p>{{$course->description}}</p>
        <ul class="course-meta desc">
            <li>
                <h6>{{$course->getFLesson()}}</h6>
                <span> Buổi</span>
            </li>
            <li>
                <h6><span class="course-time">{{$course->getDuration()}}</span></h6>
                <span>Thời gian dự kiến</span>
            </li>
        </ul>
        <a class="flat-button orange" href="{{route("grade",$course->code)}}">Xem chi tiết</a>
    </div>
</div>
