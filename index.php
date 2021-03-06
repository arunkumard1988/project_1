<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/simple-line-icons.css">        
    </head>
    <body onload="listing_info()">
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
                    <li class="active"><a href="index.php"><i class="icon-speedometer"></i>DashBoard</a></li>
                    <li><a href="add-job.php"><i class="icon-event"></i>Add Job</a></li>
                    <!-- <li><a href="#"><i class="icon-drawer"></i>Job Order</a></li> -->
                    <li><a href="#"><i class="icon-book-open"></i>Invoice</a></li>
                </ul>
            </nav>
            <section class="content">
                <div class="content-wrap">
                    <div class="job-list-wrap">
                        <div class="job-top">
                            <h2>All Job Order</h2>
                            <a href="add-job.php"><button class="add-job">Add Job <i class="icon-plus"></i></button></a>
                        </div>
                        <div class="job-list-bottom">
                            <ul>
        
                            </ul>
                        </div>
                    </div>
                    <div class="job-invoice-wrap">
                        <div class="invoice-info-wrap">
                            <div class="invoice-details">
                                <h2>Job Order</h2>
                                <p>Job Order# <span>SO-00020</span> </p>
                                <p>Order Date<span>18/10/2017</span> </p>
                            </div>
                            <div class="shipping-details">
                                <h3>Billing Address</h3>
                                <p class="billing-customer-name">Adam Clark</p>
                                <p class="billing-customer-street">701 N Santa Anita Avek</p>
                                <p class="billing-customer-city">Arcadia</p>
                                <p class="billing-customer-state">United States - 642126</p>
                                <p class="billing-customer-ph">9986109375</p>
                            </div>
                        </div>
                        <div class="invoice-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Items & Description</th>
                                        <th>Quantity</th>
                                        <th>Rate</th>
                                        <th class="td-right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                    <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                    <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                    <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                     <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                     <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                     <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                     <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                     <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                     <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                     <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                     <tr>
                                        <td>Barble Doll-Mackle</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td class="td-right">90.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="td-right">Total Amount</td>
                                        <td class="td-right">360.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/datepicker.js"></script>
    </body>
</html>
