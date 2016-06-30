<?php session_start(); error_reporting(0);
include"config/connection.php";
	  
	  if(!isset($_SESSION['USNRIs_session']))
	  
	   {
	      header('location:index.php');
		  exit;
	   }

if(isset($_POST['cmdsubmit']))
{
	if($_POST['action']=='edit')
	{	
			$fname=strtolower(trim($_POST['txtfname'])); 
			$ph=trim($_POST['txtphone']); 
			$cat=trim($_POST['txtuserrole']); 
			
			$myusername=trim($_POST['txtusernm']);
			$mypassword=trim($_POST['txtpass1']); 
			
			
			$fname = stripslashes($fname);
			$fname = mysql_real_escape_string($fname);
			
			$myusername = stripslashes($myusername);
			$mypassword = stripslashes($mypassword);
			$myusername = mysql_real_escape_string($myusername);
			$mypassword = mysql_real_escape_string($mypassword);
			
			$date = date("Y-m-d");
			$time = date("h:m:s");	
			

			$query=mysql_query("update sfw_login set full_name='".$fname."',contact_no='".$ph."',username='".$myusername."',password='".md5($mypassword)."',category='".$cat."',date='".$date."',time='".$time."' where md5(id)='".$_POST['id']."'");
			if($query)
			{
				$msg = "<h3 class='sucess'>User Details Updated Successfully!..</h3>";				
			}
				
	}
	else { 
		
			

		$fname=strtolower(trim($_POST['txtfname'])); 
		$ph=trim($_POST['txtphone']); 
		$cat=trim($_POST['txtuserrole']); 
		
		$myusername=trim($_POST['txtusernm']);
		$mypassword=trim($_POST['txtpass1']); 
			$fname = stripslashes($fname);
			$fname = mysql_real_escape_string($fname);

		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysql_real_escape_string($myusername);
		$mypassword = mysql_real_escape_string($mypassword);
		
		$date = date("Y-m-d");
		$time = date("h:m:s");	
	
		
		$query=mysql_query("insert into SFW_login (full_name,contact_no,username,password,category,date,time) VALUES('".$fname."','".$ph."','".$myusername."','".md5($mypassword)."','".$cat."','".$date."','".$time."')");
			if($query)
			{
				$msg = "<h3 class='sucess'>User Added Successfully!..</h3>";
			}
   
  }

}

?>	

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?>User | Suraj Fun World</title>               
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="img/favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- LESSCSS INCLUDE -->        
        <link rel="stylesheet/less" type="text/css" href="css/styles.less"/>
        <script type="text/javascript" src="js/plugins/lesscss/less.min.js"></script>                
        <!-- EOF LESSCSS INCLUDE -->  
<script type="text/javascript">

function nospaces(t){

if(t.value.match(/\s/g)){

alert('Sorry, you are not allowed to enter any spaces');

t.value=t.value.replace(/\s/g,'');

}

}

</script> 
<style type="text/css">
.sucess
{
color:#FFFFFF;font-weight:bold;clear:both;background-color:#009900;font-weight:bold;padding:10px 10px;
}
</style>             
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                 <?php include "config/menu.php" ; ?>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="javascript:;" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <?php /*?><li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li><?php */?>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="javascript:;" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <?php /*?><li class="xn-icon-button pull-right">
                        <a href="javascript:;"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="javascript:;" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="javascript:;" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li><?php */?>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <?php /*?><li class="xn-icon-button pull-right">
                        <a href="javascript:;"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li><?php */?>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                   
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="user_login_edit_profile.php">User Login Profile</a></li>
                    <li class="active"><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?>  User</li>
                </ul>
                <!-- END BREADCRUMB -->
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
								<?php if($msg!='')
                                {
                                echo $msg ;
                                }?>
                                
                                <?php 			
                                    if(isset($_GET['editId'])) {
                                    $query="select * from sfw_login where md5(id)='".$_GET['editId']."'";
                                    $result=mysql_query($query);
                                    $rs=mysql_fetch_array($result);
                                    }  ?>
                             <form id="jvalidate" role="form" class="form-horizontal" action="" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong><?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?> Login</strong> User</h3>
                                    
                                </div>
                                <?php /*?><div class="panel-body">
                                    <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p>
                                </div><?php */?>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Full Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" name="txtfname" id="txtfname" value="<?php echo ucwords($rs['full_name']) ; ?>" tabindex="1"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Employee Full Name</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Contact Number</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                        <input type="text" class="form-control" name="txtphone" id="txtphone" value="<?php echo $rs['contact_no']; ?>" tabindex="2"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Employee Contact Number</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Select User Role</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="txtuserrole" id="txtuserrole" tabindex="3">                                                    
                                                    <option value="">Select User Role</option>                              
                                                     <?php if (isset($rs['category']))
                                                        {  ?>
                                                        <option value="<?php echo $rs['category']; ?>" selected><?php echo $rs['category']; ?></option>                                
                                                        <?php } ?>                      
                                                    <option value="Main Ticket Window">Main Ticket Window</option>
                                                    <option value="Ride Booking Window">Ride Booking Window</option>
                                                    </select>
                                                    <span class="help-block">Select User Role for Login</span>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                        <input type="text" class="form-control" name="txtusernm" id="txtusernm" onKeyUp="nospaces(this)" tabindex="4" value="<?php echo $rs['username'] ; ?>"/>
                                                    </div>                                            
                                                    <span class="help-block">Enter Username</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Password</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                        <input type="text" class="form-control" name="txtpass1" id="txtpass1" onKeyUp="nospaces(this)" tabindex="5"/>
                                                    </div>            
                                                    <span class="help-block">Password field sample</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Re-Enter Password</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-key"></span></span>
                                                        <input type="text" class="form-control" name="txtpass2" id="txtpass2" onKeyUp="nospaces(this)" tabindex="6"/>
                                                    </div>            
                                                    <span class="help-block">Re - Enter Password</span>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <?php if(isset($_GET['editId'])) { ?>
                                    <input type="hidden" name="id" id="id" value="<?php echo $_GET['editId'];?>" />
                                    <input type="hidden" name="action" id="action" value="<?php echo $_GET['action']?>" />  <?php } ?>
                                      <input class="btn btn-primary pull-right" type="submit" name="cmdsubmit" id="cmdsubmit" value="<?php if(isset($_GET['editId'])) { echo "Edit "; } else { echo "Add "; } ?> User" tabindex="7">        
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
         <?php include "config/sign_out.php";  ?>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
      
        <!-- END PRELOADS -->             
        
  <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>        

        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS -->               

        <!-- START TEMPLATE -->

        
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
    <!-- END SCRIPTS -->                   
    <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        txtfname: {
                                required: true,
                                minlength: 2
                               
                        },
						 txtphone: {
                                required: true,
                                minlength: 5
                               
                        },
						txtuserrole: {
                                required: true
                               
                        },
						
                        
						txtusernm: {
                                required: true,
                                minlength: 3
                        },
						txtpass1: {
                                required: true,
                                minlength: 2
                        },
                        'txtpass2': {
                                required: true,
                                minlength: 2,
                                maxlength: 10,
                                equalTo: "#txtpass1"
                        }
                      
                    }                                        
                });                                    

        </script>
    </body>
</html>