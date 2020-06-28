@extends('layouts.master')

@section('title')

About US Edit 
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">About Us -Edit Data</h4>

            <form action="{{url('aboutus-update/'.$aboutus->id)}}" method="post">
                {{ csrf_field() }}
                {{method_field('PUT')}}
                    <div class="modal-body">                 
                        <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$aboutus->title}}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Sub-Title</label>
                        <input type="text" name="subtitle" class="form-control" value="{{$aboutus->subtitle}}">
                        </div>
                        <div class="form-group">
                        <label for="message-text" class="col-form-label">Description</label>
                        <textarea name="description" class="form-control" id="message-text">{{$aboutus->subtitle}}</textarea>
                        </div>  
                    </div>
                        <div class="modal-footer">
                        <a href="{{url('abouts')}}" type="button" class="btn btn-secondary" >Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </div>
             </form>
            </div>
        </div>
     </div>
</div>  

@endsection