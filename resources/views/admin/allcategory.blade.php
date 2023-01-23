@extends('admin.layout.templete')  ;

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>
<!-- Basic table card start -->
<div class="card">
    <div class="card-header">
        <h5>All Category Information</h5>
          <br> <br>
          @if(session()->has('addmessage'))
        <div class="alert alert-primary" role="alert">
            {{session()->get('addmessage')}}
        </div>
        @endif
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="fa fa-chevron-left"></i></li>
                <li><i class="fa fa-window-maximize full-card"></i></li>
                <li><i class="fa fa-minus minimize-card"></i></li>
                <li><i class="fa fa-refresh reload-card"></i></li>
                <li><i class="fa fa-times close-card"></i></li>
            </ul>
        </div>

    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Category Name</th>
                        <th>Sub Category</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->categorys_name}}</td>
                        <td>{{$category->sub_category_count}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                            <a type="button" class="btn btn-primary href="href="{{route('edite',$category->id)}}" ">Edite</a>
                            <a type="button" class="btn btn-primary href="href="{{route('delete',$category->id)}}" ">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection