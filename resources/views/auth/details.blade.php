<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>Campaign - Fardeen - 66socialproof Demo</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta charset="UTF-8">
    
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

        
        <main id="app">
            
<header class="header pb-0">
    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="custom-breadcrumbs small">
                <li>
                    <a href="/campaigns">Campaigns</a><i class="fa fa-fw fa-angle-right"></i>
                </li>
                <li class="active" aria-current="page">Campaign</li>
            </ol>
        </nav>

        
        <div class="row">
            <div class="col-auto">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAMAAABHPGVmAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAEJQTFRFAAAAs7n4Nz2ANz2As7n4aXXyNz2AaXXyaXXyaXXyaXXyaXTyaXTyaXXyaXXyaHTyaXXxaHXxaXXyaXXyNz2ANz2ATsNu1AAAABZ0Uk5TAH//f///kN1t5Aht5Hfl5OTkbu6IbobqhocAAAQ1SURBVHhe7dpJYtswDAVQObIaW06ajve/ajmAJID/OXhde5OaIvEEcJDSdtten1cFXhVYrsCF9Xwjn30njW9X8sGQV2zaNhJu3zamLBnblSmIBIMqiLCbDr2wGZBkMAUQDBbGxV5wwSNiEMUjECrdXOrlLzmkGqg4xAfKBciIVyyiDFAs0jEEcYpBjOEVg/SMglhFI85wika6RkWMohAwrKKQvtEQrTSEGEZpyMBQiFIqQg2tVGRkaKQpBekYSinI0DBIVQTpGk0RZGxYpCgZGRhVycjEcIgoCRkaRUnIzPBIHrBgiLJkAJKUeR7lTF7JQw7IskZK8tNa5YMvPMUWalVOYYOEXGbzIYdreFbO56Me9Ra5XiZzXowwL9M5T33LvtM/92P5842NbzchfyKd9m3ZOOjbxQISavUEwpQ5EueDIe+s8Qid8U1piqQ5Z/FurDEiqMyQvK5IvPtJGo+EgDJBZO2SeA+aXka8MkbK/kDk4xwhThkidQ8icuMTJZm4io2Qts8BuZ8TxOQyQJqBlQmJYGO8lRZPreQ+ogyIFxOBxpSuiteULqINiPeIwz6/QxUN0irWQ4zhkZTItp23OzAmXsmlg1jDI3FGOoyNJwpHnOGQr5wIZVy8rFDEGw6piQjzQxXNx0uKb+TvDKb0MiNt5HlrDMSLCjTSdwaD2EQkm7IEIF5cY9BI3xk0Ek4t8ikrjVzaEYH5iMM0QhKRbH7azVg9DIktGfm40QzCxYe+BZLJhiH75bpz5jQ7kiCkXKOJp9mYRPTZJR6deKbUgmA2NhFEOkuYKKrqPhv3PuHL1d2MqNjNqOfGJeIzGRwroBjkOFQ2/sXIZpIN3Cfymjo86o+jzI1PxGYiRhexK9llEr++/4o3bZdWaNaZFKOPGIUgKR4k8uTj18xLD/Ez8vSLhFY6CCbSMqm14kd9+w2lzn4HwUQqoo3BnESrKBw5v7C9nSXtXidIUTBYXEgkEcnE5MEeWuoOai4UOX+T5pSJM2aZSMVItOP4ZK3MmCOpYizcwRKJ5fJ5zMuVK0YR2siMhUxixWg82kjyWMokKDQebfxj103+Jut6/OPyd3y9Xd0v7m9M0teV0ZcrfbsgQ8M7A1NIT98UhsFTzPfJ38O62pjCe+vWeGvqhBkMiGs3XMZcBmPypTQkzh++ormxaX/ENlBmSB6QFslEyXswxfPKBJHuCRkrss9zPKeMkdI5IyOlnCUSzypDpHYVpK/U86rEM8oIaR0L0lPamVjjaWWAqG4V4Uoz1FmohvcRfSsNYYoy9IHbAnQRU1SFoKINc6rXED3EGGkz9ubFGPbRUYJ0EGtYxOZiDfd8kjAccYZDtOIMh8jep4g3PNIUb3gkKwwBA5CigAFIUgiCBiJZQQORqCBCDIJEhRgECQogzGDIG//vCxAvNKz9cwcb+Wp7VeA/rMA/7zA8L458uGoAAAAASUVORK5CYII=" class="campaign-big-avatar rounded-circle" alt="" />
            </div>

            <div class="col text-truncate">
                <h1 class="h2 text-truncate"><span class="underline">{{ $campaign['name']}}</span></h1>

                <div class="d-flex align-items-center text-muted">
                    <img src="https://external-content.duckduckgo.com/ip3/fxpatternpro.com.ico" class="img-fluid icon-favicon mr-1" />
                    <div class="d-inline-block text-truncate" >{{ $campaign['domain'] }}</div>
                </div>
            </div> 

            <div class="col-auto">
                <div class="d-flex align-items-center">
                    <div class="custom-control custom-switch mr-3" data-toggle="tooltip" title="Change the status">
                        <input
                                type="checkbox"
                                class="custom-control-input"
                                id="campaign_is_enabled_300"
                                data-row-id="300"
                                onchange="ajax_call_helper(event, 'campaigns-ajax', 'is_enabled_toggle')"
                            checked="checked"                        >
                        <label class="custom-control-label clickable" for="campaign_is_enabled_300"></label>
                    </div>

                    <div class="dropdown">
                        <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple" data-toggle="dropdown" data-boundary="viewport">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="campaign/300" class="dropdown-item"><i class="fa fa-fw fa-sm fa-server mr-2"></i> View</a>
                            <a href="/campaign/300/statistics" class="dropdown-item"><i class="fa fa-fw fa-sm fa-chart-bar mr-2"></i> Statistics</a>

                            <a href="#" data-toggle="modal" data-target="#update_campaign" data-campaign-id="300" data-name="Fardeen" data-domain="fxpatternpro.com" data-include-subdomains="1" class="dropdown-item"><i class="fa fa-fw fa-sm fa-pencil-alt mr-2"></i> Edit</a>

                            <a
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#campaign_pixel_key"
                                    data-pixel-key="4isv5kmm1reew50a7r4gx74pl0hc088j"
                                    class="dropdown-item"
                            ><i class="fa fa-fw fa-sm fa-code mr-2"></i> Install Pixel</a>

                                                            <a href="#" data-toggle="modal" data-target="#custom_branding_campaign" data-campaign-id="300" data-branding-name="" data-branding-url="" class="dropdown-item"><i class="fa fa-fw fa-sm fa-random mr-2"></i> Custom Branding</a>
                                                        <a href="#" data-toggle="modal" data-target="#campaign_duplicate_modal" data-campaign-id="300" class="dropdown-item"><i class="fa fa-fw fa-sm fa-copy mr-2"></i> Duplicate</a>

                            <a href="#" data-toggle="modal" data-target="#campaign_delete_modal" data-campaign-id="300" class="dropdown-item"><i class="fa fa-fw fa-sm fa-trash-alt mr-2"></i> Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="mt-5 nav nav-custom">
            <li class="nav-item">
                <a href="/demo/campaign/300" class="nav-link active">
                    <i class="fa fa-fw fa-sm fa-bell mr-1"></i> Notifications                </a>
            </li>

            <li class="nav-item">
                <a href="/demo/campaign/300/statistics" class="nav-link ">
                    <i class="fa fa-fw fa-sm fa-chart-bar mr-1"></i> Statistics                </a>
            </li>
        </ul>
    </div>
