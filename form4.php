<?php
$connect=mysqli_connect("localhost","root","","my_admin");
?>

<!DOCTYPE html>
<html lang="en">


    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
	  
        <meta name="csrf-token" content="KTTvnheYNOqX0qXBxsW4cUSkPMaQJJz05QYE2HEg">
        <title>Gull - Laravel 6 + Bootstrap 4 admin template</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
         <link rel="stylesheet" href="assets/styles/vendor/pickadate/classic.css">
 <link rel="stylesheet" href="assets/styles/vendor/pickadate/classic.date.css">


        
        <link id="gull-theme" rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
        <link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">
        
            </head>


    <body class="text-left">
        
        <!-- Pre Loader Strat  -->
        <div class='loadscreen' id="preloader">

            <div class="loader spinner-bubble spinner-bubble-primary">


            </div>
        </div>
        <!-- Pre Loader end  -->







        <!-- ============ Compact Layout start ============= -->
                <!-- ============Deafult  Large SIdebar Layout start ============= -->

        
        <div class="app-admin-wrap layout-sidebar-large clearfix">
           <?php include("include/header.php");?>
        <!-- header top menu end -->
            



            <?php include("include/sidebar.php"); ?>
<!--=============== Left side End ================-->            

            <!-- ============ Body content start ============= -->
            <div class="main-content-wrap sidenav-open d-flex flex-column">
                <div class="main-content">
                       <div class="breadcrumb">
                <h1>Basic</h1>
                <ul>
                    <li><a href="#">Form</a></li>
                    <li>Basic</li>
                </ul>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Form Inputs</div>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" name="firstname" placeholder="Enter your first name">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="lastName">Last name</label>
                                        <input type="text" class="form-control" name="lastname" placeholder="Enter your last name">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                                       
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" name="phone" placeholder="Enter phone">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="credit1">Credit card number</label>
                                        <input class="form-control" name="creditcardnumber" placeholder="Card">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="website">Website</label>
                                        <input class="form-control" name="website" placeholder="Web address">
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker3">Birth date</label>
                                        <div class="input-group">
                                            <input name="picker3" class="form-control" placeholder="yyyy-mm-dd" name="birthdate" >
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary"  type="button">
                                                    <i class="icon-regular i-Calendar-4"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="picker1">Select</label>
                                        <select name="usergroup" class="form-control">
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 1</option>
                                            <option value="3">Option 1</option>
                                        </select>
                                    </div>
									
									<div class="col-md-6 form-group mb-3">
                                            
											<label for="inputEmail5" class="ul-form__label">User Group:</label>
                                                <div class="ul-form__radio-inline">
                                                    <label class=" ul-radio__position radio radio-primary form-check-inline">
                                                        <input type="radio" name="radio" value="salesperson">
                                                        <span class="ul-form__radio-font">Sales Person</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="ul-radio__position radio radio-primary">
                                                        <input type="radio" name="radio" value="customer">
                                                        <span class="ul-form__radio-font">Customer</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                    Please select user group
                                                </small>
											</div>
											
											
										 <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Joint Addons:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose
                                                                        file</label>
                                                            </div>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                                            </div>
                                                        </div>

                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                        Some help content goes here
                                                                </small>
                                                    </div>
												 <div class="form-group col-md-12">
                                                        <label for="inputEmail4" class="ul-form__label">Buttons With Dropdowns:</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div role="separator" class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                        </div>
                                                        <small id="passwordHelpBlock" class="ul-form__text form-text ">
                                                                    Some help content goes here
                                                            </small>
                                                    </div>
	
	 <div class="form-group col-lg-12">
                    
                                <label>Type and press Enter</label>
                                <div class="form-group">
                                    <div data-no-duplicate="true" data-pre-tags-separator="\n" data-no-duplicate-text="Duplicate tags"
                                        data-type-zone-class="type-zone" data-tag-box-class="tagging"
                                        data-edit-on-delete="false" class="tagBox">preexisting-tag</div>
                                    <p class="text-muted">Enter key add a new tag by default, set it
                                        <code>no-enter:true</code> to disable that.</p>
                                </div>
                           
                </div>
				
				<div class="form-group col-lg-12 mt-4">
                                            <label for="staticEmail" class="action-bar-horizontal-label col-lg-4 col-`form-label">Communication:</label>
                                            <div class="col-lg-6 d-inline-flex align-self-center">

                                                <label class="checkbox checkbox-primary mr-2">
                                                            <input type="checkbox" checked="">
                                                            <span>Email</span>
                                                            <span class="checkmark"></span>

                                                    </label>
                                                <label class="checkbox checkbox-primary mr-2">
                                                            <input type="checkbox" >
                                                            <span>SMS</span>
                                                            <span class="checkmark"></span>

                                                    </label>
                                                <label class="checkbox checkbox-primary mr-2">
                                                            <input type="checkbox" >
                                                            <span>Phone</span>
                                                            <span class="checkmark"></span>

                                                    </label>
												</div>
											</div>
	
	
										<div class="col-md-12">
										
											<button type="Submit" name="Submit">Submit</button>
												
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

               
                </div>

                

            </div>


                </div>

                <!-- Footer Start -->
<div class="flex-grow-1"></div>

          </div>
       
	   <!-- ============ Body content End ============= -->
        </div>
        <!--=============== End app-admin-wrap ================-->

  <div class="search-ui">
        <div class="search-header">
            <img src="../assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>

        <input type="text" placeholder="Type here" class="search-input" autofocus>

        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>

        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
			
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
			
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="../assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    
	<!-- ============ Search UI End ============= -->

        
        <script src="assets/js/vendor/pickadate/picker.js"></script>
<script src="assets/js/vendor/pickadate/picker.date.js"></script>

 <script src="assets/js/common-bundle-script.js"></script>
        
        

 <script src="assets/js/vendor/tagging.min.js"></script>
 <script src="assets/js/tagging.script.js"></script>

<script src="assets/js/es5/dashboard.v1.script.js"></script>


<script src="assets/js/script.js"></script>

<script src="assets/js/sidebar.large.script.js"></script>

        
<script src="assets/js/customizer.script.js"></script>

        
<script src="assets/js/form.basic.script.js"></script>


    </body>

</html>