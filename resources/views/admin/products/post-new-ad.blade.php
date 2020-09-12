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
                            <h2 class="content-header-title float-left mb-0">Products</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Products</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add New Product</a>
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
                                    <h4 class="mb-0">Add New Products</h4>
                                </div>
                                <div class="card-body">

                                    <form class="form-horizontal" action="#" novalidate=""
                                     method="POST" 
                                     enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">

                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                                        <label for="first-name-column">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname-column">
                                                        <label for="last-name-column">Last Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                                                        <label for="city-column">City</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country">
                                                        <label for="country-floating">Country</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="company-column" class="form-control" name="company-column" placeholder="Company">
                                                        <label for="company-column">Company</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="email" id="email-id-column" class="form-control" name="email-id-column" placeholder="Email">
                                                        <label for="email-id-column">Email</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-12">
                                                    <fieldset class="checkbox">
                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                            <input type="checkbox">
                                                            <span class="vs-checkbox">
                                                                <span class="vs-checkbox--check">
                                                                    <i class="vs-icon feather icon-check"></i>
                                                                </span>
                                                            </span>
                                                           
                                                        </div>
                                                    </fieldset>
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
