@extends('layout')

@section('title')
{{ f('controller')->getClass() }} List
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-stacked">
                    <li class="active disabled"><a href="{{ URL::site(f('controller.uri')) }}"><i class="fa fa-search"></i> Search</a></li>
                    <li><a href="{{ URL::site(f('controller.uri').'/null/create') }}"><i class="fa fa-plus"></i> Create</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="list-wrapper">
                <div class="list-group">
                    <?php $schema = f('controller')->schema(); $field = reset($schema); ?>
                    @foreach($entries as $entry)
                        <a href="{{ URL::site(f('controller.uri').'/'.$entry->getId()) }}" class="list-group-item">{{ $field->formatPlain($entry->get($field['name'])) }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
