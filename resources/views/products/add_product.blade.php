<div id="add-product-box" class="add_product_wrapper hidden">
    <div class="main-div">
        <form class="add-product-form" method="POST" action="{{ route('add_product') }}" autocomplete="off" enctype="multipart/form-data">
            @csrf

            <div class="top-div">
                <div class="left">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <label for="name" class="col-form-label">{{ __('Name') }}</label>
                        <input id="name" type="text" name="name"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            placeholder="Name" value="">
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>

                    <div class="form-group{{ $errors->has('retail_price') ? ' has-danger' : '' }}">
                    <label for="retail_price" class="col-form-label">{{ __('Retail Price') }}</label>

                        <input id="retail_price" type="number" name="retail_price"
                            class="form-control{{ $errors->has('retail_price') ? ' is-invalid' : '' }}"
                            placeholder="Price" value="">
                        @include('alerts.feedback', ['field' => 'retail_price'])
                    </div>
                </div>


                <div class="right">
                     <div class="release_date form-group{{ $errors->has('release_date') ? ' has-danger' : '' }}">
                        <label for="release_date" class="col-form-label">{{ __('Release Date') }}</label>

                        <input id="release_date" type="date" name="release_date"
                            class="form-control{{ $errors->has('release_date') ? ' is-invalid' : '' }}"
                            placeholder="Release Date" value="">
                        @include('alerts.feedback', ['field' => 'release_date'])
                    </div>

                    <div class="form-group{{ $errors->has('avatar') ? ' has-danger' : '' }}">
                    <label for="avatar" class="col-form-label">{{ __('Choose Avatar') }}</label>

                        <input id="avatar" type="file" name="avatar"
                            class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}"
                            placeholder="Avatar" value="">
                        @include('alerts.feedback', ['field' => 'avatar'])
                    </div>
                </div>
            </div>


            <div class="bottom-div">
                <div class="row1">
                    <div class="form-group{{ $errors->has('detail') ? ' has-danger' : '' }}">
                    <label for="detail" class="col-form-label">{{ __('Detail') }}</label>

                        <input id="detail" type="text" name="detail"
                            class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}"
                            placeholder="Detail" value="">
                        @include('alerts.feedback', ['field' => 'detail'])
                    </div>

                    <div class="form-group{{ $errors->has('source') ? ' has-danger' : '' }}">
                    <label for="source" class="col-form-label">{{ __('Source') }}</label>

                        <input id="source" type="text" name="source"
                            class="form-control{{ $errors->has('source') ? ' is-invalid' : '' }}"
                            placeholder="Source" value="">
                        @include('alerts.feedback', ['field' => 'source'])
                    </div>
                </div>

                <div class="row2">
                    <div class="form-group{{ $errors->has('deal') ? ' has-danger' : '' }}">
                    <label for="deal" class="col-form-label">{{ __('Deal') }}</label>

                        <input id="deal" type="number" name="deal"
                            class="form-control{{ $errors->has('deal') ? ' is-invalid' : '' }}"
                            placeholder="Deal" value="">
                        @include('alerts.feedback', ['field' => 'deal'])
                    </div>

                    <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                    <label for="quantity" class="col-form-label">{{ __('Quantity') }}</label>

                        <input id="quantity" type="number" name="quantity"
                            class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                            placeholder="Quantity" value="">
                        @include('alerts.feedback', ['field' => 'quantity'])
                    </div>
                </div>

                <div class="row4">
                        <button type="submit" class="btn add-btn btn-sm btn-primary">Add</button>

                        <span id="add-product-cancel" class="btn btn-sm btn-primary">Cancel</span>
                </div>
            </div>

        </form>
    </div>
</div>
