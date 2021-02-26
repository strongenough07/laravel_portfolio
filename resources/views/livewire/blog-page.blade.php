@extends('layouts.app')
@section('content')
<div class="content-wrap clearfix">
    <div class="mccan page">
        <h3 class="title-small">Blog</h3>
        <h2 class="title">LATEST NEWS</h2>
        <div class="content">
            <div class="grid-container">
                <div class="grid-column">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-listing">
                                <article class="post">
                                    <div class="media">
                                        <a href="post.html"> <img src="images/blog/1.jpg" alt=""> </a>
                                    </div>
                                    <header class="header">
                                        <h4><a href="post.html">Vivamus aliquam the sapien</a></h4>
                                        <div class="meta-data"> <span class="meta-date">28 Dec 2020</span> <span class="meta-comments"><a href="post.html">3 Comments</a></span> </div>
                                        <div class="excerpt">
                                            <p>Nulla quis laoreet velit. Pelteqle quisu velleopha retra congue. Lorem ipsuen dolorin sitame consectetur adipiscing elit. Donec hendrerit dui sapien coner consequat erose viverra ati aliquam est moli egemen.</p> <a href="post.html" class="btn">Read more </a> </div>
                                    </header>
                                </article>
                                <article class="post">
                                    <div class="media">
                                        <a href="post.html"> <img src="images/blog/2.jpg" width="1200" height="520" alt=""> </a>
                                    </div>
                                    <header class="header">
                                        <h4><a href="post.html">Maecen tincidunt the lonan</a></h4>
                                        <div class="meta-data"> <span class="meta-date"><a href="post.html">26 Dec 2020</a></span> <span class="meta-comments"><a href="post.html">3 Comments</a></span> </div>
                                        <div class="excerpt">
                                            <p>Nulla quis laoreet velit. Pelteqle quisu velleopha retra congue. Lorem ipsuen dolorin sitame consectetur adipiscing elit. Donec hendrerit dui sapien coner consequat erose viverra ati aliquam est moli egemen.</p> <a href="post.html" class="btn">Read more </a> </div>
                                    </header>
                                </article>
                                <article class="post">
                                    <div class="media">
                                        <a href="post.html"> <img src="images/blog/3.jpg" alt=""> </a>
                                    </div>
                                    <header class="header">
                                        <h4><a href="post.html">Sodales vivense hendrerit</a></h4>
                                        <div class="meta-data"> <span class="meta-date"><a href="post.html">24 Dec 2020</a></span> <span class="meta-comments"><a href="post.html">3 Comments</a></span> </div>
                                        <div class="excerpt">
                                            <p>Nulla quis laoreet velit. Pelteqle quisu velleopha retra congue. Lorem ipsuen dolorin sitame consectetur adipiscing elit. Donec hendrerit dui sapien coner consequat erose viverra ati aliquam est moli egemen.</p> <a href="post.html" class="btn">Read more </a> </div>
                                    </header>
                                </article>
                                <div class="mccan-blog-navigation">
                                    <ul>
                                        <li class="mccan-black-bg"><a href="#"><i class="ti-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a class="active" href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li class="mccan-black-bg"><a href="#"><i class="ti-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mccan-sidebar-part">
                                <div class="mccan-sidebar-block mccan-sidebar-block-search animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                    <form class="mccan-sidebar-search-form" method="get">
                                        <input type="text" name="name" id="search" placeholder="Search...">
                                        <button type="submit" class="ti-arrow-right mccan-sidebar-search-submit"></button>
                                    </form>
                                </div>
                                <div class="mccan-sidebar-block mccan-sidebar-block-categories animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                    <div class="mccan-sidebar-block-title"> Categories </div>
                                    <div class="mccan-sidebar-block-content">
                                        <ul class="ul1">
                                            <li> <a href="blog.html#">UX Design</a> </li>
                                            <li> <a href="blog.html#">Media Planing</a> </li>
                                            <li> <a href="blog.html#">Brand Identity</a> </li>
                                            <li> <a href="blog.html#">Digital Art</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mccan-sidebar-block mccan-sidebar-block-latest-posts animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                    <div class="mccan-sidebar-block-title"> Latest Posts </div>
                                    <div class="mccan-sidebar-block-content">
                                        <div class="latest">
                                            <a href="blog.html#" class="clearfix">
                                                <div class="txt1">Vivamus drana aliquam the miss lorem ipsum sapien</div>
                                                <div class="txt2">27 Sep 2020</div>
                                            </a>
                                        </div>
                                        <div class="latest">
                                            <a href="blog.html#" class="clearfix">
                                                <div class="txt1">Maecen tincidun the emin lonan vivense drana monte</div>
                                                <div class="txt2">26 Sep 2020</div>
                                            </a>
                                        </div>
                                        <div class="latest">
                                            <a href="blog.html#" class="clearfix">
                                                <div class="txt1">Sodales vivense the miss drana fundam nune hendrerit</div>
                                                <div class="txt2">25 Sep 2020</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mccan-sidebar-block mccan-sidebar-block-tags animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                                    <div class="mccan-sidebar-block-title"> Tags </div>
                                    <div class="mccan-sidebar-block-content">
                                        <ul class="tags clearfix">
                                            <li><a href="blog.html#">Design</a></li>
                                            <li><a href="blog.html#">SEO</a></li>
                                            <li><a href="blog.html#">Pesponsive</a></li>
                                            <li><a href="blog.html#">Bootstrap</a></li>
                                            <li><a href="blog.html#">Digital Maeting</a></li>
                                            <li><a href="blog.html#">WordPress</a></li>
                                            <li><a href="blog.html#">Usability</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