</header>

<section class="container">
    
    
<div class="row mt-5">
    <div class="col-12 col-lg mb-3 mb-lg-0">
        <h2 class="h3 m-0">Notifications</h2>
    </div>

    <div class="col-12 col-lg-auto d-flex">
        <div>
                            <a :href="'/notificationcreate/'+ {{$campaign['id']}}" class="btn btn-primary"><i class="fa fa-fw fa-sm fa-plus"></i> Create notification</a>
                    </div>

        <div class="ml-3">
            <div class="dropdown">
                <button type="button" class="btn btn-outline-secondary filters-button dropdown-toggle-simple" data-toggle="dropdown" data-boundary="viewport"><i class="fa fa-fw fa-sm fa-filter"></i></button>

                <div class="dropdown-menu dropdown-menu-right filters-dropdown">
                    <div class="dropdown-header d-flex justify-content-between">
                        <span class="h6 m-0">Filters</span>

                                            </div>

                    <div class="dropdown-divider"></div>

                    <form action="" method="get" role="form">
                        <div class="form-group px-4">
                            <label for="filters_search" class="small">Search</label>
                            <input type="search" name="search" id="filters_search" class="form-control form-control-sm" value="" />
                        </div>

                        <div class="form-group px-4">
                            <label for="filters_search_by" class="small">Search by</label>
                            <select name="search_by" id="filters_search_by" class="form-control form-control-sm">
                                <option value="name" >Name</option>
                            </select>
                        </div>

                        <div class="form-group px-4">
                            <label for="filters_is_enabled" class="small">Status</label>
                            <select name="is_enabled" id="filters_is_enabled" class="form-control form-control-sm">
                                <option value="">All</option>
                                <option value="1" >Active</option>
                                <option value="0" >Disabled</option>
                            </select>
                        </div>

                        <div class="form-group px-4">
                            <label for="filters_type" class="small">Type</label>
                            <select name="type" id="filters_type" class="form-control form-control-sm">
                                <option value="">All</option>
                                
                                    
                                    <option value="INFORMATIONAL" >
                                        Informational                                    </option>
                                
                                    
                                    <option value="COUPON" >
                                        Coupon                                    </option>
                                
                                    
                                    <option value="LIVE_COUNTER" >
                                        Live Counter                                    </option>
                                
                                    
                                    <option value="EMAIL_COLLECTOR" >
                                        Email Collector                                    </option>
                                
                                    
                                    <option value="CONVERSIONS" >
                                        Conversions                                    </option>
                                
                                    
                                    <option value="CONVERSIONS_COUNTER" >
                                        Conversions Counter                                    </option>
                                
                                    
                                    <option value="VIDEO" >
                                        Video                                    </option>
                                
                                    
                                    <option value="SOCIAL_SHARE" >
                                        Social Share                                    </option>
                                
                                    
                                    <option value="REVIEWS" >
                                        Reviews                                    </option>
                                
                                    
                                    <option value="EMOJI_FEEDBACK" >
                                        Emoji Feedback                                    </option>
                                
                                    
                                    <option value="COOKIE_NOTIFICATION" >
                                        Cookie Notification                                    </option>
                                
                                    
                                    <option value="SCORE_FEEDBACK" >
                                        Score Feedback                                    </option>
                                
                                    
                                    <option value="REQUEST_COLLECTOR" >
                                        Request Collector                                    </option>
                                
                                    
                                    <option value="COUNTDOWN_COLLECTOR" >
                                        Countdown Collector                                    </option>
                                
                                                                </select>
                        </div>

                        <div class="form-group px-4">
                            <label for="filters_order_by" class="small">Order by</label>
                            <select name="order_by" id="filters_order_by" class="form-control form-control-sm">
                                <option value="datetime" >Created datetime</option>
                                <option value="name" >Name</option>
                            </select>
                        </div>

                        <div class="form-group px-4">
                            <label for="filters_order_type" class="small">Order type</label>
                            <select name="order_type" id="filters_order_type" class="form-control form-control-sm">
                                <option value="ASC" >Ascending</option>
                                <option value="DESC" selected="selected">Descending</option>
                            </select>
                        </div>

                        <div class="form-group px-4">
                            <label for="filters_results_per_page" class="small">Results per page</label>
                            <select name="results_per_page" id="filters_results_per_page" class="form-control form-control-sm">
                                                                    <option value="10" >10</option>
                                                                    <option value="25" >25</option>
                                                                    <option value="50" selected="selected">50</option>
                                                                    <option value="100" >100</option>
                                                                    <option value="250" >250</option>
                                                                    <option value="500" >500</option>
                                                            </select>
                        </div>

                        <div class="form-group px-4 mt-4">
                            <button type="submit" name="submit" class="btn btn-sm btn-primary btn-block">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


