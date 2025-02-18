<?php
/**
 * @var yii\web\View $this
 * @var string $content
 */

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

use yii\helpers\Html;
use yii\helpers\Url;
 
$cssFile = Url::to('@web/css/style.css');
echo Html::cssFile($cssFile, ['depends' => [\yii\bootstrap4\BootstrapAsset::class]]);


$this->beginContent('@frontend/views/layouts/_clear.php')
?>
<header>
    

    <!-- header top -->
    <div class="header_top">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <a class="logo" href="<?php Yii::$app->homeUrl ?>">
                  Academia
                  <span>Online Education &amp; Learning</span>
                  </a>
               </div>
               <div class="col-md dnone_mob">
                  <div class="cont_box">
                     <div class="icon">
                        <img src="images/clock.png">
                     </div>
                     <div class="text">
                        <span>Monday - Friday</span>
                        <strong>8:00AM-8:00PM</strong>
                     </div>
                  </div>
               </div>
               <div class="col-md dnone_mob">
                  <div class="cont_box ">
                     <div class="icon">
                        <img src="images/telephone.png">
                     </div>
                     <div class="text">
                        <span>Call Us</span>
                        <strong>+2 392 3929 210</strong>
                     </div>
                  </div>
               </div>
               <div class="col-md d-flex justify-content-end align-items-center dnone_mob">
                  <div class="social_icons">
                     <!-- <a href="#"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a> -->
                     <a href="#"><i class="fa fa-facebook"></i> </a>
                     <a href="#"><i class="fa fa-twitter"></i> </a>
                     <a href="#"><i class="fa fa-instagram"></i> </a>
                     <a href="#"><i class="fa fa-dribbble"></i> </a>
                  </div>
               </div>

               <!-- <nav role="navigation" class="navbar-default navbar-fixed-top navbar navbar-expand-lg navbar-light bg-light">
               <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                     </li>
                        
                     </ul>
                     
                  </div>
               </div>
               </nav> -->

                
               
            </div>
         </div>
      </div>
      <!-- header top -->
      <!-- header section -->
      <div class="header dnone_mob">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  


                  
    <?php NavBar::begin([
        
        'options' => [
            'class' => ['my_nav', 'navbar-expand-md'],
        ],
    ]); ?>
    <?php echo Nav::widget([
      //   'options' => ['class' => ['navbar-nav', 'justify-content-end', 'ml-auto']],
        'items' => [
          // Home is the about us page (add research, awards, testimonials on home page)
          // about us, research, 10k+ reviews, assessments, social cause, signup, contact us
           ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
           ['label' => Yii::t('frontend', 'About'), 'url' => ['/page/view', 'slug'=>'about']],
           ['label' => Yii::t('frontend', 'Research'), 'url' => ['/page/view', 'slug'=>'research']],
           ['label' => Yii::t('frontend', 'Contact'), 'url' => ['/site/contact']],
           ['label' => Yii::t('frontend', 'FAQs'), 'url' => ['/page/view', 'slug'=>'FAQs']],
           ['label' => Yii::t('frontend', 'Classes'), 'url' => ['/site/faqs']],
           ['label' => Yii::t('frontend', 'Store'), 'url' => ['/store/product']],
           ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest],
            ['label' => Yii::t('frontend', 'Textbooks'), 'url' => ['/user-management/auth/login'],
                'visible'=>Yii::$app->user->isGuest and Yii::$app->controller->id !="application-detail"],
            [
                'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->username , //identity->getPublicIdentity(),
                'visible'=>!Yii::$app->user->isGuest,
                'items'=>[
                    [
                        'label' => Yii::t('frontend', 'Profile'),
                        'url' => ['/studentms/student/view']
                    ],
                   [
                       'label' => Yii::t('frontend', 'Settings'),
                       'url' => ['/user/default/index']
                   ],
                    [
                        'label' => Yii::t('frontend', 'Backend'),
                        'url' => Yii::getAlias('@backendUrl'),
                        'visible'=>Yii::$app->user->can('manager')
                    ],
                    [
                        'label' => Yii::t('frontend', 'Logout'),
                        'url' => ['/user-management/auth/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ]
                ]
            ],
//            [
//                'label'=>Yii::t('frontend', 'Language'),
//                'items'=>array_map(function ($code) {
//                    return [
//                        'label' => Yii::$app->params['availableLocales'][$code],
//                        'url' => ['/site/set-locale', 'locale'=>$code],
//                        'active' => Yii::$app->language === $code
//                    ];
//                }, array_keys(Yii::$app->params['availableLocales']))
//            ]
        ]
    ]); ?>
    <a href="#" class="cert_btn">Get Certificate</a>
    <?php NavBar::end(); ?>


               </div>
            </div>
         </div>
      </div>
      <!-- header section -->
</header>

<main class="flex-shrink-0" role="main">
    <?php echo $content ?>
</main>

<div class="newsletter">
          <div class="container">
               <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                     <div class="inner_wrap">
                           <div class="content">
                              <h2>Newsletter - Stay tune and get the latest update</h2>
                              <p>Far far away, behind the word mountains</p>
                           </div>
                           <div class="subs">
                                 <form action="" method="post">
                                     
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                     
                                 </form>
                           </div>
                     </div>
                  </div>
                  <div class="col-md-1"></div>
               </div>
          </div>
</div>
  
<footer>
   <div class="container">
       <div class="parent">
            <div class="col">
                  <a class="logo" href="home.html">
                     Academia
                     <span>Online Education &amp; Learning</span>
                  </a>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>

                  <div class="social_icons">
                      <a href="#"><i class="fa fa-twitter"></i> </a>
                     <a href="#"><i class="fa fa-facebook"></i> </a>
                     <a href="#"><i class="fa fa-instagram"></i> </a>
                  </div>

             </div>
             <div class="col col_small">
                <h4>Explore</h4>
                <ul>
                   <li> <a href="#"> <i class="fa fa-chevron-right"></i>About Us</a></li>
                    <li><a href="#"> <i class="fa fa-chevron-right"></i>Services</a></li>
                     <li><a href="#"> <i class="fa fa-chevron-right"></i>Courses</a></li>
                      <li><a href="#"> <i class="fa fa-chevron-right"></i>Blog</a></li>
                       <li><a href="#"> <i class="fa fa-chevron-right"></i>Contact Us</a></li>
                    </ul>
            </div>

             <div class="col col_small">
                <h4>Quick Links</h4>
                <ul>
                   <li>
                        <a href="#"> <i class="fa fa-chevron-right"></i>Contact Us</a>
                  </li>
                  <li>
                      <a href="#"> <i class="fa fa-chevron-right"></i>Pricing</a>
                  </li>
                  <li>
                      <a href="#"> <i class="fa fa-chevron-right"></i>Terms & Conditions</a>
                  </li>
                  <li><a href="#"> <i class="fa fa-chevron-right"></i>Privacy</a></li>
                  <li> <a href="#"> <i class="fa fa-chevron-right"></i>Services</a></li>
                  
                       
                        
                       
                </ul>

             </div>
             <div class="col">
                 <h4>Recent Posts</h4>
               <div class="little_post">
                  <div class="pic">
                     <img src="images/blog3.webp">
                  </div>
                  <div class="content">
                     <div class="tags">
                        <a href="#"><i class="fa fa-calendar"></i> Jan. 18, 2021</a>
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                     </div>
                     <h5>Creativity and Inspiration</h5>
                  </div>
               </div>
                <div class="little_post">
                  <div class="pic">
                     <img src="images/blog3.webp">
                  </div>
                  <div class="content">
                     <div class="tags">
                        <a href="#"><i class="fa fa-calendar"></i> Jan. 18, 2021</a>
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                     </div>
                     <h5>Creativity and Inspiration</h5>
                  </div>
               </div>
                <div class="little_post">
                  <div class="pic">
                     <img src="images/blog3.webp">
                  </div>
                  <div class="content">
                     <div class="tags">
                        <a href="#"><i class="fa fa-calendar"></i> Jan. 18, 2021</a>
                        <a href="#"><i class="fa fa-user"></i> Admin</a>
                     </div>
                     <h5>Creativity and Inspiration</h5>
                  </div>
               </div>
             </div>

             <div class="col">
             <h4>Have a Questions?</h4>
                <div class="cont_fields">
                     <div>
                        <i class="icon fa fa-map marker"></i>
                        <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                     </div>
                      <div>
                        <i class="icon fa fa-phone"></i>
                        <a href="tel:+23923929210"> +2 392 3929 210</a>
                     </div>
                      <div>
                        <i class="icon fa fa-paper-plane"></i>
                       <a href="tel:+23923929210"> info@yourdomain.com</a>
                     </div>
                </div>
             </div>
            
             

        </div> 

        
   </div>  
   <div class="copyright_sec">
            <p>Copyright © 2024 All rights reserved </p>
   </div>   
</footer>

<?php $this->endContent() ?>