@extends('layouts.app')
@section('content')
<div class="content-wrap">
    <div class="mccan page">
        <h3 class="title-small">LOCATION</h3>
        <h2 class="title">Contact Me</h2>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <p>If you’d like to talk about a project, our work or anything else then get in touch.</p>
                    <div class="list">
                        <ul>
                            <li><strong>Phone :</strong> +1 123 000 4444</li>
                            <li><strong>Email :</strong> info@mccan.com</li>
                            <li><strong>Address :</strong> 2 Curiosity Way, San Mateo, CA 94403, US.</li>
                            <li><strong>Map :</strong> <a href="#">via Google Maps</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="divider1"></div>
            <div class="row">
                <div class="col-md-8">
                    <h6 class="mb-20"><strong>Get in touch</strong></h6>
                    <form>
                        <div class="message d-none">
                            <div class="alert notice"></div>
                        </div>
                        <label for="name" class="screen-reader-text">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name *" required="">
                        <label for="email" class="screen-reader-text">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email *" required="">
                        <label for="message" class="screen-reader-text">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Message *" required=""></textarea>
                        <input type="submit" class="btn ajax" value="Say Hello"> </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <p>&copy; 2020 <a href="index.html">McCan</a>. All Rights Reserved.</p>
    </div>
</div>
<!-- Hidden Menu -->
<div class="additional-menu-content">
    <h3 class="title-small">Web Designer</h3>
    <h2 class="title">Rory McCan</h2> <img src="images/about.png" alt="">
    <p>Hi, My name is Rory McCan. I am a Web Designer, and etiam accumsan scelerisque rhoncus. Nulla quis laoreet velit. Pelteqle quisu velleopha retra congue.</p> <a href="#" class="btn ajax">Hire Me</a>
    <div class="divider2"></div>
    <h3 class="title-small">@rorymccan</h3>
    <h2 class="title">Instagram</h2>
    <div class="sb-widget fl-wrap">
        <div class="insta-thumb">
            <a href="#"><img src="images/insta/01.jpg" alt=""></a>
            <a href="#"><img src="images/insta/02.jpg" alt=""></a>
            <a href="#"><img src="images/insta/03.jpg" alt=""></a>
            <a href="#"><img src="images/insta/04.jpg" alt=""></a>
            <a href="#"><img src="images/insta/05.jpg" alt=""></a>
            <a href="#"><img src="images/insta/06.jpg" alt=""></a>
        </div>
    </div>
</div>
@endsection
