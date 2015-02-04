@extends('layout')

@section('content')
<div class="container toxic-wrapper">
    <div class="row text-center">
        <img src="{{ URL::base('/assets/img/logo.png') }}" alt="" class="logo">
    </div>
    <h1 class="text-center">VIPER <small>eVerything Is PERmitted</small></h1>

    <blockquote>
        <p><i>
            "To say that everything is permitted, is to understand that we are the architects of our actions, and that we must live with their consequences, whether glorious or tragic."
        </i></p>
        <footer><cite title="Ezio Auditore da Firenze">Ezio Auditore</cite></footer>
    </blockquote>
</div>

<div class="container">
    <p class="text-center">
        A new way to writing, inspired from Subhan Toba. So people now can write
        what is in their mind via a fun and fast blogging-like system.
        <br />
        <br />
        Our philosophy is to <b>create a simple blog management system, which you can feel happy when you write some text line by line</b>.
        <br />
        <br />
        If you want to contribute to this project, you can follow this project via <a taget="_blank" href="https://github.com/krisanalfa/viper">GitHub</a>.
        Fork it, create a new branch, do some magic, and create a pull request. Viper using <a href="http://www.php-fig.org/psr/psr-2/">PSR-2 coding standard</a>.
        If you find some errors or maybe you wish there's a feature inside Viper and you but cannot write a code, you can follow the milestone via GitHub too.
        Go to <a href="https://github.com/krisanalfa/viper/issues">issue page</a>, and create a <a href="https://github.com/krisanalfa/viper/issues/new">new issue</a> there.
        <br /><br />
    </p>
</div>

<div class="container">
    <h3 class="text-center">Creative by Krisan Alfa Timur</h3>
    <div class="text-center">
        <a taget="_blank" href="https://github.com/krisanalfa"><i class="fa fa-github fa-2x"></i></a>
        <a taget="_blank" href="https://twitter.com/krisanalfa"><i class="fa fa-twitter fa-2x"></i></a>
        <a taget="_blank" href="https://facebook.com/KrisanAlfa.T"><i class="fa fa-facebook fa-2x"></i></a>
    </div>
    <h4 class="text-center">PT. Sagara Xinix Solusitama</h4>
</div>
@endsection
