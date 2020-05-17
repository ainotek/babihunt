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
                                    <li class="breadcrumb-item active">Tickets</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tickets</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Manage Tickets</h4>

                            <div class="text-center mb-4">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="my-3">
                                            <h3 class="mb-2">25563</h3>
                                            <p class="text-uppercase mb-1 font-13 font-weight-medium">Total tickets</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="my-3">
                                            <h3 class="mb-2">6952</h3>
                                            <p class="text-uppercase mb-1 font-13 font-weight-medium">Pending
                                                Tickets</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="my-3">
                                            <h3 class="mb-2">18361</h3>
                                            <p class="text-uppercase mb-1 font-13 font-weight-medium">Closed Tickets</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="my-3">
                                            <h3 class="mb-2 text-danger">250</h3>
                                            <p class="text-uppercase mb-1 font-13 font-weight-medium">Deleted
                                                Tickets</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="datatable_length"><label>Show <select
                                                    name="datatable_length" aria-controls="datatable"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="datatable_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="datatable"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table
                                            class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap dataTable no-footer dtr-inline collapsed"
                                            style="border-collapse: collapse; border-spacing: 0px; width: 100%;"
                                            id="datatable" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1" style="width: 23.4px;" aria-sort="ascending"
                                                    aria-label="
                                                ID
                                            : activate to sort column descending">
                                                    ID
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" style="width: 148.4px;"
                                                    aria-label="Requested By: activate to sort column ascending">
                                                    Requested By
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" style="width: 267.4px;"
                                                    aria-label="Subject: activate to sort column ascending">Subject
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" style="width: 63.4px;"
                                                    aria-label="Assignee: activate to sort column ascending">Assignee
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" style="width: 51.4px;"
                                                    aria-label="Priority: activate to sort column ascending">Priority
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" style="width: 45.4px;"
                                                    aria-label="Status: activate to sort column ascending">Status
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" style="width: 92.4px;"
                                                    aria-label="Created Date: activate to sort column ascending">Created
                                                    Date
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1"
                                                    colspan="1" style="width: 67.4px;"
                                                    aria-label="Due Date: activate to sort column ascending">Due Date
                                                </th>
                                                <th class="hidden-sm sorting" tabindex="0" aria-controls="datatable"
                                                    rowspan="1" colspan="1" style="width: 0px; display: none;"
                                                    aria-label="Action: activate to sort column ascending">Action
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>


                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1"><b>#1020</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-9.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Erwin E. Brown</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    A new rating has been received
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-1.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-warning">Medium</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    2013/08/11
                                                </td>

                                                <td>
                                                    2013/08/30
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td tabindex="0" class="sorting_1"><b>#1254</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-8.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Margeret V. Ligon</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Your application has been received!
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-10.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">High</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1"><b>#1256</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-2.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>George A. Llanes</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Support for theme
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-10.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Low</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    2017/04/28
                                                </td>

                                                <td>
                                                    2017/04/28
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"><b>#1352</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-5.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Karen R. Doyle</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Question regarding your Bootstrap Theme
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-8.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">High</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1" tabindex="0"><b>#2251</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-8.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Mark C. Diaz</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Verify your new email address!
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-10.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">High</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td tabindex="0" class="sorting_1"><b>#2542</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-3.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Jose D. Delacruz</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    New submission on your website
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-9.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-warning">Medium</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    2008/04/25
                                                </td>

                                                <td>
                                                    2008/04/25
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1"><b>#320</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-5.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Phyllis K. Maciel</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Verify your new email address!
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-10.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-danger">High</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    2017/04/20
                                                </td>

                                                <td>
                                                    2017/04/25
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td class="sorting_1" tabindex="0"><b>#3562</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-8.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Freddie J. Plourde</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Security alert for my account
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-2.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Low</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td tabindex="0" class="sorting_1"><b>#3652</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-3.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Jessica T. Phillips</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Item Support Message sent
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-9.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-warning">Medium</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Closed</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td tabindex="0" class="sorting_1"><b>#3652</b></td>
                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-4.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                        <span class="ml-1"><b>Luke J. Sain</b></span>
                                                    </a>
                                                </td>

                                                <td>
                                                    Your password has been reset
                                                </td>

                                                <td>
                                                    <a href="javascript: void(0);" class="text-body">
                                                        <img src="{{asset('assets/images/users/avatar-10.jpg')}}"
                                                             alt="contact-img" title="contact-img"
                                                             class="rounded-circle avatar-sm">
                                                    </a>
                                                </td>

                                                <td>
                                                    <span class="badge badge-secondary">Low</span>
                                                </td>

                                                <td>
                                                    <span class="badge badge-success">Open</span>
                                                </td>

                                                <td>
                                                    01/04/2017
                                                </td>

                                                <td>
                                                    21/05/2017
                                                </td>

                                                <td style="display: none;">
                                                    <div class="btn-group dropdown">
                                                        <a href="javascript: void(0);"
                                                           class="table-action-btn dropdown-toggle"
                                                           data-toggle="dropdown" aria-expanded="false"><i
                                                                class="mdi mdi-dots-horizontal"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit
                                                                Ticket</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark
                                                                as Favorite</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="datatable_info" role="status"
                                             aria-live="polite">Showing 1 to 10 of 15 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                            <ul class="pagination pagination-rounded">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="datatable_previous"><a href="#" aria-controls="datatable"
                                                                               data-dt-idx="0" tabindex="0"
                                                                               class="page-link"><i
                                                            class="mdi mdi-chevron-left"></i></a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                                                                aria-controls="datatable"
                                                                                                data-dt-idx="1"
                                                                                                tabindex="0"
                                                                                                class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item "><a href="#"
                                                                                          aria-controls="datatable"
                                                                                          data-dt-idx="2" tabindex="0"
                                                                                          class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="datatable_next"><a
                                                        href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0"
                                                        class="page-link"><i class="mdi mdi-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
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

@stop
