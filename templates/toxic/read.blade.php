@section('styler')
@include('components.markdown-head')
<link rel="stylesheet" href="{{ Theme::base('vendor/css/animate.min.css') }}">
@endsection

@section('content')
<script type="text/markdown">
{{ html_entity_decode(html_entity_decode(html_entity_decode($entry->get('content')))) }}
</script>
<div class="container toxic-wrapper">
    <div class="panel panel-default animated bounceInUp">
        <div class="panel-heading">
            <a class="pull-left" href="#">
                <img class="media-object img-circle panel-image" src="{{ URL::base('assets/img/'.$entry->getAuthorImage()) }}">
            </a>
            <h2 class="panel-main-title">
                {{ $entry->get('title') }}
                <small> Written by {{ $entry->getAuthorName() }} at {{ $entry->getCreatedTime() }}</small>
                @if($entry->hasUpdated())
                    <small><i> last updated at {{ $entry->getUpdatedTime() }}</i></small>
                @endif
            </h2>
        </div>
        <div class="panel-body">
            <div class="media">
                <div class="media-body">
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
        </div>
    </div>
</div>
@endsection

@section('injector')
<script src="{{ Theme::base('vendor/js/marked.min.js') }}"></script>
<script>
    $(document).ready(function() {
        prettyPrint();
    });

    marked.setOptions({
        highlight: function (code, lang) {
            // Fix for HTML code block
            if (lang === 'html') {
                code = $('<div />').text(code).html();
            }

            return prettyPrintOne(code, lang, false);
        },
        gfm: true,
        tables: true
    });

    $('.media-body').append(marked($('script[type="text/markdown"]').text()));

    $('table').addClass('table table-striped table-bordered table-hover table-condensed');

    if (! $('table').closest('div').hasClass('table-responsive')) {
        $('table').wrap('<div class="table-responsive"></div>');
    }

    $('pre').addClass('pre-scrollable');
</script>
@endsection
