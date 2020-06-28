@extends('layouts.master')



@section('title')

Regstered Roles | Markhor Media
@endsection

@section('content')

    <div class="container">
         <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Role for Registered User.</h1>

                      
                    </div>
                    <div class="card-body">

                       <div class="row">
                           <div class="col-md-6">
                           <form action="/role-register-update/{{$users->id}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="username" value="{{$users->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Five Role</label>
                                      <select name="usertype" class="form-control">
                                          <option value="admin">Admin</option>
                                          <option value="vendor">Vendor</option>
                                          <option value="">None</option>
                                      </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role-register" class="btn btn-danger">Cancel</a>
                            </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
         </div>
    </div>


@endsection


@section('scripts')


@endsection
