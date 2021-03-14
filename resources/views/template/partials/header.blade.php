 <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner " >
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{url('/home')}}">
                    <img src="{{ URL::asset('assets/logos/talya.png')}}"width="60px" height="60px" style="margin-top:-1px;" class="logo-default" alt="logo"  /> </a>
                        <span></span>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                  <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->
                              <!-- END PAGE ACTIONS -->
                   <!-- BEGIN PAGE TOP -->
                <div class="page-top" style="background: #333;" >
                    <!-- BEGIN HEADER SEARCH BOX -->
                 
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                          
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                          <li class="dropdown dropdown-user">


                        <a style="background: #333;" href="javascript:" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" >
                            <!-- <img alt="" class="img-circle" src="{{URL::asset('assets/layouts/layout2/img/avatar3_small.jpg')}}" />-->
                            <span> <i class="icon-user"></i> {{Auth::user()->name}}  </span>
                            <span class="username username-hide-on-mobile"> </span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-default" style="background: #333;">


                            <li style="background: #333;">

                                <form method="post" action="{{url('/logout')}}" style="background: #333;">
                                    {{ csrf_field() }}
                                    <button style="color: white;background: #333;font-family:Baloo Bhaijaan;" type="submit" class="btn btn-default btn-block">
                                        <i class="icon-key"></i> Logout                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                           
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER --><!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->          <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-info"></i>
                                <span class="title">Information Section</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="{{url('/Artical')}}" class="nav-link ">
                                    <i class="fa fa-newspaper-o"></i>
                                        <span class="title">Articles</span>
                                    </a>

                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/Sectors')}}" class="nav-link ">
                                    <i class="fa fa-link"></i>
                                        <span class="title">Related Sectors</span>
                                    </a>

                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/services')}}" class="nav-link ">
                                        <i class="icon-cloud-upload"></i>
                                        <span class="title">Talya Services </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/history')}}" class="nav-link ">
                                    <i class="fa fa-history"></i>
                                        <span class="title">Talya History </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="{{url('/FAQS')}}" class="nav-link ">
                                        <i class="icon-question"></i>
                                        <span class="title">FAQs </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-user"></i>
                                <span class="title">User Inter-Actions</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item ">
                                    <a href="{{url('/feedback')}}" class="nav-link ">
                                    <i class="fa fa-comment-o"></i>
                                        <span class="title">Feedbacks</span>
                                    </a>

                                </li>
				<li class="nav-item ">
                                    <a href="{{url('/Contacts')}}" class="nav-link ">
                                    <i class="fa fa-phone"></i>
                                        <span class="title">Contact</span>
                                    </a>

                                </li>
				<li class="nav-item ">
                                    <a href="{{url('/agentRequest')}}" class="nav-link ">
                                    <i class="fa fa-tasks"></i>
                                        <span class="title">Agent Request</span>
                                    </a>

                                </li>


                             
                            </ul>
                        </li>
                    

                    
                    


                   
                        </ul>
                  </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
              <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel">
                        <div class="toggler tooltips row" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="toggler-close">
                            <i class="icon-close"></i>
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-small">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style</span>
                                <select class="sidebar-style-option form-control input-small">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="compact">Compact</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-small">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-small">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->

                                <!-- Confiramtion Modal modal -->
<div class="modal fade " tabindex="-1" role="dialog" id="confirmation" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" onclick="confirmationNO()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mySmModalLabel">Confirmation</h4>
      </div>
      <div class="modal-body">
        <div id="confirmation_body">
          <input type="text" id="confirmation_id" name="" value="" disabled style="display: none;">
          
          <div class="alert alert-warning"><h3><strong>Warning!</strong> Are you sure you want to Proceed ?</h3></div>
          <input type="text" id="confirmedID" name="" readonly style="display: none;">
          <input type="text" id="confirmationType" name="" value="" disabled style="display: none;">
          
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" onclick="confirmationYes()" name="confirmationBtnYes" id="confirmationBtnYes" class="btn btn-info" data-dismiss="modal">Yes</button>
        <button type="button" onclick="confirmationNO()" name="confirmationBtnNO" id="confirmationBtnNO"  class="btn btn-danger" data-dismiss="modal">No</button>
       
      </div>
    </div>
  </div>
</div>
<!-- Confiramtion Modal modal -->

 <!-- Large modal -->
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="infoModal" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div  class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> System Info </h4>
                    </div>
                    <div  class="modal-body">
                    <div id="infoBody"> </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" name="" id="" onclick="window.location.reload();" class="btn btn-danger" data-dismiss="modal">Close</button>
                    
                    
                    </div>
                    </div>
                </div>
                </div>
            <!-- Large modal -->

                <!-- Large modal -->
               
                <!-- Large modal -->
     
     <!-- Large modal -->
           
            <!-- Large modal -->

        <div  id="loader" class="loading">Loading&#8230;</div>

        <script type="text/javascript">

            $(document).ready(function(){
            $(window).load(function(){
                $('#loader').remove();
            });
            });
        </script>