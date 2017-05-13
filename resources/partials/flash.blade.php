@if (Session::has('flash_message'))
    <div class="alert alert-success {{ Session::has('flash_message_important') ? 'alert_important': '' }}">
        @if (Session::has('flash_message_important'))
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&amp;times;</button>
        @endif
        {{ session('flash_message') }}
    </div>
@endif