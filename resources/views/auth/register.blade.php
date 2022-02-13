<!DOCTYPE html>
<html lang="en" dir="ltr">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <title>Register - SocialProofo Demo</title>
        <base >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

                
        
        <link rel="alternate" href="register.html" hreflang="x-default" />
        
                    <link href="uploads/favicon/f9ab739e0e0982a8b98ecd6e7506656e.png" rel="shortcut icon" />
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">

        <link href="themes/altum/assets/css/bootstrap-dark.min1eb2.css?v=1200" id="css_theme_style" rel="stylesheet" media="screen,print">
        <link href="themes/altum/assets/css/custom1eb2.css?v=1200" rel="stylesheet" media="screen">
        <link href="themes/altum/assets/css/animate.min1eb2.css?v=1200" rel="stylesheet" media="screen">
        <link href="themes/altum/assets/css/pixel1eb2.css?v=1200" rel="stylesheet" media="screen">
                    <!-- Pixel Code for https://pixel.socialproofo.com/ -->
<script defer src="https://pixel.socialproofo.com/pixel/BRd8zqCcSdrWOqof"></script>
<!-- END Pixel Code -->

<script async src="pixel/socialproofo"></script>
        
            </head>

            <body class=" bg-white">
                        

                        <main class="py-5" data-theme-style="dark">
                
                            <div class="container mb-5">
                                <div class="d-flex justify-content-center">
                                    <a href="https://socialproofo.com/demo/">
                                                                    <img src="https://socialproofo.com/demo/uploads/logo/logo.png" class="img-fluid navbar-logo" alt="Website Logo" />
                                                            </a>
                                </div>
                            </div>
                
                            
                <div class="container">
                
                    <div class="d-flex flex-column align-items-center">
                        <div class="col-xs-12 col-md-12 col-lg-10">
                            
                            <div class="card border-0 flex-row">
                                <div class="card-body shadow-md p-5">
                
                                    <h4 class="card-title">Register</h4>
                
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                
                                <div class="card-image card-image-register shadow-md p-5">
                                    <p class="h1 text-white mb-3">420+</p>
                                    <p class="h4 text-white">Total notifications created with our platform.</p>
                                </div>
                            </div>
                
                            <div class="text-center mt-4">
                                <small><a href="{{ route ('login')}}" class="text-muted">Already have an account?</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                        </main>
                
                            
        
        
<input type="hidden" name="global_url" value="https://socialproofo.com/demo/" />
<input type="hidden" name="global_token" value="c0e9600a832fa6a049c19e7cda334ff5" />
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

                    <script src="themes/altum/assets/js/libraries/jquery.min1eb2.js?v=1200"></script>
                    <script src="themes/altum/assets/js/libraries/popper.min1eb2.js?v=1200"></script>
                    <script src="themes/altum/assets/js/libraries/bootstrap.min1eb2.js?v=1200"></script>
                    <script src="themes/altum/assets/js/main1eb2.js?v=1200"></script>
                    <script src="themes/altum/assets/js/functions1eb2.js?v=1200"></script>
                    <script src="themes/altum/assets/js/libraries/fontawesome.min1eb2.js?v=1200"></script>
                    <script src="themes/altum/assets/js/libraries/fontawesome-solid.min1eb2.js?v=1200"></script>
                    <script src="themes/altum/assets/js/libraries/fontawesome-brands.modified1eb2.js?v=1200"></script>
        
        <script src="https://hcaptcha.com/1/api.js?hl=en" async defer></script>
        <script>
    document.querySelectorAll('[data-choose-theme-style]').forEach(theme => {
        theme.addEventListener('click', event => {
            let chosen_theme_style = event.currentTarget.getAttribute('data-choose-theme-style');

            /* Set a cookie with the new theme style */
            set_cookie('theme_style', chosen_theme_style, 30, "#\/demo\/");

            /* Change the css and button on the page */
            let css = document.querySelector(`#css_theme_style`);

            document.querySelector(`[data-theme-style]`).setAttribute('data-theme-style', chosen_theme_style);

            switch(chosen_theme_style) {
                case 'dark':
                    css.setAttribute('href', "https_.html\/\/socialproofo.com\/demo\/themes\/altum\/assets\/css\/bootstrap-dark.min.css?v=1200");
                    document.querySelector(`[data-choose-theme-style="dark"]`).classList.add('d-none');
                    document.querySelector(`[data-choose-theme-style="light"]`).classList.remove('d-none');
                    break;

                case 'light':
                    css.setAttribute('href', "https_.html\/\/socialproofo.com\/demo\/themes\/altum\/assets\/css\/bootstrap.min.css?v=1200");
                    document.querySelector(`[data-choose-theme-style="dark"]`).classList.remove('d-none');
                    document.querySelector(`[data-choose-theme-style="light"]`).classList.add('d-none');
                    break;
            }

            event.preventDefault();
        });
    })
</script>
    </body>


</html>



