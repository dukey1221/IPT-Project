@extends('base')

@section('content')

<header class="masthead bg-secondary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <img class="masthead-avatar mb-4" src="{{ url('background.webp') }}" alt="" />
        <h1 class="masthead-heading text-uppercase mb-0">A SPECIAL WELCOME TO OUR VISITORS!</h1>
        <p class="masthead-subheading font-weight-light mb-4" style="margin-bottom: 40px">Province of Bohol</p>
    </div>
</header>
<br><br>
<section class="page-section bg-white text-black mb-0" id="about">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-black">About</h2>
        <div class="row">
            <div class="col-lg-4 ml-auto"><p class="lead">Bohol (Tagalog pronunciation: [bɔˈhɔl]) is an island province of the Philippines located in the Central Visayas region, consisting of the island itself and 75 minor surrounding islands.Its capital is Tagbilaran. With a land area of 4,821 km2 (1,861 sq mi) and a coastline 261 km (162 mi) long, Bohol is the tenth largest island of the Philippines.The province of Bohol is a first-class province divided into 3 congressional districts, comprising 1 component city and 47 municipalities.It has 1,109 barangays.</p></div>
            <div class="col-lg-4 mr-auto"><p class="lead">The province is a popular tourist destination with its beaches and resorts. The Chocolate Hills, numerous mounds of brown-coloured limestone formations, are the most popular attraction. The formations can be seen by land (climbing the highest point) or by air via ultralight air tours. Panglao Island, located just southwest of Tagbilaran, is famous for its diving locations and is routinely listed as one of the top ten diving locations in the world. Numerous tourist resorts and dive centers dot the southern beaches. The Philippine tarsier, amongst the world smallest primates, is indigenous to the island.</p></div>
        </div>
    </div>
</section>

@stop