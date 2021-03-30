<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free Dental Medical Hospital Website Template | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="images/fav.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/styleuser.css" />
</head>
<?php
include_once 'model/CtUserDB.php';
include_once 'model/UserDB.php';
include_once 'model/CtUser.php';
$ff=new UserDB();
$dt = new CtUserDB();
?>
    <body>
       
       <div class="container-fluid">
           <div class="cover">
               <div class="cover-layer">
             
                   <div class="container web-portion">
                       <div class="row top-det">
                           <div class="col-md-4">
                               <div class="profil-det-img d-flex">
                             
                                  <div class="dp">
                                       <img src="<?php echo $ff->getUserByName($_POST['userinfor'])[0]->getImage(); ?>" alt="">
                                  </div>
                                  <div class="pd">
                                      <h2><?php echo $dt->getUserByName($_POST['userinfor'])[0]->getName(); ?></h2>
                                       <p><?php echo $ff->getUserByName($_POST['userinfor'])[0]->getPosition(); ?></p>
                                  </div>
                                   
                               </div>
                           </div>
                           <div class="col-md-4 eml-mob">
                               <ul>
                                   <li><i class="fas fa-envelope"></i><?php echo $ff->getUserByName($_POST['userinfor'])[0]->getGmail(); ?></li>
                                   <li><i class="fas fa-phone-square"></i> +123 234 234</li>
                               </ul>
                           </div>
                           <div class="col-md-4 d-flex map-mark">
                               <i class="fas fa-map-marker-alt"></i>
                               <p><?php echo $dt->getUserByName($_POST['userinfor'])[0]->getLivein(); ?></p>
                           </div>
                       </div>
                       <div class="nav-detail">
                           <ul class="nav nav-tabs" id="myTab" role="tablist">
                              
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <div class="row no-margin home-det">
                                      <div class="col-md-4 big-img">
                                         <img src="<?php echo $dt->getUserByName($_POST['userinfor'])[0]->getImagebig(); ?>" alt=""> 
                                      </div>
                                      <div class="col-md-8 home-dat">
                                          <div class="detal-jumbo">
                                              <h3><?php echo $dt->getUserByName($_POST['userinfor'])[0]->getName(); ?>/ <?php echo $ff->getUserByName($_POST['userinfor'])[0]->getPosition(); ?></h3>
                                              <p><?php echo $dt->getUserByName($_POST['userinfor'])[0]->getStory(); ?></p>
                                          </div>
                                          <div class="links">
                                          <div class="row ">
                                              <div class="col-xl-6 col-md-12">
                                                  <ul class="btn-link">
                                                      <li>
                                                          <a href="index.php"><i class=""></i>Trang Chủ</a>
                                                      </li>
                                                      <li>
                                                          <a href="login.php"><i class=""></i>Đăng Xuất</a>
                                                      </li>
                                                  </ul>
                                              </div>
                                             
                                          </div>
                                      </div>
                                      <div class="jumbo-address">
                                         <div class="row no-margin">
                                                  <div class="col-lg-6 no-padding">
                                              
                                                  <table class="addrss-list">
                                                      <tbody><tr>
                                                          <th>Position</th>
                                                          <td><?php echo $ff->getUserByName($_POST['userinfor'])[0]->getPosition(); ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th>Nationality</th>
                                                          <td><?php echo $dt->getUserByName($_POST['userinfor'])[0]->getNationality(); ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th>Date of birth</th>
                                                          <td><?php echo $ff->getUserByName($_POST['userinfor'])[0]->getDate_of_birth(); ?></td>
                                                      </tr>
                                                  </tbody></table>
                                            
                                          </div>
                                          <div class="col-lg-6 no-padding">
                                               <table class="addrss-list">
                                                      <tbody><tr>
                                                          <th>Experiance</th>
                                                          <td><?php echo $dt->getUserByName($_POST['userinfor'])[0]->getExperience(); ?></td>
                                                      </tr>
                                                      <tr>
                                                          <th>Website</th>
                                                          <td>www.yourdomain.com</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Languages</th>
                                                          <td><?php echo $dt->getUserByName($_POST['userinfor'])[0]->getLanguage(); ?></td>
                                                      </tr>
                                                  </tbody></table>
                                          </div>
                                         </div>
                                     
                                      </div>
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="tab-pane fade profile-tab" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                  <div class="profile-desic">
                                          <p>Hello, I’m UI/UX Developer / Wordpress Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                                      </div>
                                      <div class="sec-title">
                                          <h2>Services</h2>
                                      </div>
                                      <div class="row service-ro no-margin">
                                          <div class="col-lg-4 col-md-6 singe-servic">    
                                                 <i class="fab fa-delicious"></i>
                                                  <h4>Graphic Design</h4>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div class="col-lg-4 col-md-6 singe-servic">    
                                                 <i class="fas fa-code"></i>
                                                  <h4>Website Design</h4>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div class="col-lg-4 col-md-6 singe-servic">    
                                                 <i class="fab fa-chrome"></i>
                                                  <h4>Web Development</h4>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div class="col-lg-4 col-md-6 singe-servic">    
                                                 <i class="fab fa-android"></i>
                                                  <h4>Android Development</h4>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div class="col-lg-4 col-md-6 singe-servic">    
                                                 <i class="fab fa-app-store-ios"></i>
                                                  <h4>IOS Design</h4>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <div class="col-lg-4 col-md-6 singe-servic">    
                                                 <i class="fas fa-mobile-alt"></i>
                                                  <h4>Ionic Development</h4>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                  
                              </div>
                              <div class="tab-pane education-detail fade" id="education" role="tabpanel" aria-labelledby="contact-tab">
                                  <div class="sec-title">
                                        <h2>Education Details</h2>
                                  </div>
                                   <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>Master Degree</p>
                                          </div>
                                          <div class="col-sm-9 rgbf">
                                              <h5>Cambridg University</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>Bacholers Degree</p>
                                          </div>
                                          <div class="col-sm-9 rgbf">
                                              <h5>Anna University</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>High School</p>
                                          </div>
                                          <div class="col-sm-9 rgbf">
                                              <h5>A.M.H.S.S</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                      <div class="service no-margin row">
                                          <div class="col-sm-3 resume-dat serv-logo">
                                              <h6>2013-2015</h6>
                                            <p>School</p>
                                          </div>
                                          <div class="col-sm-9 rgbf">
                                              <h5>Anna University</h5>
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                      </div>
                                  </div>
                                   <div class="tab-pane portfolio-detail fade" id="portfolio" role="tabpanel" aria-labelledby="contact-tab">
                                       <div class="row no-margin gallery">
                                          <div class="col-sm-4">
                                              <img src="images/gallery/gallery_01.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="images/gallery/gallery_02.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="images/gallery/gallery_03.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="images/gallery/gallery_04.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="images/gallery/gallery_05.jpg" alt="">
                                          </div>
                                          <div class="col-sm-4">
                                              <img src="images/gallery/gallery_06.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="images/gallery/gallery_10.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="images/gallery/gallery_08.jpg" alt="">
                                          </div>
                                           <div class="col-sm-4">
                                              <img src="images/gallery/gallery_09.jpg" alt="">
                                          </div>
                                          
                                      </div>
                                   </div>
                                   <div class="tab-pane portfolio-detail contact-tab fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="row no-margin">
                                          <div class="col-md-6 no-padding">
                                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3176144.0450019627!2d-107.79423426090409!3d38.97644533805396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x874014749b1856b7%3A0xc75483314990a7ff!2sColorado%2C+USA!5e0!3m2!1sen!2sin!4v1547222354537"  frameborder="0" style="border:0" allowfullscreen></iframe>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="row cont-row no-margin">
                                                  <div class="col-sm-6">
                                                      <input placeholder="Enter Full Name" type="text" class="form-control form-control-sm">
                                                  </div>
                                                   <div class="col-sm-6">
                                                      <input placeholder="Enter Email Address" type="text" class="form-control form-control-sm">
                                                  </div>
                                              </div>
                                              <div class="row cont-row no-margin">
                                                  <div class="col-sm-6">
                                                      <input placeholder="Enter Mobile Number" type="text" class="form-control form-control-sm">
                                                  </div>
                                                   
                                              </div>
                                              <div class="row cont-row no-margin">
                                                  <div class="col-sm-12">
                                                     <textarea placeholder="Enter your Message" class="form-control form-control-sm" rows="10"></textarea>
                                                  </div>
                                                  
                                              </div>
                                              <div class="row cont-row no-margin">
                                                  <div class="col-sm-6">
                                                      <button class="btn btn-sm btn-success">Send Message</button>
                                                  </div>
                                                   
                                              </div>
                                          </div>
                                      </div>
                                      
                                  </div>
                              </div>
                            </div>
                       </div>
                   </div>
               </div>
           </div> 
    </body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>        
<script src="js/script.js"></script>


</html>