@extends('frontend.layout')
@section('content')
    <!-- start header -->
    <div class="header d-flex justify-content-center align-items-center">
        <div class="header-content">
            <h2 class="text-white  text-center ">Donate Blood & Save a Life</h2>
            <p class="h5-header text-white text-center">Donating Blood Makes a Big Difference in the Lives of Others.</p>
            <div class=" center">
                <div class=" row">
                    <div class="col-4">
                        <button id="" class="rounded text-center ">
                            <a class="text-white text-decoration-none" href="{{ URL::to('/login') }}">New donor</a>
                        </button></div>
                    <div class="offset-1"></div>
                    <div class="col-4">
                        <button  id="" class="rounded ">
                            <a class="text-white text-decoration-none" href="{{ URL::to('/contact-us') }}">Contact us</a>
                        </button>
                    </div>
                    <div class="offset-1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--start button  find a donor-->
    <h2 class="text-center mt-3 tittel">Find a donor</h2>
    <div class="content"><div class="container justify-content-center d-flex my-3">

            <!-- start form -->
            <form id="find-donor-form" class="panel"  action="/search">
                {{ csrf_field() }}
                <select name="country">
                    <option value="1">cairo</option>
                </select>
                <select name="city">
                    <option value="">region</option>
                </select>
                <input type="text" name="type" placeholder="blood-type">
                <button class="search" name="search" type="submit">search</button>
            </form>
        </div>
    </div>
    <!--end form -->

    <!-- start section search table -->
    <table id="donors-table">
        <tbody>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Governor</th>
            <th>Phone</th>
            <th>Blood type</th>
            <th>Contact type</th>
            <th>Contact time</th>
        </tr>

        @isset($data)
            @foreach($data as $item)
                <tr>
                    <td>{{ $item['username'] }}</td>
                    <td>{{ $item['email'] }}</td>
                    <td>{{ $item['governor'] }}</td>
                    <td><a href="tel:0774654909">{{ $item['phone'] }}</a></td>
                    <td>{{ $item['type'] }}</td>
                    <td>{{ $item['contact_type'] }}</td>
                    <td>{{ $item['contact_time'] }}</td>
                </tr>
            @endforeach
        @endisset
        </tbody>
    </table>

    <div id="pagination-buttons"><div><button disabled="">«</button><button class="active">1</button><button>2</button><button>»</button></div><span>1/2</span></div>

    <!-- end section search table -->
@endsection
