<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ Setting::get('site_title') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ Setting::get('site_icon') }}">

    <!-- Bootstrap -->

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">  
    <link href="/css/hamburgers.css" rel="stylesheet">
    <link href="/css/owl.carousel.css" rel="stylesheet">
<link href="/css/owl.theme.css" rel="stylesheet">
  </head>
  <body>
    <div class="driversignup">
    
        <header>
        
            <div class="container">
            <div class="row">
                <div class="col-md-2 right-padding">
                    <div class="logo" style="margin-top: 5px;margin-bottom: 5px;">
                        <a href="/"><img src="{{ Setting::get('site_logo', asset('logo-black.png')) }}" height="100%" /></a>
                    </div>
            </div>
                <div class="col-md-5 left-padding hidden-xs">
                    <div class="left-header">
                        <div class="left-header">
                         <!--div class="dropdown">
                          <button class="dropbtn">Ride</button>
                            <div class="dropdown-content">
                                <div class="ride">
                                    <div class="container">
                                        <a href="#">Overview</a>
                                        <a href="#">How it Works</a>
                                        <a href="#">Fare Estimator</a>
                                        <a href="#">Safety</a>
                                    </div>
                                </div>
                                <div class="ride ride1">
                                   <div class="container">
                                        <a href="#">Cities</a>
                                        <a href="#">Airports</a>
                                    </div>
                                </div>
                            </div>
                        </div-->  
                        </div>
                        <div class="left-header drive">
                            <!--div class="dropdown">
                            <button class="dropbtn">Drive</button>
                                <div class="dropdown-content">
                                    <div class="ride">
                                        <div class="container">
                                            <a href="#">  Overview</a>
                                            <a href="#">Requirements</a>
                                            <a href="#">Driver App</a>
                                            <a href="#">Vehicle Solutions</a>
                                        </div>
                                    </div>
                                    <div class="ride">
                                        <div class="container">
                                            <a href="#">Safety</a>
                                            <a href="#">Local Driver Guide</a>

                                        </div>
                                    </div>
                                </div>
                            </div-->  
                        </div>
                    </div>                              
                </div>
                <div class="col-md-5 help">
                    <div class="right">
                        <ul class="hidden-xs">
                            <li><a href="#">Help</a></li>
                            <li><a href="/PassengerSignin">sign in</a></li>                            
                        </ul>
                        <div class="location">
                            <figure>
                                <a href="#"><img src="/img/location-hover.png" alt="location" />
                                    <img src="/img/location.png" alt="location" class="location-hover" />
                                </a>
                            </figure>
                            
                        </div>
                        <div class="driver-btn">
                            <a href="{{ url('/provider/register') }}" class="btn btn-default">Become a driver</a>
                        </div>
                        
                        </div>
                    <div class="manu">
                    <div class="hamburger hamburger--3dy-r ">
                                 <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                                </div>
                            </div>
                            <div class="side_menu" id="left_menu">
                    <div class="menu-list">
            <div class="container">
                <div class="border-bottom">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="right-navbar">
                    <h3>Ride</h3>
                <div class="nav-bar">
                <ul>
                <li><a href="#">Overview</a></li>
                <li><a href="#">How it Works</a></li>
                <li><a href="#">Fare Estimator</a></li>
                <li><a href="#">Safety</a></li>
                <li><a href="#">Cities</a></li>
                <li><a href="#">Airports</a></li>
            </ul>
                </div>
                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="left-navbar">
                    <h3>Drive</h3>
                <div class="nav-bar">
                <ul>
                <li><a href="#">Overview</a></li>
                <li><a href="#">Requirements</a></li>
                <li><a href="#">Driver App</a></li>
                <li><a href="#">Vehicle Solutions</a></li>
                <li><a href="#">Safety</a></li>
                <li><a href="#">Local Driver Guide</a></li>
            </ul>
                </div>
                </div>
                    </div>
                </div>
                </div>                                                      
            </div>
        </div>
                    <div class="eats">
                        <div class="container">
                            <h3>Eats and more</h3>
                    <ul>
                        <li><a href="#">Instacab Eats</a></li>
                        <li><a href="#">Instacab for Business</a></li>
                        <li><a href="#">Instacab Freight</a></li>
                    </ul>
                        </div>
                </div>
                    <div class="delhi-eng">
                        <div class="container">
                            <div class="language-city">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="city1">
                                            <svg viewBox="0 0 64 64" width="20px" height="20px" class="_style_30FFBp _style_4wJp4e" data-reactid="154"><path d="M32.0000114,4c-11.0449219,0-20,8.8027344-20,20c0,6.0996094,2,11.03125,6,16.9375l13.1807709,18.6359062 C31.3796368,59.8575249,31.6893368,59.9997215,31.9991455,60c0.3104134,0.0002785,0.6209373-0.141922,0.820179-0.4265938 L46.0000114,40.9375c4-5.90625,6-10.8378906,6-16.9375C52.0000114,12.8027344,43.0449333,4,32.0000114,4z M32.0000114,36.25 c-6.7655029,0-12.25-5.484375-12.25-12.25s5.4844971-12.25,12.25-12.25s12.25,5.484375,12.25,12.25 S38.7655144,36.25,32.0000114,36.25z" data-reactid="155" fill="#fff"></path></svg>
                                            <h3>Delhi NCR</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="city1">
                                            <a class="_style_1wF5gW" href="#" data-reactid="159"><svg viewBox="0 0 64 64" width="20px" height="20px" class="_style_30FFBp _style_4wJp4e" data-reactid="160"><path d="M33.7021484,4.5913086c-0.3100586-0.0356445-0.6191406-0.0869141-0.934082-0.0869141 c-0.0917969,0-0.1821289,0.0224609-0.2734375,0.0258789c-0.1640625-0.003418-0.3251953-0.0258789-0.4907227-0.0258789 c-15.4384766,0-28,12.5615234-28,28c0,15.4404297,12.5615234,28,28,28c0.1655273,0,0.3266602-0.0224609,0.4907227-0.0258789 c0.0913086,0.003418,0.1816406,0.0258789,0.2734375,0.0258789c0.3149414,0,0.6240234-0.0512695,0.934082-0.0869141 c14.6474609-0.8842773,26.3017578-13.046875,26.3017578-27.9130859S48.3496094,5.4755859,33.7021484,4.5913086z M23.6225586,9.4985352c-2.8369141,3.2744141-5.1401367,7.9755859-6.4057617,13.527832 c-3.934082-0.4277344-6.3081055-0.9248047-7.2651367-1.1547852C12.7148438,16.1616211,17.6171875,11.6938477,23.6225586,9.4985352z M7.4907227,32.5043945c0-2.5683594,0.4008789-5.0439453,1.1357422-7.3710938 c0.6674805,0.1816406,3.2211914,0.8120117,7.9482422,1.3364258c-0.2714844,1.9399414-0.4262695,3.9550781-0.4262695,6.034668 c0,2.6425781,0.2529297,5.1772461,0.6821289,7.5864258c-4.0546875,0.4394531-6.5522461,0.9589844-7.6733398,1.2304688 C8.0957031,38.5810547,7.4907227,35.6152344,7.4907227,32.5043945z M10.6801758,44.5527344 c1.269043-0.2705078,3.5415039-0.6787109,6.8984375-1.0292969c1.3217773,4.8876953,3.4707031,9.0180664,6.0439453,11.9868164 C18.1206055,53.5,13.5366211,49.5869141,10.6801758,44.5527344z M30,56.6972656 c-3-1.2558594-7.4179688-6.4589844-9.2285156-13.4731445C23.375,43.03125,27,42.8925781,30,42.8574219V56.6972656z M30,39.3706055 c-3,0.0385742-7.0830078,0.1928711-9.8671875,0.4086914C19.75,37.4692383,19.640625,35.0249023,19.640625,32.5043945 c0-1.9604492,0.0385742-3.8681641,0.2749023-5.7114258C22.7431641,27.0166016,27,27.1777344,30,27.2177734V39.3706055z M30,23.730957c-3-0.0371094-6.9223633-0.1884766-9.6035156-0.394043C22.0708008,15.5424805,27,9.6606445,30,8.3115234V23.730957z M53.9663086,21.6801758c-0.546875,0.1689453-2.7631836,0.7866211-7.1459961,1.3061523 c-0.9892578-5.2597656-2.7744141-9.7421875-5.1020508-12.9780273 C47.0551758,12.3212891,51.3945312,16.4853516,53.9663086,21.6801758z M34,8.2597656 c3,1.2451172,7.9438477,7.1796875,9.5874023,15.0722656C40.9482422,23.5424805,37,23.6953125,34,23.7324219V8.2597656z M34,27.2177734c3-0.0385742,7.2045898-0.2041016,9.996582-0.4360352c0.2299805,1.8466797,0.2885742,3.7573242,0.2885742,5.7226562 c0,2.5234375-0.0893555,4.9711914-0.4624023,7.2841797C41.0742188,39.5668945,37,39.4072266,34,39.3706055V27.2177734z M34,56.7490234V42.8574219c3,0.0351562,6.6523438,0.1767578,9.222168,0.375C41.4418945,50.3393555,37,55.5878906,34,56.7490234z M41.7182617,55.0019531c2.0976562-2.9155273,3.7685547-6.8291016,4.7993164-11.4272461 c3.4487305,0.3974609,5.6196289,0.8588867,6.715332,1.1357422C50.6064453,49.2602539,46.5742188,52.8969727,41.7182617,55.0019531z M47.1386719,40.1313477c0.3535156-2.4189453,0.5566406-4.9682617,0.5566406-7.6269531 c0-2.0942383-0.1254883-4.1206055-0.3476562-6.0732422c5.3911133-0.6464844,7.7763672-1.4570312,7.934082-1.5131836 L54.71875,23.3271484c1.1518555,2.8388672,1.7998047,5.9316406,1.7998047,9.1772461 c0,3.1831055-0.6289062,6.2177734-1.7387695,9.0102539C53.8164062,41.2329102,51.3945312,40.6313477,47.1386719,40.1313477z" data-reactid="161" fill="#fff"></path></svg></a>
                                            <h3>English</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                        
        </div>
    </div>
                        <!--<a href="javascript:void(0)" id="left_menu_open"><img src="img/manu.png" alt="manu"></a>-->
                    </div>    
                </div>
            </div>
        </header>

        <div class="signin_page">
            @yield('content')
            
        </div>

        
        <footer>
            <div class="container">
                <div class="footer-topborder">
                <div class="row">
                    <div class="col-md-4 footer-uber">
                        <div class="footer-topheading">
                <img src="{{ Setting::get('site_logo', asset('logo-black.png')) }}" width="60%" height="60%" />
            </div>
                    </div>
                    <div class="col-md-4 footer-signup">    
                        <div class="footer-topbtn">
                        <a href="/login" class="btn btn-default">SIGN UP TO RIDE</a>
            </div>
                    </div>
                    <div class="col-md-4 footer-becomedriver">
                        <div class="footer-topbtn border">
                        <a href="{{ url('/provider/register') }}" class="btn btn-default">Become a driver</a>
            </div>
                    </div>
                </div>
                </div>
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="location-footer">
                                <ul class="app">
                                    <li>
                                        <a href="{{Setting::get('store_link_ios','#')}}">
                                            <img src="{{asset('asset/img/appstore.png')}}" width="30%" height="30%">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{Setting::get('store_link_android','#')}}">
                                            <img src="{{asset('asset/img/playstore.png')}}" width="30%" height="30%">
                                        </a>
                                    </li>                                                        
                                </ul>       
                            </div>
                            <div class="social-media">
                                <ul> 
                                    <li><a href="#"><img src="img/facebook.png" alt="facebook"/></a></li>
                                    <li><a href="#"><img src="img/google-plus.png" alt="facebook"/></a></li>
                                    <li><a href="#"><img src="img/twitter.png" alt="facebook"/></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-manu">
                        <ul>
                            <li><a  href="/about_us" >About Us</a></li>
                            <li><a  href="/contact_us" >Contact Us</a></li>
                            <li><a href="/help">Help</a></li>
                            <li><a  href="/terms">Terms and Condition</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                        </ul>
                    </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-right">
                        <ul>
                            <li><a href="/user">User</a></li>
                            <li ><a href="/driver">Driver</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Signup</a></li>
                        </ul>
                    </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
        
        <!--script src="{{asset('asset/js/jquery.min.js')}}"></script>
        <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('asset/js/scripts.js')}}"></script-->

        @yield('scripts')
    
</body>
</html>