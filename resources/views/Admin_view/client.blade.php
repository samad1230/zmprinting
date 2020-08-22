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
                            <h5>Well Come to Category</h5>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#client_modal"><i class="zmdi zmdi-plus"></i>Add Client</button>
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
                                                <th>Client Name</th>
                                                <th>Address</th>
                                                <th>Web URL</th>
                                                <th>Client Logo</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($clientdata as $row)
                                            {{-- <?php dd($items); ?> --}}
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->client_name}}</td>
                                                <td>{{$row->client_address}}</td>
                                                <td>{{$row->client_url}}</td>
                                                <td><img src="{{URL::to($row->client_logo)}}" height="40px;" width="50px;"></td>
                                                <td width="305px">
                                                    <button type="button" class="btn btn-primary btn-sm edit_client_btn" id="{{$row->id}}" >Edit</button>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('client.delete',$row->id)}}" role="button">Delete</a>
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

    <div class="modal fade" id="client_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Add Client</h4>
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
                    <form action="{{ url('client') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Client Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="client_name" class="form-control" id="" placeholder="Client Name" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Client Address</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="client_address" class="form-control" id="" placeholder="Client Address" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Client URL</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="client_url" class="form-control" id="" placeholder="Client URL" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Client Logo</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="client_logo" class="form-control" id="" placeholder="Client Logo" >
                                </div>
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
    </div>



    <div class="modal fade" id="client_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Category Edit</h4>
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
                    <form action="{{ url('updateclient')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="clientid" id="client_id">
                        <input type="hidden" name="oldimage" id="old_image">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Client Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="client_name" class="form-control" id="clientname" placeholder="Client Name" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Client Address</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="client_address" class="form-control" id="clientaddress" placeholder="Client Address" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Client URL</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="client_url" class="form-control" id="clienturl" placeholder="Client URL" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Client Logo</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="client_logo" class="form-control" id="" placeholder="Client Logo" >
                                </div>
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
    </div>

@endsection

@section('pagescript')

    
    <script>
        $(function(){
            $('.edit_client_btn').on('click', function(){
                var clientid = $(this).attr("id");

                $.ajax({
                    type: 'GET',
                    url:'client/'+clientid+'/edit',
                    success: function (data) {

                        //console.log(data);
  
                        $("#clientaddress").val(data[0].client_address);
                        $("#clientname").val(data[0].client_name);
                        $("#clienturl").val(data[0].client_url);
                        $("#client_id").val(data[0].id);
                        $("#old_image").val(data[0].client_logo);

                    }
                });

                $("#client_edit").modal('show');

            });

        });
    </script>

@endsection 
