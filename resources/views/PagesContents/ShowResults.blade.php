<div class="now-showing-list">
    <div class="col-md-4 movies-by-category movie-booking">
        <h5>Looking for a specific cinema?</h5>
        <input type="text" class="text" value="Type a cinema Name to filter" onfocus="this.value = '';" onblur="if (this.value == 'Type a cinema Name to filter') {this.value = 'Search for a movie name';}">
        <div class="movie-ticket-book">
            <input type="checkbox" id="c1" name="cc">
            <label class="lang">Hide Unavailable Shows</label>
            <div class="clearfix"></div>
            <img src="images/movie-show.jpg" alt="" />
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
                <p>Prabhas as Amarendra Baahubali and Shivudu, Rana Daggubati as Bhallala Deva in Telugu and Palvaalthevan in Tamil, Anushka Shetty as Devasena, Tamannaah as Avantika, Sathyaraj as Kattappa, Nassar as Bijjala Deva in Telugu and Pingala Devan in Tamil, Ramya Krishnan as Sivagami</p>
            </div>
        </div>
    </div>



    <div class="col-md-8 movies-dates">
        <div class="movie-date-selection">
            <ul>
                <li class="location">
                    <a href=""><i class="fa fa-map-marker"></i>Theater Name: Location</a>
                </li>
                <li>
                    <a href="">11:00 AM</a>
                </li>
                <li>
                    <a href="">3:00 PM</a>
                </li>
                <li>
                    <a href="">6:20 PM</a>
                </li>
                <li>
                    <a href="">9:00 PM</a>
                </li>
            </ul>
        </div>
        <div class="movie-date-selection">
            <ul>
                <li class="location">
                    <a href=""><i class="fa fa-map-marker"></i>Theater Name: Location</a>
                </li>
                <li>
                    <a href="">11:00 AM</a>
                </li>
                <li>
                    <a href="">3:00 PM</a>
                </li>
                <li>
                    <a href="">6:20 PM</a>
                </li>
                <li>
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
                <li><p>In case of Credit/Debit Card bookings, the Credit/Debit Card and Card holder must be present at the ticket counter while collecting the ticket(s).</p></li>
            </ol>
        </div>

        <form role="form" action="{{ route('CoRInfo') }}" method="post">
            {{ csrf_field() }}
            <div class="text-center">
                <div class="form-group">
                    <input type="submit" value="发送版权信息到邮箱" class="btn btn-primary">
                </div>
            </div>
        </form>

    </div>

    <div class="clearfix"></div>
</div>