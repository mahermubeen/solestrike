<div id="delete-user-box" class="delete_user_wrapper hidden">
    <div class="main-div">
        <form id="delete-user-form" class="delete-user-form" method="POST" action="{{ url('admin/delete_user')  }}" autocomplete="off" enctype="multipart/form-data">
            @csrf

            <div class="btns-div">
                <button type="submit" class="btn add-btn btn-sm btn-primary">Delete</button>

                <span id="delete-user-cancel" class="btn btn-sm btn-primary">Cancel</span>
            </div>
            
        </form>
    </div>
</div>
