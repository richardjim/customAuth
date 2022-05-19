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
    <link href="themes/altum/assets/css/bootstrap-dark.min1eb2.css?v=1200" id="css_theme_style" rel="stylesheet"
        media="screen,print">
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





    <link href="https://66socialproof.com/demo/uploads/favicon/9c3e51b8336fffdf712f4c3d40b9f1fd.png"
        rel="shortcut icon" />

    <link href="https://66socialproof.com/demo/themes/altum/assets/css/bootstrap-dark.min.css?v=1600"
        id="css_theme_style" rel="stylesheet" media="screen,print">
    <link href="https://66socialproof.com/demo/themes/altum/assets/css/custom.css?v=1600" rel="stylesheet"
        media="screen,print">
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


                                <a class="dropdown-item" href="account-api"><i class="fa fa-fw fa-sm fa-code mr-1"></i>
                                    API</a>

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
                            <a href="">Campaigns</a><i class="fa fa-fw fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="">Campaign</a><i class="fa fa-fw fa-angle-right"></i>
                        </li>
                        <li class="active" aria-current="page">Notification</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col text-truncate">
                        <h1 class="h2 text-truncate"><span class="underline"> {{ $notifications->name }} </span>
                        </h1>

                        <div class="row">
                            <div class="col-auto text-truncate">
                                <div class="d-flex align-items-center text-muted">
                                    <img src="https://external-content.duckduckgo.com/ip3/riyad.rf.gd.ico"
                                        class="img-fluid icon-favicon mr-1" />
                                    <div class="d-inline-block text-truncate">{{ $campaign->domain }}</div>
                                </div>
                            </div>

                            <div class="col">
                                <span class="text-muted">

                                    <i class="fa fa-fw fa-info-circle fa-sm mr-1"></i> {{ $notifications->select }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="d-flex align-items-center">
                            <div class="custom-control custom-switch mr-3" data-toggle="tooltip"
                                title="Change the status">
                                <input type="checkbox" class="custom-control-input" id="campaign_is_enabled_1107"
                                    data-row-id="1107"
                                    onchange="ajax_call_helper(event, 'notifications-ajax', 'is_enabled_toggle')">
                                <label class="custom-control-label clickable" for="campaign_is_enabled_1107"></label>
                            </div>

                            <div class="dropdown">
                                <button type="button"
                                    class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                    data-toggle="dropdown" data-boundary="viewport">
                                    <i class="fa fa-fw fa-ellipsis-v"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item"><i class="fa fa-fw fa-sm fa-pencil-alt mr-2"></i>
                                        Edit</a>
                                    <a href="/statistics" class="dropdown-item"><i
                                            class="fa fa-fw fa-sm fa-chart-bar mr-2"></i> Statistics</a>
                                    <a href="#" data-toggle="modal" data-target="#notification_duplicate_modal"
                                        data-notification-id="1107" class="dropdown-item"><i
                                            class="fa fa-fw fa-sm fa-copy mr-2"></i> Duplicate</a>
                                    <a href="#" data-toggle="modal" data-target="#notification_delete_modal"
                                        data-notification-id="1107" class="dropdown-item"><i
                                            class="fa fa-fw fa-sm fa-trash-alt mr-2"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <ul class="mt-5 nav nav-custom">
                    <li class="nav-item">
                        <a href="/notification/1107/settings" class="nav-link active">
                            <i class="fa fa-fw fa-sm fa-cogs mr-1"></i> Settings </a>
                    </li>

                    <li class="nav-item">
                        <a href="/notification/1107/statistics" class="nav-link ">
                            <i class="fa fa-fw fa-sm fa-chart-bar mr-1"></i> Statistics </a>
                    </li>

                </ul>
            </div>
        </header>





        <section class="container">
            <div class="mt-5 mb-3 d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                <div>
                    <h2 class="h3">Preview</h2>
                    <p class="text-muted">Overall preview of how it would look like.</p>
                </div>

                <div id="notification_preview" class="notification-preview-informational">





                    <div role="dialog"
                        class="altumcode-wrapper altumcode-wrapper-rounded altumcode-wrapper-shadow  altumcode-informational-wrapper"
                        style='font-family: inherit!important;background-color: #fff;border-width: 0px;border-color: #000;;'>
                        <div style="display: none" class="altumcode-informational-content">
                            <img src="" class="altumcode-informational-image" alt="" loading="lazy" />

                            <div>
                                <div class="altumcode-informational-header">
                                    <p class="altumcode-informational-title" style="color: #000">Flash sale!</p>

                                    <button class="altumcode-close" style="color: gray;">×</button>
                                </div>
                                <p class="altumcode-informational-description" style="color: #000">Limited sale until
                                    tonight, right now!</p>


                                <a href="demo/" class="altumcode-site">⚡️ 66socialproof</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-5 mb-3 d-flex justify-content-between">
                <h2 class="h3">Settings</h2>
            </div>

            <div class="row">
                <div class="col-12 col-md-3">
                    <ul class="nav flex-md-column nav-pills mb-3" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="tab_basic_link" data-toggle="pill" href="#tab_basic"
                                role="tab" aria-controls="tab_basic" aria-selected="true">
                                <i class="fa fa-fw fa-sm fa-cog mr-1"></i> Basic </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab_triggers_link" data-toggle="pill" href="#tab_triggers"
                                role="tab" aria-controls="tab_triggers" aria-selected="false">
                                <i class="fa fa-fw fa-sm fa-angle-up mr-1"></i> Triggers </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab_display_link" data-toggle="pill" href="#tab_display"
                                role="tab" aria-controls="tab_display" aria-selected="false">
                                <i class="fa fa-fw fa-sm fa-sliders-h mr-1"></i> Display </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="tab_customize_link" data-toggle="pill" href="#tab_customize"
                                role="tab" aria-controls="tab_customize" aria-selected="false">
                                <i class="fa fa-fw fa-sm fa-paint-brush mr-1"></i> Customize </a>
                        </li>


                    </ul>
                </div>
                <div id="update_notification">
                    @csrf
                    <div class="col">


                        <input type="hidden" name="token" value="7c72d16c70dbfcb5b043f0a55333efd5" />

                        <div class="tab-content">
                            {{-- <div class="tab-pane fade show active" id="tab_basic" role="tabpanel"
                                aria-labelledby="tab_basic_link"> --}}

                            <div class="form-group">
                                <label for="settings_name">Notification name</label>
                                <input type="text" id="settings_name" name="name" v-model=notification.name
                                    class="form-control" value="My new notification" maxlength="256"
                                    required="required" />
                            </div>
                            <div class="form-group">
                                <label for="settings_description">Description Message</label>
                                <input type="text" id="settings_description" name="description"
                                    v-model=notification.description class="form-control"
                                    value="Limited sale until tonight, right now!" maxlength="512" />
                            </div>
                            <div class="informational" v-if="notifications.select == 'Informational'">
                                <div class="form-group">
                                    <label for="settings_title">Title Message</label>
                                    <input type="text" id="settings_title" name="title" v-model=notification.title
                                        class="form-control" value="Flash sale!" maxlength="256" />
                                </div>
                                <div class="form-group">
                                    <label for="settings_image">Image URL</label>
                                    <input type="url" id="settings_image" name="image" v-model=notification.image_URL
                                        class="form-control" value="https://img.icons8.com/dusk/2x/sale.png"
                                        maxlength="2048" />
                                    <small class="form-text text-muted">Leave empty for no image. Hint: icons8.com has
                                        a good library of small icons that you can use.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_image_alt">Image Alt</label>
                                    <input type="text" id="settings_image_alt" name="image_alt"
                                        v-model=notification.image_Alt class="form-control" value=""
                                        maxlength="100" />
                                    <small class="form-text text-muted">Image description for accessibility and SEO
                                        purposes.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_url">Notification URL</label>
                                    <input type="url" id="settings_url" name="url" v-model=notification.notification_URL
                                        class="form-control" value="" maxlength="2048" />
                                    <small class="form-text text-muted">The URL you want to user to go to after
                                        clicking the notification. Leave empty for no link.</small>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="settings_url_new_tab"
                                        name="url_new_tab" checked="checked">

                                    <label class="custom-control-label clickable" for="settings_url_new_tab">On click
                                        open on new tab</label>

                                    <div>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>

                            </div>

                            <div v-else-if="notifications.select == 'Coupon'">
                                <div class="form-group">
                                    <label for="settings_title">Title Message</label>
                                    <input type="text" id="settings_title" name="title" class="form-control"
                                        value="35% OFF!" maxlength="256" />
                                </div>
                                <div class="form-group">
                                    <label for="settings_image">Image URL</label>
                                    <input type="url" id="settings_image" name="image" class="form-control"
                                        value="https://img.icons8.com/nolan/2x/cutting-coupon.png" maxlength="2048" />
                                    <small class="form-text text-muted">Leave empty for no image. Hint: icons8.com has
                                        a good library of small icons that you can use.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_image_alt">Image Alt</label>
                                    <input type="text" id="settings_image_alt" name="image_alt" class="form-control"
                                        value="" maxlength="100" />
                                    <small class="form-text text-muted">Image description for accessibility and SEO
                                        purposes.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_coupon_code">Coupon Code</label>
                                    <input type="text" id="settings_coupon_code" name="coupon_code"
                                        class="form-control" value="COUPON20" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_button_url">Button Url</label>
                                    <input type="url" id="settings_button_url" name="button_url" class="form-control"
                                        value="" maxlength="2048" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_button_text">Button Text</label>
                                    <input type="text" id="settings_button_text" name="button_text"
                                        class="form-control" value="Get Coupon" maxlength="128" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_footer_text">Footer Text</label>
                                    <input type="text" id="settings_footer_text" name="footer_text"
                                        class="form-control" value="No, I don't want to save money!"
                                        maxlength="256" />
                                </div>
                            </div>
                            <div v-else-if="notifications.select == 'Live Counter'">
                                <div class="form-group">
                                    <label for="settings_last_activity">Count data from last X minutes</label>
                                    <input type="number" id="settings_last_activity" name="last_activity"
                                        class="form-control" value="15" required="required" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_url">Notification URL</label>
                                    <input type="url" id="settings_url" name="url" class="form-control" value=""
                                        maxlength="2048" />
                                    <small class="form-text text-muted">The URL you want to user to go to after
                                        clicking the notification. Leave empty for no link.</small>
                                </div>
                            </div>
                            <div v-else-if="notifications.select == 'Email Collector'">
                                <div class="form-group">
                                    <label for="settings_email_placeholder">Email Placeholder</label>
                                    <input type="text" id="settings_email_placeholder" name="email_placeholder"
                                        class="form-control" value="Your valid email" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_button_text">Button Text</label>
                                    <input type="text" id="settings_button_text" name="button_text"
                                        class="form-control" value="Sign me up" maxlength="128" />
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input id="settings_show_agreement" name="show_agreement" type="checkbox"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="settings_show_agreement">Show
                                            Agreement</label>
                                        <div><small class="form-text text-muted">Require the user to confirm his
                                                agreement by ticking a checkbox.</small></div>
                                    </div>
                                </div>

                                <div id="agreement">
                                    <div class="form-group">
                                        <label for="settings_agreement_text">Agreement Text</label>
                                        <input type="text" id="settings_agreement_text" name="agreement_text"
                                            class="form-control" value="I read & agree the Privacy Policy"
                                            maxlength="256" />
                                    </div>

                                    <div class="form-group">
                                        <label for="settings_agreement_url">Agreement URL</label>
                                        <input type="url" id="settings_agreement_url" name="agreement_url"
                                            class="form-control" value="" maxlength="2048" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_thank_you_url">Thank you URL</label>
                                    <input type="text" id="settings_thank_you_url" name="thank_you_url"
                                        class="form-control" value="" maxlength="2048" />
                                    <small class="form-text text-muted">The URL the user will be redirected to after
                                        submitting the form. Leave empty to disable the function.</small>
                                </div>
                            </div>
                            <div v-else-if="notifications.select == 'Conversions'">
                                <div class="form-group">
                                    <label for="settings_title">Conversion Title</label>
                                    <input type="text" id="settings_title" name="title" class="form-control"
                                        value="Someone from England" maxlength="256" />
                                    <small class="form-text text-muted">You can insert dynamic variables from your
                                        Conversion Data. Example: If you have a field named <code>full_name</code>, you
                                        can use it as <code>{full_name}</code>.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_description">Conversion Description</label>
                                    <input type="text" id="settings_description" name="description"
                                        class="form-control" value="Signed up for the newsletter." maxlength="512" />
                                    <small class="form-text text-muted">You can insert dynamic variables from your
                                        Conversion Data as mentioned in the Conversion Title.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_image">Image URL</label>
                                    <input type="text" id="settings_image" name="image" class="form-control"
                                        value="https://img.icons8.com/dusk/2x/small-smile.png" />
                                    <small class="form-text text-muted">Leave empty for no image. Hint: icons8.com has
                                        a good library of small icons that you can use.</small>
                                    <small class="form-text text-muted">You can insert dynamic variables from your
                                        Conversion Data as mentioned in the Conversion Title.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_image_alt">Image Alt</label>
                                    <input type="text" id="settings_image_alt" name="image_alt" class="form-control"
                                        value="" maxlength="100" />
                                    <small class="form-text text-muted">Image description for accessibility and SEO
                                        purposes.</small>
                                    <small class="form-text text-muted">You can insert dynamic variables from your
                                        Conversion Data as mentioned in the Conversion Title.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_url">Notification URL</label>
                                    <input type="text" id="settings_url" name="url" class="form-control" value=""
                                        maxlength="2048" />
                                    <small class="form-text text-muted">The URL you want to user to go to after
                                        clicking the notification. Leave empty for no link.</small>
                                    <small class="form-text text-muted">You can insert dynamic variables from your
                                        Conversion Data as mentioned in the Conversion Title.</small>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="settings_url_new_tab"
                                        name="url_new_tab" checked="checked">

                                    <label class="custom-control-label clickable" for="settings_url_new_tab">On click
                                        open on new tab</label>
                                    <div>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_order">Display order</label>
                                    <select id="settings_order" name="order" class="form-control">
                                        <option value="descending" selected="selected">Descending</option>
                                        <option value="random">Random</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="settings_conversions_count">How many conversions to show?</label>
                                    <input type="text" id="settings_conversions_count" name="conversions_count"
                                        class="form-control" value="1" />
                                    <small class="form-text text-muted"></small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_in_between_delay">In between delay</label>
                                    <input type="text" id="settings_in_between_delay" name="in_between_delay"
                                        class="form-control" value="3" />
                                    <small class="form-text text-muted">Written in seconds</small>
                                </div>
                            </div>
                            <div v-else-if="notifications.select == 'Conversions Counter'">
                                <div class="form-group">
                                    <label for="settings_title">Title Message</label>
                                    <input type="text" id="settings_title" name="title" class="form-control"
                                        value="People bought the product" maxlength="256" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_last_activity">Count data from last X hours</label>
                                    <input type="number" id="settings_last_activity" name="last_activity"
                                        class="form-control" value="2" required="required" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_url">Notification URL</label>
                                    <input type="url" id="settings_url" name="url" class="form-control" value=""
                                        maxlength="2048" />
                                    <small class="form-text text-muted">The URL you want to user to go to after
                                        clicking the notification. Leave empty for no link.</small>
                                </div>
                            </div>
                            <div v-else-if="notifications.select == 'Video'">
                                <div class="form-group">
                                    <label for="settings_title">Title Message</label>
                                    <input type="text" id="settings_title" name="title" class="form-control"
                                        value="Demo of the product" maxlength="256" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_video">YouTube Video Embed Url</label>
                                    <input type="url" id="settings_video" name="video" class="form-control"
                                        value="" />
                                    <small class="form-text text-muted">Allowed formats:
                                        https://www.youtube.com/embed/VIDEO_ID or
                                        https://www.youtube.com/watch?v=VIDEO_ID</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_button_url">Button Url</label>
                                    <input type="url" id="settings_button_url" name="button_url" class="form-control"
                                        value="" maxlength="2048" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_button_text">Button Text</label>
                                    <input type="text" id="settings_button_text" name="button_text"
                                        class="form-control" value="Sign up" maxlength="128" />
                                    <small class="form-text text-muted">Leave empty to remove the button
                                        completely.</small>
                                </div>
                            </div>
                            <div v-else-if="notifications.select == 'Social Share'">
                                <div class="form-group">
                                    <label for="settings_title">Title Message</label>
                                    <input type="text" id="settings_title" name="title" class="form-control"
                                        value="Tell your friends" maxlength="256" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_description">Description Message</label>
                                    <input type="text" id="settings_description" name="description"
                                        class="form-control"
                                        value="We appreciate all the shares to support us! Thank you!"
                                        maxlength="512" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_share_url">Share URL</label>
                                    <input type="url" id="settings_share_url" name="share_url" class="form-control"
                                        value="" maxlength="2048" />
                                    <small class="form-text text-muted">Leave empty if you want the URL to be dynamic
                                        to the current page where the notification is shown.</small>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="share_facebook"
                                        name="share_facebook" checked="checked">
                                    <label class="custom-control-label clickable" for="share_facebook"><i
                                            class="fab fa-fw fa-facebook"></i> Facebook Share</label>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="share_twitter"
                                        name="share_twitter" checked="checked">
                                    <label class="custom-control-label clickable" for="share_twitter"><i
                                            class="fab fa-fw fa-twitter"></i> Twitter Share</label>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="share_linkedin"
                                        name="share_linkedin" checked="checked">
                                    <label class="custom-control-label clickable" for="share_linkedin"><i
                                            class="fab fa-fw fa-linkedin"></i> Linkedin Share</label>
                                </div>
                            </div>
                            <div v-else-if="notifications.select == 'Reviews'">
                                <div class="form-group">
                                    <label for="settings_url">Notification URL</label>
                                    <input type="url" id="settings_url" name="url" class="form-control" value=""
                                        maxlength="2048" />
                                    <small class="form-text text-muted">The URL you want to user to go to after
                                        clicking the notification. Leave empty for no link.</small>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="settings_url_new_tab"
                                        name="url_new_tab" checked="checked">

                                    <label class="custom-control-label clickable" for="settings_url_new_tab">On click
                                        open on new tab</label>

                                    <div>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_reviews_count">How many reviews to show?</label>
                                    <input type="text" id="settings_reviews_count" name="reviews_count"
                                        class="form-control" value="1" />
                                    <small class="form-text text-muted"></small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_in_between_delay">In between delay</label>
                                    <input type="text" id="settings_in_between_delay" name="in_between_delay"
                                        class="form-control" value="3" />
                                    <small class="form-text text-muted">Written in seconds</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_order">Display order</label>
                                    <select id="settings_order" name="order" class="form-control">
                                        <option value="descending">Descending</option>
                                        <option value="random" selected="selected">Random</option>
                                    </select>
                                </div>
                            </div>
                            <div v-else-if="notifications.select == 'Emoji Feedback'">
                                <div class="form-group">
                                    <label for="settings_title">Title Message</label>
                                    <input type="text" id="settings_title" name="title" class="form-control"
                                        value="Do you like our website?" maxlength="256" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_thank_you_url">Thank you URL</label>
                                    <input type="text" id="settings_thank_you_url" name="thank_you_url"
                                        class="form-control" value="" maxlength="2048" />
                                    <small class="form-text text-muted">The URL the user will be redirected to after
                                        submitting the form. Leave empty to disable the function.</small>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="show_angry"
                                        name="show_angry" checked="checked">
                                    <label class="custom-control-label clickable" for="show_angry">Show Angry</label>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="show_sad" name="show_sad"
                                        checked="checked">
                                    <label class="custom-control-label clickable" for="show_sad">Show Sad</label>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="show_neutral"
                                        name="show_neutral" checked="checked">
                                    <label class="custom-control-label clickable" for="show_neutral">Show
                                        Neutral</label>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="show_happy"
                                        name="show_happy" checked="checked">
                                    <label class="custom-control-label clickable" for="show_happy">Show Happy</label>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="show_excited"
                                        name="show_excited" checked="checked">
                                    <label class="custom-control-label clickable" for="show_excited">Show
                                        Excited</label>
                                </div>
                            </div>

                            <div v-else-if="notifications.select == 'Cookie Notification'">
                                <div class="form-group">
                                    <label for="settings_image">Image URL</label>
                                    <input type="url" id="settings_image" name="image" class="form-control"
                                        value="https://img.icons8.com/plasticine/2x/cookie.png" maxlength="2048" />
                                    <small class="form-text text-muted">Leave empty for no image. Hint: icons8.com has
                                        a good library of small icons that you can use.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_image_alt">Image Alt</label>
                                    <input type="text" id="settings_image_alt" name="image_alt" class="form-control"
                                        value="" maxlength="100" />
                                    <small class="form-text text-muted">Image description for accessibility and SEO
                                        purposes.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_url_text">Link URL Text</label>
                                    <input type="text" id="settings_url_text" name="url_text" class="form-control"
                                        value="Learn More" maxlength="256" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_url">Link URL</label>
                                    <input type="url" id="settings_url" name="url" class="form-control" value=""
                                        maxlength="2048" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_button_text">Button Text</label>
                                    <input type="text" id="settings_button_text" name="button_text"
                                        class="form-control" value="Okay" maxlength="128" />
                                </div>

                            </div>
                            <div v-else-if="notifications.select == 'Score Feedback'">

                                <div class="form-group">
                                    <label for="settings_title">Title Message</label>
                                    <input type="text" id="settings_title" name="title" class="form-control"
                                        value="How'd you like our website?" maxlength="256" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_thank_you_url">Thank you URL</label>
                                    <input type="text" id="settings_thank_you_url" name="thank_you_url"
                                        class="form-control" value="" maxlength="2048" />
                                    <small class="form-text text-muted">The URL the user will be redirected to after
                                        submitting the form. Leave empty to disable the function.</small>
                                </div>
                            </div>

                            <div v-else-if="notifications.select == 'Request Collector'">
                                <div class="form-group">
                                    <label for="settings_image">Image URL</label>
                                    <input type="url" id="settings_image" name="image" class="form-control"
                                        value="https://img.icons8.com/cotton/2x/online-support.png" maxlength="2048" />
                                    <small class="form-text text-muted">Leave empty for no image. Hint: icons8.com has
                                        a good library of small icons that you can use.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_image_alt">Image Alt</label>
                                    <input type="text" id="settings_image_alt" name="image_alt" class="form-control"
                                        value="" maxlength="100" />
                                    <small class="form-text text-muted">Image description for accessibility and SEO
                                        purposes.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_content_title">Content Title</label>
                                    <input type="text" id="settings_content_title" name="content_title"
                                        class="form-control" value="Any questions?" maxlength="256" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_content_description">Content Description</label>
                                    <input type="text" id="settings_content_description" name="content_description"
                                        class="form-control" value="Let us know and we will get back to you!"
                                        maxlength="512" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_input_placeholder">Input Placeholder</label>
                                    <input type="text" id="settings_input_placeholder" name="input_placeholder"
                                        class="form-control" value="Valid Phone Number" maxlength="128" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_button_text">Button Text</label>
                                    <input type="text" id="settings_button_text" name="button_text"
                                        class="form-control" value="Call me back ⚡️" maxlength="128" />
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input id="settings_show_agreement" name="show_agreement" type="checkbox"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="settings_show_agreement">Show
                                            Agreement</label>
                                        <div><small class="form-text text-muted">Require the user to confirm his
                                                agreement by ticking a checkbox.</small></div>
                                    </div>
                                </div>

                                <div id="agreement">
                                    <div class="form-group">
                                        <label for="settings_agreement_text">Agreement Text</label>
                                        <input type="text" id="settings_agreement_text" name="agreement_text"
                                            class="form-control" value="I read & agree the Privacy Policy"
                                            maxlength="256" />
                                    </div>

                                    <div class="form-group">
                                        <label for="settings_agreement_url">Agreement URL</label>
                                        <input type="url" id="settings_agreement_url" name="agreement_url"
                                            class="form-control" value="" maxlength="2048" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_thank_you_url">Thank you URL</label>
                                    <input type="text" id="settings_thank_you_url" name="thank_you_url"
                                        class="form-control" value="" maxlength="2048" />
                                    <small class="form-text text-muted">The URL the user will be redirected to after
                                        submitting the form. Leave empty to disable the function.</small>
                                </div>

                            </div>
                            <div v-else-if="notifications.select == 'Countdown Collector'">
                                <div class="form-group">
                                    <label for="settings_content_title">Content Title</label>
                                    <input type="text" id="settings_content_title" name="content_title"
                                        class="form-control" value="Hurry up! Registrations are closing soon."
                                        maxlength="256" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_input_placeholder">Input Placeholder</label>
                                    <input type="text" id="settings_input_placeholder" name="input_placeholder"
                                        class="form-control" value="Valid Email" maxlength="128" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_button_text">Button Text</label>
                                    <input type="text" id="settings_button_text" name="button_text"
                                        class="form-control" value="Sign up️" maxlength="128" />
                                </div>

                                <div class="form-group">
                                    <label for="settings_end_date">End Date</label>
                                    <input type="text" id="settings_end_date" name="end_date" class="form-control"
                                        value="2022-05-19 15:31:51" autocomplete="off" required="required" />
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input id="settings_show_agreement" name="show_agreement" type="checkbox"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="settings_show_agreement">Show
                                            Agreement</label>
                                        <div><small class="form-text text-muted">Require the user to confirm his
                                                agreement by ticking a checkbox.</small></div>
                                    </div>
                                </div>

                                <div id="agreement">
                                    <div class="form-group">
                                        <label for="settings_agreement_text">Agreement Text</label>
                                        <input type="text" id="settings_agreement_text" name="agreement_text"
                                            class="form-control" value="I read & agree the Privacy Policy"
                                            maxlength="256" />
                                    </div>

                                    <div class="form-group">
                                        <label for="settings_agreement_url">Agreement URL</label>
                                        <input type="url" id="settings_agreement_url" name="agreement_url"
                                            class="form-control" value="" maxlength="2048" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_thank_you_url">Thank you URL</label>
                                    <input type="text" id="settings_thank_you_url" name="thank_you_url"
                                        class="form-control" value="" maxlength="2048" />
                                    <small class="form-text text-muted">The URL the user will be redirected to after
                                        submitting the form. Leave empty to disable the function.</small>
                                </div>

                            </div>

                            <div class="mt-4">
                                <button @click="update_Notification"
                                    class="btn btn-lg btn-block btn-primary">Update</button>


                            </div>

                        </div>
                        {{-- <div v-else-if="notifications.select == 'Coupon'">
                        2
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Countdown Collector'">
                        3
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Live Counter'">
                        4
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Email Collector'">
                        5
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Conversions'">
                        6
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Video'">
                        7
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Social Share'">
                        8
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Reviews'">
                        9
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Emoji Feedback'">
                        10
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Cookie Notification'">
                        11
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Score Feedback'">
                        12
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Request Collector'">
                        13
                    </div> --}}
                        {{-- <div v-else-if="notifications.select == 'Conversions Counter'">
                        14
                    </div> --}}

                        <div v-else>
                            Not A/B/C
                        </div>


                        {{-- @if ($notifications->select == $notifications->select)         
        <td>Approve/Reject<a></td>         
        @else 
            <p>fk</p>        
        @endif --}}





                        <textarea style="display:none" id="notificationsID" cols="30" rows="10">{{ $notifications->id }}</textarea>
                        <textarea style="display:none" id="campaign_id" cols="30" rows="10">{{ $campaign->id }}</textarea>
                        <textarea style="display:none" id="update-url" cols="30" rows="10">{{ route('notification.update') }}</textarea>

                        <textarea style="display:none" id="notifications" cols="30" rows="10">{{ json_encode($notifications) }}</textarea>
                        <textarea style="display:none" id="select" cols="30" rows="10">{{ json_encode($select ?? '') }}</textarea>


                        <div style="display:none" id="trigger_rule_sample">
                            <div class="input-group mb-3">
                                <select class="form-control trigger-type-select" name="trigger_type[]">
                                    <option value="exact" data-placeholder="Full URL ( ex: https://domain.com )">Exact
                                        match
                                    </option>
                                    <option value="not_exact" data-placeholder="Full URL ( ex: https://domain.com )">
                                        Does
                                        not match exact</option>
                                    <option value="contains" data-placeholder="Part of the URL ( ex: /product/102481 )">
                                        Contains</option>
                                    <option value="not_contains"
                                        data-placeholder="Part of the URL ( ex: /product/102481 )">
                                        Does not contain</option>
                                    <option value="starts_with" data-placeholder="Part of the URL">Starts with</option>
                                    <option value="not_starts_with" data-placeholder="Part of the URL">Does not start
                                        with
                                    </option>
                                    <option value="ends_with" data-placeholder="Part of the URL">Ends with</option>
                                    <option value="not_ends_with" data-placeholder="Part of the URL">Does not end with
                                    </option>
                                    <option value="page_contains"
                                        data-placeholder="Text that is included in the website">
                                        Page Contains</option>
                                </select>

                                <input type="text" name="trigger_value[]" class="form-control">

                                <button type="button" class="trigger-delete ml-3 btn btn-outline-danger btn-sm"
                                    aria-label="Delete"><i class="fa fa-fw fa-times"></i></button>
                            </div>
                        </div>

                        <div style="display:none" id="data_trigger_auto_rule_sample">
                            <div class="input-group mb-3">
                                <select class="form-control trigger-type-select" name="data_trigger_auto_type[]">
                                    <option value="exact">Exact match</option>
                                    <option value="contains">Contains</option>
                                    <option value="starts_with">Starts with</option>
                                    <option value="ends_with">Ends with</option>
                                    <option value="page_contains">Page Contains</option>
                                </select>

                                <input type="text" name="data_trigger_auto_value[]" class="form-control"
                                    placeholder="Full URL ( ex: https://domain.com )"
                                    aria-label="Full URL ( ex: https://domain.com )">

                                <button type="button"
                                    class="data-trigger-auto-delete ml-3 btn btn-outline-danger btn-sm"
                                    aria-label="Delete"><i class="fa fa-fw fa-times"></i></button>
                            </div>
                        </div>



        </section>


    </main>


    <footer class="footer ">

        <div class="container d-print-none">
            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                <div class="mb-3 mb-lg-0">
                    <a class="h5" href="demo/">
                        <img src="demo/uploads/logo/365a9619f7af70e14acf8538d0d8c5d8.png" class="mb-2 footer-logo"
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


                        <li class="mb-2 mr-lg-3"><a href="/demo/page/terms-of-service" target="_self">Terms of
                                Service</a></li>
                        <li class="mb-2 mr-lg-3"><a href="/demo/page/create-campaign" target="_self">How to create a
                                campaign</a></li>
                        <li class="mb-2 mr-lg-3"><a href="/demo/page/create-notification" target="_self">How to
                                create a notification</a></li>
                        <li class="mb-2 mr-lg-3"><a href="/demo/page/install-script" target="_self">How to install
                                the script</a></li>
                    </ul>
                </div>


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

    </footer>


    <div class="modal fade" id="notification_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">
                            <i class="fa fa-fw fa-sm fa-trash-alt text-muted mr-2"></i>
                            Delete notification
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form name="notification_delete_modal" method="post"
                        action="https://66socialproof.com/demo/notification/delete" role="form">
                        <input type="hidden" name="token" value="7c72d16c70dbfcb5b043f0a55333efd5"
                            required="required" />
                        <input type="hidden" name="notification_id" value="" />

                        <p class="text-muted">By deleting the notification, all the data associated with the
                            notification will be lost. This action cannot be undone.</p>

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
                            Duplicate
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <p class="text-muted">Easily duplicate this resource with a click of a button.</p>

                    <form name="notification_duplicate_modal" method="post"
                        action="https://66socialproof.com/demo/notification/duplicate" role="form">
                        <input type="hidden" name="token" value="7c72d16c70dbfcb5b043f0a55333efd5"
                            required="required" />
                        <input type="hidden" name="notification_id" value="" />

                        <div class="mt-4">
                            <button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('app/notification.js') }}"></script>

</body>

</html>
