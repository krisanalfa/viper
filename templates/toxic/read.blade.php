@extends('layout')

@section('styler')
@include('components.markdown-head')
<!-- <link rel="stylesheet" href="{{ Theme::base('vendor/css/animate.min.css') }}"> -->
@endsection

@section('title')
{{ $entry->get('title') }}
@endsection

@section('meta')
<meta name="description" content="{{ $entry->overView(155) }}" />
<!-- <link rel="author" href="https://account.app.xinix.co.id/{{ $entry->getAuthorName(true) }}" /> -->

<meta property="og:title" content="{{ $entry->get('title') }}" />
<meta property="og:type" content="article" />
<meta property="og:image" content="{{ URL::base('/assets/img/logo.png') }}" />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:description" content="{{ $entry->overView(297) }}" />

<meta name="twitter:card" content="summary" />
<meta name="twitter:url" content="{{ URL::current() }}" />
<meta name="twitter:site" content="@xinixtechnology" />
<meta name="twitter:title" content="{{ $entry->get('title') }}" />
<meta name="twitter:description" content="{{ $entry->overView(200) }}" />
<meta name="twitter:image" content="{{ URL::base('/assets/img/logo.png') }}" />
@endsection

@section('content')
<div class="container toxic-wrapper">
    <div class="panel panel-default animated bounceInUp">
        <div class="panel-heading">
            <a class="pull-left" href="#">
                <img class="avatar media-object img-circle img-thumbnail panel-image" src="{{ URL::base('assets/img/'.$entry->getAuthorImage()) }}">
            </a>
            <h2 class="panel-main-title">
                {{ $entry->get('title') }}
                <small>Written by {{ $entry->getAuthorName() }} at {{ $entry->getCreatedTime() }}
                @if($entry->hasUpdated())
                    <i>last updated at {{ $entry->getUpdatedTime() }}</i>
                @endif
                </small>
            </h2>
        </div>
        <div class="panel-body">
            <div class="media">
                <div class="media-body">
                    {{ App::getInstance()->container['markdown']->render($entry->getDecodedContent()) }}
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a href="{{ URL::site() }}" class="animated bounceInDown btn btn-primary"><i class="fa fa-home"></i> Get more toxic</a>
            @if(f('auth.allowed', '/update'))
                @if(isset($_SESSION['user']))
                    @if($entry->get('$created_by') === $_SESSION['user']['$id'])
                        <a href="{{ URL::site('/toxic/'.$entry->getId().'/update') }}" class="animated bounceInLeft btn btn-success"><i class="fa fa-edit"></i> Update</a>
                        <a href="{{ URL::site('/toxic/'.$entry->getId().'/delete') }}" class="animated bounceInRight btn btn-warning"><i class="fa fa-trash-o"></i> Delete</a>
                    @endif
                @endif
            @endif
            <button class="btn btn-primary twitter-share" data-href="https://twitter.com/intent/tweet?hashtags=VIPER&original_referer={{ urlencode(URL::current()) }}&related=xinixtechnology&text={{ urlencode($entry->get('title')) }}&tw_p=tweetbutton&url={{ urlencode(URL::current()) }}&via=XinixTechnology"><i class="fa fa-twitter"></i> Share on Twitter</button>
            <button class="btn btn-primary facebook-share"><i class="fa fa-facebook"></i> Share on Facebook</button>
        </div>
        <!-- <div class="panel-body" id="noise-root"></div> -->
    </div>
</div>
<div id="fb-root"></div>
@endsection

@section('injector')
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '508072309320794',
            xfbml      : true,
            version    : 'v2.2'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script>
    $('.twitter-share').click(function() {
        var winTop = (screen.height / 2) - (275 / 2);
        var winLeft = (screen.width / 2) - (550 / 2);
        var href = $(this).data('href');
        window.open(href, 'Share on Twitter', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + 550 + ',height=' + 275);
    });
</script>

<script>
    $(document).ready(function() {
        prettyPrint();

        $('img:not(".avatar")').addClass('img-responsive center-block img-thumbnail img-thumbnail img-rounded');
        $('.avatar').hide();

        function repositioning()
        {
            var panelHeight = $('.panel-heading').height(),
                avatarHeight = $('.avatar').height(),
                marginTop = (panelHeight - avatarHeight) / 2;

            $('.avatar').css('margin-top', marginTop+'px');
            $('.avatar').show();
        }

        $(window).resize(function() {
            repositioning();
        });

        setTimeout(function() {
            repositioning();
        }, 500);

        $('.facebook-share').click(function() {
            FB.ui({
                method: 'share',
                href: '{{ URL::current() }}',
            }, function(response) {
                console.log(response);
            });
        });
    });
</script>

<!-- <script>
    window.NOISE_SHARED_KEY = '5833c02d-5dcc-54bc-9a86-89a88579fb27';
    window.NOISE_SHORT_NAME = 'viper';
</script>
<script src="http://localhost/noise/index.php/api/js"></script> -->
@endsection
