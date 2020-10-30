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
                            <h2 class="content-header-title float-left mb-0">Updates</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Updates</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-body">
               
                <section class="faq">
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="card bg-transparent border-0 shadow-none collapse-icon accordion-icon-rotate">
                            <div class="card-body p-0">
                                <div class="accordion search-content-info" id="accordionExample">

                                    {{-- New Update in top --}}
                                    <div class="collapse-margin search-content mt-0">
                                        <div class="card-header" id="headingOne" role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <span class="lead collapse-title">
                                                تم تحديث صفحه التحديثات و اضافه ميزات جديده علي صفحه الاعضاء
                                            </span>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                اصلاحات في الصفحه الخاصه بالاعضاء للوحه التحكم الرئيسيه للاداره و ال API الخاص بتطبيقات الهواتف المحموله.
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                    
                                    {{-- Old updates in buttom --}}
                                    <div class="collapse-margin search-content">
                                        <div class="card-header" id="headingThirteen" role="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            <span class="lead collapse-title collapsed">
                                                Is this item still 'royalty free'?
                                            </span>
                                        </div>
                                        <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Yes. Royalty free means you pay for the item once for each end product, and you don't need to pay any additional or ongoing fees for each person who sees or uses it. This is separate to whether you need a clearance from the owner of rights in the real world product or trademark within an item.
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


@endsection
