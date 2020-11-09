<div id="delete-product-box" class="delete_product_wrapper hidden">
    <div class="main-div">
        <form id="delete-form" class="delete-product-form" method="POST" action="{{ url('admin/products/delete_product')  }}" autocomplete="off" enctype="multipart/form-data">
            @csrf

            <div class="btns-div">
                <button type="submit" class="btn add-btn btn-sm btn-primary">Delete</button>

                <span id="delete-product-cancel" class="btn btn-sm btn-primary">Cancel</span>
            </div>
            
        </form>
    </div>
</div>
