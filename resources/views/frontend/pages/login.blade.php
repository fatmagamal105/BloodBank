@extends('frontend.layout')
@section('content')
    <div class="content-form-fatma container">
        <div class="container ">
            <div class="col-lg-5 col-md-7 mx-auto my-4 ">
                <h2>Register as a donor</h2>
                <h4 class="alert-success">
                    <?php
                    $message = \Illuminate\Support\Facades\Session::get('msg');
                    if ($message){
                        echo $message;
                        \Illuminate\Support\Facades\Session::put('msg',null);
                    }
                    ?>
                </h4>
            </div>
        </div>
        <div class="container  mx-auto my-4">
            <form class="" method="post" action="{{ URL::to('/save-donor') }}">
                {{ csrf_field() }}
                <div class="col-lg-5 col-md-7 form-group mx-auto my-4">
                    <input type="text" placeholder="Name"  name="username" value="فاعل خير" class="form-control" id="inputEmail4">
                </div>
                <div class="col-lg-5 col-md-7 mx-auto my-4">

                    <input type="email" placeholder="Email" name="email" class="form-control" id="inputEmail4">
                </div>

                <div class="col-lg-5 col-md-7 mx-auto my-4">
                    <input type="number" placeholder="Phone" name="phone" class="form-control" required>
                </div>

                <div class=" col-lg-5 col-md-7 mx-auto my-4">
                    <input type="text" placeholder="cairo" name="governor" class="form-control" >
                </div>
                <div class=" col-lg-5 col-md-7 mx-auto my-4">
                    <input type="text" placeholder="address" name="address" class="form-control" >
                </div>

                <div class=" col-lg-5 col-md-7 mx-auto my-4">
                    <input type="text" placeholder="O+/O-/B+/B-/A+/A-/AB+/AB-" name="type" class="form-control" required>
                </div>

                <div class=" col-lg-5 col-md-7 mx-auto my-4">
                    <input type="text" placeholder="Contact type/SMS/Calls/SMS+Calls" name="contact_type" class="form-control" required >
                </div>

                <div class=" col-lg-5 col-md-7 mx-auto my-4">
                    <input type="text" placeholder="per24h/From 8am to 3pm/From 3pm to 11pm" name="contact_time" class="form-control"  required>
                </div>
                <div class="col-lg-5 col-md-7 my-4 mx-auto but">
                    <button name="sign-up" type="submit">Register now</button>
                </div>


            </form>
        </div>
    </div>

@endsection
