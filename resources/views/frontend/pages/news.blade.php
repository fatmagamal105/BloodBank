@extends('frontend.layout')
@section('content')
    <div class="header_news">
        <div class="header-content p-3">

            <h4 class=" w-25 corona">Coronavirus: latest advice</h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div  class=" col-md-12 text-center about-us">

                <h4 class="text-center m-4 ">
                    <span>Initially</span> sustains precious human life. Its presence and flow allow us
                    to seek the purpose of our existence and attain life’s milestones.
                    When we share blood, healing happens; individuals thrive; and families
                    remain whole. Giving blood enriches our life experience, casting aside
                    our differences to link the human race through a common, natural bond.
                </h4>
            </div>
        </div>
    </div>
    <div class="about">
        <div class=" container bg-white mb-5 ">
            <div class="row ">
                <div class="col-md-4">
                    <div class="img d-flex pt-5">
                        <div class="about-img1 ">
                            <img class="rounded1 img-fluid" src="{{ URL::to('frontend/imge/f02dafa2-0572-4f2d-b21e-cb347e749294_16x9_1200x676.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="about-me py-5">
                        <h4> 1)	Coronavirus update</h4>
                        <p class="pt-1 lead">
                            How we're working to respond to the challenges caused by
                            the coronavirus pandemic.The coronavirus (COVID-19) pandemic
                            has resulted in new areas of research for us as well as
                            considerable challenges to the blood donation.
                            <br>
                        </p>
                        <h4> 2)	Announcement of a third COVID-19 vaccine </h4>
                        <p class="pt-1 lead">
                            Announcement of a third COVID-19 vaccine being approved by the U.S. Food and Drug Administration,
                            we want the public to know that receiving the vaccine does not affect your eligibility to give blood.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="PORTFOLIO2">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="portfolio mb-5 ">
                        <div class="portfolio-img">
                            <img src="{{ URl::to('frontend/imge/as/g9.jpg') }}" alt="">
                        </div>
                        <div class="work-content">
                            <h2 class="w-title">It’s safe to donate blood after getting the COVID-19 vaccine</h2>
                            <div class="catogroy-icon d-flex justify-content-between">
                                <div class="w-more">
                                    <p class="w-catogry">While there’s currently not a blood supply shortage in the U.S.,
                                        officials are encouraging people to continue to donate.</p>
                                </div>
                            </div>
                            <h6 class="ready">
                                <a>READ MORE
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="portfolio mb-5 ">
                        <div class="portfolio-img">
                            <img src="{{ URL::to('frontend/imge/as/g9.jpg') }}"  alt="">
                        </div>
                        <div class="work-content">
                            <h2 class="w-title">
                                It’s safe to donate blood after getting the COVID-19 vaccine
                            </h2>

                            <div class="catogroy-icon d-flex justify-content-between">
                                <div class="w-more">
                                    <p class="w-catogry">While there’s currently not a blood supply shortage in the U.S.,
                                        officials are encouraging people to continue to donate.</p>

                                </div>

                            </div>
                            <h6 class="ready">
                                <a>READ MORE
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </h6>
                        </div>
                    </div>


                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="portfolio mb-5 ">
                        <div class="portfolio-img">
                            <img src="{{ URL::to('frontend/imge/as/g6.jpg') }}" alt="">
                        </div>
                        <div class="work-content">
                            <h2 class="w-title">It’s safe to donate blood after getting the COVID-19 vaccine</h2>

                            <div class="catogroy-icon d-flex justify-content-between">
                                <div class="w-more">
                                    <p class="w-catogry">While there’s currently not a blood supply shortage in the U.S.,
                                        officials are encouraging people to continue to donate.</p>
                                </div>
                            </div>
                            <h6 class="ready">
                                <a>READ MORE
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
