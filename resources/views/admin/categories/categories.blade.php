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
                                    <h4 class="mb-0">Categories List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                            <thead>
                                            <tr>
                                                <th>PHOTO & ID</th>
                                                <th>CATEGORY NAME</th>
                                                <th>ADS COUNT</th>
                                                <th>LAST UPDATE</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                            </thead>
                                            @foreach($categories as $category)
                                                <tbody>
                                                <tr>
                                                    <td>#{{$category->id}} - <img class="media-object rounded-circle" src="{{$category->icon_url}}" alt="Avatar" height="35" width="35"></td>
                                                    <td>{{$category->category_name}}</td>
                                                    <td >{{$category->products->count()}} </td>
                                                    <td>{{$category -> getDate($category->updated_at)}}</td>

                                                    <td>
                                                        <div class="row" style="align-content: space-between">
                                                            <a class="todo-item-info primary" href="{{route('admin.edit' , $category -> id)}}"><i class="feather icon-settings" style="padding: 8px"></i></a>
                                                            <a class="todo-item-favorite danger" href=""><i class="feather icon-trash"  style="padding: 8px"></i></a>
                                                            <a class="todo-item-delete warning" href=""><i class="feather icon-refresh-ccw"  style="padding: 8px"></i></a>


                                                        </div>
                                                    </td>

                                                </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
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
