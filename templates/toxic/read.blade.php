@section('styler')
@include('components.markdown-head')
<link rel="stylesheet" href="{{ Theme::base('vendor/css/animate.min.css') }}">
@endsection

@section('content')
<div class="container toxic-wrapper">
    <div class="panel panel-default animated bounceInUp">
        <div class="panel-heading">
            <a class="pull-left" href="#">
                <img class="media-object img-circle panel-image" src="{{ URL::base('assets/img/'.$entry->getAuthorImage()) }}">
            </a>
            <h2 class="panel-main-title">
                {{ $entry->get('title') }}
                <small> by {{ $entry->getAuthorName() }} at {{ $entry->getCreatedTime() }}</small>
                @if($entry->hasUpdated())
                    <small><i> last updated at {{ $entry->getUpdatedTime() }}</i></small>
                @endif
            </h2>
        </div>
        <div class="panel-body">
            <div class="media">
                <div class="media-body">
                    {{ App::getInstance()->container['markdown']->render(html_entity_decode(html_entity_decode($entry->get('content')))) }}
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a href="{{ URL::site() }}" class="animated bounceInDown btn btn-primary"><i class="fa fa-home"></i> Get more toxic</a>
            @if(f('auth.allowed', '/update'))
                @if($entry->get('$created_by') === $_SESSION['user']['$id'])
                    <a href="{{ URL::current().'/update' }}" class="animated bounceInLeft btn btn-success"><i class="fa fa-edit"></i> Update</a>
                    <a href="{{ URL::current().'/delete' }}" class="animated bounceInRight btn btn-warning"><i class="fa fa-trash-o"></i> Delete</a>
                @endif
            @endif
        </div>
    </div>
</div>
@endsection

@section('injector')
<script>
    $(document).ready(function() {
        prettyPrint();
    });
</script>
@endsection
