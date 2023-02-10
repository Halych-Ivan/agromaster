@extends('layouts.index')

@section('title', 'Blog')




@section('content')

{{--    {{ dd($post) }}--}}

<!--====== Blog Details Start ======-->
<section class="blog-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <div class="details-content mt-50">

                        <img src="{{ asset('/storage/'.$post->main_image) }}" alt="" height="200">
                        <h3 class="title">{{ $post->title }}</h3>

                        <ul class="meta">
                            <li><a href="#">25 May, 2020</a></li>
                            <li><a href="#">By: Alex</a></li>
                            <li><a href="#">12 Comments</a></li>
                        </ul>

                        {!! $post->content !!}


                        <div class="blog-tags">
                            <span>Tags:</span>
                            <ul class="tags">
{{--                                @foreach($tags as $tag)--}}
{{--                                    <li><a href="#">{{ $tag->title }}</a></li>--}}
{{--                                @endforeach--}}
                            </ul>
                        </div>
                    </div>

                    <div class="blog-comment">
                        <h3 class="comment-title">Comments(03)</h3>

                        <ul class="comment-items">
                            <li>
                                <div class="single-comment">
                                    <div class="comment-author">
                                        <img src="assets/images/author-1.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="meta">
                                            <h5 class="name">Alex Smith,</h5>
                                            <span class="time">1 hour ago</span>
                                        </div>
                                        <p>Some of the people may be the right If you are going use a passage belongs to those who fail in their duty through weakness </p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                                <ul class="comment-reply">
                                    <li>
                                        <div class="single-comment">
                                            <div class="comment-author">
                                                <img src="assets/images/author-2.jpg" alt="">
                                            </div>
                                            <div class="comment-content">
                                                <div class="meta">
                                                    <h5 class="name">Alex Smith,</h5>
                                                    <span class="time">1 hour ago</span>
                                                </div>
                                                <p>Some of the people may be the right If you are going use a passage belongs to those who fail in their duty through weakness </p>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="single-comment">
                                    <div class="comment-author">
                                        <img src="assets/images/author-3.jpg" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="meta">
                                            <h5 class="name">Alex Smith,</h5>
                                            <span class="time">1 hour ago</span>
                                        </div>
                                        <p>Some of the people may be the right If you are going use a passage belongs to those who fail in their duty through weakness </p>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar right-sidebar pt-20">
                    <div class="blog-sidebar-category mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Categories</h4>
                        </div>
                        <ul class="category-items">
                            @foreach($categories as $category)
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio1">
                                    <label for="categoryRadio1"> <span></span> {{ $category->title }} <strong>({{ $categoriesCount }})</strong></label>
                                </div>
                            </li>
                            @endforeach


                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio2">
                                    <label for="categoryRadio2"> <span></span> Marketing <strong>(18)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio3">
                                    <label for="categoryRadio3"> <span></span> Design <strong>(10)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio4">
                                    <label for="categoryRadio4"> <span></span> Social Marketing <strong>(05)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio5">
                                    <label for="categoryRadio5"> <span></span> Fine Arts <strong>(12)</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="form-radio">
                                    <input type="radio" name="categoryRadio" id="categoryRadio6">
                                    <label for="categoryRadio6"> <span></span> Law <strong>(05)</strong></label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-sidebar-post mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Recent Post</h4>
                        </div>
                        <ul class="post-items">
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img src="assets/images/post-1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Guest Interview will Occur in English</a></h4>
                                        <a href="#" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img src="assets/images/post-2.jpg" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Online Courses are available now</a></h4>
                                        <a href="#" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img src="assets/images/post-3.jpg" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">Workshop on English native Language</a></h4>
                                        <a href="#" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-post">
                                    <div class="post-thumb">
                                        <a href="blog-details.html"><img src="assets/images/post-4.jpg" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <h4 class="post-title"><a href="blog-details.html">How to find resources for Laravel Language </a></h4>
                                        <a href="#" class="more">Read more <i class="fal fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-sidebar-banner mt-30">
                        <a href="#">
                            <img src="assets/images/product/banner.jpg" alt="">
                        </a>
                    </div>

                    <div class="blog-sidebar-tags mt-30">
                        <div class="sidebar-title">
                            <h4 class="title">Tags</h4>
                        </div>
                        <ul class="tags-items">
                            <li><a href="#">Books</a></li>
                            <li><a href="#">Event</a></li>
                            <li><a href="#">Pen</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Pencil</a></li>
                            <li><a href="#">Stationary</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">ecommerce</a></li>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Shopping</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Blog Details Ends ======-->
@endsection
