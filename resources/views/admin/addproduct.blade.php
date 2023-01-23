@extends('admin.layout.templete');
@section('content')
   
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
                        <h4 class="sub-title"> Product Information </h4>
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder=" Product Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Product Short Descripsion</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder=" Product Name" class="form-control">
                              </div>
                             </div>
                             <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Product Price</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder=" Product Price" class="form-control">
                              </div>
                             </div>
                             <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Product  Descripsion</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder=" Product Name" class="form-control">
                              </div>
                             </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-5">
                                    <input type="submit" value="Add Product"  class="form-control btn btn-primary ">
                                </div>
                            </div>
                        </form>
                     </div>
                </div>
            </div> 
                
     <!-- Basic Form Inputs card end -->

@endsection