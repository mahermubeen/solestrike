<div id="delete-order-box" class="delete_product_wrapper hidden">
    <div class="main-div">
        <form id="delete-order-form" class="delete-order-form" method="POST" action="{{ url('admin/orders/delete_order')  }}" autocomplete="off" enctype="multipart/form-data">
            @csrf

            <div class="btns-div">
                <button type="submit" class="btn add-btn btn-sm btn-primary">Delete</button>

                <span id="delete-order-cancel" class="btn btn-sm btn-primary">Cancel</span>
            </div>
            
        </form>
    </div>
</div>
