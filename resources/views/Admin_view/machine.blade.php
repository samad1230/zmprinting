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
                            <h5>Well Come to Machine</h5>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#factory_modal"><i class="zmdi zmdi-plus"></i> Machine Details</button>
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
                                                <th>Machine Name</th>
                                                <th>Section</th>
                                                <th>Total Machine</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($machinedata as $row)
                                            {{-- <?php dd($items); ?> --}}
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->machines_name}}</td>
                                                <td>{{$row->section}}</td>
                                                <td>{{$row->machines}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm edit_machine_btn" id="{{$row->id}}" >Edit</button>
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
                    <h4 class="modal-title" id="">Macine Details</h4>
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
                    <form action="{{ url('machine') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Machine Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="machines_name" class="form-control" id="" placeholder="Machine Name" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Machine Section</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="section" id="">
                                        <option value="">Select Section</option>
                                        <option value="Printing">Printing</option>
                                        <option value="Design">Design</option>
                                        <option value="Screen Print">Screen Print</option>
                                        <option value="Embroidery">Embroidery</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Machine No</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="machines" class="form-control" id="" placeholder="Machine No" >
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



    <div class="modal fade" id="machine_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Machine Edit</h4>
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
                                    <label class=" " for="name">Machine Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="machines_name" class="form-control" id="machinesname" placeholder="Machine Name" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Machine Section</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="section">
                                        <option value="" id="section_edit"></option>
                                        <option value="Printing">Printing</option>
                                        <option value="Design">Design</option>
                                        <option value="Screen Print">Screen Print</option>
                                        <option value="Embroidery">Embroidery</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Machine No</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="machines" class="form-control" id="machines_edit" placeholder="Machine No" >
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
            $('.edit_machine_btn').on('click', function(){
                var faid = $(this).attr("id");

                $.ajax({
                    type: 'GET',
                    url:'machine/'+faid+'/edit',

                    success: function (data) {
                        console.log(data);

                        $("#machinesname").val(data[0].machines_name);
                        $("#section_edit").html(data[0].section);
                        $("#machines_edit").val(data[0].machines);

                        $('.editupdate').attr('action', 'machine/'+faid);

                    }
                });

                $("#machine_edit").modal('show');

            });

        });
    </script>

@endsection


