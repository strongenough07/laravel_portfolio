@extends('layouts.app')
@section('content')
@foreach ($testtt as $test)
<!-- Content -->
<div class="content-wrap clearfix">
    <!-- About Me -->
    <div class="mccan page">
        <h3 class="title-small">Web Designer</h3>
        <h2 class="title">Rory McCan</h2>
        <div class="content">
            <div class="grid-container">
                <div class="grid-column">
                    <p>Hi, My name is Rory McCan. I am a Web Designer, and etiam accumsan scelerisque rhoncus. Nulla quis laorey velit drana. Pelteqle quisu velleopha retra congue. Nulla quis laoreet velit. Pelteqle quisu velleopha retra congue. Lorem ipsum nolan sithe cons eturadip liscing elit. Donec hendrerit sapien coner the consequat erose viverra at. Quality quis laorey velit. Pelteqle quisu velleopha retra the congue.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <p><b>Birthday:</b> 15 April 1990</p>
                            <p><b>Website:</b> www.mccan.com</p>
                            <p><b>Phone:</b> +1 123-000-4444</p>
                        </div>
                        <div class="col-md-6">
                            <p><b>Degree:</b> Master</p>
                            <p><b>Mail:</b> info@mccan.com</p>
                            <p><b>Linkedin:</b> /rorymccan</p>
                        </div>
                    </div> <a href="#" class="btn ajax">Hire Me</a> </div>
            </div>
        </div>
    </div>
    <h1>
        {{$test->content}}
    </h1>
    <div class="divider1"></div>
    <!-- Services -->
    <div class="mccan page">
        <h3 class="title-small">What I Do</h3>
        <h2 class="title">Services</h2>
        <div class="content">
            <div class="grid-container">
                <div class="grid-column">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="feature feature-left">
                                <div class="mccan-icon"> <span class="et-telescope font-35px"></span> </div>
                                <div class="mccan-text">
                                    <h3>Web Desing</h3>
                                    <p>Fusce suscipit, ante a hendrerit thelery ullamcorper vivense comtersa risus nisl cursus nurus the viverra ante nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature feature-left">
                                <div class="mccan-icon"> <span class="et-lightbulb font-35px"></span> </div>
                                <div class="mccan-text">
                                    <h3>Development</h3>
                                    <p>Fusce suscipit, ante a hendrerit thelery ullamcorper vivense comtersa risus nisl cursus nurus the viverra ante nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature feature-left">
                                <div class="mccan-icon"> <span class="et-camera font-30px"></span></div>
                                <div class="mccan-text">
                                    <h3>Photography</h3>
                                    <p>Fusce suscipit, ante a hendrerit thelery ullamcorper vivense comtersa risus nisl cursus nurus the viverra ante nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature feature-left">
                                <div class="mccan-icon"> <span class="et-presentation font-35px"></span> </div>
                                <div class="mccan-text">
                                    <h3>Marketing</h3>
                                    <p>Fusce suscipit, ante a hendrerit thelery ullamcorper vivense comtersa risus nisl cursus nurus the viverra ante nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature feature-left">
                                <div class="mccan-icon"> <span class="et-mobile font-35px"></span></div>
                                <div class="mccan-text">
                                    <h3>Fully Responsive</h3>
                                    <p>Fusce suscipit, ante a hendrerit thelery ullamcorper vivense comtersa risus nisl cursus nurus the viverra ante nulla.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="feature feature-left">
                                <div class="mccan-icon"> <span class="et-layers font-35px"></span> </div>
                                <div class="mccan-text">
                                    <h3>Art Direction</h3>
                                    <p>Fusce suscipit, ante a hendrerit thelery ullamcorper vivense comtersa risus nisl cursus nurus the viverra ante nulla.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@stop
