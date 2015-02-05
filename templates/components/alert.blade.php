<div class="alert-container">
    <!-- <div class="container"> -->
        @foreach($messages as $message)
            <?php if($options['level'] == 'error') { $options['level'] = 'danger'; } ?>
            <div class="alert alert-{{ $options['level'] }} alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <?php if($options['level'] == 'danger') { $options['level'] = 'error'; } ?>
                <strong>{{ ucfirst($options['level']) }}</strong> {{ $message['message'] }}
            </div>
        @endforeach
    <!-- </div> -->
</div>
