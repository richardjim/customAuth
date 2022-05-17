
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Create a new notification - 66socialproof Demo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
                        <link href="uploads/favicon/f9ab739e0e0982a8b98ecd6e7506656e.png" rel="shortcut icon" />
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
            <link href="themes/altum/assets/css/bootstrap-dark.min1eb2.css?v=1200" id="css_theme_style" rel="stylesheet" media="screen,print">
            <link href="themes/altum/assets/css/custom1eb2.css?v=1200" rel="stylesheet" media="screen">
            {{-- <link href="themes/altum/assets/css/animate.min1eb2.css?v=1200" rel="stylesheet" media="screen"> --}}
            <link href="themes/altum/assets/css/pixel1eb2.css?v=1200" rel="stylesheet" media="screen">
                
    <script async src=https://cdnjs.cloudflare.com/ajax/libs/element-ui/2.15.7/index.js></script>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
        <link href="uploads/favicon/f9ab739e0e0982a8b98ecd6e7506656e.png" rel="shortcut icon" />
        
        <script src="https://cdn.jsdelivr.net/npm/vue-moment@4.1.0/dist/vue-moment.min.js"></script>
    
        {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>
                    
            
            
            
            
                        <link href="https://66socialproof.com/demo/uploads/favicon/9c3e51b8336fffdf712f4c3d40b9f1fd.png" rel="shortcut icon" />
            
            <link href="https://66socialproof.com/demo/themes/altum/assets/css/bootstrap-dark.min.css?v=1600" id="css_theme_style" rel="stylesheet" media="screen,print">
                        <link href="https://66socialproof.com/demo/themes/altum/assets/css/custom.css?v=1600" rel="stylesheet" media="screen,print">
                        <link href="themes/altum/assets/css/animate.min.css?v=1600" rel="stylesheet" media="screen,print">
            
            
                        <!-- Pixel Code for https://pixel.socialproofo.com/ -->
    <script defer src="/pixel/BRd8zqCcSdrWOqof"></script>
    <!-- END Pixel Code -->

    

</head>


<body class="  c_darkmode" data-theme-style="dark">

    <nav class="navbar navbar-main  navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="demo/">
                <img src="uploads/logo/logo.png" class="img-fluid navbar-logo" alt="Website Logo" />
            </a>

            <button class="btn navbar-custom-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#main_navbar" aria-controls="main_navbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="main_navbar">
                <ul class="navbar-nav">


                    @auth

                        <li class="nav-item"><a class="nav-link" href=""> Dashboard</a></li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="https://www.gravatar.com/avatar/21232f297a57a5a743894a0e4a801fc3?s=80&d=mp&r=g"
                                    class="navbar-avatar mr-1" loading="lazy" />
                                {{ auth()->user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">


                                <a class="dropdown-item" href="admin"><i
                                        class="fa fa-fw fa-sm fa-user-shield mr-1"></i>{{ auth()->user()->name }}</a>

                                <a class="dropdown-item" href="account"><i class="fa fa-fw fa-sm fa-wrench mr-1"></i>
                                    Account</a>
                                <a class="dropdown-item" href="account-plan"><i
                                        class="fa fa-fw fa-sm fa-box-open mr-1"></i> Plan</a>

                                <a class="dropdown-item" href="account-payments"><i
                                        class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payments</a>


                                <a class="dropdown-item" href="account-api"><i
                                        class="fa fa-fw fa-sm fa-code mr-1"></i> API</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="fa fa-fw fa-sm fa-sign-out-alt mr-1"></i> Logout</a>
                            </div>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>


    <main  id="app">

        <header class="header">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="custom-breadcrumbs small">
                        <li>
                            <a href="dashboard">Dashboard</a><i class="fa fa-fw fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="campaign/1">Campaign</a><i class="fa fa-fw fa-angle-right"></i>
                        </li>
                        <li class="active" aria-current="page">Create a new notification</li>
                    </ol>
                </nav>

                <h1 class="h2 mr-3">Create a new notification</h1>

                <div class="d-flex align-items-center text-muted mr-3" >
                    <img src="https://external-content.duckduckgo.com/ip3/66socialproof.com.ico"
                        class="img-fluid icon-favicon mr-1" />
                        {{-- {{$campaign->domain}} key="{{$campaign->id}}"  --}}{{ $campaign['domain'] }}
                </div>
            </div>
        </header>

        <section  class="container"  >


            <div class="my-5 mb-lg-0 d-flex flex-column flex-md-row justify-content-center align-items-center">
                <div id="notification_preview"></div>
            </div>

           

            <div class="mt-5 row d-flex align-items-stretch" id="exampleModal1">
            @csrf

            
                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input  type="radio" name="type" value="Informational" v-model="notification.select"
                       class="custom-control-input" required="required" checked>
                       
                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-info-circle"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Informational</div>

                            <p class="text-muted text-center">Fully customizable informational message for your users.
                            </p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-informational-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-informational-content">
                                <img src="https://img.icons8.com/dusk/2x/sale.png" class="altumcode-informational-image"
                                    alt="" loading="lazy" />

                                <div>
                                    <div class="altumcode-informational-header">
                                        <p class="altumcode-informational-title" style="color: #000">Flash sale!</p>

                                        <button class="altumcode-close" style="color: gray;">×</button>
                                    </div>
                                    <p class="altumcode-informational-description" style="color: #000">Limited sale
                                        until tonight, right now!</p>


                                    {{-- <a href="https://66socialproof.com/demo/" class="altumcode-site">⚡️
                                        66socialproof</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </label>

<div  style="display: none">
                You have selected : @{{notification.select}}
                                   
</div>






                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" value="Coupon" v-model="notification.select" 
                        class="custom-control-input" required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-piggy-bank"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Coupon</div>

                            <p class="text-muted text-center">The best way to let your users know that you are running a
                                sale.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-coupon-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-coupon-content">
                                <img src="https://img.icons8.com/nolan/2x/cutting-coupon.png"
                                    class="altumcode-coupon-image" alt="" loading="lazy" />

                                <div>
                                    <div class="altumcode-coupon-header">
                                        <p class="altumcode-coupon-title" style="color: #000">35% OFF!</p>

                                        <button class="altumcode-close" style="color: gray;">×</button>
                                    </div>
                                    <p class="altumcode-coupon-description" style="color: #000">Limited summer sale
                                        coupon code!</p>

                                    <div class="altumcode-coupon-coupon-code">COUPON20</div>

                                    <a href="" class="altumcode-coupon-button" style="background: #000;color: #fff">Get
                                        Coupon</a>

                                    <div>
                                        <a href="#" class="altumcode-coupon-footer">No, I don't want to save money!</a>
                                    </div>

                                    <a href="/" class="altumcode-site">⚡️
                                        66socialproof</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </label>










                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" data-toggle="modal" v-model=notification.select value="Live Counter" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-globe"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Live Counter</div>

                            <p class="text-muted text-center">Show your visitors how many people are on your site to
                                create more trust.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-live-counter-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-live-counter-content">

                                <div class="altumcode-live-counter-header">
                                    <div class="altumcode-live-counter-main">
                                        <div class="altumcode-toast-pulse" style="background: #17bf21;"></div>

                                        <div class="altumcode-live-counter-number"
                                            style="background: #000; color: #fff">
                                            15 </div>
                                    </div>

                                    <div class="altumcode-live-counter-close">
                                        <button class="altumcode-close" style="color: gray;">×</button>
                                    </div>
                                </div>

                                <p class="altumcode-live-counter-description" style="color: #000">Active visitors now.
                                </p>

                                <a href="demo/" class="altumcode-site">⚡️ 66socialproof</a>
                            </div>
                        </div>
                    </div>

                </label>









                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select  value="Email Collector" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i
                                        class="fa fa-fw fa-envelope-open"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Email Collector</div>

                            <p class="text-muted text-center">Easily collect emails and generate leads from your users.
                            </p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-email-collector-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-email-collector-content">
                                <div class="altumcode-email-collector-header">
                                    <p class="altumcode-email-collector-title" style="color: #000">Weekly newsletter
                                    </p>

                                    <button class="altumcode-close" style="color: gray;">×</button>
                                </div>
                                <p class="altumcode-email-collector-description" style="color: #000">We do not send out
                                    spam emails & you can unsubscribe at any point.</p>


                                <div id="altumcode-email-collector-form" class="altumcode-email-collector-form" name=""
                                    action="" method="POST" role="form">
                                    <div class="altumcode-email-collector-row">
                                        <input type="email" class="" name="email"
                                            placeholder="Your valid email" aria-label="Your valid email" />

                                        <button type="submit" name="button"
                                            style="color: #fff; background: #272727">Sign me up</button>
                                    </div>

                                </div>

                                <a href="/" class="altumcode-site">⚡️ 66socialproof</a>
                            </div>
                        </div>
                    </div>

                </label>










                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select  value="Conversions" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i
                                        class="fa fa-fw fa-funnel-dollar"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Conversions</div>

                            <p class="text-muted text-center">Establish social proof by displaying your most recent
                                conversions on your site.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-conversions-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-conversions-content">
                                <img src="https://img.icons8.com/dusk/2x/small-smile.png"
                                    class="altumcode-conversions-image" alt="" loading="lazy" />

                                <div style="width: 100%!important;">
                                    <div class="altumcode-conversions-header">
                                        <p class="altumcode-conversions-title" style="color: #000">Someone from England
                                        </p>

                                        <button class="altumcode-close" style="color: gray;">×</button>
                                    </div>

                                    <p class="altumcode-conversions-description" style="color: #000">Signed up for the
                                        newsletter.</p>

                                    <div class="altumcode-conversions-time">
                                        10 mins ago </div>

                                    <a href="#" class="altumcode-site">⚡️
                                        66socialproof</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </label>










                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select value="Conversions Counter" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i
                                        class="fa fa-fw fa-comment-dollar"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Conversions Counter</div>

                            <p class="text-muted text-center">Establish social proof by showing how many recent
                                conversions you've got.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-conversions-counter-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-conversions-counter-content">

                                <div class="altumcode-conversions-counter-number"
                                    style="background: #000; color: #fff">
                                    5 </div>

                                <div style="width: 100%!important;">
                                    <div class="altumcode-conversions-counter-header">
                                        <p class="altumcode-conversions-counter-title" style="color: #000">People
                                            bought the product</p>

                                        <div class="altumcode-conversions-counter-close">
                                            <button class="altumcode-close" style="color: gray;">×</button>
                                        </div>
                                    </div>

                                    <p class="altumcode-conversions-counter-time">In the last 2 hours</p>

                                    <a href="#" class="altumcode-site">⚡️
                                        66socialproof</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </label>










                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select value="Video" class="custom-control-input" required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-video"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Video</div>

                            <p class="text-muted text-center">Easily display a small widget with an informative YouTube
                                video.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-video-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-video-content">
                                <div class="altumcode-video-header">
                                    <p class="altumcode-video-title" style="color: #000">Demo of the product</p>

                                    <button class="altumcode-close" style="color: gray;">×</button>
                                </div>

                                <img src="https://i3.ytimg.com/vi/3WxQgvuT6ZI/maxresdefault.jpg"
                                    class="altumcode-video-video-iframe" loading="lazy" />

                                <a href="" class="altumcode-video-button" target="_blank"
                                    style="background: #000;color: #fff;">Sign up</a>

                                <a href="#" class="altumcode-site">⚡️ 66socialproof</a>
                            </div>
                        </div>
                    </div>

                </label>





                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select  value="Social Share" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-share-alt"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Social Share</div>

                            <p class="text-muted text-center">Let others share your content and generate more traffic
                                for you.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-social-share-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-social-share-content">
                                <div class="altumcode-social-share-header">
                                    <p class="altumcode-social-share-title" style="color: #000">Tell your friends</p>

                                    <button class="altumcode-close" style="color: gray;">×</button>
                                </div>

                                <div class="altumcode-social-share-buttons">

                                    <a href="https://www.facebook.com/sharer/sharer.php?u=&amp;src=sdkpreparse"
                                        target="_blank"
                                        class="altumcode-social-share-button altumcode-social-share-button-facebook">Facebook</a>

                                    <a href="https://twitter.com/intent/tweet?url=" target="_blank"
                                        class="altumcode-social-share-button altumcode-social-share-button-twitter">Twitter</a>

                                    <a href="https://www.linkedin.com/sharing/share-offsite/?mini=true&url="
                                        target="_blank"
                                        class="altumcode-social-share-button altumcode-social-share-button-linkedin">Linkedin</a>

                                </div>

                                <p class="altumcode-social-share-description" style="color: #000">We appreciate all the
                                    shares to support us! Thank you!</p>

                                <a href="#" class="altumcode-site">⚡️ 66socialproof</a>
                            </div>

                        </div>
                    </div>

                </label>










                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select  value="Reviews" class="custom-control-input" required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-random"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Reviews</div>

                            <p class="text-muted text-center">Display a review/testimonial from your clients to create
                                social proof.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-reviews-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-reviews-content">
                                <img src="https://img.icons8.com/external-vitaliy-gorbachev-blue-vitaly-gorbachev/344/external-review-social-media-vitaliy-gorbachev-blue-vitaly-gorbachev.png"
                                    class="altumcode-reviews-image" alt="" loading="lazy" />

                                <div style="width: 100%!important;">
                                    <div class="altumcode-reviews-header">
                                        <div class="altumcode-reviews-stars">
                                            <div class="altumcode-toast-star">★</div>
                                            <div class="altumcode-toast-star">★</div>
                                            <div class="altumcode-toast-star">★</div>
                                            <div class="altumcode-toast-star">★</div>
                                            <div class="altumcode-toast-star">★</div>
                                        </div>

                                        <button class="altumcode-close" style="color: gray;">×</button>
                                    </div>
                                    <p class="altumcode-reviews-description" style="color: #000">Thank you very much
                                        for providing this awesome service!</p>
                                    <p class="altumcode-reviews-title" style="color: #000">John Doe</p>

                                    <a href="demo/" class="altumcode-site">⚡️
                                        66socialproof</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </label>
                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select value="Emoji Feedback" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-smile-beam"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Emoji Feedback</div>

                            <p class="text-muted text-center">An interactive way for your users to give you feedback
                                about your site.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-emoji-feedback-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-emoji-feedback-content">
                                <div class="altumcode-emoji-feedback-header">
                                    <p class="altumcode-emoji-feedback-title" style="color: #000">Do you like our
                                        website?</p>

                                    <button class="altumcode-close" style="color: gray;">×</button>
                                </div>

                                <div class="altumcode-emoji-feedback-emojis">
                                    <img src="themes/altum/assets/images/emojis/angry.svg"
                                        class="altumcode-emoji-feedback-emoji" data-type="angry" loading="lazy" />

                                    <img src="themes/altum/assets/images/emojis/sad.svg"
                                        class="altumcode-emoji-feedback-emoji" data-type="sad" loading="lazy" />

                                    <img src="themes/altum/assets/images/emojis/neutral.svg"
                                        class="altumcode-emoji-feedback-emoji" data-type="neutral" loading="lazy" />

                                    <img src="themes/altum/assets/images/emojis/happy.svg"
                                        class="altumcode-emoji-feedback-emoji" data-type="happy" loading="lazy" />

                                    <img src="themes/altum/assets/images/emojis/excited.svg"
                                        class="altumcode-emoji-feedback-emoji" data-type="excited" loading="lazy" />
                                </div>

                                <a href="/demo/" class="altumcode-site">⚡️ 66socialproof</a>
                            </div>
                        </div>
                    </div>

                </label>









                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select value="Cookie Notification" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-cookie"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Cookie Notification</div>

                            <p class="text-muted text-center">Notify your users that you are using cookies on your
                                site.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-cookie-notification-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-cookie-notification-content">

                                <div class="altumcode-cookie-notification-header">
                                    <img src="https://img.icons8.com/plasticine/2x/cookie.png"
                                        class="altumcode-cookie-notification-image" alt="" loading="lazy" />

                                    <p class="altumcode-cookie-notification-description" style="color: #000">
                                        This website uses cookies to ensure you get the best experience on our website.
                                        <span class="altumcode-cookie-notification-url"><a href="">Learn
                                                More</a></span>
                                    </p>

                                    <div class="altumcode-cookie-notification-close">
                                        <button class="altumcode-close" style="color: gray;">×</button>
                                    </div>
                                </div>

                                <button type="button" class="altumcode-cookie-notification-button"
                                    style="background: #000;color: #fff">Okay</button>

                                <a href="/" class="altumcode-site">⚡️ 66socialproof</a>
                            </div>
                        </div>
                    </div>

                </label>










                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select  value="Score Feedback" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i
                                        class="fa fa-fw fa-sort-numeric-up"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Score Feedback</div>

                            <p class="text-muted text-center">The easiest way for your users to give you a score
                                feedback.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-score-feedback-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-score-feedback-content">
                                <div class="altumcode-score-feedback-header">
                                    <p class="altumcode-score-feedback-title" style="color: #000">How'd you like our
                                        website?</p>

                                    <button class="altumcode-close" style="color: gray;">×</button>
                                </div>

                                <div class="altumcode-score-feedback-scores">
                                    <button type="button" class="altumcode-score-feedback-button" data-score="1"
                                        style="background: #000;color: #fff">1</button>
                                    <button type="button" class="altumcode-score-feedback-button" data-score="2"
                                        style="background: #000;color: #fff">2</button>
                                    <button type="button" class="altumcode-score-feedback-button" data-score="3"
                                        style="background: #000;color: #fff">3</button>
                                    <button type="button" class="altumcode-score-feedback-button" data-score="4"
                                        style="background: #000;color: #fff">4</button>
                                    <button type="button" class="altumcode-score-feedback-button" data-score="5"
                                        style="background: #000;color: #fff">5</button>
                                </div>

                                <p class="altumcode-score-feedback-description" style="color: #000">Rate from 1 to 5. 5
                                    being excellent.</p>

                                <a href="demo/" class="altumcode-site">⚡️ 66socialproof</a>
                            </div>
                        </div>
                    </div>

                </label>


                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model="notification.select" value="Request Collector" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-user-plus"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Request Collector</div>

                            <p class="text-muted text-center">Collecting leads has never been easier with the request
                                collector.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-request-collector-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-request-collector-content">
                                <div class="altumcode-request-collector-header">
                                    <img src="https://img.icons8.com/cotton/2x/online-support.png"
                                        class="altumcode-request-collector-image" loading="lazy" />

                                    <div class="altumcode-request-collector-header-text">
                                        <p class="altumcode-request-collector-title" style="color: #000">John</p>
                                        <p class="altumcode-request-collector-description" style="color: #000">Support
                                            Team</p>
                                    </div>

                                    <div class="altumcode-request-collector-close">
                                        <button class="altumcode-close" style="color: gray;">×</button>
                                    </div>
                                </div>

                                <p class="altumcode-request-collector-content-title" style="color: #000">Any questions?
                                </p>
                                <p class="altumcode-request-collector-content-description" style="color: #000">Let us
                                    know and we will get back to you!</p>

                                <div>
                                    <div class="altumcode-request-collector-form" id="altumcode-request-collector-form"
                                        name="" action="" method="POST" role="form">
                                        <div class="altumcode-request-collector-row">
                                            <input type="text" class="" name="input"
                                                placeholder="Valid Phone Number" aria-label="Valid Phone Number" />

                                            <button type="submit" name="button"
                                                style="color: #fff; background: #000">Call me back ⚡️</button>
                                        </div>

                                    </div>

                                    <a href="/demo/" class="altumcode-site">⚡️
                                        66socialproof</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </label>

                <label class="col-12 col-md-6 col-lg-4 mb-3 mb-md-4 custom-radio-box mb-3">

                    <input type="radio" name="type" v-model=notification.select  value="Countdown Collector" class="custom-control-input"
                        required="required">

                    <div class="card zoomer h-100">
                        <div class="card-body">
                            <div class="mb-3 text-center">
                                <span class="custom-radio-box-main-icon"><i class="fa fa-fw fa-clock"></i></span>
                            </div>

                            <div class="card-title font-weight-bold text-center">Countdown Collector</div>

                            <p class="text-muted text-center">Create urgency/FOMO with a countdown timer and an input
                                for lead generation.</p>
                        </div>
                    </div>

                    <div class="preview" style="display: none">
                        <div role="dialog"
                            class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-countdown-collector-wrapper"
                            style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                            <div class="altumcode-countdown-collector-content">
                                <div class="altumcode-countdown-collector-header">
                                    <p class="altumcode-countdown-collector-title" style="color: #000">Building a
                                        website 💻</p>

                                    <button class="altumcode-close" style="color: gray;">×</button>
                                </div>
                                <p class="altumcode-countdown-collector-description" style="color: #000">Free Webinar
                                    by us.</p>

                                <p class="altumcode-countdown-collector-content-title" style="color: #000">Hurry up!
                                    Registrations are closing soon.</p>

                                <div class="altumcode-countdown-collector-timer">
                                    <input type="hidden" name="end_date" value="1649085207" />

                                    <div class="altumcode-countdown-collector-timer-block">
                                        <div class="altumcode-countdown-collector-time"
                                            style="color: #fff;background: #000" data-type="days">0</div>
                                        <p class="altumcode-countdown-collector-time-text">days</p>
                                    </div>

                                    <div class="altumcode-countdown-collector-timer-block">
                                        <div class="altumcode-countdown-collector-time"
                                            style="color: #fff;background: #000" data-type="hours">4</div>
                                        <p class="altumcode-countdown-collector-time-text">hours</p>
                                    </div>

                                    <div class="altumcode-countdown-collector-timer-block">
                                        <div class="altumcode-countdown-collector-time"
                                            style="color: #fff;background: #000" data-type="minutes">59</div>
                                        <p class="altumcode-countdown-collector-time-text">minutes</p>
                                    </div>

                                    <div class="altumcode-countdown-collector-timer-block">
                                        <div class="altumcode-countdown-collector-time"
                                            style="color: #fff;background: #000" data-type="seconds">59</div>
                                        <p class="altumcode-countdown-collector-time-text">seconds</p>
                                    </div>
                                </div>

                                <div>
                                    <div class="altumcode-countdown-collector-form"
                                        id="altumcode-countdown-collector-form" name="" action="" method="POST"
                                        role="form">
                                        <div class="altumcode-countdown-collector-row">
                                            <input type="text" class="" name="input"
                                                placeholder="Valid Email" aria-label="Valid Email" />

                                            <button type="submit" name="button"
                                                style="color: #fff; background: #000">Sign up️</button>
                                        </div>

                                    </div>

                                    <a href="demo/" class="altumcode-site">⚡️
                                        66socialproof</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </label>



            </div>

            <div class="mt-4"> 
                <button type="submit"   @click ="createNotification();selectNotification(index);" class="btn btn-block btn-lg btn-primary">Create</button>
            </div>
         
        </div>

        {{-- @click ="createNotification();selectNotification(index);" --}}
    
       

    <footer class="footer ">

        <div class="container d-print-none">
            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                <div class="mb-3 mb-lg-0">
                    <a class="h5" href="">
                        <img src="uploads/logo/365a9619f7af70e14acf8538d0d8c5d8.png" class="mb-2 footer-logo"
                            alt="Website Logo" />
                    </a>
                    <div>Copyright © 2022 66socialproof Demo.</div>
                </div>

                <div class="d-flex flex-column flex-lg-row">

                    <div class="mb-2 ml-lg-3">
                        <button type="button" data-choose-theme-style="dark"
                            class="btn btn-link text-decoration-none p-0 d-none">
                            <i class="fa fa-fw fa-sm fa-moon mr-1"></i> Switch to Dark Mode </button>
                        <button type="button" data-choose-theme-style="light"
                            class="btn btn-link text-decoration-none p-0 ">
                            <i class="fa fa-fw fa-sm fa-sun mr-1"></i> Switch to Light Mode </button>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg mb-3">
                    <ul class="list-style-none d-flex flex-column flex-lg-row flex-wrap m-0">


                        <li class="mb-2 mr-lg-3"><a href="page/terms-of-service" target="_self">Terms of Service</a>
                        </li>
                        <li class="mb-2 mr-lg-3"><a href="page/create-campaign" target="_self">How to create a
                                campaign</a></li>
                        <li class="mb-2 mr-lg-3"><a href="page/create-notification" target="_self">How to create a
                                notification</a></li>
                        <li class="mb-2 mr-lg-3"><a href="page/install-script" target="_self">How to install the
                                script</a></li>
                    </ul>
                </div>
                <tr v-for="(notification, index) in notifications"> 

                    <td>@{{notification.name}}
                    <p>@{{notification.title}}</p></td>
                </tr>

                <div class="col-12 col-lg-auto">
                    <div class="d-flex flex-wrap">
                        <a href="https://youtube.com/altumcode" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank"
                            data-toggle="tooltip" title="YouTube"><i class="fab fa-youtube fa-fw fa-lg"></i></a>
                        <a href="https://facebook.com/altumcode" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank"
                            data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook fa-fw fa-lg"></i></a>
                        <a href="https://twitter.com/altumcode" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank"
                            data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-fw fa-lg"></i></a>
                        <a href="https://instagram.com/altumcode" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank"
                            data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-fw fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <textarea style="display:none" id="campaigns" cols="30" rows="10">{{ json_encode($campaign) }}</textarea>
        <textarea style="display:none" id="campaign_id" cols="30" rows="10">{{ json_encode($campaign->id) }}</textarea>
             <textarea style="display:none" id="notifications" cols="30" rows="10">{{ json_encode($notifications ?? '') }}</textarea>
             <textarea style="display:none" id="create-url" cols="30" rows="10">{{ route('notification.create') }}</textarea>
            <textarea style="display:none" id="update-url" cols="30" rows="10">{{ route('notification.update') }}</textarea> 
         


        </main>


            
    </footer>

    <script src="https://66socialproof.com/demo/themes/altum/assets/js/libraries/popper.min.js?v=1600"></script>
    <script src="https://66socialproof.com/demo/themes/altum/assets/js/libraries/bootstrap.min.js?v=1600"></script>
   
    <script src="https://66socialproof.com/demo/themes/altum/assets/js/libraries/fontawesome.min.js?v=1600"></script>
    <script src="https://66socialproof.com/demo/themes/altum/assets/js/libraries/fontawesome-solid.min.js?v=1600"></script>
    <script src="themes/altum/assets/js/libraries/fontawesome-brands.modified.js?v=1600">
    </script>


<script src="{{asset('app/vue.js')}}"></script>
{{-- <script src="{{asset('app/axios.js')}}"></script>  --}}
  {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
  {{-- <script src="{{ asset('app/campaign.js') }}"></script> --}}
  <script src="{{ asset('app/notification.js') }}"></script>

</body>

</html>