{{-- 
<div class="table-responsive table-custom-container mt-3">
<table class="table table-custom">
<thead>
<tr>
    <th>Notification</th>
    <th class="d-none d-md-table-cell">Trigger</th>
    <th class="d-none d-md-table-cell">Duration</th>
    <th>Status</th>
    <th></th>
</tr> --}}
</thead>
<tbody>
    <div class="table-responsive table-custom-container mt-3">
        <table class="table table-custom">
            <thead>
            <tr>
                <th>Notification</th>
                <th class="d-none d-md-table-cell">Trigger</th>
                <th class="d-none d-md-table-cell">Duration</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

                            
                <tr>
                    <td class="text-nowrap">
                        <div class="d-flex flex-column">
                            <a href="notification/1147">My new notification</a>

                            <div class="text-muted">
                                <i class="fa fa-fw fa-piggy-bank fa-sm mr-1"></i> Coupon                            </div>
                        </div>
                    </td>
                    <td class="text-nowrap d-none d-md-table-cell">
                        <div class="text-muted d-flex flex-column">

                            <span>2 <small>seconds</small></span><small>Delay</small>
                        </div>
                    </td>
                    <td class="text-nowrap d-none d-md-table-cell">
                        <span>5 <small>seconds</small></span>
                    </td>
                    <td class="text-nowrap">
                        <div class="d-flex">
                            <div class="custom-control custom-switch" data-toggle="tooltip" title="Change the status">
                                <input
                                        type="checkbox"
                                        class="custom-control-input"
                                        id="notification_is_enabled_1147"
                                        data-row-id="1147"
                                        onchange="ajax_call_helper(event, 'notifications-ajax', 'is_enabled_toggle')"
                                                                    >
                                <label class="custom-control-label clickable" for="notification_is_enabled_1147"></label>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <div class="dropdown">
                                <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple" data-toggle="dropdown" data-boundary="viewport">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item"><i class="fa fa-fw fa-sm fa-pencil-alt mr-2"></i> Edit</a>
                                    <a href="" class="dropdown-item"><i class="fa fa-fw fa-sm fa-chart-bar mr-2"></i> Statistics</a>
                                    <a href="#" data-toggle="modal" data-target="#notification_duplicate_modal" data-notification-id="1147" class="dropdown-item"><i class="fa fa-fw fa-sm fa-copy mr-2"></i> Duplicate</a>
                                    <a href="#" data-toggle="modal" data-target="#notification_delete_modal" data-notification-id="1147" class="dropdown-item"><i class="fa fa-fw fa-sm fa-trash-alt mr-2"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
              
                
    <tr v-for="(notification, index) in notifications">

        <td class="text-nowrap">
            <div class="d-flex flex-column">
                <a href="">@{{ notification.name }}</a>

                <div class="text-muted">
                    <i class="fa fa-fw fa-info-circle fa-sm mr-1"></i> @{{ notification.select }}                          </div>
            </div>
        </td>
        <td class="text-nowrap d-none d-md-table-cell">
            <div class="text-muted d-flex flex-column">

                <span>2 <small>seconds</small></span><small>Delay</small>
            </div>
        </td>
        <td class="text-nowrap d-none d-md-table-cell">
            <span>Forever</span>
        </td>
        <td class="text-nowrap">
            <div class="d-flex">
                <div class="custom-control custom-switch" data-toggle="tooltip" title="Change the status">
                    <input
                            type="checkbox"
                            class="custom-control-input"
                            id="notification_is_enabled_1121"
                            data-row-id="1121"
                            >
                    <label class="custom-control-label clickable" for="notification_is_enabled_1121"></label>
                </div>
            </div>
        </td>
        <td>
            <div class="d-flex justify-content-end">
                <div class="dropdown">
                    <button type="button" class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple" data-toggle="dropdown" data-boundary="viewport">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="fa fa-fw fa-sm fa-pencil-alt mr-2"></i> Edit</a>
                        <a href="#" class="dropdown-item"><i class="fa fa-fw fa-sm fa-chart-bar mr-2"></i> Statistics</a>
                        <a href="#" data-toggle="modal" data-target="#notification_duplicate_modal" data-notification-id="1121" class="dropdown-item"><i class="fa fa-fw fa-sm fa-copy mr-2"></i> Duplicate</a>
                        <a href="#" data-toggle="modal" data-target="#notification_delete_modal" data-notification-id="1121" class="dropdown-item"><i class="fa fa-fw fa-sm fa-trash-alt mr-2"></i> Delete</a>
                    </div>
                </div>
            </div>
        </td>
    </tr>

