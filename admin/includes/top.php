<?php
if ($_SESSION['USNRIs_session']['category']=='Admistrator')
{ ?>

<ul class="x-navigation x-navigation-horizontal">
                    <li class="xn-logo">
                        <a href="dashboard.php">NRIs</a>
                        <a href="javascript:;" class="x-navigation-control"></a>
                    </li>
                   
                    <li class="active">
                        <a href="dashboard.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>
                    <li>
                        <a href="state_management.php"><span class="fa fa-map-marker"></span> <span class="xn-text">State Management</span></a>                        
                    </li>
                    
                    <li>
                        <a href="city_management.php"><span class="fa fa-map-marker"></span> <span class="xn-text">City Management</span></a>                        
                    </li>
                    
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-th-list"></span> <span class="xn-text">Premium Category</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="main_category_list.php"><span class="fa fa-list"></span> Main Category</a></li>
                            <li><a href="category.php"><span class="fa fa-list-ul"></span> Category</a></li>
                            <li><a href="sub_category.php"><span class="fa fa-bars"></span> Sub Category</a></li>                        
                        </ul>
                    </li>
                    
                    
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-map-marker"></span> <span class="xn-text">State Famous Places</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="temples.php"><span class="fa fa-bell"></span> Temples</a></li>
                            <li><a href="restaurants.php"><span class="fa fa-cutlery"></span> Restaurants</a></li>
                            <li><a href="groceries.php"><span class="fa fa-users"></span> Groceries</a></li>
                            <li><a href="sports.php"><span class="fa fa-shield"></span> Sports</a></li>
                            <li><a href="pubs.php"><span class="fa fa-glass"></span> Pubs/Party Places</a></li>
                            <li><a href="casinos.php"><span class="fa fa-heart"></span> Local Casinos</a></li>
                            <li><a href="nearest_casinos.php"><span class="fa fa-heart"></span> Casinos Near Me</a></li>
                            <li><a href="theaters.php"><span class="fa fa-film"></span> Movie Theaters</a></li>
                            <li><a href="advertisements.php"><span class="fa fa-file-image-o"></span> Advertisements</a></li>                                                    
                            <li><a href="desi_pages.php"><span class="fa fa-globe"></span> Deshi Pages</a></li>
                            <li><a href="announcements.php"><span class="fa fa-bullhorn"></span> Announcements</a></li>
                            <li><a href="events.php"><span class="fa fa-calendar"></span> Events</a></li>
                            <li><a href="batches.php"><span class="fa fa-cloud"></span> Batches</a></li>
                            <li><a href="student_talk.php"><span class="fa fa-users"></span> Student's Talk</a></li>
                            <li><a href="top_city_movies.php"><span class="fa fa-film"></span> Movies Top Cities</a></li>                            
                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-play"></span> <span class="xn-text">Videos</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="videos.php"><span class="fa fa-video-camera"></span> Manage Videos</a></li>
                            <li><a href="video_categories.php"><span class="fa fa-file-video-o"></span> Manage Categories</a></li>
                            <li><a href="video_languages.php"><span class="fa fa-language"></span> Manage Languages</a></li>
                        </ul>
                    </li>
                    
                    
                    
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-file-text"></span> <span class="xn-text">Free Ads Category</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="auto_cats.php"><span class="fa fa-car"></span> Autos</a></li>
                            <li><a href="baby_cats.php"><span class="fa fa-wheelchair"></span> Baby Sitting</a></li>
                            <li><a href="eduation_cat.php"><span class="fa fa-book"></span> Education and Teaching</a></li>
                            <li><a href="electronic_cat.php"><span class="fa fa-bolt"></span> Electronics</a></li>
                            <li><a href="job_cats.php"><span class="fa fa-search"></span> Jobs</a></li>
                            <li><a href="mypartner_cats.php"><span class="fa fa-users"></span> My Partner</a></li>                            
                            <li><a href="realestate_cats.php"><span class="fa fa-home"></span> Real Estate</a></li>
                            <li><a href="roommate_cats.php"><span class="fa fa-university"></span> Room Mates</a></li>
                            <li><a href="garagesale_cats.php"><span class="fa fa-briefcase"></span> Garage Sale</a></li>
                           <?php /*?> <li><a href="batch_cats.php"><span class="fa fa-graduation-cap"></span> Batches</a></li> <?php */?>                           
                        </ul>
                    </li>
                    
                    
                    
                    
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-th-large"></span> <span class="xn-text">Free Ads Management</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="auto.php"><span class="fa fa-car"></span> Autos Classified</a></li>
                            <li><a href="babysitting.php"><span class="fa fa-wheelchair"></span> Baby Sitting</a></li>
                            <li><a href="education.php"><span class="fa fa-book"></span> Education and Teaching</a></li>
                            <li><a href="electronics.php"><span class="fa fa-bolt"></span> Electronics</a></li>
                            <li><a href="jobs.php"><span class="fa fa-search"></span> Jobs</a></li>
                            <li><a href="mypartner.php"><span class="fa fa-users"></span> My Partner</a></li>                            
                            <li><a href="realestate.php"><span class="fa fa-home"></span> Real Estate</a></li>
                            <li><a href="roommates.php"><span class="fa fa-university"></span> Room Mates</a></li>
                            <li><a href="garagesale.php"><span class="fa fa-briefcase"></span> Garage Sale</a></li>
                            <li><a href="free_stuff.php"><span class="fa fa-heart"></span> Free Stuff</a></li>     
                            <li><a href="ads_with_us.php"><span class="fa fa-th-large"></span> Advertise with Us </a></li>                            
                        </ul>
                    </li>
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-link"></span> <span class="xn-text">Home Page Link</span></a>
                        <ul class="animated zoomIn">
                            <li><a href="us_ads.php"><span class="fa fa-image"></span> Home Page Ads</a></li>
                            <li><a href="homepage_header.php"><span class="fa fa-image"></span>Home Page Header</a></li>
                            <li><a href="national_events.php"><span class="fa fa-calendar"></span> National Events</a></li>
                            <li><a href="national_batches.php"><span class="fa fa-cloud"></span> National Batches</a></li>                                                                        
                        </ul>
                    </li>
                  
                   <?php /*?> <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-files-o"></span> <span class="xn-text">Category Management</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="javascript:;"><span class="fa fa-edit"></span> Manage Main Categories</a></li>
                            <li><a href="javascript:;"><span class="fa fa-edit"></span> Manage Categories</a></li>
                            <li><a href="javascript:;"><span class="fa fa-edit"></span> Add Main Category</a></li>
                            <li><a href="javascript:;"><span class="fa fa-edit"></span> Add Category</a></li>
                            <li><a href="javascript:;"><span class="fa fa-edit"></span> Add Subcategory</a></li>
                        </ul>
                    </li>
                    
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-file-text"></span> <span class="xn-text">Free Ads Management</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="javascript:;"><span class="fa fa-car"></span> Autos</a></li>
                            <li><a href="javascript:;"><span class="fa fa-wheelchair"></span> Baby Sitting</a></li>
                            <li><a href="javascript:;"><span class="fa fa-book"></span> Education and Teaching</a></li>
                            <li><a href="javascript:;"><span class="fa fa-bolt"></span> Electronics</a></li>
                            <li><a href="javascript:;"><span class="fa fa-search"></span> Jobs</a></li>
                            <li><a href="javascript:;"><span class="fa fa-users"></span> My Partner</a></li>                            
                            <li><a href="javascript:;"><span class="fa fa-home "></span> Real Estate</a></li>                            
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="javascript:;"><span class="fa fa-user"></span> <span class="xn-text">User Management</span></a>

                    </li>
                    
                    
                                        
                    
                    <li>
                        <a href="javascript:;"><span class="fa fa-file"></span> <span class="xn-text">Site Ads</span></a>
                    </li><?php */?>
                    
                     <li><a href="web_users.php"><span class="fa fa-users"></span> <span class="xn-text">Web User Management</span></a></li>
                     <li><a href="settings.php"><span class="fa fa-key"></span> <span class="xn-text">Admin Users</span></a></li>
                    
                     <li><a href="blog.php"><span class="fa fa-file"></span> <span class="xn-text">Blog</span></a></li>
                     
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-book"></span> <span class="xn-text">Forum</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="forum_categories.php"><span class="fa fa-th-large"></span> Manage Categories</a></li>
                            <li><a href="forum_topics.php"><span class="fa fa-list"></span> Manage Topics</a></li>
                            <li><a href="forum_replies.php"><span class="fa fa-list-ul"></span> Manage Replies</a></li>
                        </ul>
                    </li>
                    
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-book"></span> <span class="xn-text">NRI's Talk</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="nris_talk_topics.php"><span class="fa fa-list"></span> Manage Topics</a></li>
                            <li><a href="nris_talk_replies.php"><span class="fa fa-list-ul"></span> Manage Replies</a></li>
                        </ul>
                    </li>
                    
                    
                   <?php /*?>  <li><a href="logout.php"><span class="fa fa-sign-out"></span> <span class="xn-text">Logout</span></a></li><?php */?>
                    
                    
                    
                    
                    
                     <li class="xn-icon-button pull-right">
                        <a href="javascript:;" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li>
                    <li class="xn-icon-button pull-right" style="width:auto;">
                        <a href="javascript:;" style="width:auto;">Welcome : <?php echo ucwords($_SESSION['USNRIs_session']['username']); ?></a>
                        
                                                
                    </li> 
                      
                </ul>
                
<?php } ?>                












