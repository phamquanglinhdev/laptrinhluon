@extends("layouts.client")
@section("content")
    <div class="page-title parallax parallax4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h2 class="title">COURSES GRID 3 COLUMNS</h2>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Courses Grid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="main-content blog-posts flat-row course-grid">
        <div class="container">
            <div class="blog-title clearfix">
                <h1 class="bold">ALL COURSES</h1>
            </div>
            <div class="row">
                <div class="flat-post-ordering clearfix">
                    <div class="sort-views">
                        <label class="modern-select">
                            <select name="select_category" class="orderby">
                                <option value="menu_order" selected="selected">Select Category</option>
                                <option value="Accessories">Accessories</option>
                                <option value="mobile_app">Mobile App</option>
                                <option value="fashion_design">Fashion Desin</option>
                                <option value="web_design">Web Design</option>
                            </select>
                        </label>
                        <label class="modern-select">
                            <select name="select_category" class="orderby">
                                <option value="menu_order" selected="selected">Sort by</option>
                                <option value="newest">Newest</option>
                                <option value="oldest">Oldest</option>
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
                <div class="post-warp clearfix">
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/index/course1.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Photoshop - Web Deisgn</a></h4>
                            <div class="price">$290</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/index/course2.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Sketch - Mobile App</a></h4>
                            <div class="price">$170</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/index/course3.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Corel - Fashion Deisgn</a></h4>
                            <div class="price">$290</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/services/v1/4.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Photoshop - Web Deisgn</a></h4>
                            <div class="price">$290</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/services/v1/5.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Sketch - Mobile App</a></h4>
                            <div class="price">$170</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/services/v1/6.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Corel - Fashion Deisgn</a></h4>
                            <div class="price">$290</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/services/v1/4.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Photoshop - Web Deisgn</a></h4>
                            <div class="price">$290</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/services/v1/5.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Sketch - Mobile App</a></h4>
                            <div class="price">$170</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                    <div class="flat-course flat-hover-zoom">
                        <div class="featured-post">
                            <div class="overlay">
                                <div class="link"></div>
                            </div>
                            <div class="entry-image">
                                <a href="courses-single.html"><img src="images/services/v1/6.jpg" alt="Course1"></a>
                            </div>
                        </div>
                        <div class="course-content">
                            <h4><a href="courses-single.html">Corel - Fashion Deisgn</a></h4>
                            <div class="price">$290</div>
                            <ul class="course-meta review clearfix">
                                <li class="author">
                                    <div class="thumb">
                                        <img src="images/flickr/4.jpg" alt="image">
                                    </div>
                                    <div class="text">
                                        <a href="#">Michael Windzor</a>
                                        <p>Teacher</p>
                                    </div>
                                </li>
                                <li class="review-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </li>
                                <li>25 Reviews</li>
                            </ul>
                            <p> Celebrate success right, the only way, apple. To succeed you must believe. When you
                                believe, you will succeed.</p>
                            <ul class="course-meta desc">
                                <li>
                                    <h6>1 year</h6>
                                    <span> Course</span>
                                </li>
                                <li>
                                    <h6>25</h6>
                                    <span> Class Size</span>
                                </li>
                                <li>
                                    <h6><span class="course-time">7:00 - 10:00</span></h6>
                                    <span> Class Duration</span>
                                </li>
                            </ul>
                            <a class="flat-button orange" href="courses.html">SEE MORE</a>
                        </div>
                    </div>
                </div>
                <div class="blog-pagination">
                    <ul class="flat-pagination">
                        <li><span class="active">1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="next">
                            <a href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
