<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link rel="stylesheet" href="{{URL::asset('css/menu.css')}}" />
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" />
</head>

<body>
<div class="clearfix"></div>
<div class="container">
    <div class="main-content">
        <div class="now-showing-list">
            <div class="col-md-4 movies-by-category movie-booking">
                <h5>Looking for a specific cinema?</h5>
                <div class="movie-ticket-book">
                    <div class="clearfix"></div>
                    <img src="{{URL::asset('images/movie-show.jpg')}}" alt=""/>
                    <div class="bahubali-details">
                        <h4>Release Date:</h4>
                        <p>Jul 10, 2015</p>
                        <h4>Duration:</h4>
                        <p>2 hrs 30 mins</p>
                        <h4>Director:</h4>
                        <p>S.S. Rajamouli.</p>
                        <h4>Language:</h4>
                        <p>Telugu</p>
                        <h4>Genre:</h4>
                        <p>Action, Romance</p>
                        <h4>Cast & Crew:</h4>
                        <p>Prabhas as Amarendra Baahubali and Shivudu, Rana Daggubati as Bhallala Deva in Telugu and
                            Palvaalthevan in Tamil, Anushka Shetty as Devasena, Tamannaah as Avantika, Sathyaraj as
                            Kattappa, Nassar as Bijjala Deva in Telugu and Pingala Devan in Tamil, Ramya Krishnan as
                            Sivagami</p>
                    </div>
                </div>
            </div>


            <div class="col-md-8 movies-dates">
                <div class="movie-date-selection">
                    <ul>
                        <li class="location">
                            <a href=""><i class="fa fa-map-marker"></i>Theater Name: Location</a>
                        </li>
                        <li class="time">
                            <a href="">11:00 AM</a>
                        </li>
                        <li class="time">
                            <a href="">3:00 PM</a>
                        </li>
                        <li class="time">
                            <a href="">6:20 PM</a>
                        </li>
                        <li class="time">
                            <a href="">9:00 PM</a>
                        </li>
                    </ul>
                </div>
                <div class="movie-date-selection">
                    <ul>
                        <li class="location">
                            <a href=""><i class="fa fa-map-marker"></i>Theater Name: Location</a>
                        </li>
                        <li class="time">
                            <a href="">11:00 AM</a>
                        </li>
                        <li class="time">
                            <a href="">3:00 PM</a>
                        </li>
                        <li class="time">
                            <a href="">6:20 PM</a>
                        </li>
                        <li class="time">
                            <a href="">9:00 PM</a>
                        </li>
                    </ul>
                </div>


                <div class="payment-right">
                    <h3>Ticket Summary</h3>
                    <h6><span>Event:</span>63rd Edition of Nehru Trophy Boat Race</h6>
                    <p><span>Venue:</span> Punnamada </p>
                    <p><span>Lake:</span> Kerala</p>
                    <p><span>Location:</span> Trivandrum, Trivandrum</p>
                    <p><span>Date:</span> Sat, 8 Aug, 2015</p>
                    <p><span>Time:</span> 11:30am</p>
                    <p><span>Seat Info:</span> Tourist Gold(2500.00):4 ticket(s)</p>
                    <p><span>Qty:</span> 4</p>
                    <h4><span>Total :</span>Rs. 10000.00</h4>
                    <p>+ (Internet handling fees : Rs. 342.00 (incl. of Service Tax))</p>
                    <h5>Grand Total :Rs. 10342.00</h5>
                </div>
                <div class="ticket-note">
                    <h3>Note:</h3>
                    <ol>
                        <li><p>Registrations/Tickets once booked cannot be exchanged, cancelled or refunded.</p></li>
                        <li><p>In case of Credit/Debit Card bookings, the Credit/Debit Card and Card holder must be
                                present at the ticket counter while collecting the ticket(s).</p></li>
                    </ol>
                </div>

            </div>


            <div class="clearfix"></div>
        </div>
    </div>
</div>
</body>
