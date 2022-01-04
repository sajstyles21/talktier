<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talktier</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Google Font : "Poppins" -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- theme css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body class="antialiased">
    <header>
        <div class="container">
            <div class="brand"><a href="index.html"><img src="images/talktier-logo.png" alt="Talktier"></a>
            </div>
        </div>
        </nav>
    </header>

    <main>
        <section class="hero-sec">
            <div class="hero-content">
                <div class="container">
                    <h1 class="wow fadeInUp">See Who’s Worth Talking To</h1>
                    <h3 class="wow fadeInUp"><span>Save Time! See Who's Interesting!</span></h3>
                    <h2 class="wow fadeInUp">Dating and Social Media Apps Reimagined</h2>
                    <div class="form wow fadeInUp">
                        <form action="{{ route('add-number') }}" method="post">
                            @csrf
                            <input type="text" name="number" placeholder="Enter phone number" required>
                            <button type="submit">Get Access</button>
                        </form>
                        <p><span class="animate-typing" data-animate-loop="false" data-type-speed="100"
                                data-type-delay="0" data-remove-speed="100" data-remove-delay="0"
                                data-cursor-speed="900">
                                Gain Early Access to our Beta Launch
                            </span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-left">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">Tearm of Service</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-right">
                    <div class="social-nav">
                        <ul>
                            <li><a href="#" class="icon-twitter" target="_blank"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 415.84">
                                        <path
                                            d="M459.37,151.72c.33,4.54.33,9.09.33,13.64,0,138.72-105.59,298.56-298.56,298.56A296.51,296.51,0,0,1,0,416.81a215.83,215.83,0,0,0,25.34,1.3,210.15,210.15,0,0,0,130.27-44.83A105.12,105.12,0,0,1,57.5,300.51a132.94,132.94,0,0,0,19.82,1.62,111.09,111.09,0,0,0,27.61-3.57,105,105,0,0,1-84.14-103v-1.29a105.67,105.67,0,0,0,47.43,13.31A105.07,105.07,0,0,1,35.74,67.25,298.28,298.28,0,0,0,252.1,177.06a118.78,118.78,0,0,1-2.6-24,105,105,0,0,1,181.6-71.8,206.58,206.58,0,0,0,66.6-25.34,104.61,104.61,0,0,1-46.13,57.83A210.61,210.61,0,0,0,512,97.46a225.62,225.62,0,0,1-52.63,54.26Z"
                                            transform="translate(0 -48.08)" />
                                    </svg></a></li>
                            <li><a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448.25 448.15">
                                        <path
                                            d="M224.1,141A114.9,114.9,0,1,0,339,255.9,114.72,114.72,0,0,0,224.1,141Zm0,189.6a74.7,74.7,0,1,1,74.7-74.7,74.84,74.84,0,0,1-74.7,74.7ZM370.5,136.3a26.8,26.8,0,1,1-26.8-26.8A26.74,26.74,0,0,1,370.5,136.3Zm76.1,27.2c-1.7-35.9-9.9-67.7-36.2-93.9s-58-34.4-93.9-36.2c-37-2.1-147.9-2.1-184.9,0C95.8,35.1,64,43.3,37.7,69.5s-34.4,58-36.2,93.9c-2.1,37-2.1,147.9,0,184.9,1.7,35.9,9.9,67.7,36.2,93.9s58,34.4,93.9,36.2c37,2.1,147.9,2.1,184.9,0,35.9-1.7,67.7-9.9,93.9-36.2s34.4-58,36.2-93.9c2.1-37,2.1-147.8,0-184.8ZM398.8,388a75.63,75.63,0,0,1-42.6,42.6c-29.5,11.7-99.5,9-132.1,9s-102.7,2.6-132.1-9A75.63,75.63,0,0,1,49.4,388c-11.7-29.5-9-99.5-9-132.1s-2.6-102.7,9-132.1A75.63,75.63,0,0,1,92,81.2c29.5-11.7,99.5-9,132.1-9s102.7-2.6,132.1,9a75.63,75.63,0,0,1,42.6,42.6c11.7,29.5,9,99.5,9,132.1S410.5,358.6,398.8,388Z"
                                            transform="translate(0.07 -31.82)" />
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- script -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateTyping.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>



</body>

</html>
