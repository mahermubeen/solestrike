@error('new_confirm_password')
<div class="alert alert-danger">
    <span>
        <b>{{ $message }}</b>
    </span>
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="tim-icons icon-simple-remove"></i>
    </button>
</div>
@enderror