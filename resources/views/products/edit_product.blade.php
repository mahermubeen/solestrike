<div id="edit-product-box" class="edit_product_wrapper hidden">
    <div class="main-div">
        <form id="edit-form" class="edit-product-form" method="POST" action="{{ url('admin/products/edit_product')  }}" autocomplete="off" enctype="multipart/form-data">
            @csrf
            
            <div class="top-div">
                <div class="left">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input id="name-inpt" type="text" name="name"
                            class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            placeholder="Name" value="">
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>

                    <div class="form-group{{ $errors->has('retail_price') ? ' has-danger' : '' }}">
                        <input id="retail_price-inpt" type="number" name="retail_price"
                            class="form-control{{ $errors->has('retail_price') ? ' is-invalid' : '' }}"
                            placeholder="Price" value="">
                        @include('alerts.feedback', ['field' => 'retail_price'])
                    </div>
                </div>


                <div class="right">
                    <figure>
                        <img id="avatar-img" src="../images/" width="75" class="product-img"/>
                    </figure>

                    <div id="img-input" class="form-group{{ $errors->has('avatar') ? ' has-danger' : '' }}">
                        <input id="avatar-inpt" type="file" name="avatar"
                            class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" value="{{ old('avatar') }}">
                        @include('alerts.feedback', ['field' => 'avatar'])
                    </div>
                </div>
            </div>


            <div class="bottom-div">
                <div class="row1">
                    <div class="form-group{{ $errors->has('detail') ? ' has-danger' : '' }}">
                        <input id="detail-inpt" type="text" name="detail"
                            class="form-control{{ $errors->has('detail') ? ' is-invalid' : '' }}"
                            placeholder="Detail" value="">
                        @include('alerts.feedback', ['field' => 'detail'])
                    </div>

                    <div class="form-group{{ $errors->has('source') ? ' has-danger' : '' }}">
                        <input id="source-inpt" type="text" name="source"
                            class="form-control{{ $errors->has('source') ? ' is-invalid' : '' }}"
                            placeholder="Source" value="">
                        @include('alerts.feedback', ['field' => 'source'])
                    </div>
                </div>

                <div class="row2">
                    <div class="form-group{{ $errors->has('deal') ? ' has-danger' : '' }}">
                        <input id="deal-inpt" type="number" name="deal"
                            class="form-control{{ $errors->has('deal') ? ' is-invalid' : '' }}"
                            placeholder="Deal" value="">
                        @include('alerts.feedback', ['field' => 'deal'])
                    </div>

                    <div class="form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
                        <input id="quantity-inpt" type="number" name="quantity"
                            class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                            placeholder="Quantity" value="">
                        @include('alerts.feedback', ['field' => 'quantity'])
                    </div>
                </div>

                
                <div class="row3">
                    <div class="form-group{{ $errors->has('release_date') ? ' has-danger' : '' }}">
                        <input id="release_date-inpt" type="date" name="release_date"
                            class="form-control{{ $errors->has('release_date') ? ' is-invalid' : '' }}"
                            placeholder="Release Date" value="">
                        @include('alerts.feedback', ['field' => 'release_date'])
                    </div>
                </div>

                <div class="row4">
                        <button type="submit" class="btn add-btn btn-sm btn-primary">Save</button>

                        <span id="edit-product-cancel" class="btn btn-sm btn-primary">Cancel</span>
                </div>
            </div>
            
           
        </form>
    </div>
</div>
