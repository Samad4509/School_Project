@extends('Frontend.master')
@section('title')
    Home Page
@endsection
@section('body')
    <div class="col-12">
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul id="menu-primary" class="nav navbar-nav" itemscope
                    itemtype="http://www.schema.org/SiteNavigationElement">
                    <li id="menu-item-45"
                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-item-45 nav-item">
                        <a itemprop="url" href="https://tmitstore.com/schooltheme/" class="nav-link"
                            aria-current="page"><span itemprop="name">হোম</span></a>
                    </li>
                    <li id="menu-item-46"
                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-46 nav-item"><a
                            itemprop="url" href="https://tmitstore.com/schooltheme/উপধ্যাক্ষের-বাণী/" class="nav-link"><span
                                itemprop="name">উপধ্যাক্ষের বাণী</span></a></li>
                    <li id="menu-item-47"
                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-47 nav-item"><a
                            itemprop="url" href="https://tmitstore.com/schooltheme/অধ্যক্ষের-বানী/" class="nav-link"><span
                                itemprop="name">অধ্যক্ষের বানী</span></a></li>
                    <li id="menu-item-57"
                        class="menu-item menu-item-type-taxonomy menu-item-object-stdinfopost_categories menu-item-57 nav-item">
                        <a itemprop="url" href="https://tmitstore.com/schooltheme/stdinfopost_category/ছাত্র-ছাত্রী/"
                            class="nav-link"><span itemprop="name">ছাত্র-ছাত্রী</span></a>
                    </li>
                    <li id="menu-item-58"
                        class="menu-item menu-item-type-taxonomy menu-item-object-stdinfopost_categories menu-item-58 nav-item">
                        <a itemprop="url" href="https://tmitstore.com/schooltheme/stdinfopost_category/পরিচালনা-পরিষদ/"
                            class="nav-link"><span itemprop="name">পরিচালনা পরিষদ</span></a>
                    </li>
                    <li id="menu-item-59"
                        class="menu-item menu-item-type-taxonomy menu-item-object-stdinfopost_categories menu-item-59 nav-item">
                        <a itemprop="url" href="https://tmitstore.com/schooltheme/stdinfopost_category/শিক্ষক/"
                            class="nav-link"><span itemprop="name">শিক্ষক</span></a>
                    </li>
                    <li id="menu-item-65"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65 nav-item"><a
                            itemprop="url" href="https://tmitstore.com/schooltheme/ভিডিও-গ্যালারী/" class="nav-link"><span
                                itemprop="name">ভিডিও গ্যালারী</span></a></li>
                    <li id="menu-item-67"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67 nav-item"><a
                            itemprop="url" href="https://tmitstore.com/schooltheme/photo/" class="nav-link"><span
                                itemprop="name">ফটো গ্যালারী</span></a></li>
                    <li id="menu-item-72"
                        class="menu-item menu-item-type-taxonomy menu-item-object-stdinfopost_categories menu-item-72 nav-item">
                        <a itemprop="url" href="https://tmitstore.com/schooltheme/stdinfopost_category/ছাত্র-ছাত্রী/"
                            class="nav-link"><span itemprop="name">ছাত্র-ছাত্রী</span></a>
                    </li>
                    <li id="menu-item-73"
                        class="menu-item menu-item-type-taxonomy menu-item-object-stdinfopost_categories menu-item-73 nav-item">
                        <a itemprop="url" href="https://tmitstore.com/schooltheme/stdinfopost_category/পরিচালনা-পরিষদ/"
                            class="nav-link"><span itemprop="name">পরিচালনা পরিষদ</span></a>
                    </li>
                    <li id="menu-item-74"
                        class="menu-item menu-item-type-taxonomy menu-item-object-stdinfopost_categories menu-item-74 nav-item">
                        <a itemprop="url" href="https://tmitstore.com/schooltheme/stdinfopost_category/শিক্ষক/"
                            class="nav-link"><span itemprop="name">শিক্ষক</span></a>
                    </li>
                    <li id="menu-item-75"
                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-75 nav-item"><a
                            itemprop="url" href="https://tmitstore.com/schooltheme/উপধ্যাক্ষের-বাণী/" class="nav-link"><span
                                itemprop="name">উপধ্যাক্ষের বাণী</span></a></li>
                    <li id="menu-item-69"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69 nav-item"><a
                            itemprop="url" href="https://tmitstore.com/schooltheme/যোগাযোগ/" class="nav-link"><span
                                itemprop="name">যোগাযোগ</span></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="row">
        <div class="col-md-12 col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        @foreach ($images as $image)
                                 <div class="row">
                                    <img class="d-block w-100" src="{{ asset('slider/' . $image->slider) }}" alt="" height="100" width="100">
                                </div>               
                        @endforeach
                    </div>
                    {{-- <div class="carousel-item ">
                        <img class="d-block w-100"
                            src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/slider1.jpg"
                            alt="First slide">
                    </div> --}}
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    <div id="row">
        <div class="col-lg-12 col-md-12 col-sm-12 scrool">
            <div class="scrool_1">
                ঘোষণাঃ
            </div>
            <div class="scrool_2">
                <marquee class="mar" direction="left" scrollamount="4px" onmouseover="this.stop()"
                    onmouseout="this.start()">
                    <i class="ga fa fa-stop-circle"></i> <a class="ga"
                        href="https://tmitstore.com/schooltheme/announcement/announcement-১/" target="_blank">Announcement
                        ১</a>
                </marquee>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 odokerbani">
                <h4>অধ্যাক্ষ্যর বাণী </h4>
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/vice-principal.jpg" alt />
                <p> যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন
                    হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ
                    করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো,অন্যের শেখানো কথাকে জান <a
                        href="https://tmitstore.com/schooltheme/অধ্যক্ষের-বানী/"><button type="button"
                            class="btn btn-info">বিস্তারিত</button></a></p>
            </div>
            <div class="col-md-6 col-sm-12 upadakkerbani">
                <h4>উপ-অধ্যাক্ষ্যর বাণী </h4>
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/principal.jpg" alt />
                <p> যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন
                    হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ
                    করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো,অন্যের শেখানো কথাকে জান<a
                        href="https://tmitstore.com/schooltheme/উপধ্যাক্ষের-বাণী/"><button type="button"
                            class="btn btn-info">বিস্তারিত</button></a></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 schoolaboutimg">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp" class="img-fluid"
                    alt />
            </div>
            <div class="col-md-6 col-sm-12 schoolabout">
                <h4>প্রতিষ্ঠানের ইতিহাস</h4>
                <p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে
                    গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো
                    না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো,যে কথাকে কাজে লাগাতে চাও, তাকে
                    কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও
                    যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে,
                    নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো,যে কথাকে কাজে লাগাতে চাও, ,যে কথাকে কাজে লাগাতে.<a
                        href="#"><button type="button" class="btn btn-info">বিস্তারিত</button></a> </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top:10px;">
            <div class="col-md-8 col-sm-12">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    <span class="notice">ভর্তি </span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/উপধ্যাক্ষের-বাণী/">উপধ্যাক্ষের
                                                বাণী</a></li>
                                    </div>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/অধ্যক্ষের-বানী/">অধ্যক্ষের বানী</a>
                                        </li>
                                    </div>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/hello-world/">Hello world!</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="notice">ফলাফল </span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/উপধ্যাক্ষের-বাণী/">উপধ্যাক্ষের
                                                বাণী</a></li>
                                    </div>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/অধ্যক্ষের-বানী/">অধ্যক্ষের বানী</a>
                                        </li>
                                    </div>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/hello-world/">Hello world!</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="notice">রুটিন </span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/উপধ্যাক্ষের-বাণী/">উপধ্যাক্ষের
                                                বাণী</a></li>
                                    </div>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/অধ্যক্ষের-বানী/">অধ্যক্ষের বানী</a>
                                        </li>
                                    </div>
                                    <div id="content">
                                        <li><a href="https://tmitstore.com/schooltheme/hello-world/">Hello world!</a></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 noticeboard">
                <h4>নোটিশ</h4>
                <div class="notice_box">
                    <marquee direction="up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
                        <ul>
                            <li><a href="https://tmitstore.com/schooltheme/notice/স্কুল-ছুটির-নোটিশ/"
                                    target="_blank">স্কুল ছুটির নোটিশ</a></li>
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .teacs {
            text-align: center;
            margin: 19px 0px 0px 0px;
        }

        .iconwrap {}

        .iconwrap i {
            background: aqua;
            padding: 6px;
            border-radius: 17px;
        }

        .wraptec {
            margin: 0px 0px 27px 0px;
        }

        .teacherh h3 {
            background-color: #1e73be;
            font-weight: bold;
            padding: 8px;
            border-left: 5px solid black;
            margin: 12px 0px 0px 0px;
            font-size: 24px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 teacherh">
                <h3>আমাদের শিক্ষকগন</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row wraptec">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 teacs">
                <img src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/02.webp" alt />
                <h5>মোছা: আসমা বেগম </h5>
                <p>ইংরেজি টিচার</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="container my-3">
                <h3>ফটোগ্যালারি</h3>
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item row no-gutters active">
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                        </div>
                        <div class="carousel-item row no-gutters">
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 float-left plsm2"><img class="img-fluid"
                                    src="https://tmitstore.com/schooltheme/wp-content/uploads/2021/06/scl-img-1.webp">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="counterr">
                <div class="cole">
                    <div class="num">800</div>
                    শিক্ষার্থী
                </div>
                <div class="cole">
                    <div class="num">800</div>
                    শিক্ষার্থী
                </div>
                <div class="cole">
                    <div class="num">800</div>
                    শিক্ষার্থী
                </div>
                <div class="cole">
                    <div class="num">800</div>
                    শিক্ষার্থী
                </div>
                <script type="text/javascript">
                    $(".num").counterUp({
                        delay: 10,
                        time: 1000
                    });
                </script>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
