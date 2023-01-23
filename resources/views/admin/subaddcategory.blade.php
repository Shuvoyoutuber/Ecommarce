@extends('admin.layout.templete');
@section('content')
   
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
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
                        <!-- /resources/views/post/create.blade.php -->
                        
                        <h1>Create Post</h1>
                        
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
                    </div>
                    <div class="card-block">
                        <h4 class="sub-title">Sub Category Information </h4>
                        <form action="{{route('categorydatas')}} " method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Add Sub Category Name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">    
                            <label class="col-sm col-form-label"></label> 
                                <div class="col-sm-10">                  
                                    <select id="inputState" class="col-sm col-form-label">
                                        @foreach($categories as $category)
                                        <option selected>{{$category->categorys_name}}</option>
                                        @endforeach
                                        <option selected>Select Your Category</option>
                                       
                                    </select>
                                </div>
                            </div>

                                <div class="col-sm-5">
                                <label class="col-sm-5 col-form-label"></label> 
                                    <input type="submit" value="Add Sub Category"  class="form-control btn btn-primary col-sm-6 col-form-label ">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                        </form>
                     </div>
                </div>
            </div> 
                
     <!-- Basic Form Inputs card end -->

@endsection