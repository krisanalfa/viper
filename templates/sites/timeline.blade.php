@section('styler')
<link rel="stylesheet" href="{{ Theme::base('vendor/css/timeline.css') }}">
<link rel="stylesheet" href="{{ Theme::base('vendor/css/animate.min.css') }}">
@endsection

@section('content')
<div class="container">
    @if($entries->count())
        <ul class="timeline">
            @foreach ($entries as $entry)
                <li>
                    <div class="animated bounceInDown timeline-badge">
                        <img src="{{ URL::base('assets/img/'.$entry->getAuthorImage()) }}" alt="Author" class="img-circle panel-image">
                    </div>
                    <div class="timeline-panel animated bounceInUp">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">
                                <a href="{{ URL::site('/toxic/'.$entry->getId()) }}"> {{ $entry->get('title') }}</a>
                            </h4>
                            <p>
                                <small class="text-muted"><i class="fa fa-pencil"></i> By {{ $entry->getAuthorName() }}</small>
                                <br>
                                <small class="text-muted"><i class="fa fa-clock-o"></i> Written {{ $entry->sinceNow() }}</small>
                                @if($entry->hasUpdated())
                                    <br>
                                    <small class="text-muted"><i class="fa fa-check"></i>Last updated at {{ $entry->getUpdatedTime() }}</small>
                                @endif
                            </p>
                        </div>
                        <div class="timeline-body">
                            {{ $entry->overView() }}
                        </div>
                    </div>
                </li>
            @endforeach
            <li>
                <div class="timeline-badge info last-badge">
                    <span class="fa fa-check-circle-o"></span>
                </div>
            </li>
        </ul>
    @else
        <div class="empty">
            <h2 class="text-center animated bounceInDown">Aaawww, it's empty :(</h2>
            <h3 class="text-center animated bounceInUp">Maybe you want to add some Toxic <a href="{{ URL::site('/toxic/null/create') }}">here</a></h3>
        </div>
    @endif
</div>
@endsection
