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
                            <h2 class="content-header-title float-left mb-0">Users</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Users</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add New User</a>
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
                                    <h4 class="mb-0">Add New User</h4>
                                </div>
                                <div class="card-body">

                                    <form class="form-horizontal" action="{{route('admin.user.store')}}" novalidate=""
                                     method="POST" 
                                     enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">


                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name">
                                                        <label for="first_name">First Name</label>
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="last_name" class="form-control" placeholder="Last Name" name="last_name">
                                                        <label for="last_name">Last Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                                                        <label for="email">Email</label>
                                                    </div>
                                                </div>


                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="mobile" class="form-control" placeholder="Phone Number" name="mobile">
                                                        <label for="mobile">Phone Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="password" class="form-control" placeholder="Password" name="password">
                                                        <label for="password">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" multiple="" class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="user_id" class="form-control" value="{{ Auth::user()->id}}" name="user_id" placeholder="User ID">
                                                        <label for="user_id">User ID</label>
                                                    </div>
                                                </div> --}}

                                                {{-- <div class="col-md-6 col-12">
                                                    <fieldset class="form-group">
                                                        <select class="form-control" id="category_id" name="category_id">
                                                            <option value="1">Choose category</option>
                                                            @if($categories && $categories -> count() > 0)
                                                                @foreach($categories as $category)
                                                                    <option
                                                                        value="{{$category -> id }}">{{$category -> category_name}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </fieldset>
                                                </div>
                                                <div class="col-12">
                                                    <div class="custom-file">
                                                        <input type="file" name="images[]" multiple class="custom-file-input">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div> --}}

                                                

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
