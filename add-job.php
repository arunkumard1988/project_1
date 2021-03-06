<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Add Job</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/simple-line-icons.css">
        <link rel="stylesheet" href="css/datepicker.css">                
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="wrap">
            <header>
                <div class="logo">
                    <h2>Tailoring</h2>
                </div>
                <div class="menu-bar">
                    <i class="icon-menu"></i>
                    <h2>Tailoring</h2>
                </div>
                <div class="user-settings">
                    <ul>
                        <li>User Name <i class="icon-arrow-down"></i></li>
                        <li><i class="icon-power"></i></li>
                    </ul>
                </div>                
            </header>
            <nav>
                <!-- <button class="add-job">Add Job <i class="icon-plus"></i></button> -->
                <ul>
                    <li><a href="index.php"><i class="icon-speedometer"></i>DashBoard</a></li>
                    <li class="active"><a href="add-job.php"><i class="icon-event"></i>Add Job</a></li>
                   <!--  <li><a href="#"><i class="icon-drawer"></i>Job Order</a></li> -->
                    <li><a href="#"><i class="icon-book-open"></i>Invoice</a></li>
                </ul>
            </nav>
            <section class="content add-job-wrap">
                <div class="content-wrap">
                    <div class="form-wrap">
                        <div class="page-heading">
                            <h2>Add Job for the Customer</h2>
                            <p>Exiting Job can view in List page</p>
                        </div>
                       <form class="form-horizontal" action="job_details_save.php " method="post" id="jobForm">
                            <div class="row customer-details">
								<input type="hidden" class="form-control" id="id_ref_no" name="id_ref_no" value=0>
								<input type="hidden" class="form-control" id="gender_class" name="gender_class" value="Mr">
                                <p class="box-heading">Customer Details</p>
                                 <div class="form-group select-wrap">
                                    <label class="form-control-label">Title</label>
                                    <ul class="select" id="sizelist">
										<li data-value="Mr" class="active">Mr</li>
										<li data-value="Ms">Ms</li>
										<li data-value="Mrs">Mrs</li>
                                    
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Firstname <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="firstname" id="firstName" placeholder="Enter firstname">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Lastname </label>
                                    <input class="form-control" type="text" name="lastname" id="lastName" placeholder="Enter lastname">
                                </div>
                                <div class="form-group mobile-wrap">
                                    <label class="form-control-label">Mobile</label>
                                    <input class="form-control" type="tel" name="mobileno" id="mobileNo" placeholder="Enter mobile no">
                                </div>
                            </div>
                            <div class="row entry-wrap">
                                <p class="box-heading">Item Entry</p>
                                <div class="form-group item-wrap">
                                    <label class="form-control-label">Item <span class="tx-danger">*</span></label>
                                    <div class="item-form">
                                        <input class="form-control" type="text" name="input_0" id="input_0" placeholder="Enter item">
										
                                        <button class="add-row" title="Add job" type="button">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row item-mis">
                                <p class="box-heading">Item Property</p>
                                <div class="form-group">
                                    <label class="form-control-label">Trial date</label>
                                    <div class="date-form">
                                        <input class="form-control" type="text" id="trialDate" data-toggle="datepicker" name="trialDate" placeholder="Pick a date">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-default docs-datepicker-trigger" disabled="">
                                            <i class="icon-calendar" aria-hidden="true"></i>
                                          </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Delivery date</label>
                                    <div class="date-form">
                                        <input class="form-control" data-toggle="datepicker" id="deliveryDate" type="text" name="deliveryDate" placeholder="Pick a date">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-default docs-datepicker-trigger" disabled="">
                                            <i class="icon-calendar" aria-hidden="true"></i>
                                          </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group mobile-wrap">
                                    <label class="form-control-label">SMS</label>
                                    <input type='checkbox' class='check-switch' id='smsCheckbox'>
                                    <label class="form-control-label" for="smsCheckbox"></label>
                                    <textarea class="form-control" name="smsText" id="smsText" rows="5" cols="100"></textarea>
                                </div>
                                <div class="form-group submit-wrap">
                                    <input type='submit' value="Save" id="saveJob">
                                </div>
                            </div>
                        </form>
                    </div>                   
                </div>
            </section>
        </div>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-3.2.1.min.js"></script>
       <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script> -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/datepicker.js"></script>
    </body>
</html>