<?php
if ($_SESSION['USNRIs_session']['category']=='Director' || $_SESSION['USNRIs_session']['category']=='Manager')
{ ?>

<ul class="x-navigation x-navigation-horizontal">
                    <li class="xn-logo">
                        <a href="dashboard.php">NRIs</a>
                        <a href="javascript:;" class="x-navigation-control"></a>
                    </li>
                   
                    <li class="active">
                        <a href="dashboard.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>
                    <li>
                        <a href="state_management.php"><span class="fa fa-map-marker"></span> <span class="xn-text">State Management</span></a>                        
                    </li>
                    
                    <li>
                        <a href="city_management.php"><span class="fa fa-map-marker"></span> <span class="xn-text">City Management</span></a>                        
                    </li>
                    
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-th-list"></span> <span class="xn-text">Premium Category</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="main_category_list.php"><span class="fa fa-list"></span> Main Category</a></li>
                            <li><a href="category.php"><span class="fa fa-list-ul"></span> Category</a></li>
                            <li><a href="sub_category.php"><span class="fa fa-bars"></span> Sub Category</a></li>                        
                        </ul>
                    </li>
                    
                    
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-map-marker"></span> <span class="xn-text">State Famous Places</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="temples.php"><span class="fa fa-bell"></span> Temples</a></li>
                            <li><a href="restaurants.php"><span class="fa fa-cutlery"></span> Restaurants</a></li>
                            <li><a href="groceries.php"><span class="fa fa-users"></span> Groceries</a></li>
                            <li><a href="sports.php"><span class="fa fa-shield"></span> Sports</a></li>
                            <li><a href="pubs.php"><span class="fa fa-glass"></span> Pubs/Party Places</a></li>
                            <li><a href="casinos.php"><span class="fa fa-heart"></span> Local Casinos</a></li>
                            <li><a href="theaters.php"><span class="fa fa-film"></span> Movie Theaters</a></li>
                            <li><a href="advertisements.php"><span class="fa fa-file-image-o"></span> Advertisements</a></li>                                                    
                            <li><a href="desi_pages.php"><span class="fa fa-globe"></span> Deshi Pages</a></li>
                            <li><a href="announcements.php"><span class="fa fa-bullhorn"></span> Announcements</a></li>
                            <li><a href="events.php"><span class="fa fa-calendar"></span> Events</a></li>
                            <li><a href="batches.php"><span class="fa fa-cloud"></span> Batches</a></li>
                            <li><a href="student_talk.php"><span class="fa fa-users"></span> Student's Talk</a></li>
                            <li><a href="top_city_movies.php"><span class="fa fa-film"></span> Movies Top Cities</a></li>                            
                        </ul>
                    </li>
                    
                    
                    
                    
                    
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-play"></span> <span class="xn-text">Videos</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="videos.php"><span class="fa fa-video-camera"></span> Manage Videos</a></li>
                            <li><a href="video_categories.php"><span class="fa fa-file-video-o"></span> Manage Categories</a></li>
                            <li><a href="video_languages.php"><span class="fa fa-language"></span> Manage Languages</a></li>
                        </ul>
                    </li>
                    
                    
                    
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-file-text"></span> <span class="xn-text">Free Ads Category</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="auto_cats.php"><span class="fa fa-car"></span> Autos</a></li>
                            <li><a href="baby_cats.php"><span class="fa fa-wheelchair"></span> Baby Sitting</a></li>
                            <li><a href="eduation_cat.php"><span class="fa fa-book"></span> Education and Teaching</a></li>
                            <li><a href="electronic_cat.php"><span class="fa fa-bolt"></span> Electronics</a></li>
                            <li><a href="job_cats.php"><span class="fa fa-search"></span> Jobs</a></li>
                            <li><a href="mypartner_cats.php"><span class="fa fa-users"></span> My Partner</a></li>                            
                            <li><a href="realestate_cats.php"><span class="fa fa-home"></span> Real Estate</a></li>
                            <li><a href="roommate_cats.php"><span class="fa fa-university"></span> Room Mates</a></li>
                            <li><a href="garagesale_cats.php"><span class="fa fa-briefcase"></span> Garage Sale</a></li>
                            <li><a href="batch_cats.php"><span class="fa fa-graduation-cap"></span> Batches</a></li>                            
                        </ul>
                    </li>
                    
                    
                    
                    
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-th-large"></span> <span class="xn-text">Free Ads Management</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="auto.php"><span class="fa fa-car"></span> Autos Classified</a></li>
                            <li><a href="babysitting.php"><span class="fa fa-wheelchair"></span> Baby Sitting</a></li>
                            <li><a href="education.php"><span class="fa fa-book"></span> Education and Teaching</a></li>
                            <li><a href="electronics.php"><span class="fa fa-bolt"></span> Electronics</a></li>
                            <li><a href="jobs.php"><span class="fa fa-search"></span> Jobs</a></li>
                            <li><a href="mypartner.php"><span class="fa fa-users"></span> My Partner</a></li>                            
                            <li><a href="realestate.php"><span class="fa fa-home"></span> Real Estate</a></li>
                            <li><a href="roommates.php"><span class="fa fa-university"></span> Room Mates</a></li>
                            <li><a href="garagesale.php"><span class="fa fa-briefcase"></span> Garage Sale</a></li>
                            <li><a href="free_stuff.php"><span class="fa fa-heart"></span> Free Stuff</a></li>                            
                        </ul>
                    </li>
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-link"></span> <span class="xn-text">Home Page Link</span></a>
                        <ul class="animated zoomIn">
                            <li><a href="us_ads.php"><span class="fa fa-image"></span> Home Page Ads</a></li>
                            <li><a href="national_events.php"><span class="fa fa-calendar"></span> National Events</a></li>
                            <li><a href="national_batches.php"><span class="fa fa-cloud"></span> National Batches</a></li>                                                                        
                        </ul>
                    </li>
                  
                 	 <li><a href="web_users.php"><span class="fa fa-users"></span> <span class="xn-text">Web User Management</span></a></li>
                    
                    
                     <li class="xn-icon-button pull-right">
                        <a href="javascript:;" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li>
                    <li class="xn-icon-button pull-right" style="width:auto;">
                        <a href="javascript:;" style="width:auto;">Welcome : <?php echo ucwords($_SESSION['USNRIs_session']['username']); ?></a>
                        
                                                
                    </li> 
                      
                </ul>
                
<?php } ?>                
              









