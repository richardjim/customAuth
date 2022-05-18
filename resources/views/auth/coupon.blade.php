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
                    <div class="col" >


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
                                2
                            </div>
                            <div class="tab-pane fade" id="tab_triggers" role="tabpanel"
                                aria-labelledby="tab_triggers_link">

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="trigger_all_pages"
                                        name="trigger_all_pages" checked="checked">
                                    <label class="custom-control-label clickable" for="trigger_all_pages">Trigger on
                                        all pages</label>

                                    <div>
                                        <small class="form-text text-muted">Where should the notification show?</small>
                                    </div>
                                </div>

                                <div id="triggers" class="container-disabled">
                                </div>

                                <div class="mb-3">
                                    <button type="button" id="trigger_add" class="btn btn-outline-success btn-sm"><i
                                            class="fa fa-fw fa-plus-circle"></i> Add new trigger</button>
                                </div>

                                <div class="form-group" id="display_trigger">
                                    <label>Display Trigger</label>

                                    <div class="input-group">
                                        <select class="form-control trigger-type-select" name="display_trigger">
                                            <option value="delay"
                                                data-placeholder="Number of seconds to wait until notification shows up"
                                                selected="selected">Delay</option>
                                            <option value="exit_intent">Exit Intent</option>
                                            <option value="scroll"
                                                data-placeholder="Percent of scrolling from the top down">Scroll
                                                Percentage</option>
                                        </select>

                                        <input type="number" min="0" name="display_trigger_value"
                                            class="form-control" value="2" />
                                    </div>

                                    <small class="form-text text-muted">On what event the notification should show
                                        up.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_display_frequency">Display frequency</label>
                                    <select class="form-control" name="display_frequency">
                                        <option value="all_time" selected="selected">All the time</option>
                                        <option value="once_per_session">Once per visit session</option>
                                        <option value="once_per_browser">Once per browser</option>
                                    </select>
                                    <small class="form-text text-muted">How often should the notification
                                        trigger?.</small>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="display_mobile"
                                        name="display_mobile" checked="checked">

                                    <label class="custom-control-label clickable" for="display_mobile"><i
                                            class="fa fa-fw fa-sm fa-mobile text-muted mr-1"></i> Display on small
                                        screens</label>

                                    <div>
                                        <small class="form-text text-muted">Whether or not to display the notification
                                            on when pixels available are smaller than 768px.</small>
                                    </div>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="display_desktop"
                                        name="display_desktop" checked="checked">

                                    <label class="custom-control-label clickable" for="display_desktop"><i
                                            class="fa fa-fw fa-sm fa-desktop text-muted mr-1"></i> Display on large
                                        screens</label>

                                    <div>
                                        <small class="form-text text-muted">Whether or not to display the notification
                                            on when pixels available are bigger than 768px.</small>
                                    </div>
                                </div>


                            </div>

                            <div class="tab-pane fade" id="tab_display" role="tabpanel"
                                aria-labelledby="tab_display_link">

                                <div class="form-group">
                                    <label for="settings_direction">Direction</label>
                                    <select id="settings_direction" class="form-control" name="direction">
                                        <option value="ltr" selected="selected">Left to right</option>
                                        <option value="rtl">Right to left</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="settings_display_duration">Display Duration</label>
                                    <input type="number" min="-1" id="settings_display_duration" name="display_duration"
                                        class="form-control" value="5" required="required" />
                                    <small class="form-text text-muted">How many seconds to display the notification.
                                        Set -1 to display forever.</small>
                                </div>

                                <div class="form-group">
                                    <label for="settings_display_position">Display Position</label>
                                    <select class="form-control" name="display_position">
                                        <option value="top_left">Top Left</option>
                                        <option value="top_center">Top Center</option>
                                        <option value="top_right">Top Right</option>
                                        <option value="middle_left">Middle Left</option>
                                        <option value="middle_center">Middle Center</option>
                                        <option value="middle_right">Middle Right</option>
                                        <option value="bottom_left" selected="selected">Bottom Left</option>
                                        <option value="bottom_center">Bottom Center</option>
                                        <option value="bottom_right">Bottom Right</option>
                                    </select>
                                    <small class="form-text text-muted">Position of the notification on the screen.
                                        Position doesn't change on the preview.</small>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="display_close_button"
                                        name="display_close_button" checked="checked">
                                    <label class="custom-control-label clickable" for="display_close_button">Display
                                        Close Button</label>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3 ">
                                    <input type="checkbox" class="custom-control-input" id="display_branding"
                                        name="display_branding" checked="checked">
                                    <label class="custom-control-label clickable" for="display_branding">Display
                                        Branding</label>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab_customize" role="tabpanel"
                                aria-labelledby="tab_customize_link">

                                <div class="form-group">
                                    <label for="settings_title_color">Title color</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div id="settings_title_color_pickr"></div>
                                        </div>
                                        <input type="text" id="settings_title_color" name="title_color"
                                            class="form-control border-left-0" value="#000" required="required" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_description_color">Description color</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div id="settings_description_color_pickr"></div>
                                        </div>
                                        <input type="text" id="settings_description_color" name="description_color"
                                            class="form-control border-left-0" value="#000" required="required" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_background_color">Background color</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div id="settings_background_color_pickr"></div>
                                        </div>
                                        <input type="text" id="settings_background_color" name="background_color"
                                            class="form-control border-left-0" value="#fff" required="required" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_background_pattern">Background pattern</label>
                                    <select class="form-control" id="settings_background_pattern"
                                        name="background_pattern">
                                        <option value="" selected="selected">None</option>


                                        <option value="jupiter"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MiIgaGVpZ2h0PSI1MiIgdmlld0JveD0iMCAwIDUyIDUyIj48cGF0aCBmaWxsLW9wYWNpdHk9IjAuMTUiIGZpbGw9IiMwMDAwMDAiIGQ9Ik0wIDE3LjgzVjBoMTcuODNhMyAzIDAgMCAxLTUuNjYgMkg1LjlBNSA1IDAgMCAxIDIgNS45djYuMjdhMyAzIDAgMCAxLTIgNS42NnptMCAxOC4zNGEzIDMgMCAwIDEgMiA1LjY2djYuMjdBNSA1IDAgMCAxIDUuOSA1Mmg2LjI3YTMgMyAwIDAgMSA1LjY2IDBIMFYzNi4xN3pNMzYuMTcgNTJhMyAzIDAgMCAxIDUuNjYgMGg2LjI3YTUgNSAwIDAgMSAzLjktMy45di02LjI3YTMgMyAwIDAgMSAwLTUuNjZWNTJIMzYuMTd6TTAgMzEuOTN2LTkuNzhhNSA1IDAgMCAxIDMuOC43Mmw0LjQzLTQuNDNhMyAzIDAgMSAxIDEuNDIgMS40MUw1LjIgMjQuMjhhNSA1IDAgMCAxIDAgNS41Mmw0LjQ0IDQuNDNhMyAzIDAgMSAxLTEuNDIgMS40MkwzLjggMzEuMmE1IDUgMCAwIDEtMy44Ljcyem01Mi0xNC4xYTMgMyAwIDAgMSAwLTUuNjZWNS45QTUgNSAwIDAgMSA0OC4xIDJoLTYuMjdhMyAzIDAgMCAxLTUuNjYtMkg1MnYxNy44M3ptMCAxNC4xYTQuOTcgNC45NyAwIDAgMS0xLjcyLS43MmwtNC40MyA0LjQ0YTMgMyAwIDEgMS0xLjQxLTEuNDJsNC40My00LjQzYTUgNSAwIDAgMSAwLTUuNTJsLTQuNDMtNC40M2EzIDMgMCAxIDEgMS40MS0xLjQxbDQuNDMgNC40M2MuNTMtLjM1IDEuMTItLjYgMS43Mi0uNzJ2OS43OHpNMjIuMTUgMGg5Ljc4YTUgNSAwIDAgMS0uNzIgMy44bDQuNDQgNC40M2EzIDMgMCAxIDEtMS40MiAxLjQyTDI5LjggNS4yYTUgNSAwIDAgMS01LjUyIDBsLTQuNDMgNC40NGEzIDMgMCAxIDEtMS40MS0xLjQybDQuNDMtNC40M2E1IDUgMCAwIDEtLjcyLTMuOHptMCA1MmMuMTMtLjYuMzctMS4xOS43Mi0xLjcybC00LjQzLTQuNDNhMyAzIDAgMSAxIDEuNDEtMS40MWw0LjQzIDQuNDNhNSA1IDAgMCAxIDUuNTIgMGw0LjQzLTQuNDNhMyAzIDAgMSAxIDEuNDIgMS40MWwtNC40NCA0LjQzYy4zNi41My42IDEuMTIuNzIgMS43MmgtOS43OHptOS43NS0yNGE1IDUgMCAwIDEtMy45IDMuOXY2LjI3YTMgMyAwIDEgMS0yIDBWMzEuOWE1IDUgMCAwIDEtMy45LTMuOWgtNi4yN2EzIDMgMCAxIDEgMC0yaDYuMjdhNSA1IDAgMCAxIDMuOS0zLjl2LTYuMjdhMyAzIDAgMSAxIDIgMHY2LjI3YTUgNSAwIDAgMSAzLjkgMy45aDYuMjdhMyAzIDAgMSAxIDAgMkgzMS45eiI+PC9wYXRoPjwvc3ZnPg==">
                                            Jupiter</option>
                                        <option value="wavy"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTgiPjxwYXRoIGZpbGwtb3BhY2l0eT0iMC4xNSIgZmlsbD0iIzAwMDAwMCIgZD0iTTYxLjgyIDE4YzMuNDctMS40NSA2Ljg2LTMuNzggMTEuMy03LjM0Qzc4IDYuNzYgODAuMzQgNS4xIDgzLjg3IDMuNDIgODguNTYgMS4xNiA5My43NSAwIDEwMCAwdjYuMTZDOTguNzYgNi4wNSA5Ny40MyA2IDk2IDZjLTkuNTkgMC0xNC4yMyAyLjIzLTIzLjEzIDkuMzQtMS4yOCAxLjAzLTIuMzkgMS45LTMuNCAyLjY2aC03LjY1em0tMjMuNjQgMEgyMi41MmMtMS0uNzYtMi4xLTEuNjMtMy40LTIuNjZDMTEuNTcgOS4zIDcuMDggNi43OCAwIDYuMTZWMGM2LjI1IDAgMTEuNDQgMS4xNiAxNi4xNCAzLjQyIDMuNTMgMS43IDUuODcgMy4zNSAxMC43MyA3LjI0IDQuNDUgMy41NiA3Ljg0IDUuOSAxMS4zMSA3LjM0ek02MS44MiAwaDcuNjZhMzkuNTcgMzkuNTcgMCAwIDEtNy4zNCA0LjU4QzU3LjQ0IDYuODQgNTIuMjUgOCA0NiA4UzM0LjU2IDYuODQgMjkuODYgNC41OEEzOS41NyAzOS41NyAwIDAgMSAyMi41MiAwaDE1LjY2QzQxLjY1IDEuNDQgNDUuMjEgMiA1MCAyYzQuOCAwIDguMzUtLjU2IDExLjgyLTJ6Ii8+PC9zdmc+">
                                            Wavy</option>
                                        <option value="hexagons"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyOCIgaGVpZ2h0PSI0OSIgdmlld0JveD0iMCAwIDI4IDQ5Ij48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGwtb3BhY2l0eT0iMC4xNSIgZmlsbD0iIzAwMDAwMCIgZmlsbC1ydWxlPSJub256ZXJvIj48cGF0aCBkPSJNMTMuOTkgOS4yNWwxMyA3LjV2MTVsLTEzIDcuNUwxIDMxLjc1di0xNWwxMi45OS03LjV6TTMgMTcuOXYxMi43bDEwLjk5IDYuMzQgMTEtNi4zNVYxNy45bC0xMS02LjM0TDMgMTcuOXpNMCAxNWwxMi45OC03LjVWMGgtMnY2LjM1TDAgMTIuNjl2Mi4zem0wIDE4LjVMMTIuOTggNDF2OGgtMnYtNi44NUwwIDM1Ljgxdi0yLjN6TTE1IDB2Ny41TDI3Ljk5IDE1SDI4di0yLjMxaC0uMDFMMTcgNi4zNVYwaC0yem0wIDQ5di04bDEyLjk5LTcuNUgyOHYyLjMxaC0uMDFMMTcgNDIuMTVWNDloLTJ6Ii8+PC9nPjwvZz48L3N2Zz4=">
                                            Hexagons</option>
                                        <option value="autumn"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4OCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDg4IDI0Ij48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGwtb3BhY2l0eT0iMC4xNSIgZmlsbD0iIzAwMDAwMCI+PHBhdGggZD0iTTEwIDBsMzAgMTUgMiAxVjIuMThBMTAgMTAgMCAwIDAgNDEuNzYgMEgzOS43YTggOCAwIDAgMSAuMyAyLjE4djEwLjU4TDE0LjQ3IDBIMTB6bTMxLjc2IDI0YTEwIDEwIDAgMCAwLTUuMjktNi43Nkw0IDEgMiAwdjEzLjgyYTEwIDEwIDAgMCAwIDUuNTMgOC45NEwxMCAyNGg0LjQ3bC02LjA1LTMuMDJBOCA4IDAgMCAxIDQgMTMuODJWMy4yNGwzMS41OCAxNS43OEE4IDggMCAwIDEgMzkuNyAyNGgyLjA2ek03OCAyNGwyLjQ3LTEuMjRBMTAgMTAgMCAwIDAgODYgMTMuODJWMGwtMiAxLTMyLjQ3IDE2LjI0QTEwIDEwIDAgMCAwIDQ2LjI0IDI0aDIuMDZhOCA4IDAgMCAxIDQuMTItNC45OEw4NCAzLjI0djEwLjU4YTggOCAwIDAgMS00LjQyIDcuMTZMNzMuNTMgMjRINzh6bTAtMjRMNDggMTVsLTIgMVYyLjE4QTEwIDEwIDAgMCAxIDQ2LjI0IDBoMi4wNmE4IDggMCAwIDAtLjMgMi4xOHYxMC41OEw3My41MyAwSDc4eiIvPjwvZz48L2c+PC9zdmc+">
                                            Autumn</option>
                                        <option value="shapes"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4MCA4MCI+PHBhdGggZmlsbC1vcGFjaXR5PSIwLjE1IiBmaWxsPSIjMDAwMDAwIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMSAwbDUgMjBINmw1LTIwem00MiAzMWEzIDMgMCAxIDAgMC02IDMgMyAwIDAgMCAwIDZ6TTAgNzJoNDB2NEgwdi00em0wLThoMzF2NEgwdi00em0yMC0xNmgyMHY0SDIwdi00ek0wIDU2aDQwdjRIMHYtNHptNjMtMjVhMyAzIDAgMSAwIDAtNiAzIDMgMCAwIDAgMCA2em0xMCAwYTMgMyAwIDEgMCAwLTYgMyAzIDAgMCAwIDAgNnpNNTMgNDFhMyAzIDAgMSAwIDAtNiAzIDMgMCAwIDAgMCA2em0xMCAwYTMgMyAwIDEgMCAwLTYgMyAzIDAgMCAwIDAgNnptMTAgMGEzIDMgMCAxIDAgMC02IDMgMyAwIDAgMCAwIDZ6bS0zMCAwYTMgMyAwIDEgMCAwLTYgMyAzIDAgMCAwIDAgNnptLTI4LThhNSA1IDAgMCAwLTEwIDBoMTB6bTEwIDBhNSA1IDAgMCAxLTEwIDBoMTB6TTU2IDVhNSA1IDAgMCAwLTEwIDBoMTB6bTEwIDBhNSA1IDAgMCAxLTEwIDBoMTB6bS0zIDQ2YTMgMyAwIDEgMCAwLTYgMyAzIDAgMCAwIDAgNnptMTAgMGEzIDMgMCAxIDAgMC02IDMgMyAwIDAgMCAwIDZ6TTIxIDBsNSAyMEgxNmw1LTIwem00MyA2NHYtNGgtNHY0aC00djRoNHY0aDR2LTRoNHYtNGgtNHpNMzYgMTNoNHY0aC00di00em00IDRoNHY0aC00di00em0tNCA0aDR2NGgtNHYtNHptOC04aDR2NGgtNHYtNHoiLz48L3N2Zz4=">
                                            Shapes</option>
                                        <option value="anchors"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA4MCA4MCIgd2lkdGg9IjgwIiBoZWlnaHQ9IjgwIj48cGF0aCBmaWxsLW9wYWNpdHk9IjAuMTUiIGZpbGw9IiMwMDAwMDAiIGQ9Ik0xNCAxNkg5di0yaDVWOS44N2E0IDQgMCAxIDEgMiAwVjE0aDV2MmgtNXYxNS45NUExMCAxMCAwIDAgMCAyMy42NiAyN2wtMy40Ni0yIDguMi0yLjItMi45IDVhMTIgMTIgMCAwIDEtMjEgMGwtMi44OS01IDguMiAyLjItMy40NyAyQTEwIDEwIDAgMCAwIDE0IDMxLjk1VjE2em00MCA0MGgtNXYtMmg1di00LjEzYTQgNCAwIDEgMSAyIDBWNTRoNXYyaC01djE1Ljk1QTEwIDEwIDAgMCAwIDYzLjY2IDY3bC0zLjQ3LTIgOC4yLTIuMi0yLjg4IDVhMTIgMTIgMCAwIDEtMjEuMDIgMGwtMi44OC01IDguMiAyLjItMy40NyAyQTEwIDEwIDAgMCAwIDU0IDcxLjk1VjU2em0tMzkgNmEyIDIgMCAxIDEgMC00IDIgMiAwIDAgMSAwIDR6bTQwLTQwYTIgMiAwIDEgMSAwLTQgMiAyIDAgMCAxIDAgNHpNMTUgOGEyIDIgMCAxIDAgMC00IDIgMiAwIDAgMCAwIDR6bTQwIDQwYTIgMiAwIDEgMCAwLTQgMiAyIDAgMCAwIDAgNHoiPjwvcGF0aD48L3N2Zz4=">
                                            Anchors</option>
                                        <option value="plus"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsLW9wYWNpdHk9IjAuMTUiIGZpbGw9IiMwMDAwMDAiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PHBhdGggZD0iTTM2IDM0di00aC0ydjRoLTR2Mmg0djRoMnYtNGg0di0yaC00em0wLTMwVjBoLTJ2NGgtNHYyaDR2NGgyVjZoNFY0aC00ek02IDM0di00SDR2NEgwdjJoNHY0aDJ2LTRoNHYtMkg2ek02IDRWMEg0djRIMHYyaDR2NGgyVjZoNFY0SDZ6Ii8+PC9nPjwvc3ZnPg==">
                                            Plus</option>
                                        <option value="bubbles"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBmaWxsLW9wYWNpdHk9IjAuMTUiIGZpbGw9IiMwMDAwMDAiIGQ9Ik0xMSAxOGE3IDcgMCAxMDAtMTQgNyA3IDAgMDAwIDE0em00OCAyNWE3IDcgMCAxMDAtMTQgNyA3IDAgMDAwIDE0em0tNDMtN2EzIDMgMCAxMDAtNiAzIDMgMCAwMDAgNnptNjMgMzFhMyAzIDAgMTAwLTYgMyAzIDAgMDAwIDZ6TTM0IDkwYTMgMyAwIDEwMC02IDMgMyAwIDAwMCA2em01Ni03NmEzIDMgMCAxMDAtNiAzIDMgMCAwMDAgNnpNMTIgODZhNCA0IDAgMTAwLTggNCA0IDAgMDAwIDh6bTI4LTY1YTQgNCAwIDEwMC04IDQgNCAwIDAwMCA4em0yMy0xMWE1IDUgMCAxMDAtMTAgNSA1IDAgMDAwIDEwem0tNiA2MGE0IDQgMCAxMDAtOCA0IDQgMCAwMDAgOHptMjkgMjJhNSA1IDAgMTAwLTEwIDUgNSAwIDAwMCAxMHpNMzIgNjNhNSA1IDAgMTAwLTEwIDUgNSAwIDAwMCAxMHptNTctMTNhNSA1IDAgMTAwLTEwIDUgNSAwIDAwMCAxMHptLTktMjFhMiAyIDAgMTAwLTQgMiAyIDAgMDAwIDR6TTYwIDkxYTIgMiAwIDEwMC00IDIgMiAwIDAwMCA0ek0zNSA0MWEyIDIgMCAxMDAtNCAyIDIgMCAwMDAgNHpNMTIgNjBhMiAyIDAgMTAwLTQgMiAyIDAgMDAwIDR6IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=">
                                            Bubbles</option>
                                        <option value="wiggle"
                                            data-value="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTIiIGhlaWdodD0iMjYiIHZpZXdCb3g9IjAgMCA1MiAyNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsLW9wYWNpdHk9IjAuMTUiIGZpbGw9IiMwMDAwMDAiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PHBhdGggZD0iTTEwIDEwYzAtMi4yMS0xLjc5LTQtNC00LTMuMzE0IDAtNi0yLjY4Ni02LTZoMmMwIDIuMjEgMS43OSA0IDQgNCAzLjMxNCAwIDYgMi42ODYgNiA2IDAgMi4yMSAxLjc5IDQgNCA0IDMuMzE0IDAgNiAyLjY4NiA2IDYgMCAyLjIxIDEuNzkgNCA0IDR2MmMtMy4zMTQgMC02LTIuNjg2LTYtNiAwLTIuMjEtMS43OS00LTQtNC0zLjMxNCAwLTYtMi42ODYtNi02em0yNS40NjQtMS45NWw4LjQ4NiA4LjQ4Ni0xLjQxNCAxLjQxNC04LjQ4Ni04LjQ4NiAxLjQxNC0xLjQxNHoiIC8+PC9nPjwvc3ZnPg==">
                                            Wiggle</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="settings_close_button_color">Close button color</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div id="settings_close_button_color_pickr"></div>
                                        </div>
                                        <input type="text" id="settings_close_button_color" name="close_button_color"
                                            class="form-control border-left-0" value="gray" required="required" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="settings_border_radius">Border radius</label>
                                            <select class="form-control" name="border_radius">
                                                <option value="straight">Straight</option>
                                                <option value="rounded" selected="selected">Rounded</option>
                                                <option value="round">Round</option>
                                            </select>
                                            <small class="form-text text-muted">Change the shape of the corners of the
                                                notification</small>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="settings_border_width">Border width</label>
                                            <input type="number" min="0" max="5" id="settings_border_width"
                                                name="border_width" class="form-control" value="0" />
                                            <small class="form-text text-muted">Value from 0 to 5 for the border width
                                                of the notification.</small>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="settings_border_color">Border color</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div id="settings_border_color_pickr"></div>
                                                </div>
                                                <input type="text" id="settings_border_color" name="border_color"
                                                    class="form-control border-left-0" value="#000"
                                                    required="required" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-control custom-switch mr-3 mb-3">
                                    <input type="checkbox" class="custom-control-input" id="settings_shadow"
                                        name="shadow" checked="checked">

                                    <label class="custom-control-label clickable" for="settings_shadow">Display
                                        shadow</label>

                                    <div>
                                        <small class="form-text text-muted">Enable or disable the shadow around the
                                            edges of the notification</small>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="settings_on_animation">Entrance Animation</label>
                                            <select id="settings_on_animation" class="form-control"
                                                name="on_animation">
                                                <option value="fadeIn" selected="selected">Fade In</option>
                                                <option value="slideInUp">Slide In Up</option>
                                                <option value="slideInDown">Slide In Down</option>
                                                <option value="zoomIn">Zoom In</option>
                                                <option value="bounceIn">Bounce In</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="settings_off_animation">Exit Animation</label>
                                            <select id="settings_off_animation" class="form-control"
                                                name="off_animation">
                                                <option value="fadeOut" selected="selected">Fade Out</option>
                                                <option value="slideOutUp">Slide Out Up</option>
                                                <option value="slideOutDown">Slide Out Down</option>
                                                <option value="zoomOut">Zoom Out</option>
                                                <option value="bounceOut">Bounce Out</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="settings_font">Font</label>
                                    <select id="settings_font" class="form-control" name="font">
                                        <option value="inherit" selected="selected">Inherit from website</option>
                                        <option value="Arial">Arial</option>
                                        <option value="Verdana">Verdana</option>
                                        <option value="Helvetica">Helvetica</option>
                                        <option value="Tahoma">Tahoma</option>
                                        <option value="Trebuchet MS">Trebuchet MS</option>
                                        <option value="Times New Roman">Times New Roman</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Garamond">Garamond</option>
                                        <option value="Courier New">Courier New</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Brush Script MT">Brush Script MT</option>
                                        <option value="Comic Sans MS">Comic Sans MS</option>
                                    </select>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="tab_data" role="tabpanel" aria-labelledby="tab_data_link">

                            </div>

                        </div>

                        <div class="mt-4">
                            <button @click="update_Notification"
                                class="btn btn-lg btn-block btn-primary">Update</button>


                        </div>

                    </div>
                    <div v-else-if="notifications.select == 'Coupon'">
                        2
                    </div>
                    <div v-else-if="notifications.select == 'Countdown Collector'">
                        3
                    </div>
                    <div v-else-if="notifications.select == 'Live Counter'">
                        4
                    </div>
                    <div v-else-if="notifications.select == 'Email Collector'">
                        5
                    </div>
                    <div v-else-if="notifications.select == 'Conversions'">
                        6
                    </div>
                    <div v-else-if="notifications.select == 'Video'">
                        7
                    </div>
                    <div v-else-if="notifications.select == 'Social Share'">
                        8
                    </div>
                    <div v-else-if="notifications.select == 'Reviews'">
                        9
                    </div>
                    <div v-else-if="notifications.select == 'Emoji Feedback'">
                        10
                    </div>
                    <div v-else-if="notifications.select == 'Cookie Notification'">
                        11
                    </div>
                    <div v-else-if="notifications.select == 'Score Feedback'">
                        12
                    </div>
                    <div v-else-if="notifications.select == 'Request Collector'">
                        13
                    </div>
                    <div v-else-if="notifications.select == 'Conversions Counter'">
                        14
                    </div>

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
                                <option value="exact" data-placeholder="Full URL ( ex: https://domain.com )">Exact match
                                </option>
                                <option value="not_exact" data-placeholder="Full URL ( ex: https://domain.com )">Does
                                    not match exact</option>
                                <option value="contains" data-placeholder="Part of the URL ( ex: /product/102481 )">
                                    Contains</option>
                                <option value="not_contains" data-placeholder="Part of the URL ( ex: /product/102481 )">
                                    Does not contain</option>
                                <option value="starts_with" data-placeholder="Part of the URL">Starts with</option>
                                <option value="not_starts_with" data-placeholder="Part of the URL">Does not start with
                                </option>
                                <option value="ends_with" data-placeholder="Part of the URL">Ends with</option>
                                <option value="not_ends_with" data-placeholder="Part of the URL">Does not end with
                                </option>
                                <option value="page_contains" data-placeholder="Text that is included in the website">
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

                            <button type="button" class="data-trigger-auto-delete ml-3 btn btn-outline-danger btn-sm"
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
