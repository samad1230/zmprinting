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
                            <h5>Well Come to Gallery</h5>
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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gallery_modal"><i class="zmdi zmdi-plus"></i> Gallery Image</button>
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
                                                <th>Gallery Name</th>
                                                <th>Gallery Image</th>
                                                <th>Update</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($gallerydata as $row)
                                            {{-- <?php dd($items); ?> --}}
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->name}}</td>
                                                <td><img src="{{URL::to($row->image)}}" alt="" wheight="50px;" width="70px;"></td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm edit_gallery_btn" id="{{$row->id}}" >Edit</button>
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


    <div class="modal fade" id="gallery_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Gallery Image</h4>
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
                    <form action="{{ url('gallery') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Gallery</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" id="" placeholder="Gallery Name" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Gallery Image</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" id="" placeholder="Gallery image" >
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



    <div class="modal fade" id="gallery_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="">Gallery Edit</h4>
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
                    <form action="{{ url('updategallery') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="oldimage" id="old_image">
                        <input type="hidden" name="oldid" id="old_id">

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Gallery Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" id="nameedit" placeholder="gallery Name" >
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class=" " for="name">Gallery Image</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" id="" placeholder="" >
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
            $('.edit_gallery_btn').on('click', function(){
                var galary = $(this).attr("id");

                $.ajax({
                    type: 'GET',
                    url:'gallery/'+galary+'/edit',

                    success: function (data) {
                        console.log(data);

                        $("#old_image").val(data[0].image);
                        $("#old_id").val(data[0].id);
                        $("#nameedit").val(data[0].name);

                    }
                });

                $("#gallery_edit").modal('show');

            });

        });
    </script>

@endsection


