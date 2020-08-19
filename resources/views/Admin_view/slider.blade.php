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
                            <h5>Well Come to Slider</h5>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_slider"><i class="zmdi zmdi-plus"></i>Add Slider</button>
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
                                                <th>Title</th>
                                                <th>Details</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($slider as $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td class="about_text">{{$row->slider_head}}</td>
                                                <td class="about_text">{{$row->slider_details}}</td>
                                                <td><img src="{{ URL::to($row->slider_image) }}" height="50px;" width="60px;"></td>
                                                <td width="305px">
                                                    <button type="button" class="btn btn-primary btn-sm edit_slider_btn" id="{{$row->id}}" >Edit</button>
                                                    <a href="{{ URL::to('delete/slider/'.$row->id) }}" class="btn btn-sm btn-danger" id="delete">delete</a>
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

    <div class="modal fade" id="add_slider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Add Slider</h4>
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
                    <form action="{{ route('store.slider') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Slider Title:</label>
                            <input type="text" class="form-control" id="" name="slider_head">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Slider Details:</label>
                            <input type="text" class="form-control" id="" name="slider_details">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Image:</label>
                            <input type="file" class="form-control"  name="slider_image">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
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
                    <form action="{{ url('updateslider/'.$slider[0]->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        
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
