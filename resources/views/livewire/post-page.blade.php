@extends('layouts.app')
@section('content')
<div class="content-wrap">
    <div class="mccan page">
        <div class="content">
            <div class="grid-container">
                <div class="grid-column">
                    <article class="post">
                        <header class="header">
                            <h4><a href="post.html">Vivamus aliquam the sapien</a></h4>
                            <div class="meta-data"> <span class="meta-date"><a href="post.html">24 Dec 2020</a></span> <span class="meta-categories"><a href="blog.html">Blog</a></span> </div>
                        </header>
                        <div class="media">
                            <a href="#"> <img src="images/blog/1.jpg" alt=""> </a>
                        </div>
                        <div class="content">
                            <p>Nulla quis laoreet velit. Pelteqle quisu velleopha retra congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit dui sapien coner consequat erose viverra at. Vivamus aliquam semper orci, ut sodales est mollis eget. Sed vel nisi a odio scelerisque rutrum a ornare massa. Maecen tincidunt enim vel vestibulum pellentesque.</p>
                            <p>Vivamus aliquam semper orci, ut sodales est mollis eget. Nulla quis laoreet velit. Pelteqle quisu velleopha retra congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nisi a odio scelerisque rutrum a ornare massa.</p>
                            <p>Donec hendrerit dui sapien coner consequat erose viverra at. Nulla quis laoreet velit. Pelteqle quisu velleopha retra congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquam semper orci, ut sodales est mollis eget. Sed vel nisi a odio scelerisque rutrum a ornare massa. Maecen tincidunt enim vel vestibulum pellentesque.</p>
                        </div>
                        <aside class="author-box has-description clearfix">
                            <figure class="author-box-image"> <img alt="" src="images/about.png" class="avatar photo"> </figure>
                            <div class="author-content">
                                <h5 class="author-box-title">Published by Rory McCan </h5>
                                <div class="author-box-description">
                                    <p>Hey I’m Rory McCan, a freelance Web Designer and Graphics Designer from California USA. You can find me on <a href="#">rorymccan.com</a>. Follow me on Instagram &amp; Dribbble for any updates.</p>
                                </div>
                            </div>
                        </aside>
                        <div class="comment-contact">
                            <h5 class="reply-title">Leave a Reply</h5>
                            <form>
                                <div class="message d-none">
                                    <div class="alert notice"></div>
                                </div>
                                <label for="name" class="screen-reader-text">Name</label>
                                <input type="text" name="name" id="name" placeholder="Name *" required="">
                                <label for="email" class="screen-reader-text">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email *" required="">
                                <label for="message" class="screen-reader-text">Comment</label>
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Comment *" required=""></textarea>
                                <input type="submit" class="btn" value="Submit"> </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
