@section('title')
{{ f('controller')->clazz }} Create
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="{{ URL::site(f('controller.uri')) }}"><i class="fa fa-search"></i> Search</a></li>
                    <li><a href="{{ URL::site(f('controller.uri').'/null/create') }}"><i class="fa fa-plus"></i> Create</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="form-wrapper">
                <form role="form" method="POST">
                    <fieldset>
                        <legend>{{ f('controller')->clazz }} Deletion</legend>
                        <div class="form-group">
                            <p>Are you sure?</p>
                        </div>

                        <input type="submit" value="Yes, delete forever" class="btn btn-danger">
                        <a href="{{ URL::site(f('controller.uri')) }}" class="btn btn-default">Cancel</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
