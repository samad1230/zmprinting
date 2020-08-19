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
                                                <td width="305px">
                                                    <button type="button" class="btn btn-primary btn-sm edit_slider_btn" id="{{$row->id}}" >Edit</button>
                                                    <a href="{{-- {{ URL::to('delete/slider/'.$row->id) }} --}}" class="btn btn-sm btn-danger" id="delete">delete</a>
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

                    <form action="{{ route('store.product') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
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


        <div class="modal fade" id="edit_slider_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Aboutus</h4>
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
                    <form action={{-- "{{ url('updateslider/'.$slider[0]->id) }}" --}} method="POST" autocomplete="off" enctype="multipart/form-data">
                        
                        @csrf
                        <input type="hidden" name="id" id="slider_id">
                        <input type="hidden" name="oldimage" id="old_image">
                        
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Slider Title:</label>
                            <input type="text" class="form-control" id="sliderhead" name="slider_head">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Slider Details:</label>
                            <input type="text" class="form-control" id="sliderdetails" name="slider_details">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image:</label>
                            <input type="file" class="form-control"  name="slider_image">
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
            $('.edit_slider_btn').on('click', function(){
                var slider = $(this).attr("id");

                $.ajax({
                    type: 'GET',
                   // url:'itels/'+about+'/edit',
                    url: 'editslider/'+slider,    
                    success: function (data) {

                        //console.log(data);
  
                         $("#slider_id").val(data[0].id);
                         $("#sliderhead").val(data[0].slider_head);
                         $("#sliderdetails").val(data[0].slider_details);
                         $("#old_image").val(data[0].slider_image);
                    }
                });

                $("#edit_slider_modal").modal('show');

            });

        });
    </script>

@endsection 
