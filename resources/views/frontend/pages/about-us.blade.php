@extends('frontend.layout')
@section('content')
    <!-- start aboutus page -->
    <div class="aboutus" id="aboutUs">
        <div class="container">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 w-75">
                <!-- image of About us page -->
                <img src="{{ URL::to('frontend/imge/g2.jpg') }}" class="img-fluid" alt="">

                <!-- content of About us page -->
                <h2>About Us</h2>

                <ul>
                    <li> This blood bank is a charitable site to stop God Almighty
                        About the site</li>
                    <li>We are ambitious young people who seek to serve those who desperately need a drop of blood</li>
                    <li> We need your support by publishing the site and praying for us in the back of the unseen</li>
                    <li>The site is not affiliated with any organization, association, or any other party</li>
                    <li>The site is run by our team</li>
                    <li>We do not have any email</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
