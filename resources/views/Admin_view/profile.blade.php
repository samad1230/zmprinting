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
                            <h5>Well Come to Profile</h5>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#profile_modal"><i class="zmdi zmdi-plus"></i>Add Profile</button>
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
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email_1</th>
                                                <th>Email_2</th>
                                                <th>Email_3</th>
                                                <th>Logo</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($profiledata as $row)
                                            {{-- <?php dd($items); ?> --}}
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->company_name}}</td>
                                                <td>{{$row->address}}</td>
                                                <td>{{$row->contact}}</td>
                                                <td>{{$row->email_one}}</td>
                                                <td>{{$row->email_two}}</td>
                                                <td>{{$row->email_three}}</td>
                                                <td><img src="{{URL::to($row->logo)}}" height="40px;" width="50px;"></td>
                                                <td width="305px">
                                                    <button type="button" class="btn btn-primary btn-sm edit_profile_btn" id="{{$row->id}}" >Edit</button>
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

    <div class="modal fade" id="profile_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Add profile</h4>
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
                    <form action="{{ url('profile') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Company </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="company_name" class="form-control" id="" placeholder="Company Name" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Address</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="address" class="form-control" id="" placeholder="Address" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Contact</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="contact" class="form-control" id="" placeholder="Contact" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Email One</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email_one" class="form-control" id="" placeholder="Email One" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Email Two</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email_two" class="form-control" id="" placeholder="Email Two" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Email Three</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email_three" class="form-control" id="" placeholder="Email Three" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Company Logo</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="logo" class="form-control" id="" placeholder="Company Logo" >
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
