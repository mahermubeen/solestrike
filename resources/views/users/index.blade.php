@extends('layouts.app', ['page' => __('User Index'), 'pageSlug' => 'users'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">Users</h4>
                        </div>
                        <div class="col-4 text-right">
                            <span id="add-user-btn" class="btn cursor-pointer btn-sm btn-primary">Add user</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')
                    @include('alerts.danger_alert')
                    
                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key=>$user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            <a href="#">{{ $user->email }}</a>
                                        </td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            
                                            <div class="switches">
                                                <li>
                                                    <input id="{{ $key }}" data-id="{{ $user->id }}" class="hidden active-btn toggle-class"
                                                name="status" type="checkbox" {{ $user->active ? 'checked' : '' }}>
                                                    <label for="{{ $key }}">
                                                      <span class="cursor-pointer"></span>
                                                    </label>
                                                  </li>
                                            </div>
                                               
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a id="edit-user-btnn" data-id="{{ $user->id }}" class="edit-user-btn dropdown-item">Edit</a>
                                                    <a id="delete-user-btn" data-id="{{ $user->id }}" class="delete-user-btn dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">

                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
