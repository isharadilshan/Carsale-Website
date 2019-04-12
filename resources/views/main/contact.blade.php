@extends('main/app')
@section('title','RPN-CarSales Contact')
@section('headSection')
    <style>
        /* Set the size of the div element that contains the map */
       #map {
         height: 600px;  /* The height is 400 pixels */
         width: 100%;  /* The width is the width of the web page */
        }
     </style>
@endsection
@section('content')
<div class="page">
    <div id="breadcrumb-section" class="section">
        <div class="container">
            <div class="page-title text-center">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div><!-- breadcrumb-section -->

    <div class="ad-post-wrapper section">
        <div class="container">
            <div class="contact-us">
                <br>
                <br>
                <h2>Leave Your Message Here</h2>
                <br>
                <br>
                <div class="contact-form-wrapper">
                    @include('main.includes.messages')
                    <form id="contact-form" class="contact-form" name="contact-form" method="POSt" action="{{ route('contact.store') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Email Id">
                                </div> 
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" class="form-control" required="required" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" name="message" required="required" class="form-control" rows="10" placeholder="Enter your text"></textarea>
                                </div>             
                            </div>     
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="submit" class="btn btn-primary" value="Save">Submit Message</button>
                        </div>
                    </form><!-- contact form -->  
                </div> 
                <br>
                <br>
                <div class="map-wrapper">
                    <h2>Our Location</h2>
                    {{-- <div id="gmap"></div> --}}
                    <div id="map"></div>
                    <script>
                        function initMap() {
                            // The location of Uluru
                            var uluru = {lat: 7.1553671, lng: 80.1068618};
                            // The map, centered at Uluru
                            var map = new google.maps.Map(
                                document.getElementById('map'), {zoom: 17, center: uluru});
                            // The marker, positioned at Uluru
                            var marker = new google.maps.Marker({position: uluru, map: map,title: 'RPN-Carsales'});
                        }
                    </script>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFFiF4Y7N0zq3S-Sq1iIFfHhR14mpoclM&callback=initMap">
                    </script>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div> <!-- ad-post -->
</div>	<!-- page -->
@endsection
