@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-wrapper">
        @extends('layouts.mobile_nav')
        @extends('layouts.main_nav') 
        <div class="page-container">
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <h5>Well Come to Product</h5>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="">
                                        <div class="content">
                                            <a class="" href="">{{Auth::user()->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap" style="float: right;">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_product"><i class="zmdi zmdi-plus"></i>Add Product</button>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product</th>
                                                <th>Category</th>
                                                <th>Details</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->pd_name}}</td>
                                                <td>{{$row->category_name}}</td>
                                                <td>{{$row->details}}</td>
                                                <td><img src="{{ URL::to($row->pd_image) }}" height="50px;" width="60px;"></td>
                                                <td> 
                                                    @if ($row->status==1)
                                                     {{"Active"}}
                                                    @endif
                                                    @if ($row->status==2)
                                                     {{"Upcoming"}}
                                                    @endif
                                                </td>
                                                <td width="305px">
                                                    <button type="button" class="btn btn-primary btn-sm edit_product_btn" id="{{$row->id}}" >Edit</button>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('product.delete',$row->id)}}" role="button">Delete</a>
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
            </div>

        </div>
    </div>
</div>

    <div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog  modal-md" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> Add Product </h4>
                  </div>
                <div class="modal-body">
                    @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif

                    <form action="{{ url('product') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="pd_name" class="form-control" id="" placeholder="Product Name" >
                                </div>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Category</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="product_cat" id="productcat">
                                        <option value=""> Select Category </option>
                                        @foreach ($category as $data)
                                            <option value="{{$data->id}}"> {{$data->category_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Fabric</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="fabric" class="form-control" id="" placeholder="Product Fabric" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Details</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="details" class="form-control" id="" placeholder="Product Detail" >
                                </div>
                            </div>
                        </div>
                         <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Shape</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="shape" class="form-control" id="" placeholder="Product Shape" >
                                </div>
                            </div>
                        </div>
                        
                         <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Embroidery</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="embroidery" class="form-control" id="" placeholder="Embroidery" >
                                </div>
                            </div>
                        </div>
                         <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Printing</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="printing" class="form-control" id="" placeholder="Printing" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Rate</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="rate" class="form-control" id="" placeholder="Product Rate" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Status</label>
                                </div>
                                <div class="col-md-8">
                                   <select class="form-control" name="status" id="">
                                       <option value="">Select Status</option>
                                       <option value="1">Active</option>
                                       <option value="2">Upcomming</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Image</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="pd_image" class="form-control" id="" placeholder="Product Image" >
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
          
                    </form>
                </div>
            </div>
        </div>                      
    </div>


        <div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                     @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                    <form action="{{ url('updateproduct')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        
                        @csrf

                        <input type="hidden" name="pd_id" id="product_id">
                        <input type="hidden" name="oldimage" id="old_image">
                        <input type="hidden" name="catid_old" id="old_catid">
                        
                        
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="pd_name" class="form-control" id="pdname" placeholder="Product Name" >
                                </div>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Category</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="product_cat">
                                        <option value="" id="old_cat"> </option>
                                        @foreach ($category as $data)
                                            <option value="{{$data->id}}"> {{$data->category_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Fabric</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="fabric" class="form-control" id="fabric_edit" placeholder="Product Fabric" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Details</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="details" class="form-control" id="details_edit" placeholder="Product Detail" >
                                </div>
                            </div>
                        </div>
                         <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Shape</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="shape" class="form-control" id="shape_edit" placeholder="Product Shape" >
                                </div>
                            </div>
                        </div>
                        
                         <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Embroidery</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="embroidery" class="form-control" id="embroidery_edit" placeholder="Embroidery" >
                                </div>
                            </div>
                        </div>
                         <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Printing</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="printing" class="form-control" id="printing_edit" placeholder="Printing" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Rate</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="rate" class="form-control" id="rate_edit" placeholder="Product Rate" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Status</label>
                                </div>
                                <div class="col-md-8">
                                   <select class="form-control" name="status" id="">
                                        <option value="" id="old_status"> </option>
                                        <option value="1">Active</option>
                                        <option value="2">Upcomming</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Image</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="pd_image" class="form-control" id="" placeholder="Product Image" >
                                </div>
                            </div>
                        </div>
                  
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                        
                </div>
            </div>
        </div>
    </div>
@endsection

@section('pagescript')

    <script>
        $(function(){
            $('.edit_product_btn').on('click', function(){
                var product = $(this).attr("id");

                $.ajax({
                    type: 'GET',
                    url:'product/'+product+'/edit',
                    success: function (data) {

                        console.log(data);
  
                        $("#pdname").val(data[0].pd_name);
                        $("#old_catid").val(data[0].category_id);
                        $("#old_cat").html(data[0].category_name);
                        $("#fabric_edit").val(data[0].fabric);
                        $("#details_edit").val(data[0].details);
                        $("#shape_edit").val(data[0].shape);
                        $("#old_status").val(data[0].status);
                        $("#embroidery_edit").val(data[0].embroidery);
                        $("#printing_edit").val(data[0].printing);
                        $("#rate_edit").val(data[0].rate);
                        $("#product_id").val(data[0].id);
                        $("#old_image").val(data[0].pd_image);
                    }
                });

                $("#edit_product_modal").modal('show');

            });

        });
    </script>

@endsection 