</tbody>
</table>
</div>

<div class="mt-3">
<div class="d-flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center">
<div class="">
<p class="text-muted">
Showing 1-1 out of 1 results.        </p>
</div>

<div class="">
<ul class="pagination">


        </ul>
</div>
</div>


</div>

</main>
</section>
{{-- <textarea style="display:none" id="campaigns" cols="30" rows="10">{{ json_encode($campaigns) }}</textarea> --}}
{{-- <textarea style="display:none" id="campaign_id" cols="30" rows="10">{{ $campaign->id }}</textarea> --}}
{{-- <textarea style="display:none" id="update-url" cols="30" rows="10">{{ route('notification.update') }}</textarea>
<textarea style="display:none" id="delete-url" cols="30" rows="10">{{ route('notification.delete') }}</textarea> --}}
<textarea style="display:none" id="notifications" cols="30" rows="10">{{ json_encode($notifications) }}</textarea>


    

        
        <footer class="footer ">
            
<div class="container d-print-none">
    <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
        <div class="mb-3 mb-lg-0">
            <a class="h5" href="">
                                    <img src="uploads/logo/365a9619f7af70e14acf8538d0d8c5d8.png" class="mb-2 footer-logo" alt="Website Logo" />
                            </a>
            <div>Copyright © 2022 66socialproof Demo.</div>
        </div>

        <div class="d-flex flex-column flex-lg-row">
            
                            <div class="mb-2 ml-lg-3">
                    <button type="button" data-choose-theme-style="dark" class="btn btn-link text-decoration-none p-0 d-none">
                        <i class="fa fa-fw fa-sm fa-moon mr-1"></i> Switch to Dark Mode                    </button>
                    <button type="button" data-choose-theme-style="light" class="btn btn-link text-decoration-none p-0 ">
                        <i class="fa fa-fw fa-sm fa-sun mr-1"></i> Switch to Light Mode                    </button>
                </div>

                                    </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg mb-3">
            <ul class="list-style-none d-flex flex-column flex-lg-row flex-wrap m-0">
                
                
                                                            <li class="mb-2 mr-lg-3"><a href="page/terms-of-service" target="_self">Terms of Service</a></li>
                                            <li class="mb-2 mr-lg-3"><a href="page/create-campaign" target="_self">How to create a campaign</a></li>
                                            <li class="mb-2 mr-lg-3"><a href="page/create-notification" target="_self">How to create a notification</a></li>
                                            <li class="mb-2 mr-lg-3"><a href="/page/install-script" target="_self">How to install the script</a></li>
                                                </ul>
        </div>


        <div class="col-12 col-lg-auto">
            <div class="d-flex flex-wrap">
                                                            <a href="https://youtube.com/altumcode" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank" data-toggle="tooltip" title="YouTube"><i class="fab fa-youtube fa-fw fa-lg"></i></a>
                                                                                <a href="https://facebook.com/altumcode" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook fa-fw fa-lg"></i></a>
                                                                                <a href="https://twitter.com/altumcode" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter fa-fw fa-lg"></i></a>
                                                                                <a href="https://instagram.com/altumcode" class="mr-2 mr-lg-0 ml-lg-2 mb-2" target="_blank" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram fa-fw fa-lg"></i></a>
                                                                                                                                                                                                </div>
        </div>
    </div>
