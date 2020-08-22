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
                            <h5>Well Come to Factory</h5>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#factory_modal"><i class="zmdi zmdi-plus"></i> Factory Details</button>
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
                                                <th>Factory Run</th>
                                                <th>Capacity Daily</th>
                                                <th>Employe Male</th>
                                                <th>Employe Female</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($factorydata as $row)
                                            {{-- <?php dd($items); ?> --}}
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->factory_on}}</td>
                                                <td>{{$row->production_capacity}}</td>
                                                <td>{{$row->employe_male}}</td>
                                                <td>{{$row->employe_female}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm edit_factory_btn" id="{{$row->id}}" >Edit</button>
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

    <div class="modal fade" id="factory_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Factory Details</h4>
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
                    <form action="{{ url('factory') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Facetory Run</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="factory_on" class="form-control" id="" placeholder="Facetory Run" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Capacity</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="production_capacity" class="form-control" id="" placeholder="Daily Product Capacity" >
                                </div>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Employe Male</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="employe_male" class="form-control" id="" placeholder="Employe Male" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Employe Female</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="employe_female" class="form-control" id="" placeholder="Employe Female" >
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



    <div class="modal fade" id="factory_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Factory Edit</h4>
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
                    <form action="" class="editupdate" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                       <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Facetory Run</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="factory_on" class="form-control" id="factoryon" placeholder="Facetory Run" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Product Capacity</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="production_capacity" class="form-control" id="productioncapacity" placeholder="Daily Product Capacity" >
                                </div>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Employe Male</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="employe_male" class="form-control" id="employemale" placeholder="Employe Male" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Employe Female</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="employe_female" class="form-control" id="employefemale" placeholder="Employe Female" >
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
            $('.edit_factory_btn').on('click', function(){
                var faid = $(this).attr("id");

                $.ajax({
                    type: 'GET',
                    url:'factory/'+faid+'/edit',

                    success: function (data) {
                        console.log(data);

                        $("#factoryon").val(data[0].factory_on);
                        $("#productioncapacity").val(data[0].production_capacity);
                        $("#employemale").val(data[0].employe_male);
                        $("#employefemale").val(data[0].employe_female);

                        $('.editupdate').attr('action', 'factory/'+faid);

                    }
                });

                $("#factory_edit").modal('show');

            });

        });
    </script>

@endsection


