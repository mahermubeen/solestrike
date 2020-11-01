@if (session()->has('message'))
    <div class="alert alert-success">
        <span>
            <b>{{ session()->get('message') }}</b>
        </span>
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
        </button>
    </div>
@endif