<?php
if ($_SESSION['USNRIs_session']['category']=='Clerk')
{ ?>

<ul class="x-navigation x-navigation-horizontal">
                    <li class="xn-logo">
                        <a href="dashboard.php">NRIs</a>
                        <a href="javascript:;" class="x-navigation-control"></a>
                    </li>
                   
                    <li class="active">
                        <a href="dashboard.php"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>
                
                    
                    
                    <?php /*?> <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-th-list"></span> <span class="xn-text">Premium Category</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="main_category_list.php"><span class="fa fa-list"></span> Main Category</a></li>
                            <li><a href="category.php"><span class="fa fa-list-ul"></span> Category</a></li>
                            <li><a href="sub_category.php"><span class="fa fa-bars"></span> Sub Category</a></li>                        
                        </ul>
                    </li><?php */?>
                    
                     <li>
                        <a href="city_management.php"><span class="fa fa-map-marker"></span> <span class="xn-text">City Management</span></a>                        
                    </li>
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-map-marker"></span> <span class="xn-text">State Famous Places</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="temples.php"><span class="fa fa-bell"></span> Temples</a></li>
                            <li><a href="restaurants.php"><span class="fa fa-cutlery"></span> Restaurants</a></li>
                            <li><a href="groceries.php"><span class="fa fa-users"></span> Groceries</a></li>
                            <li><a href="sports.php"><span class="fa fa-shield"></span> Sports</a></li>
                            <li><a href="pubs.php"><span class="fa fa-glass"></span> Pubs/Party Places</a></li>
                            <li><a href="casinos.php"><span class="fa fa-heart"></span> Local Casinos</a></li>
                            <li><a href="theaters.php"><span class="fa fa-film"></span> Movie Theaters</a></li>
                            <li><a href="advertisements.php"><span class="fa fa-file-image-o"></span> Advertisements</a></li>                                                    
                            <li><a href="desi_pages.php"><span class="fa fa-globe"></span> Deshi Pages</a></li>
                            <li><a href="announcements.php"><span class="fa fa-bullhorn"></span> Announcements</a></li>
                            <li><a href="events.php"><span class="fa fa-calendar"></span> Events</a></li>
                            <li><a href="batches.php"><span class="fa fa-cloud"></span> Batches</a></li>
                            <li><a href="student_talk.php"><span class="fa fa-users"></span> Student's Talk</a></li>
                            <li><a href="top_city_movies.php"><span class="fa fa-film"></span> Movies Top Cities</a></li>                            
                        </ul>
                    </li>
                    
                    
                    
                    
                     <?php /*?>
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-play"></span> <span class="xn-text">Videos</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="videos.php"><span class="fa fa-video-camera"></span> Manage Videos</a></li>
                            <li><a href="video_categories.php"><span class="fa fa-file-video-o"></span> Manage Categories</a></li>
                            <li><a href="video_languages.php"><span class="fa fa-language"></span> Manage Languages</a></li>
                        </ul>
                    </li>
                    
                    
                    
                   <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-file-text"></span> <span class="xn-text">Free Ads Category</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="auto_cats.php"><span class="fa fa-car"></span> Autos</a></li>
                            <li><a href="baby_cats.php"><span class="fa fa-wheelchair"></span> Baby Sitting</a></li>
                            <li><a href="eduation_cat.php"><span class="fa fa-book"></span> Education and Teaching</a></li>
                            <li><a href="electronic_cat.php"><span class="fa fa-bolt"></span> Electronics</a></li>
                            <li><a href="job_cats.php"><span class="fa fa-search"></span> Jobs</a></li>
                            <li><a href="mypartner_cats.php"><span class="fa fa-users"></span> My Partner</a></li>                            
                            <li><a href="realestate_cats.php"><span class="fa fa-home"></span> Real Estate</a></li>
                            <li><a href="roommate_cats.php"><span class="fa fa-university"></span> Room Mates</a></li>
                            <li><a href="garagesale_cats.php"><span class="fa fa-briefcase"></span> Garage Sale</a></li>
                            <li><a href="batch_cats.php"><span class="fa fa-graduation-cap"></span> Batches</a></li>                            
                        </ul>
                    </li>
                    <?php */?>
                    
                    
                    
                    <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-th-large"></span> <span class="xn-text">Free Ads Management</span></a>
                        <ul class="animated zoomIn">                            
                            <li><a href="auto.php"><span class="fa fa-car"></span> Autos Classified</a></li>
                            <li><a href="babysitting.php"><span class="fa fa-wheelchair"></span> Baby Sitting</a></li>
                            <li><a href="education.php"><span class="fa fa-book"></span> Education and Teaching</a></li>
                            <li><a href="electronics.php"><span class="fa fa-bolt"></span> Electronics</a></li>
                            <li><a href="jobs.php"><span class="fa fa-search"></span> Jobs</a></li>
                            <li><a href="mypartner.php"><span class="fa fa-users"></span> My Partner</a></li>                            
                            <li><a href="realestate.php"><span class="fa fa-home"></span> Real Estate</a></li>
                            <li><a href="roommates.php"><span class="fa fa-university"></span> Room Mates</a></li>
                            <li><a href="garagesale.php"><span class="fa fa-briefcase"></span> Garage Sale</a></li>
                            <li><a href="free_stuff.php"><span class="fa fa-heart"></span> Free Stuff</a></li>                            
                        </ul>
                    </li>
                    
                     <li class="xn-openable">
                        <a href="javascript:;"><span class="fa fa-link"></span> <span class="xn-text">Home Page Link</span></a>
                        <ul class="animated zoomIn">
                            <li><a href="us_ads.php"><span class="fa fa-image"></span> Home Page Ads</a></li>
                            <li><a href="national_events.php"><span class="fa fa-calendar"></span> National Events</a></li>
                            <li><a href="national_batches.php"><span class="fa fa-cloud"></span> National Batches</a></li>                                                                        
                        </ul>
                    </li>
                  
                 	<?php /*?> <li><a href="web_users.php"><span class="fa fa-users"></span> <span class="xn-text">Web User Management</span></a></li><?php */?>
                    
                    
                     <li class="xn-icon-button pull-right">
                        <a href="javascript:;" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li>
                    <li class="xn-icon-button pull-right" style="width:auto;">
                        <a href="javascript:;" style="width:auto;">Welcome : <?php echo ucwords($_SESSION['USNRIs_session']['username']); ?></a>
                        
                                                
                    </li> 
                      
                </ul>
                
<?php } ?>                
              
