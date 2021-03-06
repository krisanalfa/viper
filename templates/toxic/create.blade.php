@extends('layout')

@section('styler')
@include('components.markdown-head')

<!-- Ace Editor -->
<script src="{{ Theme::base('vendor/ace/ace.js') }}"></script>

<!-- Marked JS -->
<script src="{{ Theme::base('vendor/js/marked.min.js') }}"></script>
@endsection

@section('title')
{{ f('controller')->getClass() }} Create
@endsection

@section('content')
<form action="" role="form" method="POST" class="new-toxic container">
    <fieldset>
        <legend>Create new {{ f('controller')->getClass() }}</legend>
        @foreach(f('controller')->schema() as $name => $field)
            @if (! $field->get('hidden'))
            <div class="form-group">
                {{ $field->formatInput(@$entry[$name], $entry) }}
            </div>
            @endif
        @endforeach

        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{ URL::site(f('controller.uri')) }}" class="btn btn-default">Cancel</a>
    </fieldset>
</form>
@endsection
