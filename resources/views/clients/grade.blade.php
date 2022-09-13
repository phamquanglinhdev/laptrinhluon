@extends("layouts.client")
@section("content")
    <div class="page-title parallax parallax4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2 class="title">{{$grade->name}}</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">{{$grade->Category()->first()->name}}</a></li>
                            <li>{{$grade->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="main-content blog-posts course-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-title-single">
                        <h1 class="bold">{{$grade->name}}</h1>
                        <ul class="course-meta review style2 clearfix">
                            <li class="author">
                                <div class="thumb">
                                    <img src="{{asset("images/teacher/Team-05.jpg")}}" alt="image">
                                </div>
                                <div class="text">
                                    <a href="#">{{$grade->User()->first()->name}}</a>
                                    <p>Giảng viên</p>
                                </div>
                            </li>
                            <li class="categories">
                                <a href="#" class="course-name">{{$grade->Category()->first()->name}}</a>
                                <p>Danh mục</p>
                            </li>
                            <li class="review-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half"></i>
                                <i class="fa fa-star-o"></i>
                                <p>Reviews</p>
                            </li>
                            <li>25 Reviews</li>
                        </ul>
                        <div class="feature-post">
                            <img src="{{$grade->thumbnail}}" alt="image">
                        </div>
                        <div class="course-widget-price">
                            <h4 class="course-title">ĐẠI CƯƠNG KHÓA HỌC</h4>
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <span>Bắt đầu vào</span>
                                    <span class="time">{{$grade->getStart()}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                    <span>Thời gian</span>
                                    <span class="time">{{$grade->getFLesson()}} Buổi học</span>
                                </li>
                                <li>
                                    <i class="fa fa-leanpub" aria-hidden="true"></i>
                                    <span>Lịch dạy</span>
                                    <span class="time">{{$grade->getDuration()}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    <span>Số lượng học viên</span>
                                    <span class="time">{{$grade->getSeat()}}</span>
                                </li>
                            </ul>
                            <h5 class="bt-course">Giá khóa học: <span>{{number_format($grade->getPrice())}} đ</span>
                            </h5>
                            @if($grade->status==0)
                                <a class="flat-button bg-orange" href="#">Đăng ký tư vấn</a>
                            @endif
                        </div>
                        <div class="entry-content">
                            <h4 class="title-1 bold text-uppercase">Giới thiệu chung</h4>
                            <p>
                                {!! $grade->getAbout() !!}
                            </p>
                            <div class="flat-spacer h8px"></div>
                            <h4 class="title-1 bold text-uppercase ">Bạn sẽ được học gì ?</h4>
                            {!! $grade->getAward() !!}
                            <h4 class="bold mgbt-17">Giáo trình của khóa học</h4>
                            <p class="mgbt-26">
                                Bạn có thể xem tiêu đề, tài liệu ,video ghi lại ( Online nếu có)
                            </p>
                            <ul class="curriculum">
                                @foreach($grade->syllabus as $index => $syllabus)
                                    <li class="section">
                                        <h4 class="section-title">{{$syllabus["name"]}}</h4>
                                        <ul class="section-content">
                                            @foreach($grade->getLesson($syllabus["lesson"]) as $lesson)
                                                <li class="course-lesson">
                                                    <a href="#" class="lesson-title">{{$lesson->name}}</a>
                                                    @if($lesson->public=="Có")
                                                        <a href="#" class="lesson-preview">Công khai</a>
                                                        <div class="fr">
                                                            <a href="{{$lesson->video}}"
                                                               class="attrachment-video">Video</a>
                                                            <a href="#{{$lesson->attachment}}" class="attrachment">Tài
                                                                liệu</a>
                                                        </div>
                                                    @else
                                                        <span class="lesson-preview">Không có quyền</span>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    {{--                    <div class="author-post">--}}
                    {{--                        <h4 class="title author-title">ABOUT INSTRUCTOR</h4>--}}
                    {{--                        <div class="author-body">--}}
                    {{--                            <div class="author-avatar">--}}
                    {{--                                <div class="thumb">--}}
                    {{--                                    <img src="images/flickr/4.jpg" alt="image">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="info clearfix">--}}
                    {{--                                    <div class="text">--}}
                    {{--                                        <h6><a href="#">Emily Foster</a></h6>--}}
                    {{--                                        <p>Web Designer</p>--}}
                    {{--                                        <ul class="flat-socials">--}}
                    {{--                                            <li class="facebook">--}}
                    {{--                                                <a href="#"><i class="fa fa-facebook"></i></a>--}}
                    {{--                                            </li>--}}
                    {{--                                            <li class="twitter">--}}
                    {{--                                                <a href="#"><i class="fa fa-twitter"></i></a>--}}
                    {{--                                            </li>--}}
                    {{--                                            <li class="linkedin">--}}
                    {{--                                                <a href="#"><i class="fa fa-linkedin"></i></a>--}}
                    {{--                                            </li>--}}
                    {{--                                            <li class="youtube">--}}
                    {{--                                                <a href="#"><i class="fa fa-youtube-play"></i></a>--}}
                    {{--                                            </li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <p class="desc">Before engineering, I developed and implemented CI (Continuous--}}
                    {{--                                    Improvement) management systems in companies across America in various industries to--}}
                    {{--                                    include a military finance organization. </p>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="comment-post">--}}
                    {{--                            <div class="comment-list-wrap">--}}
                    {{--                                <h4 class="title comment-title">Comment (3) </h4>--}}
                    {{--                                <ul class="comment-list">--}}
                    {{--                                    <li>--}}
                    {{--                                        <article class="comment">--}}
                    {{--                                            <div class="comment-avatar">--}}
                    {{--                                                <img src="images/blog/1singlev1.png" alt="image">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="comment-detail">--}}
                    {{--                                                <div class="comment-meta">--}}
                    {{--                                                    <p class="comment-author"><a href="#">Marie Morales</a></p>--}}
                    {{--                                                    <p class="comment-date"><a href="#">March 8, 2016 - 8:00am</a></p>--}}
                    {{--                                                </div>--}}
                    {{--                                                <p class="comment-body">Sed ut perspiciatis unde omnis iste natus sit--}}
                    {{--                                                    voluptatem accusantium doloremque laudantium, totam rem aperiam,--}}
                    {{--                                                    eaque ipsa quae ab illo inventore</p>--}}
                    {{--                                                <a href="#" class="comment-reply">Reply</a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </article>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <article class="comment style1">--}}
                    {{--                                            <div class="comment-avatar">--}}
                    {{--                                                <img src="images/blog/2singlev1.png" alt="image">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="comment-detail">--}}
                    {{--                                                <div class="comment-meta">--}}
                    {{--                                                    <p class="comment-author"><a href="#">Terry Moore</a></p>--}}
                    {{--                                                    <p class="comment-date"><a href="#">March 8, 2016 - 8:00am</a></p>--}}
                    {{--                                                </div>--}}
                    {{--                                                <p class="comment-body">Sed ut perspiciatis unde omnis iste natus sit--}}
                    {{--                                                    voluptatem laudantium, totam rem aperiam, eaque ipsa quae ab illo--}}
                    {{--                                                    inventore</p>--}}
                    {{--                                                <a href="#" class="comment-reply">Reply</a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </article>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <article class="comment no-border">--}}
                    {{--                                            <div class="comment-avatar">--}}
                    {{--                                                <img src="images/blog/3singlev1.png" alt="image">--}}
                    {{--                                            </div>--}}
                    {{--                                            <div class="comment-detail">--}}
                    {{--                                                <div class="comment-meta">--}}
                    {{--                                                    <p class="comment-author"><a href="#">Quetta Lee</a></p>--}}
                    {{--                                                    <p class="comment-date"><a href="#">March 8, 2016 - 8:00am</a></p>--}}
                    {{--                                                </div>--}}
                    {{--                                                <p class="comment-body">Sed ut perspiciatis unde omnis iste natus sit--}}
                    {{--                                                    voluptatem accusantium doloremque laudantium, totam rem aperiam,--}}
                    {{--                                                    eaque ipsa quae ab illo inventore</p>--}}
                    {{--                                                <a href="#" class="comment-reply">Reply</a>--}}
                    {{--                                            </div>--}}
                    {{--                                        </article>--}}
                    {{--                                    </li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                            <div id="respond" class="comment-respond">--}}
                    {{--                                <h4 class="title comment-title style1">Leave a comment</h4>--}}
                    {{--                                <p>Your email address will not be published. Required fields are marked *</p>--}}
                    {{--                                <form class="flat-contact-form" id="contactform6" method="post"--}}
                    {{--                                      action="https://themesflat.com/html/educate/contact/contact-process.php">--}}
                    {{--                                    <input type="text" value="" tabindex="1" placeholder="Name*" name="name" id="name"--}}
                    {{--                                           required="" style="">--}}
                    {{--                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email"--}}
                    {{--                                           id="email-contact1" required="">--}}
                    {{--                                    <textarea class="type-input" tabindex="3" placeholder="Comment*" name="message"--}}
                    {{--                                              id="message-contact1" required=""></textarea>--}}
                    {{--                                    <button class="flat-button bg-orange">Post Comment</button>--}}
                    {{--                                </form>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <div class="sidebar">
                    <div class="widget widget-categories">
                        <h5 class="widget-title">Danh mục</h5>
                        <ul>
                            @foreach($categories as $category)
                                <li>
                                    <a href="#">{{$category->name}}</a>
                                    <span class="numb-right">({{$category->Grades()->count()}})</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{--                    <div class="widget widget-teacher">--}}
                    {{--                        <h5 class="widget-title">Browse by Teacher</h5>--}}
                    {{--                        <div class="text-teacher">--}}
                    {{--                            <p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut--}}
                    {{--                                labore et dolore magna aliqua.</p>--}}
                    {{--                        </div>--}}
                    {{--                        <ul class="teacher-news clearfix">--}}
                    {{--                            <li>--}}
                    {{--                                <div class="thumb">--}}
                    {{--                                    <img src="images/flickr/4.jpg" alt="image">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="text">--}}
                    {{--                                    <a href="#">Charlie Brown</a>--}}
                    {{--                                    <p>Web Designer</p>--}}
                    {{--                                </div>--}}
                    {{--                                <ul class="flat-socials">--}}
                    {{--                                    <li class="facebook">--}}
                    {{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="twitter">--}}
                    {{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="linkedin">--}}
                    {{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="youtube">--}}
                    {{--                                        <a href="#"><i class="fa fa-youtube-play"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <div class="thumb">--}}
                    {{--                                    <img src="images/flickr/5.jpg" alt="image">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="text">--}}
                    {{--                                    <a href="#">Emily Foster</a>--}}
                    {{--                                    <p>Web Designer</p>--}}
                    {{--                                </div>--}}
                    {{--                                <ul class="flat-socials">--}}
                    {{--                                    <li class="facebook">--}}
                    {{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="twitter">--}}
                    {{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="linkedin">--}}
                    {{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="youtube">--}}
                    {{--                                        <a href="#"><i class="fa fa-youtube-play"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                <div class="thumb">--}}
                    {{--                                    <img src="images/flickr/6.jpg" alt="image">--}}
                    {{--                                </div>--}}
                    {{--                                <div class="text">--}}
                    {{--                                    <a href="#">Terry Moore</a>--}}
                    {{--                                    <p>Web Designer</p>--}}
                    {{--                                </div>--}}
                    {{--                                <ul class="flat-socials">--}}
                    {{--                                    <li class="facebook">--}}
                    {{--                                        <a href="#"><i class="fa fa-facebook"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="twitter">--}}
                    {{--                                        <a href="#"><i class="fa fa-twitter"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="linkedin">--}}
                    {{--                                        <a href="#"><i class="fa fa-linkedin"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li class="youtube">--}}
                    {{--                                        <a href="#"><i class="fa fa-youtube-play"></i></a>--}}
                    {{--                                    </li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    <div class="widget widget-featured-courses">
                        <h5 class="widget-title">KHÓA HỌC SẮP TRIỂN KHAI</h5>
                        <ul class="featured-courses-news clearfix">
                            @foreach($coming as $grade)
                                <li>
                                    <div class="thumb">
                                        <img src="{{$grade->Category()->first()->thumbnail}}" style="max-width: 100px"
                                             alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">{{$grade->name}}</a>
                                        <p>{{$grade->User()->first()->name}}</p>
                                    </div>
                                    <div class="review-rating">
                                        <div class="flat-money">
                                            <p>{{number_format($grade->getPrice())}} đ</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
