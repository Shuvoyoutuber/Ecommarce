@extends('admin.layout.templete');
@section('content')
   
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
  </nav>

            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header sub-title">              
                    <div class="card-header-right"><i
                        class="icofont icofont-spinner-alt-5"></i></div>
                        <div class="card-header-right">
                            <i class="icofont icofont-spinner-alt-5"></i>
                        </div>

                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Category Information Add</h4>
                                            <!-- /resources/views/post/create.blade.php -->

                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                 
                                        <!-- Create Post Form -->
                        <form action="{{route('categorydata')}} " method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="categorys_name" placeholder="Add Category Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-5">
                                    <input type="submit" value="Add Category"  class="form-control btn btn-primary ">
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div> 
                
     <!-- Basic Form Inputs card end -->

@endsection