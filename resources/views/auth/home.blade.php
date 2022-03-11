<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<title>Dashboard - SocialProofo Demo</title>
<base href="https://socialproofo.com/demo/">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<meta name="description" content="missing_translation: dashboardmeta_description" />
<meta name="keywords" content="missing_translation: dashboardmeta_keywords" />
{{-- <script src="https://cdn.jsdelivr.net/npm/vue-moment@4.1.0/dist/vue-moment.min.js"></script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<link rel="alternate" href="https://socialproofo.com/demo/dashboard" hreflang="x-default" />
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<link href="https://socialproofo.com/demo/uploads/favicon/f9ab739e0e0982a8b98ecd6e7506656e.png"
    rel="shortcut icon" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

<link href="https://socialproofo.com/demo/themes/altum/assets/css/bootstrap-dark.min.css?v=1300"
    id="css_theme_style" rel="stylesheet" media="screen,print">
<link href="https://socialproofo.com/demo/themes/altum/assets/css/custom.css?v=1300" rel="stylesheet"
    media="screen,print">
<link href="https://socialproofo.com/demo/themes/altum/assets/css/animate.min.css?v=1300" rel="stylesheet"
    media="screen,print">
<script src="https://cdn.jsdelivr.net/npm/vue-moment@4.1.0/dist/vue-moment.min.js"></script>


{{-- Pixel Code for https://pixel.socialproofo.com/ --}}
<script defer src="https://pixel.socialproofo.com/pixel/BRd8zqCcSdrWOqof"></script>
<!-- END Pixel Code -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script async src="https://socialproofo.com/demo/pixel/socialproofo"></script>

</head>

<body class=" " data-theme-style="dark">


<script>
    if (window.location !== window.parent.location) {
        window.top.location.href = "https:\/\/socialproofo.com\/demo\/";
    }
</script>


<nav class="navbar navbar-main  navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="https://socialproofo.com/demo/">
            <img src="https://socialproofo.com/demo/uploads/logo/logo.png" class="img-fluid navbar-logo"
                alt="Website Logo" />
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


                            <a class="dropdown-item" href="demo/admin"><i
                                    class="fa fa-fw fa-sm fa-user-shield mr-1"></i>{{ auth()->user()->name }}</a>

                            <a class="dropdown-item" href="demo/account"><i class="fa fa-fw fa-sm fa-wrench mr-1"></i>
                                Account</a>
                            <a class="dropdown-item" href="demo/account-plan"><i
                                    class="fa fa-fw fa-sm fa-box-open mr-1"></i> Plan</a>

                            <a class="dropdown-item" href="demo/account-payments"><i
                                    class="fa fa-fw fa-sm fa-dollar-sign mr-1"></i> Payments</a>


                            <a class="dropdown-item" href="demo/account-api"><i
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

    <header class="header">
        <div class="container">

            <div class="d-flex justify-content-between">
                <h1 class="h2"><span class="underline">Dashboard</span></h1>
            </div>

            <p>
                <span class="badge badge-success">Free Plan</span>


                <span>(<a href="demo/plan/upgrade">Renew/Upgrade</a>)</span>
            </p>

            <p class="text-muted">
                You have used <span class="badge badge-success">16%</span> impressions out of 50,000 this month </p>

        </div>
    </header>

    <section class="container">


        <div class="mt-5 d-flex justify-content-between">
            <h2 class="h3">Campaigns</h2>

            <div class="col-auto p-0 d-flex">
                <div>
                    <button type="button" data-toggle="modal" data-target="#create_campaign"
                        class="btn btn-primary"><i class="fa fa-fw fa-sm fa-plus"></i> Create Campaign</button>
                </div>

                <div class="ml-3">
                    <div class="dropdown">
                        <button type="button"
                            class="btn btn-outline-secondary filters-button dropdown-toggle-simple"
                            data-toggle="dropdown" data-boundary="viewport"><i
                                class="fa fa-fw fa-sm fa-filter"></i></button>

                        <div class="dropdown-menu dropdown-menu-right filters-dropdown">
                            <div class="dropdown-header d-flex justify-content-between">
                                <span class="h6 m-0">Filters</span>

                            </div>

                            <div class="dropdown-divider"></div>

                            <form action="" method="get" role="form">
                                <div class="form-group px-4">
                                    <label for="filters_search" class="small">Search</label>
                                    <input type="search" name="search" id="filters_search"
                                        class="form-control form-control-sm" value="" />
                                </div>

                                <div class="form-group px-4">
                                    <label for="filters_search_by" class="small">Search by</label>
                                    <select name="search_by" id="filters_search_by"
                                        class="form-control form-control-sm">
                                        <option value="name">Name</option>
                                        <option value="domain">Domain</option>
                                    </select>
                                </div>

                                <div class="form-group px-4">
                                    <label for="filters_is_enabled" class="small">Status</label>
                                    <select name="is_enabled" id="filters_is_enabled"
                                        class="form-control form-control-sm">
                                        <option value="">All</option>
                                        <option value="1">Active</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>

                                <div class="form-group px-4">
                                    <label for="filters_order_by" class="small">Order by</label>
                                    <select name="order_by" id="filters_order_by"
                                        class="form-control form-control-sm">
                                        <option value="datetime">Created datetime</option>
                                        <option value="name">Name</option>
                                    </select>
                                </div>

                                <div class="form-group px-4">
                                    <label for="filters_order_type" class="small">Order type</label>
                                    <select name="order_type" id="filters_order_type"
                                        class="form-control form-control-sm">
                                        <option value="ASC">Ascending</option>
                                        <option value="DESC" selected="selected">Descending</option>
                                    </select>
                                </div>

                                <div class="form-group px-4">
                                    <label for="filters_results_per_page" class="small">Results per
                                        page</label>
                                    <select name="results_per_page" id="filters_results_per_page"
                                        class="form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50" selected="selected">50</option>
                                        <option value="100">100</option>
                                        <option value="250">250</option>
                                        <option value="500">500</option>
                                    </select>
                                </div>

                                <div class="form-group px-4 mt-4">
                                    <button type="submit" name="submit"
                                        class="btn btn-sm btn-primary btn-block">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <table class="table table-bordered">

            <div class="table-responsive table-custom-container mt-3">
                <table class="table table-custom">
                    <thead>
                        <tr>
                            <th>Campaign</th>
                            <th class="d-none d-md-table-cell">Launched on</th>
                            <th>Status</th>
                            <th></th>
                        </tr>

                    </thead>
                    <tbody>

                        <tr>
                            <td class="text-nowrap">
                                <div class="d-flex">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAF1QTFRFAAAAaXXyaXXys7n4aXXys7n4aXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXxaHXyaXXyaXXyaXXyaXXxaXTyaHXxaXTxaHXyaXTyaXXyaXXys7n4r14JtQAAAB90Uk5TAP+/fz//rxzybwPMM/uPDOIDb08yywxP4gzLA6oZd2txuB0AAAGYSURBVHhe7dXpQoMwDAfwlmPANhjqdN7v/5hrkh7599AHUD5sFPozTRNXY/4vY93V4T70fRwPHb2nS02h4QCkH8dkTEBIMIgTYDxCAkFYoGEEBIJ4kRmHgOggUeRGZwvbpcQPRm8XiLZRi8xE06RMCtE0ITEp3wErrWoK5eZBP/LXNENz6D7IjVuVPFqQtA3lIeR40pXO+yBF4sz98Lyq5ih6JxjZqzDaIpkOZb/JLL+7gVx2uXt4nC2TMp9Qj7jOJ767PruNEJKbWMFI6OZlW6lCnqBJNdfkthNIBEwiMun1pmmI0ghDZN3eYH3VhVGryOXE+5mB5E939fSjsfPyISH2SwglpNKcEufzK0y0G5CK8HHCNGPsevUDilIVYhSxp6OM2oKNJnYJpBGDXvt/MZ7p9m6e+K61Kn5p1J+jCh3yhzILP1MfhAKqGPhLH2FhVODsPGkZJQb9Mw6Lgzh6r7omif2W1WOAw6IrjrBKXxXny+9Hktt0lQDVACJxPlhzOmMzgsgZFC6TCgHUf2ON+SCvFf+vPbsDe54L25pt/VIAAAAASUVORK5CYII="
                                        class="campaign-avatar rounded-circle mr-3" alt="" />

                                    <div class="d-flex flex-column">
                                        <a href="https://socialproofo.com/demo/campaign/1">SocialProof</a>

                                        <span class="text-muted">
                                            socialproofo.com </span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap d-none d-md-table-cell"><span class="text-muted"
                                    data-toggle="tooltip" title="2019-08-08 00:22:07">8 August, 2019</span></td>
                            <td class="text-nowrap">
                                <div class="d-flex">
                                    <div class="custom-control custom-switch" data-toggle="tooltip"
                                        title="Change the status of the Campaign">
                                        <input type="checkbox" class="custom-control-input"
                                            id="campaign_is_enabled_1" data-row-id="1"
                                            onchange="ajax_call_helper(event, 'campaigns-ajax', 'is_enabled_toggle')"
                                            checked="checked">
                                        <label class="custom-control-label clickable"
                                            for="campaign_is_enabled_1"></label>
                                    </div>
                                </div>

                            </td>

                            <td>
                                <div class="d-flex justify-content-end">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                            data-toggle="dropdown" data-boundary="viewport">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://socialproofo.com/demo/campaign/1"
                                                class="dropdown-item"><i class="fa fa-fw fa-sm fa-server mr-1"></i>
                                                View</a>
                                            <a href="https://socialproofo.com/demo/campaign/1/statistics"
                                                class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-chart-bar mr-1"></i> Statistics</a>
                                            <a href="#" data-toggle="modal" data-target="#update_campaign"
                                                data-campaign-id="1" data-name="SocialProof"
                                                data-domain="socialproofo.com" data-include-subdomains=""
                                                class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>

                                            <a href="#" data-toggle="modal" data-target="#campaign_pixel_key"
                                                data-pixel-key="socialproofo" data-campaign-id="1"
                                                class="dropdown-item"><i class="fa fa-fw fa-sm fa-code mr-1"></i>
                                                Install Pixel</a>

                                            <a href="#" data-toggle="modal" data-target="#custom_branding_campaign"
                                                data-campaign-id="1" data-branding-name="SocialProof"
                                                data-branding-url="https://altumcode.io/" class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-random mr-1"></i> Custom Branding</a>

                                            <a href="#" data-toggle="modal" data-target="#campaign_delete_modal"
                                                data-campaign-id="1" class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </td>


                        </tr>

                        {{-- @foreach ($campaigns as $campaign)
            <tr v-for="(form, index) in forms"> --}}
                        {{-- <tr v-for="(campaign, index) in campaigns"> --}}
                        <tr v-for="(campaign, index) in campaigns">

                            <td class="text-nowrap">
                                <div class="d-flex">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAABGdBTUEAALGPC/xhBQAAABJ0RVh0U29mdHdhcmUASmRlbnRpY29um8oJfgAAAF1QTFRFAAAAaXXyaXXys7n4aXXys7n4aXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXyaXXxaHXyaXXyaXXyaXXyaXXxaXTyaHXxaXTxaHXyaXTyaXXyaXXys7n4r14JtQAAAB90Uk5TAP+/fz//rxzybwPMM/uPDOIDb08yywxP4gzLA6oZd2txuB0AAAGYSURBVHhe7dXpQoMwDAfwlmPANhjqdN7v/5hrkh7599AHUD5sFPozTRNXY/4vY93V4T70fRwPHb2nS02h4QCkH8dkTEBIMIgTYDxCAkFYoGEEBIJ4kRmHgOggUeRGZwvbpcQPRm8XiLZRi8xE06RMCtE0ITEp3wErrWoK5eZBP/LXNENz6D7IjVuVPFqQtA3lIeR40pXO+yBF4sz98Lyq5ih6JxjZqzDaIpkOZb/JLL+7gVx2uXt4nC2TMp9Qj7jOJ767PruNEJKbWMFI6OZlW6lCnqBJNdfkthNIBEwiMun1pmmI0ghDZN3eYH3VhVGryOXE+5mB5E939fSjsfPyISH2SwglpNKcEufzK0y0G5CK8HHCNGPsevUDilIVYhSxp6OM2oKNJnYJpBGDXvt/MZ7p9m6e+K61Kn5p1J+jCh3yhzILP1MfhAKqGPhLH2FhVODsPGkZJQb9Mw6Lgzh6r7omif2W1WOAw6IrjrBKXxXny+9Hktt0lQDVACJxPlhzOmMzgsgZFC6TCgHUf2ON+SCvFf+vPbsDe54L25pt/VIAAAAASUVORK5CYII="
                                        class="campaign-avatar rounded-circle mr-3" alt="" />

                                    <div class="d-flex flex-column">
                                        <a
                                            href="https://socialproofo.com/demo/campaign/1">@{{ campaign.name }}</a>

                                        <span class="text-muted">
                                            @{{ campaign.domain }} </span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-nowrap d-none d-md-table-cell"><span class="text-muted"
                                    data-toggle="tooltip" title="2019-08-08 "> @{{ campaign.created_at }}</span></td>
                            <td class="text-nowrap">
                                <div class="d-flex">
                                    <div class="custom-control custom-switch" data-toggle="tooltip"
                                        title="Change the status of the Campaign">
                                        <input type="checkbox" class="custom-control-input" {{-- @{{ campaign.subdomain }} --}}
                                            data-row-id="1"
                                            onchange="ajax_call_helper(event, 'campaigns-ajax', 'is_enabled_toggle')"
                                            checked="checked">
                                        {{-- <label class="custom-control-label clickable" for="campaign_is_enabled_1">@{{ campaign.subdomain }}</label> --}}
                                    </div>
                                </div>

                            </td>

                            <td>
                                <div class="d-flex justify-content-end">
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn btn-link text-secondary dropdown-toggle dropdown-toggle-simple"
                                            data-toggle="dropdown" data-boundary="viewport">
                                            <i class="fa fa-fw fa-ellipsis-v"></i>
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="https://socialproofo.com/demo/campaign/1"
                                                class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-server mr-1"></i> View</a>
                                            <a href="https://socialproofo.com/demo/campaign/1/statistics"
                                                class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-chart-bar mr-1"></i> Statistics</a>
                                            <a @click="selectCampaign(index)"  data-toggle="modal"
                                                data-target="#update_campaign" data-campaign-id="1"
                                                data-name="SocialProof" data-domain="socialproofo.com"
                                                data-include-subdomains="" class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-pencil-alt mr-1"></i> Edit</a>

                                            <a href="#" data-toggle="modal" data-target="#campaign_pixel_key"
                                                data-pixel-key="socialproofo" data-campaign-id="1"
                                                class="dropdown-item"><i class="fa fa-fw fa-sm fa-code mr-1"></i>
                                                Install Pixel</a>

                                            <a href="#" data-toggle="modal" data-target="#custom_branding_campaign"
                                                data-campaign-id="1" data-branding-name="SocialProof"
                                                data-branding-url="https://altumcode.io/" class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-random mr-1"></i> Custom Branding</a>

                                            <span @click="deleteCampaign(index)" data-campaign-id="1"
                                                class="dropdown-item"><i
                                                    class="fa fa-fw fa-sm fa-times mr-1"></i> Delete</span>
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
                            Showing 1-1 out of 1 results.
                        </p>
                        </p>
                    </div>

                    <div class="">
                        <ul class="pagination">

                            {{-- {{ $campaign->links() }} --}}
                        </ul>
                    </div>
                </div>


            </div>


    </section>





    <footer class="footer ">

        <div class="container d-print-none">
            <div class="d-flex flex-column flex-lg-row justify-content-between mb-3">
                <div class="mb-3 mb-lg-0">
                    <a class="h5" href="https://socialproofo.com/demo/">
                        <img src="/demo/uploads/logo/logo.png" class="mb-2 footer-logo" alt="Website Logo" />
                    </a>
                    <div>Copyright © 2022 SocialProofo Demo.</div>
                </div>

                <div class="d-flex flex-column flex-lg-row">

                    <div class="mb-2 ml-lg-3">
                        <button type="button" data-choose-theme-style="dark"
                            class="btn btn-link text-decoration-none p-0 ">
                            <i class="fa fa-fw fa-sm fa-moon mr-1"></i> Switch to Dark Mode </button>
                        <button type="button" data-choose-theme-style="light"
                            class="btn btn-link text-decoration-none p-0 d-none">
                            <i class="fa fa-fw fa-sm fa-sun mr-1"></i> Switch to Light Mode </button>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg mb-3">
                    <ul class="list-style-none d-flex flex-column flex-lg-row flex-wrap m-0">

                        <li class="mb-2 mr-lg-3"><a href="page/terms-of-service" target="_self">Terms of
                                Service</a></li>
                        <li class="mb-2 mr-lg-3"><a href="page/create-campaign" target="_self">How to create a
                                campaign</a></li>
                        <li class="mb-2 mr-lg-3"><a href="page/create-notification" target="_self">How to create
                                a notification</a></li>
                        <li class="mb-2 mr-lg-3"><a href="page/install-script" target="_self">How to install the
                                script</a></li>
                        <li class="mb-2 mr-lg-3"><a href="page/who-are-we" target="_self">Who are we?</a></li>
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
                            data-toggle="tooltip" title="Instagram"><i
                                class="fab fa-instagram fa-fw fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <div class="modal fade" id="create_campaign" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Create a new campaign</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    {{-- method="POST"  action="{{ route('store') }}" --}}

                    @csrf
                    {{-- <input type="hidden" name="token" value="4b1734c0e1d2c91f6efa42a3ea43cba9" /> --}}
                    <input type="hidden" name="request_type" value="create" />

                    <div class="form-group">
                        <label><i class="fa fa-fw fa-sm fa-signature text-muted mr-1"></i> Name</label>
                        <input type="text" class="form-control" v-model="campaign.name" />
                    </div>

                    <div class="form-group">
                        <label><i class="fa fa-fw fa-sm fa-network-wired text-muted mr-1"></i>Domain /
                            Subdomain</label>
                        <input type="text" class="form-control" v-model="campaign.domain"
                            placeholder="ex: domain.com or subdomain.domain.com" />
                        <small class="form-text text-muted">The domain name of the website where the campaign is
                            going to run.</small>
                        <small class="form-text text-muted">Notifications will NOT work on other domains other than
                            what you define here.</small>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="include_subdomain"
                            id="include_subdomains" v-model="campaign.include_subdomain">
                        <label class="custom-control-label clickable" for="include_subdomains">Include
                            Subdomains</label>
                        <small class="form-text text-muted">All the subdomains will match on this campaign as well
                            if checked.</small>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-block btn-primary" @click="createCampaign">Submit</button>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="modal fade" id="campaign_delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h5 class="modal-title">Delete campaign</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {{-- method="post" action ="route{{'campaign.delete', $campaign->id}}" --}}

                    @csrf

                    {{-- <input type="hidden" name="token" value="4b1734c0e1d2c91f6efa42a3ea43cba9" required="required" /> --}}
                    <input type="hidden" name="campaign_id" value="" />
                    <input type="hidden" name="delete_id" value="id" />
                    <p class="text-muted">By deleting the campaign, all the data associated with the campaign
                        will be lost. This action cannot be undone.</p>

                    <div class="mt-4">
                        <button value="delete" class="btn btn-block btn-danger"
                            @click="deleteCampaign('index')">Delete</button>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <textarea style="display:none" id="campaigns" cols="30" rows="10">{{ json_encode($campaigns) }}</textarea>
    <textarea style="display:none" id="create-url" cols="30" rows="10">{{ route('campaign.create') }}</textarea>
    <textarea style="display:none" id="update-url" cols="30" rows="10">{{ route('campaign.update') }}</textarea>
    <textarea style="display:none" id="delete-url" cols="30" rows="10">{{ route('campaign.delete') }}</textarea>

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
                        <p class="text-muted">Copy and paste the following JS Code Snippet before the end of
                            the <code></head></code> of your website.</p>

                        <pre id="pixel_key_html" class="pre-custom rounded"></pre>

                        <div class="mt-4">
                            > <button type="button" class="btn btn-block btn-primary"
                                data-clipboard-target="#pixel_key_html" data-copied="Copied!">Copy Pixel</button>
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
                    <h5 class="modal-title">Update Campaign</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    @csrf
                    {{-- <input type="hidden" name="token" value="4b1734c0e1d2c91f6efa42a3ea43cba9" required="required" /> --}}
                    {{-- <input type="hidden" name="request_type" value="update" />
            <input type="hidden" name="campaign_id" value="" /> --}}

                    <div class="notification-container"></div>

                    <div class="form-group">
                        @csrf
                        <label><i class="fa fa-fw fa-sm fa-signature text-muted mr-1"></i>name</label>
                        <input type="text" class="form-control" v-model="campaignEdit.name"  />
                    </div>

                    <div class="form-group">
                        <label><i class="fa fa-fw fa-sm fa-network-wired text-muted mr-1"></i>domain</label>
                        <input type="text" class="form-control" v-model="campaignEdit.domain"
                            placeholder="ex: domain.com or subdomain.domain.com" required="required" />
                        <small class="form-text text-muted">The domain name of the website where the campaign is
                            going to run.</small>
                        <small class="form-text text-muted">Notifications will NOT work on other domains other than
                            what you define here.</small>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" v-model="campaignEdit.include_subdomain"
                            id="campaign_update_include_subdomains">
                        <label class="custom-control-label clickable"
                            for="campaign_update_include_subdomains">Include Subdomains</label>
                        <small class="form-text text-muted">All the subdomains will match on this campaign as well
                            if checked.</small>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-block btn-primary" @click="update_campaign">Submit</button>
                    </div>

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
                        <input type="hidden" name="token" value="4b1734c0e1d2c91f6efa42a3ea43cba9"
                            required="required" />
                        <input type="hidden" name="request_type" value="custom_branding" />
                        <input type="hidden" name="campaign_id" value="" />

                        <div class="form-group">
                            <label for="custom_branding_name"><i
                                    class="fa fa-fw fa-sm fa-random text-muted mr-1"></i> Branding Name</label>
                            <input id="custom_branding_name" type="text" class="form-control" name="name"
                                value="" maxlength="128" />
                            <small class="form-text text-muted">Leave empty to have the default site
                                branding.</small>
                        </div>

                        <div class="form-group">
                            <label for="custom_branding_url"><i class="fa fa-fw fa-sm fa-link text-muted mr-1"></i>
                                URL</label>
                            <input id="custom_branding_url" type="url" class="form-control" name="url" value=""
                                maxlength="2048" />
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" name="submit" class="btn btn-block btn-primary">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
</main>

</div>
</div>
<input type="hidden" name="global_url" value="https://socialproofo.com/demo/" />
<input type="hidden" name="global_token" value="2e92832b44232b8006e7e59f0af65161" />
<input type="hidden" name="global_number_decimal_point" value="." />
<input type="hidden" name="global_number_thousands_separator" value="," />

<script>
    /* Some global variables */
    window.altum = {};
    let global_token = document.querySelector('input[name="global_token"]').value;
    let url = document.querySelector('input[name="global_url"]').value;
    let decimal_point = document.querySelector('[name="global_number_decimal_point"]').value;
    let thousands_separator = document.querySelector('[name="global_number_thousands_separator"]').value;
</script>

<script src="themes/altum/assets/js/libraries/jquery.min.js?v=1300"></script>
<script src="themes/altum/assets/js/libraries/popper.min.js?v=1300"></script>
<script src="themes/altum/assets/js/libraries/bootstrap.min.js?v=1300"></script>
<script src="themes/altum/assets/js/main.js?v=1300"></script>
<script src="themes/altum/assets/js/functions.js?v=1300"></script>
<script src="themes/altum/assets/js/libraries/fontawesome.min.js?v=1300"></script>
<script src="themes/altum/assets/js/libraries/fontawesome-solid.min.js?v=1300"></script>
<script src="themes/altum/assets/js/libraries/fontawesome-brands.modified.js?v=1300"></script>







<script src="themes/altum/assets/js/libraries/clipboard.min.js?v=1300"></script>

<script>
    /* On modal show */
    $('#campaign_pixel_key').on('show.bs.modal', event => {
        let pixel_key = $(event.relatedTarget).data('pixel-key');
        let site_url = "https:\/\/socialproofo.com\/demo\/";

        let pixel_key_html = `&lt;!-- Pixel Code for ${site_url} --&gt;
&lt;script async src="${site_url}pixel/${pixel_key}"&gt;&lt;/script&gt;
&lt;!-- END Pixel Code --&gt;`;

        $(event.currentTarget).find('pre').html(pixel_key_html);

        new ClipboardJS('[data-clipboard-target]');

        /* Handle on click button */
        let copy_button = $(event.currentTarget).find('[data-clipboard-target]');
        let initial_text = copy_button.text();

        copy_button.on('click', () => {

            copy_button.text(copy_button.data('copied'));

            setTimeout(() => {
                copy_button.text(initial_text);
            }, 2500);
        });
    });
</script>


{{-- <script>
var application = new Vue({
el:'#app',
data: {
    name:'',
    domain:''
    include_subdomains:''
},
methods: {
    onSubmit(){
if(this.name !== '' && this.domain !== ''){
var fd = new FormData()

fd.append('name',this.name)
fd.append('domain', this.domain)

axios.post({

})
}
    },
    mounted: function(){
        this.getRecords()
    }
}


})

</script> --}}
{{-- <script>
- /* On modal show load new data */
// $('#update_campaign').on('show.bs.modal', event => {
let campaign_id = $(event.relatedTarget).data('campaign-id');
let name = $(event.relatedTarget).data('name');
let domain = $(event.relatedTarget).data('domain');
let include_subdomains = $(event.relatedTarget).data('include-subdomains');

$(event.currentTarget).find('input[name="campaign_id"]').val(campaign_id);
$(event.currentTarget).find('input[name="name"]').val(name);
$(event.currentTarget).find('input[name="domain"]').val(domain).trigger('change');
$(event.currentTarget).find('input[name="include_subdomains"]').prop('checked', include_subdomains);
});

$('form[name="update_campaign"]').on('submit', event => {

$.ajax({
    type: 'POST',
    url: 'campaigns-ajax',
    data: $(event.currentTarget).serialize(),
    success: (data) => {
        let notification_container = event.currentTarget.querySelector('.notification-container');
        notification_container.innerHTML = '';

        if (data.status == 'error') {
            display_notifications(data.message, 'error', notification_container);
        }

        else if(data.status == 'success') {

            /* Hide modal */
            $('#update_campaign').modal('hide');

            /* Clear input values */
            $('form[name="update_campaign"] input').val('');

            /* Fade out refresh */
            redirect(`home`);

        }
    },
    dataType: 'json'
});

event.preventDefault();

</script>

<script>
/* On modal show load new data */
$('#custom_branding_campaign').on('show.bs.modal', event => {
let campaign_id = $(event.relatedTarget).data('campaign-id');
let branding_name = $(event.relatedTarget).data('branding-name');
let branding_url = $(event.relatedTarget).data('branding-url');

$(event.currentTarget).find('input[name="campaign_id"]').val(campaign_id);
$(event.currentTarget).find('input[name="name"]').val(branding_name);
$(event.currentTarget).find('input[name="url"]').val(branding_url);
});

$('form[name="custom_branding_campaign"]').on('submit', event => {

$.ajax({
    type: 'POST',
    url: 'campaigns-ajax',
    data: $(event.currentTarget).serialize(),
    success: (data) => {
        if (data.status == 'error') {
            notification_container.html('');

        display_notifications(data.message, 'error', notification_container);
    }

    else if(data.status == 'success') {

        /* Hide modal */
        $('#custom_branding_campaign').modal('hide');

    }
},
    dataType: 'json'
});

event.preventDefault();
})
</script>
<script>
$('[data-delete]').on('click', event => {
    let message = $(event.currentTarget).attr('data-delete');

    if(!confirm(message)) return false;

    /* Continue with the deletion */
    ajax_call_helper(event, 'campaigns-ajax', 'delete', () => {

    /* On success delete the actual row from the DOM */
    $(event.currentTarget).closest('tr').remove();

    });

    event.preventDefault();
});


</script> --}}


<script>
    document.querySelectorAll('[data-choose-theme-style]').forEach(theme => {
        theme.addEventListener('click', event => {
            let chosen_theme_style = event.currentTarget.getAttribute('data-choose-theme-style');

            /* Set a cookie with the new theme style */
            set_cookie('theme_style', chosen_theme_style, 30, "\/demo\/");

            /* Change the css and button on the page */
            let css = document.querySelector(`#css_theme_style`);

            document.querySelector(`[data-theme-style]`).setAttribute('data-theme-style',
                chosen_theme_style);

            switch (chosen_theme_style) {
                case 'dark':
                    css.setAttribute('href',
                        "https:\/\/socialproofo.com\/demo\/themes\/altum\/assets\/css\/bootstrap-dark.min.css?v=1300"
                    );
                    document.querySelector(`[data-choose-theme-style="dark"]`).classList.add('d-none');
                    document.querySelector(`[data-choose-theme-style="light"]`).classList.remove(
                        'd-none');
                    break;

                case 'light':
                    css.setAttribute('href',
                        "https:\/\/socialproofo.com\/demo\/themes\/altum\/assets\/css\/bootstrap.min.css?v=1300"
                    );
                    document.querySelector(`[data-choose-theme-style="dark"]`).classList.remove(
                        'd-none');
                    document.querySelector(`[data-choose-theme-style="light"]`).classList.add('d-none');
                    break;
            }

            event.preventDefault();
        });
    })
</script>
<script src="{{ asset('app/campaign.js') }}"></script>
{{-- <script src="{{asset('app/vue.js')}}"></script>
<script src="{{asset('app/axios.js')}}"></script> --}}
</body>

</html>
