<!-- Hotels tab -->
<div>
    
    <div class="tab-block">
    
    <div class="form-box hotels-fm">
    
        <form class="arbform" id="HotelForm" method="get" action="hotels.php">            
            <!-- room selector -->
            <div class="mbrs-ecomy">
                <div class="outer">
                    <div class="ecomy">
                        <div class="sr-box">
                            <div class="passenger-count room-counter">
                                <div class="pass-ip hl-button">
                                    <span>1 Adult, 1 Room</span>
                                </div>
                                <div class="pass-content">
                                    <div class="room-block">
                                        <ul>
                                            <li class="room-block-title">
                                                <span>Room 1</span>
                                                <div class="room-block-icon room-block-plus" title="Add another Room">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </div>
                                                <div class="room-block-icon room-block-minus" title="Remove this Room">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pass-type">
                                                    <span>Adults</span>
                                                </div>
                                                <div class="pass-count">
                                                    <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                                    <span class="get-count" data-person="adult">1</span>
                                                    <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="pass-type">
                                                    <span>Children <i>(ages 2-17)</i></span>
                                                </div>
                                                <div class="pass-count">
                                                    <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                                    <span class="get-count" data-person="children">0</span>
                                                    <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="done-btn">
                                        <a href="#">Done</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mbrs">
                        <div class="sr-box">
                            <select  data-placeholder="Location" class="search_test hl-button" name="hotel_location">
                                <option class="hemant" selected disabled value="saab">Location</option>
                                <option class="hemant" value="opel">Dubai</option>
                                <option value="aston-martin">Eau Clarie</option>
                                <option value="hyundai">Edmonton</option>
                                <option value="mitsubishi">Gladstone</option>
                            </select>
                        </div>
                    </div>    

                </div>
            </div>
            
            <div class="datepicker-box">
                <div class="outer">
                    <div class="db-col">
                        <span class="hl-button"><input readonly name="hotel_checkin" type='text' class='hotelStart' placeholder="Check-in"></span>
                    </div>
                    <div class="db-col">
                        <span class="hl-button"><input readonly name="hotel_checkout" type='text' class='hotelEnd' placeholder="Check-out"/></span>
                    </div>                
                </div>
                
                <!-- <a href="hotels.php" class="sr-btn">Search</a> -->
                <input type="submit" class="sr-btn" value="Search" />
                
            </div>
            
        </form>
    </div><!-- form-box -->
    
    
    
</div><!-- tab-one -->
</div>    
<!-- Hotels tab end-->