@if ($errors->any())
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <span>
            <b>{{$error}}</b>
        </span>
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
            <i class="tim-icons icon-simple-remove"></i>
        </button>
    </div>
@endforeach
@endif