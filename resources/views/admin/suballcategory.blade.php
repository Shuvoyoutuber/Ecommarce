@extends('admin.layout.templete')  ;

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sub All Category</li>
    </ol>
  </nav>
<!-- Basic table card start -->
<div class="card">
    <div class="card-header">
        <h5>Sub All Category Information</h5>
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
                        <th>Id</th>
                        <th>Category</th>
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
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                            <a type="button" class="btn btn-primary href="href="{{)}}" >Edite</a>
                            <a type="button" class="btn btn-primary href="href="{{}}" >Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection