<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.themeregion.com/newshub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 22:04:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>The Hunger Eradication</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jplayer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/my_style.css')}}">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika+Negative" rel="stylesheet">

    <!-- icons -->
    <link rel="icon" href="{{asset('assets/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{asset('assets/images/ico/apple-touch-icon-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('assets/images/ico/apple-touch-icon-114-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{asset('assets/images/ico/apple-touch-icon-72-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="57x57"
          href="{{asset('assets/images/ico/apple-touch-icon-57-precomposed.html')}}">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
</head>
<body>
<div class="main-wrapper tr-page-top homepage">
    <div class="container-fluid">
        <div class="row">
            @include('includes/site_bar')
            <div class="col-lg-9">
                @include('includes/navigation')
                <div class="tr-home-slider home-slider-1 tr-section">
                    <div id="home-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#home-carousel" data-slide-to="0" class="active">
                                <span class="catagory">World</span>
                                <span class="indicators-title">U.S. marshal killed serving warrant at mobile</span>
                            </li>
                            <li data-target="#home-carousel" data-slide-to="1">
                                <span class="catagory">Technology</span>
                                <span class="indicators-title">Chelsea Handler slams Angelina yet again</span>
                            </li>
                            <li data-target="#home-carousel" data-slide-to="2">
                                <span class="catagory">Business</span>
                                <span class="indicators-title">Mirum est notare quam littera gothica </span>
                            </li>
                            <li data-target="#home-carousel" data-slide-to="3">
                                <span class="catagory">Politics</span>
                                <span class="indicators-title">Duis autem vel eum iriure dolor in hendrerit in</span>
                            </li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item carousel-item active"
                                 style=" background-image: url({{asset('assets/images/post/slider1.jpg')}})">
                                <div class="post-content">
                                    <span class="catagory" data-animation="animated fadeInUp"><a
                                            href="#">World</a></span>
                                    <h2 class="entry-title" data-animation="animated fadeInUp">
                                        <a href="details.html">U.S. marshal killed serving warrant at mobile</a>
                                    </h2>
                                    <div class="entry-meta" data-animation="animated fadeInUp">
                                        <ul>
                                            <li>By <a href="#">Adam Hianks</a></li>
                                            <li>643 Share /<a href="#"> 9 Hour ago</a></li>
                                            <li>
                                                <ul>
                                                    <li>Share</li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                       aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.post-content -->
                            </div><!-- /.item -->

                            <div class="item carousel-item"
                                 style="background-image: url({{asset('assets/images/post/slider2.jpg')}})">
                                <div class="post-content">
                                    <span class="catagory" data-animation="animated fadeInUp"><a href="#">Technology</a></span>
                                    <h2 class="entry-title" data-animation="animated fadeInUp">
                                        <a href="details.html">Chelsea Handler slams Angelina yet again</a>
                                    </h2>
                                    <div class="entry-meta" data-animation="animated fadeInUp">
                                        <ul>
                                            <li>By <a href="#">Adam Hianks</a></li>
                                            <li>643 Share /<a href="#"> 9 Hour ago</a></li>
                                            <li>
                                                <ul>
                                                    <li>Share</li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                       aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.post-content -->
                            </div><!-- /.item -->

                            <div class="item carousel-item"
                                 style="background-image: url({{asset('assets/images/post/1.jpg')}})">
                                <div class="post-content">
                                    <span class="catagory" data-animation="animated fadeInUp"><a
                                            href="#">Business</a></span>
                                    <h2 class="entry-title" data-animation="animated fadeInUp">
                                        <a href="details.html">Mirum est notare quam littera gothica</a>
                                    </h2>
                                    <div class="entry-meta" data-animation="animated fadeInUp">
                                        <ul>
                                            <li>By <a href="#">Adam Hianks</a></li>
                                            <li>643 Share /<a href="#"> 9 Hour ago</a></li>
                                            <li>
                                                <ul>
                                                    <li>Share</li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                       aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.post-content -->
                            </div><!-- /.item -->

                            <div class="item carousel-item"
                                 style="min-height:500px; background-image: url({{asset('assets/images/post/15.jpg')}});background-repeat:no-repeat;background-size:cover;">
                                <div class="post-content">
                                    <span class="catagory" data-animation="animated fadeInUp"><a href="details.html">Politics</a></span>
                                    <h2 class="entry-title" data-animation="animated fadeInUp">
                                        <a href="details.html">Duis autem vel eum iriure dolor in hendrerit</a>
                                    </h2>
                                    <div class="entry-meta" data-animation="animated fadeInUp">
                                        <ul>
                                            <li>By <a href="#">Adam Hianks</a></li>
                                            <li>643 Share /<a href="#"> 9 Hour ago</a></li>
                                            <li>
                                                <ul>
                                                    <li>Share</li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                       aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.post-content -->
                            </div><!-- /.item -->
                        </div><!-- /.carousel-inner -->
                    </div><!-- /#home-carousel -->
                </div><!-- /.tr-home-slider -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h1><span><a href="#">Create Post</a></span></h1>
                        </div>
                        <div class="latest-result text-center">
                            <div class="latest-result-content">
                                <div class="row">
                                    <div style="width: 100%">
                                        <div class="logo text-center">
                                        </div>
                                        <form action="{{route('store.post')}}" class="form_submission" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" name="content"
                                                          required="required"></textarea>
                                                <input type="hidden" name="longitude" value="">
                                                <input type="hidden" name="latitude" value="">
                                                <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                                <button type="submit" class="btn btn-primary">Post</button>
                                            </div>
                                        </form><!-- /.contact-form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tr-content">
                            <div class="tr-section bg-transparent">
                                <div class="section-title">
                                    <h1><span><a href="#">Post</a></span></h1>
                                </div>
                                @foreach($posts as $post)
                                    <div class="tr-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <iframe
                                                    src="https://maps.google.com/maps?q={{$post->latitude}},{{$post->longitude}}&amp;z=15&amp;output=embed"
                                                    width="100%" height="300px"></iframe>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>By <a href="#">{{Auth::user()->name}}</a></li>
                                                </ul>
                                            </div><!-- /.entry-meta -->
                                            <h2 class="entry-title">
                                                <a>{{$post->content}}</a>
                                                @if(Auth::user()->type == 'admin')
                                                    <i class="fa fa-trash text-danger delete-btn" aria-hidden="true"
                                                       data-model="posts"
                                                       data-id="{{$post->post_id}}"></i>

                                                @endif

                                            </h2>
                                        </div><!-- /.post-content -->
                                        <div class="dropdown_checkbox" data-toggle="1">
                                            <i class='fa fa-location-arrow' style='font-size:24px'></i>
                                        </div>
                                        <div class="container-fluid checkbox-open"
                                             style="margin-top: 10px; display: none">
                                            <div class="row"
                                                 style="border: 1px solid #555555; margin: 0 80px; border-radius: 5px">
                                                @php
                                                    $arrays = [$post->Clothes.'1' => 'Clothes', $post->Shelter.'2' => 'Shelter', $post->Other.'3' => 'Other'];
                                                    uksort($arrays, 'strcasecmp');
                                                @endphp
                                                @foreach($arrays as $key => $array)
                                                    @php
                                                        $keyzero = explode('0',$key);
                                                    @endphp
                                                    <div class="col-md-4">
                                                        <div style="text-align: center">
                                                            <div class="card-body">
                                                                <input type="checkbox" class="checkbox_selection"
                                                                       data-post-id="{{$post->post_id}}"
                                                                       name="{{$array}}"
                                                                       value="{{$array}}"
                                                                       {{!empty($keyzero[0]) ? 'checked' : ''}}
                                                                       {{!empty($keyzero[0]) ? 'disabled' : ''}}
                                                                       style="width:6rem;height: 6rem;{{!empty($keyzero[0]) ? 'accent-color: green;' : ''}}">
                                                                <p><b>{{$array}}</b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!-- tr-post -->
                                @endforeach
                                <div class="row">
                                    @foreach($newses as $news)
                                        <div class="col-md-6 medium-post">
                                            <div class="tr-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <a href="#"><img class="img-fluid"
                                                                         src="{{asset('assets/news')}}/{{$news->image}}"
                                                                         alt="Image"></a>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>By <a href="#">{{$news->name}}</a></li>
                                                        </ul>
                                                    </div><!-- /.entry-meta -->
                                                    <h2 class="entry-title">
                                                        <a href="#">{{$news->news}}</a>
                                                    </h2>
                                                </div><!-- /.post-content -->
                                            </div><!-- tr-post -->
                                        </div>
                                    @endforeach
                                </div><!-- /.row -->
                            </div><!-- /.business-section -->
                        </div><!-- /.tr-content -->
                    </div>
                </div><!-- row -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fulid -->
</div><!-- /.main-wrapper -->
@include('includes/footer')
