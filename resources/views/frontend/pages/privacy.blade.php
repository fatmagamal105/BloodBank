@extends('frontend.layout')
@section('content')
    <div class="privacy-policy" id="privacy">
        <div class="container">

            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 w-75">

                <!-- Privacy image -->
                <img src="{{ URL::to('frontend/imge/2.jpeg') }}" class="img-fluid" alt="blood donation">

                <!-- privacy content -->
                <h2>Privacy Policy</h2>

                <p>Thank you for your blood donations.The Blood Connection,respect your privacy and are committed to protecting it through our compliance with this policy.</p>

                <p>This policy describes the types of information we may collect from you . and our practices for collecting, using, maintaining, protecting and disclosing that information.</p>

                <p>Please read this policy carefully to understand our policies and practices regarding your information and how we will treat it. If you do not agree with our policies and practices, your choice is not to use our Websites. By accessing or using our Websites, you agree to this privacy policy. This policy may change from time to time. Your continued use of these Websites after we make changes is deemed to be acceptance of those changes, so please check the policy periodically for updates.</p>

                <h5>Explain the work of this website:</h5>
                <ul>
                    <li><span>The purpose of this website is to help those in need of blood only, and it is strictly forbidden to use the site’s contents for other purposes</span></li>

                    <li><span>Donors put their information for a noble purpose and want their information to be used for a noble purpose as well.</span></li>

                    <li><span>Our Websites are not intended for children under 16 years of age. Blood donors must be at least 16 years of age (with parental consent) or 17 and older.</span></li>

                    <li><span>We may disclose some of your information such as the name, phone number and date of the last donation to these people in need of blood</span></li>

                    <li><span>The site has the full right to legally prosecute the violators of the site’s privacy.</span></li>

                    <li><span>If you agree to this privacy and would like to help others and are able to donate [<a href="/donation"> read the terms of donation </a>]</span></li>

                    <li><span>In the event that there is a person who needs blood, he will conduct a search on our website and will call you by phone to donate your blood to him [<a href="/why"> read the benefits of donating </a>]</span></li>

                </ul>
            </div>

        </div>
    </div>
@endsection
