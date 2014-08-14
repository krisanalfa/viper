@section('notification')
<div style="margin-top: 30px">
    {{ f('notification.show') }}
</div>
@endsection

@section('content')
<div class="alert-container">
    <div class="container">
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Warning</strong>
            You are not authorized to access this page, maybe you should login first to access it or you can go back to previous page.

            <div style="margin-top: 10px">
                <a href="javascript:history.back()" class="btn btn-default btn-sm">Back</a>
                <a href="{{ URL::site('/login').'?!continue='.\Bono\Helper\URL::redirect() }}" class="btn btn-primary btn-sm">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection
