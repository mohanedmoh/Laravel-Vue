
<!DOCTYPE html>


    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
         <title>Admin Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
         
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    
        <link href="{{ URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />

        
        
        <link href="{{ URL::asset('assets/global/css/components-md.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/css/plugins-md.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ URL::asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        
        <link href="{{ URL::asset('assets/pages/css/login-5.min.css') }}" rel="stylesheet" type="text/css" />

        
        <link rel="shortcut icon" href="" />


       

    <style>
            .loguin-bg>div>img
            {
                width:500px !important;
                height:303px !important;
            
                top:auto !important;
                left:auto !important;
            }
         </style> 
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset">
                    <div class="login-bg" >
                        <!--<img class="login-logo" src="assets/pages/img/login/logo.png" />--> </div>
                </div>
                <div class="col-md-6 login-container bs-reset">
                    <div class="login-content">
                        
                       <!-- <p> Welcome to Hababak Administrative Panel </p>-->
                     

                            <h4 class="col-md-offset-2" >Talya App | Administrative Panel </h4>
                            
                                    <form class="col-md-offset-2 form-horizontal margin-bottom-40" role="form"  method="post" action="{{route('Login')}}">
                                    	{{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-md-line-input">
                                            <label for="email" class="col-md-2 control-label">Email</label>
                                            <div class="col-md-7">
                                                <div class="input-icon">
                                                    <input type="email" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email" >
                                                    <div class="form-control-focus"> </div>
                                                    <i class="fa fa-envelope-o"></i>
                                                </div>
                                       
                                            </div>
                                           
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-md-line-input">
                                            <label for="password" class="col-md-2 control-label">Password</label>
                                            <div class="col-md-7">
                                                <div class="input-icon lef">
                                                    <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Password" >
                                                    <div class="form-control-focus"> </div>
                                                    <i class="fa fa-key"></i>
                                                </div>
	                                            
                                            </div>
                                             
                                        </div>
                                 
                                        <div class="form-group">
                                            <div class="row">
                                           
                                            <div class="col-md-4">
                                                <button type="submit" class="btn red">Sign in</button>
                                            </div>
                                            </div>
                                        </div>
                                    </form>

						
									@if ($errors->has('email'))
									<br/><br/>
									<div class="col-md-offset-2 alert alert-danger ">
											<button type="button" class="close" data-dismiss="alert">×</button>	
									        <p>{{ $errors->first('email') }}</p>
									</div>
									
									@endif

									@if ($errors->has('password'))
									<br/><br/>
									<div class="col-md-offset-2  alert alert-danger ">
											<button type="button" class="close" data-dismiss="alert">×</button>	
									        <p>{{ $errors->first('password') }}</p>
									</div>
									@endif

									@if ($message = Session::get('error'))
									<br/><br/>
									<div class="col-md-offset-2 alert alert-danger ">
											<button type="button" class="close" data-dismiss="alert">×</button>	
									        <p>{{ $message }}</p>
									</div>
									
                                    @endif
                                    
                                    @if ($message = Session::get('success'))
									<br/><br/>
									<div class="col-md-offset-2 alert alert-info ">
											<button type="button" class="close" data-dismiss="alert">×</button>	
									        <p>{{ $message }}</p>
									</div>
									
									@endif
					

                    </div>
                    

                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a target="_new" href="http://www.facebook.com/">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_new" href="http://www.savvy-technology.com">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; Savvy Technology <?php echo date('Y'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ URL::asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>

    <script src="{{ URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>


    <script src="{{ URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
   <!-- <script src="{{ URL::asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    
-->

    <script src="{{ URL::asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
           
    <script src="{{ URL::asset('assets/pages/scripts/login-5.min.js') }}" type="text/javascript"></script>





    </body>

</html>