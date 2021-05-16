@extends('frontend.layout')
@section('content')
    <!-- start contact us page -->
    <div class="about">
        <div class="about-img w-25 mt-5 ">
            <img class="img-fluid" src="{{ URL::to('frontend/imge/images.jpg') }}" alt="img">
            <div class="border-img"></div>
        </div>
    </div>

    <h4 class="alert-success">
        <?php
            $message = \Illuminate\Support\Facades\Session::get('msg');
            if ($message){
            echo $message;
            \Illuminate\Support\Facades\Session::put('msg',null);
            }
        ?>
    </h4>
    <div class="container">
        <div class="contact-us col-md-6 text-center mx-auto my-4 ">
            <h2 class="h2 h2-color">Contact Us</h2>
        </div>
    </div>
    <div class="container  mx-auto my-4">
        <form class="form-contact" method="post"  action="{{ url('/add-msg') }}">
            {{ csrf_field() }}
            <div class="col-md-6 form-group mx-auto my-4">
                <input type="text" placeholder="Name" rows="10" value="your name" name="name" class="form-control">
            </div>

            <div class="col-md-6 mx-auto my-4">
                <input type="email" placeholder="Email "name="email" class="form-control">
            </div>

            <div class="form-floating col-md-6 mx-auto my-4">
                <textarea class="form-control" placeholder="Message for me" id="floatingTextarea2" name="msg" style="height: 300px"></textarea>

            </div>

            <div class="col-md-4 mx-auto my-6">
                <button class="rounded" name="sign-up" type="submit">SEND MESSAGE</button>
            </div>
        </form>
    </div>
    <!-- end contact us page -->

@endsection
