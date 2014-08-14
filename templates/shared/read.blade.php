@section('title')
{{ f('controller')->clazz }} Read
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ URL::site(f('controller.uri')) }}"><i class="fa fa-search"></i> Search</a></li>
                    <li><a href="{{ URL::site(f('controller.uri').'/null/create') }}"><i class="fa fa-plus"></i> Create</a></li>
                    <li class="active disabled"><a href="{{ URL::current() }}"><i class="fa fa-eye"></i> Read</a></li>
                    <li><a href="{{ URL::current().'/update' }}"><i class="fa fa-edit"></i> Update</a></li>
                    <li><a href="{{ URL::current().'/delete' }}"><i class="fa fa-trash-o"></i> Delete</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-wrapper">
                <form role="form">
                    <fieldset>
                        <legend>{{ f('controller')->clazz }}</legend>
                        @foreach(f('controller')->schema() as $name => $field)
                            <div class="form-group">
                                {{ $field->label() }}
                                {{ $field->formatReadonly(@$entry[$name], $entry) }}
                            </div>
                        @endforeach
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
