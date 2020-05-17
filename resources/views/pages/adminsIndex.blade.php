@extends('index')
@section('content')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Adminox</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                                    <li class="breadcrumb-item active">Members</li>
                                </ol>
                            </div>
                            <h4 class="page-title">{{__('Administrateurs')}}</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-4">
                        <a href="#custom-modal" class="btn btn-primary waves-effect waves-light mb-3"
                           data-toggle="modal" data-target="#add-admin-modal"
                           data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200"
                           data-overlaycolor="#36404a"><i class="fa fa-user-plus mr-1"></i>{{__('Administrateurs')}}</a>
                    </div><!-- end col -->
                    <div class="col-sm-8">
                        <div class="text-right">
                            <ul class="pagination pagination-split mt-0 float-right">
                                {{$admins->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    @foreach($admins as $admin)
                        <div class="col-lg-3">
                            <div class="text-center card-box">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <div><i class="mdi mdi-dots-horizontal h3 m-0 text-muted"></i></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa fa-edit mr-1 text-primary"></i>Edit</a>
                                        @if ($admin->status == 'ACTIVE')
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-lock mr-1 text-warning"></i>Block</a>
                                        @else
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-lock-open mr-1 text-success"></i>Unblock</a>
                                        @endif
                                        <a class="dropdown-item" href="#"><i class="fa fa-trash mr-1 text-danger"></i>Delete</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="member-card">
                                    <div class="avatar-xl member-thumb mx-auto">
                                        @if ($admin->picture)
                                            <img src="{{$admin->picture}}" alt="user-image"
                                                 class="rounded-circle img-thumbnail">
                                        @else
                                            <img src="{{asset('assets/images/users/user.png')}}"
                                                 class="rounded-circle img-thumbnail" alt="user-image">
                                        @endif
                                        @if ($admin->status == 'ACTIVE')
                                            <i class="mdi mdi-check-circle member-star text-success"
                                               title="active user"></i>
                                        @else
                                            <i class="mdi mdi-close-circle member-star text-warning"
                                               title="deat user"></i>
                                        @endif
                                    </div>

                                    <div class="">
                                        <h4 class="mb-1">{{ucfirst($admin->first_name)}} {{ucfirst($admin->last_name)}}</h4>
                                        <p class="text-muted">{{'@'.$admin->role->name}}</p>
                                    </div>


                                    <ul class="social-links list-inline mt-3 ">
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips "
                                               href="#" data-original-title="Google"><i class="fab fa-google "></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                               href="#" data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a title="" data-placement="top" data-toggle="tooltip" class="tooltips"
                                               href="#" data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                        </li>
                                    </ul>
                                    @if ($admin->status == 'ACTIVE')
                                        <button type="button"
                                                class="btn btn-outline-warning mt-3 btn-rounded btn-bordered waves-effect width-md waves-light text-uppercase">
                                            <i class="fa fa-lock mr-1"></i> {{__('Bloquer')}}
                                        </button>
                                    @else

                                        <button type="button"
                                                class="btn btn-outline-primary mt-3 btn-rounded btn-bordered waves-effect width-md waves-light text-uppercase">
                                            <i class="fa fa-lock-open mr-1"></i> {{__('Activer')}}
                                        </button>
                                    @endif

                                </div>

                            </div>

                        </div> <!-- end col -->
                    @endforeach
                </div>
                <!-- end row -->


            </div> <!-- end container-fluid -->

        </div> <!-- end content -->


        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2017 - 2019 © Adminox theme by <a href="#">Coderthemes</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Modal Start -->
    <!-- ============================================================== -->

    <!-- sample modal content -->

    <div id="add-admin-modal" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Modal Content is Responsive</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Name</label>
                                <input type="text" class="form-control" id="field-1" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Surname</label>
                                <input type="text" class="form-control" id="field-2" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Address</label>
                                <input type="text" class="form-control" id="field-3" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-4" class="control-label">City</label>
                                <input type="text" class="form-control" id="field-4" placeholder="Boston">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-5" class="control-label">Country</label>
                                <input type="text" class="form-control" id="field-5" placeholder="United States">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-6" class="control-label">Zip</label>
                                <input type="text" class="form-control" id="field-6" placeholder="123456">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Personal Info</label>
                                <textarea class="form-control" id="field-7"
                                          placeholder="Write something about yourself"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->

@stop
