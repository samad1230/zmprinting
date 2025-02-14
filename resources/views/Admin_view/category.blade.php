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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_modal"><i class="zmdi zmdi-plus"></i>Add Category</button>
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
                                                <th>Category Name</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $row)
                                            {{-- <?php dd($items); ?> --}}
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td class="about_text">{{$row->category_name}}</td>
                                                <td width="305px">
                                                    <button type="button" class="btn btn-primary btn-sm edit_category_btn" id="{{$row->id}}" >Edit</button>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('category.delete',$row->id)}}" role="button">Delete</a>
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

    <div class="modal fade" id="category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Category</h4>
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
                    <form action="{{ url('category') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Category Name:</label>
                            <input type="text" class="form-control" id="" name="category_name">
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



    <div class="modal fade" id="category_rdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <form action="" class="editupdate" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Category Name:</label>
                            <input type="text" class="form-control" id="categoryname" name="category_name">
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
            $('.edit_category_btn').on('click', function(){
                var catid = $(this).attr("id");

                $.ajax({
                    type: 'GET',
                    url:'category/'+catid+'/edit',

                    success: function (data) {

                        $("#categoryname").val(data[0].category_name);

                        $('.editupdate').attr('action', 'category/'+catid);

                    }
                });

                $("#category_rdit").modal('show');

            });

        });
    </script>

@endsection