</div>

        </footer>
       
        
<div class="modal fade" id="campaign_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-muted mr-2"></i>
                        Delete campaign                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form name="campaign_delete_modal" method="post" action="https://66socialproof.com/demo/campaign/delete" role="form">
                    <input type="hidden" name="token" value="001034df34f8ee392f6eca41030d9f57" required="required" />
                    <input type="hidden" name="campaign_id" value="" />

                    <p class="text-muted">By deleting the campaign, all the data associated with the campaign will be lost. This action cannot be undone.</p>

                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-danger">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="campaign_pixel_key" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Install Pixel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="tab-content">
                    <p class="text-muted">Copy and paste the following JS Code Snippet before the end of the <code>head</code> tag of your website.</p>

                    <pre id="pixel_key_html" class="pre-custom rounded"></pre>

                    <div class="mt-4">
                        <button type="button" class="btn btn-block btn-primary" data-clipboard-target="#pixel_key_html" data-copied="Copied!">Copy Pixel</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="update_campaign" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit campaign</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="update_campaign" method="post" role="form">
                    <input type="hidden" name="token" value="001034df34f8ee392f6eca41030d9f57" required="required" />
                    <input type="hidden" name="request_type" value="update" />
                    <input type="hidden" name="campaign_id" value="" />

                    <div class="notification-container"></div>

                    <div class="form-group">
                        <label><i class="fa fa-fw fa-sm fa-signature text-muted mr-1"></i> Name</label>
                        <input type="text" class="form-control" name="name"  />
                    </div>

                    <div class="form-group">
                        <label><i class="fa fa-fw fa-sm fa-network-wired text-muted mr-1"></i> Domain</label>
                        <input type="text" class="form-control" name="domain" placeholder="ex: domain.com or subdomain.domain.com" required="required" />
                        <small class="form-text text-muted">The domain name of the website where the campaign is going to run.</small>
                        <small class="form-text text-muted">Notifications will NOT work on other domains other than what you define here.</small>
                    </div>

                    <div class="custom-control custom-switch">
                        <input
                                type="checkbox"
                                class="custom-control-input"
                                name="include_subdomains"
                                id="campaign_update_include_subdomains"
                        >
                        <label class="custom-control-label clickable" for="campaign_update_include_subdomains">Include Subdomains</label>
                        <small class="form-text text-muted">All the subdomains will match on this campaign as well if checked.</small>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="custom_branding_campaign" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Custom Branding</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="custom_branding_campaign" method="post" role="form">
                    <input type="hidden" name="token" value="001034df34f8ee392f6eca41030d9f57" required="required" />
                    <input type="hidden" name="request_type" value="custom_branding" />
                    <input type="hidden" name="campaign_id" value="" />

                    <div class="notification-container"></div>

                    <div class="form-group">
                        <label for="custom_branding_name"><i class="fa fa-fw fa-sm fa-random text-muted mr-1"></i> Branding Name</label>
                        <input id="custom_branding_name" type="text" class="form-control" name="name" value="" maxlength="128" />
                        <small class="form-text text-muted">Leave empty to have the default site branding.</small>
                    </div>

                    <div class="form-group">
                        <label for="custom_branding_url"><i class="fa fa-fw fa-sm fa-link text-muted mr-1"></i> URL</label>
                        <input id="custom_branding_url" type="url" class="form-control" name="url" value="" maxlength="2048" />
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-primary">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="notification_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-trash-alt text-muted mr-2"></i>
                        Delete notification                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form name="notification_delete_modal" method="post" action="https://66socialproof.com/demo/notification/delete" role="form">
                    <input type="hidden" name="token" value="001034df34f8ee392f6eca41030d9f57" required="required" />
                    <input type="hidden" name="notification_id" value="" />

                    <p class="text-muted">By deleting the notification, all the data associated with the notification will be lost. This action cannot be undone.</p>

                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-danger">Delete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="notification_duplicate_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-copy text-muted mr-2"></i>
                        Duplicate                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <p class="text-muted">Easily duplicate this resource with a click of a button.</p>

                <form name="notification_duplicate_modal" method="post" action="https://66socialproof.com/demo/notification/duplicate" role="form">
                    <input type="hidden" name="token" value="001034df34f8ee392f6eca41030d9f57" required="required" />
                    <input type="hidden" name="notification_id" value="" />

                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="campaign_duplicate_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <div class="d-flex justify-content-between mb-3">
                    <h5 class="modal-title">
                        <i class="fa fa-fw fa-sm fa-copy text-muted mr-2"></i>
                        Duplicate                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <p class="text-muted">Easily duplicate this resource with a click of a button.</p>

                <form name="campaign_duplicate_modal" method="post" action="https://66socialproof.com/demo/campaign/duplicate" role="form">
                    <input type="hidden" name="token" value="001034df34f8ee392f6eca41030d9f57" required="required" />
                    <input type="hidden" name="campaign_id" value="" />

                    <div class="mt-4">
                        <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>




                    <script src="themes/altum/assets/js/libraries/jquery.min.js?v=1600"></script>
                    <script src="themes/altum/assets/js/libraries/popper.min.js?v=1600"></script>
                    <script src="themes/altum/assets/js/libraries/bootstrap.min.js?v=1600"></script>
                    <script src="themes/altum/assets/js/main.js?v=1600"></script>
                    <script src="themes/altum/assets/js/functions.js?v=1600"></script>
                    <script src="themes/altum/assets/js/libraries/fontawesome.min.js?v=1600"></script>
                    <script src="themes/altum/assets/js/libraries/fontawesome-solid.min.js?v=1600"></script>
                    <script src="themes/altum/assets/js/libraries/fontawesome-brands.modified.js?v=1600"></script>
        
   
<script src="themes/altum/assets/js/libraries/clipboard.min.js?v=1600"></script>



   

 
{{-- <script src="{{asset('app/vue.js')}}"></script> --}}
{{-- <script src="{{asset('app/axios.js')}}"></script>  --}}
  {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
  {{-- <script src="{{ asset('app/campaign.js') }}"></script> --}}
  {{-- <script src="{{ asset('app/Details.js') }}"></script> --}}
  <script src="{{ asset('app/notification.js') }}"></script>
    </body>
</html>
