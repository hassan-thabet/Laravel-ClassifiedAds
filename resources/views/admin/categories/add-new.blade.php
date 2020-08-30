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

                                    <form class="form-horizontal" action="{{route('admin.store')}}" novalidate="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12" style="padding-right: 50px">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="category_name">Category Name</label>
                                                        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name" required="" data-validation-required-message="This field is required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12" style="padding-right: 50px">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="icon_url">Icon URL</label>
                                                        <input type="text" class="form-control" id="icon_url" name="icon_url" placeholder="Icon URL"  required="" data-validation-required-message="This field is required">
                                                    </div>
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
