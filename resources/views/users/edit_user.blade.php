<div id="edit-user-box" class="edit_user_wrapper hidden">
    <div class="main-div">
        <form id="edit-user-formm" class="edit-user-form" method="POST" action="{{ url('admin/users/edit_user')  }}" autocomplete="off" enctype="multipart/form-data">
            @csrf
            
            <div class="top-div">
                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">

                <label for="user-name-inpt" class="col-form-label">{{ __('Name') }}</label>
                
                    <input id="user-name-inpt" type="text" name="name"
                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        placeholder="Name" value="">
                    @include('alerts.feedback', ['field' => 'name'])
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <label for="user-email-inpt" class="col-form-label">{{ __('Email') }}</label>

                    <input id="user-email-inpt" type="email" name="email"
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        placeholder="Email" value="">
                    @include('alerts.feedback', ['field' => 'email'])
                </div>
            </div>


            <div class="bottom-div">
                <button type="submit" class="save-btn btn add-btn btn-sm btn-primary">Save</button>

                <span id="edit-user-cancel" class="btn btn-sm btn-primary">Cancel</span>
            </div>
           
        </form>
    </div>
</div>
