@extends('frontend.layout')
@section('content')

    <!-- start donation page condition for donation -->
    <div class="by_alaa">
        <img class="img" src="{{ URL::to('frontend/imge/g10.jpg') }} ">
        <h2 class="h2">Conditions for donating blood</h2>
        <div class="text">
            <ul class="alaa">
                <h3 style="color:  black">important conditions</h3>
                <li>The donor should be in good health and not suffering from any infectious diseases.</li>
                <li> The age of the donor should be between 18-65 years</li>
                <li>The donor's weight must be at least 50 kg</li>
                <li>That the hemoglobin percentage for men is 14-17 gm, and for women 12-14 gm</li>
                <li> The pulse is between 50-100 per minute</li>
                <li>The temperature should not exceed 37 degrees Celsius</li>
                <li>The average blood pressure is less than 120/80 mm Hg.</li>
            </ul>

            <ul class="alaa">
                <h3 style="color:  black">Steps taken to ensure the safety of blood transfused to the patient:</h3>
                <li>  Passing the medical examination after answering questions related to health history,<br> provided that the general conditions for blood donation are met.</li>
                <li>  Conducting accurate analyzes and checks on each unit of blood to determine the type and ensure that it is free from infectious diseases,<br> such as (AIDS, hepatitis B and C, syphilis, malaria).</li>
                <li>  Perform compatibility tests between units of transfused blood and patients' blood; <br> This is to ensure the safety and effectiveness of the blood.
                    Use filters for white blood cells.</li>
            </ul>

            <ul class="alaa" >
                <h3 style="color: black">Cases that are not allowed to donate blood:</h3>
                <li>  People with severe anemia.</li>
                <li>Less than 18 years old.</li>
                <li> People with genetic blood diseases</li>
                <li> People with infectious diseases such as (AIDS, hepatitis B and C, syphilis, malaria).</li>
                <li>People with chronic diseases, such as diabetes, high blood pressure, and cancer.</li>
            </ul>
        </div>
    </div>
@endsection
