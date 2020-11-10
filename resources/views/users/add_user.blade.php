<div id="add-user-box" class="add_user_wrapper hidden">
    <div class="main-div">
        <form class="add-user-form" method="POST" action="{{ route('add_user') }}" autocomplete="off" enctype="multipart/form-data">
            @csrf

            <div class="top-div">
                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <label for="name" class="col-form-label">{{ __('Name') }}</label>
                    <input id="name" type="text" name="name"
                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        placeholder="Name" value="">
                    @include('alerts.feedback', ['field' => 'name'])
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                    <label for="email" class="col-form-label">{{ __('Email') }}</label>

                    <input id="email" type="email" name="email"
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                        placeholder="Email" value="">
                    @include('alerts.feedback', ['field' => 'email'])
                </div>
            </div>


            <div class="bottom-div">
                <div class="row1">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                    <label for="password" class="col-form-label">{{ __('Password') }}</label>

                        <input id="password" type="password" name="password"
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                            placeholder="Password" value="">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                    <label for="password_confirmation" class="col-form-label">{{ __('Confirm Password') }}</label>

                        <input id="password_confirmation" type="password" name="password_confirmation"
                            class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                            placeholder="Confirm Password" value="">
                        @include('alerts.feedback', ['field' => 'password_confirmation'])
                    </div>
                </div>
                    
                <div class="row2">
                        <button type="submit" class="btn add-btn btn-sm btn-primary">Add</button>

                        <span id="add-user-cancel" class="btn btn-sm btn-primary">Cancel</span>
                </div>
            </div>

        </form>
    </div>
</div>
