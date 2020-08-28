.@extends('layouts.dashboard')

@section('content')


    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">

            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Categories</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Categories</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add New Category</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="content-body">
                <!-- Statistics card section start -->
                <section id="statistics-card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Add New Category</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal" novalidate="">
                                        <div class="row">
                                            <div class="col-12" style="padding-right: 50px">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Category Name</label>
                                                        <input type="text" class="form-control" id="account-username" placeholder="" value="" required="" data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="padding-right: 50px" class="media">
                                                <a href="javascript: void(0);">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" class="rounded mr-75" alt="profile image" height="64" width="64">
                                                </a>
                                                <div class="media-body mt-75">
                                                    <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                        <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer waves-effect waves-light" for="account-upload">Upload new photo</label>
                                                        <input type="file" id="account-upload" hidden="">
                                                        <button class="btn btn-sm btn-outline-warning ml-50 waves-effect waves-light">Reset</button>
                                                    </div>
                                                    <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                            size of
                                                            800kB</small></p>
                                                </div>
                                            </div>

                                        </div>
                                        <div style="padding-right: 36px ; padding-top: 30px">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                        </div>


                    </div>


                </section>
                <!-- // Statistics Card section end-->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


@endsection
