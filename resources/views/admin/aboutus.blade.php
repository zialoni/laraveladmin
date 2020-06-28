@extends('layouts.master')



@section('title')

Aboutus | Markhor Media
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add about us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        
        </div>
        <form action="/save-aboutus" method="post">
            {{ csrf_field() }}
           <div class="modal-body">                 
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Title</label>
              <input type="text" name="title" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Sub-Title</label>
                <input type="text" name="subtitle" class="form-control" id="recipient-name">
              </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Description</label>
              <textarea name="description" class="form-control" id="message-text"></textarea>
            </div>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> About Us
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                </h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="datatable" class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Sub-Title
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                        @foreach ($aboutus as $data)
                      <tr>
                        <td>
                          {{$data->id}}
                        </td>
                        <td>
                            {{$data->title}}
                          </td>
                        <td>
                            {{$data->subtitle}}
                        </td>
                        <td>
                            {{$data->description}}
                        </td>
                        
                        <td>
                        <a href="{{url('about-us/'.$data->id)}}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                        <form action="{{url('about-us-delete/'.$data->id)}}" method="POST">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="submit" class="btn btn-danger">DELETE</button>
                          </form>
                        </td>
                       
                      </tr>
                      @endforeach
                             
                   
                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      
@endsection

@section('scripts')
    <script>
       $(document).ready( function () {
          $('#datatable').DataTable();
        } );
    </script>

@endsection