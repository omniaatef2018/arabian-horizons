<div id="ChildVerticalTab_1">
    <ul class="resp-tabs-list ver_1">
        <li>Round-trip</li>
        <li>One-way</li>
        <li>Multi-destination</li>
    </ul>
    
    <div class="resp-tabs-container ver_1">
    <!-- tab01 flight - round -->   
    <div>
        <div class="tab-block">
        <div class="form-box">
        <form class="arbform" id="flightRroundForm" method="get" action="flight.php">
            <div class="location-select">
                <div class="sr-box locn-box-from">
                    <select required="required" placeholder="Fly From?" class="search_test hl-button fly-from" name="flyfromRound">
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
                    <select data-placeholder="Fly To?" class="search_test hl-button fly-to" name="flytoRound">
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
                        <div class="passenger-count basic-counter">
                            <div class="pass-ip hl-button">
                                <span>1 Adult</span>
                            </div>
                            <div class="pass-content" style="display: none;">
                                <ul>
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
                                            <span>Youths (ages 15-17)</span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="youth">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pass-type">
                                            <span>Children <i>(ages 2-14)</i></span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="children">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pass-type">
                                            <span>Infants <i>(Under 2)</i></span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="infant">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="done-btn">
                                    <a href="#">Done</a>
                                </div>
                                <div class="pass-bottom-text">
                                    <p>You may only book a flight upto 10 ticketed passengers</p>
                                </div>
                            </div>
                        </div>
                    </div>                                                        
                    </div>
                    
                    <div class="ecomy">
                    <div class="sr-box">
                        <select data-placeholder="Select Class" class="search_test hl-button">
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
                        <span class="hl-button"><input required="required" type='text' class='startDate' readonly name="datepicker_r1" data-language='en' placeholder="Departure"/></span>
                    </div>
                    <div class="db-col">
                        <span class="hl-button">
                            <input required="required" name="datepicker_r2" type='text' readonly class='endDate' data-language='en' placeholder="Return"/>
                        </span>
                    </div>
                </div>
                <!-- <a href="flight.php" class="sr-btn">Search</a> -->
                <input type="submit" value="Search" name="submit" class="sr-btn" />
            </div>            
        </form>
        </div><!-- form-box -->
        </div><!-- tab-block -->
    </div>
    <!-- tab01 end -->    
    
        
        
    <!-- tab 02 flight - one-way -->     
    <div>
        <div class="tab-block">
        <div class="form-box">
        <form class="arbform" id="flightOneWayForm" method="get" action="flight.php">
            <div class="location-select">
                <div class="sr-box locn-box-from">
                    <select data-placeholder="Fly From?" class="search_test hl-button fly-from" name="flyFromOneway">
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
                    <select data-placeholder="Fly To?" class="search_test hl-button fly-to" name="flyToOneway">
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
                        <div class="passenger-count basic-counter">
                            <div class="pass-ip hl-button">
                                <span>1 Adult</span>
                            </div>
                            <div class="pass-content">
                                <ul>
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
                                            <span>Youths (ages 15-17)</span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="youth">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pass-type">
                                            <span>Children <i>(ages 2-14)</i></span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="children">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pass-type">
                                            <span>Infants <i>(Under 2)</i></span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="infant">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="done-btn">
                                    <a href="#">Done</a>
                                </div>
                                <div class="pass-bottom-text">
                                    <p>You may only book a flight upto 10 ticketed passengers</p>
                                </div>
                            </div>  
                        </div> 
                    </div>
                        
                    </div>
                    
                    <div class="ecomy">
                    <div class="sr-box">
                        <select  data-placeholder="Select Class" class="search_test hl-button">
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
                    <span class="hl-button"><input readonly type='text' name="datepicker_o1" class='startDate' data-language='en' placeholder="Departure"/></span>
                </div>
                <!-- <span><input type='text' class='endDate hl-button' data-language='en' placeholder="Return"/></span> -->
                </div>
                <!-- <a href="flight.php" class="sr-btn">Search</a> -->
                <input type="submit" class="sr-btn" value="search" />
            </div>

        </form>
        </div><!-- form-box -->
        </div><!-- tab-block -->
    </div>
    <!-- tab02 flight- oneway end --> 
        
    <!-- tab03 flight - multi -->      
    <div>
        <div class="tab-block">
        <div class="form-box">
        <form class="arbform" id="flightMultiForm" method="get" action="flight.php">
            <div class="multi-form-holder">
                <div class="multi-form-item clearfix">
                    <div class="location-select">
                        <div class="sr-box locn-box-from">
                            <select data-placeholder="Fly From?" class="search_test hl-button fly-from" id="fly-from" name="flyFromMulti">
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
                            <select data-placeholder="Fly To?" class="search_test hl-button fly-to" id="fly-to" name="flyToMulti">
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
                    <div class="passenger-count basic-counter">
                            <div class="pass-ip hl-button">
                                <span>1 Adult</span>
                            </div>
                            <div class="pass-content">
                                <ul>
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
                                            <span>Youths (ages 15-17)</span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="youth">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pass-type">
                                            <span>Children <i>(ages 2-14)</i></span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="children">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="pass-type">
                                            <span>Infants <i>(Under 2)</i></span>
                                        </div>
                                        <div class="pass-count">
                                            <span class="count-minus count-btn"><i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                            <span class="get-count" data-person="infant">0</span>
                                            <span class="count-plus count-btn"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="done-btn">
                                    <a href="#">Done</a>
                                </div>
                                <div class="pass-bottom-text">
                                    <p>You may only book a flight upto 10 ticketed passengers</p>
                                </div>
                            </div>
                        </div>                                                     
                    </div>
                    
                    <div class="ecomy">
                        <div class="sr-box">
                            <select  data-placeholder="Select Class" class="search_test hl-button">
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