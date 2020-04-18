<!-- Hotels and flight tab -->
<div>
<div id="ChildVerticalTab_2">
            <ul class="resp-tabs-list ver_1">
            <li>Round-trip</li>
            <li>One-way</li>
            <li>Multi-destination</li>
            </ul>
        
        <div class="resp-tabs-container ver_1">
        <!-- tab01 -->   
        <div>
            <div class="tab-block">
            <div class="form-box">
            <form class="arbform" id="FlyHotelRoundForm" method="get" action="flight.php"> 
                <div class="location-select">
                    <div class="sr-box locn-box-from">
                        <select data-placeholder="Fly From?" class="search_test hl-button fly-from" name="flyhotelRound_from">
                            <option selected disabled value="Fly From">Fly From?</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Qatar">Qatar</option>
                        </select>
                    </div>
                    <div class="switch-btn">
                        <span><img src="<?php echo base_url('assets/images/switch-btn.svg'); ?>" alt=""></span>
                    </div>
                    <div class="sr-box locn-box-to">
                        <select data-placeholder="Fly To?" class="search_test hl-button fly-to" name="flyhotelRound_to">
                            <option selected disabled value="Fly To">Fly To?</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Qatar">Qatar</option>
                        </select>
                    </div>
                </div><!-- location-select -->

                <div class="mbrs-ecomy">
                    <div class="outer">
                    <div class="mbrs">
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
                        
                        <div class="ecomy">
                        <div class="sr-box">
                            <select data-placeholder="Select Class" class="search_test hl-button" name="flyhotelRound_type">
                                <option class="hemant" selected value="saab">Economy</option>
                                <option class="hemant" value="opel">Premium Economy</option>
                                <option value="aston-martin">Business</option>
                                <option value="hyundai">First</option>
                            </select>
                        </div>
                        </div>
                    </div>
                </div>
            
                
                <div class="datepicker-box">
                    <div class="outer">
                    <div class="db-col">
                        <span class="hl-button"><input type='text' name="flyhotelRound_dep" readonly class='startDate' data-language='en' placeholder="Departure"/></span>
                    </div>
                    <div class="db-col">
                        <span class="hl-button">
                            <input type='text' readonly name="flyhotelRound_return" class='endDate' data-language='en' placeholder="Return"/>
                        </span>
                    </div>
                    </div>
                    <!-- <a href="flight.php" class="sr-btn">Search</a> -->
                    <input type="submit" class="sr-btn" value="Search" />
                </div>
            </form>
            </div><!-- form-box -->
            </div><!-- tab-block -->
        </div>
        <!-- tab01 end -->    
        
            
            
        <!-- tab 02 -->     
        <div>
            <div class="tab-block">
            <div class="form-box">
            <form class="arbform" id="FlyHotelOneForm" method="get" action="flight.php"> 
                <div class="location-select">
                    <div class="sr-box locn-box-from">
                        <select data-placeholder="Fly From?" class="search_test hl-button fly-from" name="flyhotelOne_from">
                            <option selected disabled value="Fly From">Fly From?</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Qatar">Qatar</option>
                        </select>
                    </div>
                    <div class="switch-btn">
                        <span><img src="<?php echo base_url('assets/images/switch-btn.svg'); ?>" alt=""></span>
                    </div>
                    <div class="sr-box locn-box-to">
                        <select data-placeholder="Fly To?" class="search_test hl-button fly-to" name="flyhotelOne_to">
                            <option selected disabled value="Fly To">Fly To?</option>
                            <option value="Dubai">Dubai</option>
                            <option value="Abu Dhabi">Abu Dhabi</option>
                            <option value="Sharjah">Sharjah</option>
                            <option value="Qatar">Qatar</option>
                        </select>
                    </div>
                </div><!-- location-select -->

                <div class="mbrs-ecomy">
                    <div class="outer">
                        <div class="mbrs">
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
                        
                        <div class="ecomy">
                        <div class="sr-box">
                            <select  data-placeholder="Select Class" class="search_test hl-button" name="flyhotelOne_type">
                                <option class="hemant" selected value="saab">Economy</option>
                                <option class="hemant" value="opel">Premium Economy</option>
                                <option value="aston-martin">Business</option>
                                <option value="hyundai">First</option>
                            </select>
                        </div>
                        </div>

                    </div>
                </div>
                
                <div class="datepicker-box">
                    <div class="outer">
                    <div class="db-col single-date">
                        <span class="hl-button"><input readonly type='text'  name="flyhotelOne_date" class='startDate' data-language='en' placeholder="Departure"/></span>
                    </div>
                    <!-- <span><input type='text' class='endDate hl-button' data-language='en' placeholder="Return"/></span> -->
                    </div>
                    <!-- <a href="flight.php" class="sr-btn">Search</a> -->
                    <input type="submit" class="sr-btn" value="Search" />
                </div>

            </form>
            </div><!-- form-box -->
            </div><!-- tab-block -->
        </div>
        <!-- tab02 end --> 
            
        <!-- tab03 -->      
        <div>
            <div class="tab-block">
            <div class="form-box">
            <form class="arbform" id="FlyHotelMultiForm" method="get" action="flight.php"> 
                <div class="multi-form-holder">
                    <div class="multi-form-item clearfix">
                        <div class="location-select">
                            <div class="sr-box locn-box-from">
                                <select data-placeholder="Fly From?" class="search_test hl-button fly-from" name="flyhotelMulti_from">
                                    <option selected disabled value="Fly From">Fly From?</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                    <option value="Sharjah">Sharjah</option>
                                    <option value="Qatar">Qatar</option>
                                </select>
                            </div>
                            <div class="switch-btn">
                                <span><img src="<?php echo base_url('assets/images/switch-btn.svg'); ?>" alt=""></span>
                            </div>
                            <div class="sr-box locn-box-to">
                                <select data-placeholder="Fly To?" class="search_test hl-button fly-to" name="flyhotelMulti_to">
                                    <option selected disabled value="Fly To">Fly To?</option>
                                    <option value="Dubai">Dubai</option>
                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                    <option value="Sharjah">Sharjah</option>
                                    <option value="Qatar">Qatar</option>
                                </select>
                            </div>
                        </div><!-- location-select -->

                        <div class="datepicker-box multi-datepicker">
                            <div class="outer">
                                <div class="db-col">
                                    <span class="hl-button"><input name="dateStart" readonly type='text' class='startDate' placeholder="Departure"/></span>
                                </div>
                                <div class="db-col">
                                    <span class="hl-button"><input name="dateEnd" readonly type='text' class='endDate' placeholder="Return"/></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="multi-add-btn clearfix">
                    <a href="#"><i class="fa fa-plus"></i><span>Add another flight</span></a>
                </div>
                
                <div class="mbrs-ecomy multi-mbrs">
                    <div class="outer">
                        <div class="mbrs">
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
                        
                        <div class="ecomy">
                        <div class="sr-box">
                            <select  data-placeholder="Select Class" class="search_test hl-button" name="flyhotelMulti_type">
                                <option class="hemant" selected value="saab">Economy</option>
                                <option class="hemant" value="opel">Premium Economy</option>
                                <option value="aston-martin">Business</option>
                                <option value="hyundai">First</option>
                            </select>
                        </div>
                        </div>
                    </div>
                        
                    <!-- <a href="flight.php" class="sr-btn">Search</a> -->
                    <input type="submit" class="sr-btn" value="Search" />
                    
                </div>

            </form>
            </div><!-- form-box -->
            </div><!-- tab-block -->
        </div>
        <!-- tab03 end -->     
            
            
        </div><!-- resp-tabs-container ver_1 -->
    </div><!-- ChildVerticalTab_1 -->
</div>
<!-- Hotels and flight tab end -->