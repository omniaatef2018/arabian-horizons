<div> <!-- Activities Tab Tab04 -->
    <div class="tab-block">       
    <div class="form-box">
        <form class="arbform" id="ActivityForm" method="get" action="<?php echo base_url('things-to-do/search'); ?>">
            <div class="row act-col">        
                <div class="col-sm-6 ecomy">
                    <div class="sr-box">
                    <!-- <select  data-placeholder="Explore" class="search_test hl-button"  name="category">
                        <option class="hemant" selected value="">All Activities or Attractions</option>
                        <?php foreach($categories as $category){ ?>
                        <option value="<?php echo $category['slug']; ?>"><?php echo $category['name']; ?></option>
                        <?php } ?>
                    </select> -->
                    </div>
                </div>
            </div>  
            <!-- start radio buttons select -->
            <div class="radio-select">
                <div class="row">
                    <div class="category-select leftside col-lg-2 col-12">
                        <input type="radio"/>
                        <span>
                            All Activities <br/>or Attractions
                        </span>
                    </div>
                    <div class="col-lg-10 col-12">
                        <div class="row">
                            <div class="right-side col-md-4 col-6">
                                <div class="category-select">
                                    <span>
                                        <img src="assets/images/ico/Desert_Safari.png" alt="Desert Safari"/>Desert Safari
                                    </span>
                                    <input type="radio" name="category"/>
                                </div> 
                            </div>
                            <div class="middle-search col-md-4 col-6">
                                <div class="category-select">
                                    <input type="radio" name="category"/>
                                    <span>
                                        <img src="assets/images/ico/Sightseeing.png" alt="Sightseeing"/>Sightseeing
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="category-select">
                                    <input type="radio" name="category"/>
                                    <span>
                                        <img src="assets/images/ico/Adventure.png"  alt="Adventure"/> Adventure 
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="category-select">
                                    <input type="radio" name="category"/>
                                    <span>
                                        <img src="assets/images/ico/Attractions_amp.png" alt="Attractions & Experiences"/>  Attractions & Experiences 
                                    </span>
                                </div>
                            </div>
                            <div class="middle-search  col-md-4 col-6">
                                <div class="category-select">
                                    <input type="radio" name="category"/>
                                    <span>
                                        <img src="assets/images/ico/Cruising_amp.png" alt="Cruising & Yachting"/>
                                        Cruising & Yachting
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <div class="category-select">
                                    <input type="radio" name="category"/>
                                    <span>
                                        <img src="assets/images/ico/Transportation.png" alt="Transportation"/> Transportation
                                    </span>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- end radio buttons select -->
            <!-- start datepicker -->
            <div class="row">
                <div class="col-lg-7 col-md-6 col-12">
                    <div class="mbrs">
                            <div class="sr-box">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <span class="radio-custom">
                                                <input type='radio' name="gender"/>
                                            </span>
                                            Dubai
                                        </span>
                                </div>
                                <div class="autocomplete-sec">
                                    <ul>
                                        <li>Desert Safari </li>
                                        <li>Sightseeing</li>
                                        <li>Adventure </li>
                                        <li>Attractions & Experiences </li>
                                        <li>Cruising & Yachting </li>
                                        <li>Transportation</li>
                                    </ul>
                                </div>
                                <input type="text" class="form-control" placeholder="Search for experiences / activities/ attractions..." aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>                                                    
                    </div>  
                </div>
               <div class="col-lg-5 col-md-6 col-12">
                    <div class="datepicker-box">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class="col-12 outer">
                                        <div class="db-col" style="width: 100%;">
                                            <div class="hl-button">
                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <img src="assets\images\date-colored.png" alt="colored-date"/>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="date" class="ActivityStart form-control" placeholder="Date">
                                            </div>
                                                <!-- <input style="border-radius: 5px;" readonly type='text' name="date" class='ActivityStart form-control' placeholder="&#xf073; Date"> -->
                                            </div>
                                        </div>
                                <!--     <div class="db-col">
                                            <span class="hl-button"><input readonly type='text' name="act_date_to" class='ActivityEnd' placeholder="To"/></span>
                                        </div>      -->              
                                    </div>
                                </div>
                                <!-- <a href="activities.php" class="sr-btn">Search</a> -->
                                <div class="col-lg-4 col-md-4 col-12">
                                    <input type="submit" class="sr-btn" value="Search" />
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- end datepicker -->
        </form>
        </div><!-- form-box -->
    </div><!-- tab-one -->
</div><!-- END tab04 Activities -->