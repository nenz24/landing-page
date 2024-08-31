<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Funvita Indonesia Investama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        } 
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: transparent;
            transition: background-color 0.3s, color 0.3s;
            position: fixed;
            width: 100%;
            height: 12%;
            top: 0;
            z-index: 1000;
        }

        .header.scrolled {
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header img {
            margin-left: 30px;
            width: 100px;
            height: auto;
            transition: filter 0.5s;
        }
        .header nav {
            position: absolute;
            top: 50%;
            left: 50%;
            right: 30%;
            transform: translate(-50%, -50%);
            display: flex;
        }
        .header nav a {
            color: white;
            text-decoration: none;
            align-items: center;
            margin-right: 30px;
            padding: 10px;
            transition: filter 0.3s;
        }

        .header nav a:hover {
            color: rgb(0, 144, 234);
        }
        .header.scrolled nav a {
            filter: invert(1);
        }

        .header .btn {
            margin-right: 50px;
            padding: 10px 20px;
            color: white;
            background: rgb(0, 144, 234);
            font-size: 1rem;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
        }
        .hero {
            background: url('{{ asset('image/headerBG.png') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            text-align: center;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            padding: 0px;
        }

        .hero h1 {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 4rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            padding: 20px 0px;
        }
        *, *::before, *::after {
        box-sizing: border-box;
        }
        @keyframes rotate {
        100% {
            transform: rotate(1turn);
        }
        }

        .border {
            font-family: Georgia, 'Times New Roman', Times, serif;
            position: relative;
            font-size: 1.35rem;    
            padding: 5px 5px;        
            border-radius: 15px;
            margin-left: 250px;
            top: 50%;
            right: 0%;
            left: 0%;
            width: 300px;
            height: 55px;
            overflow: hidden;
            align-items: center;
            text-align: center;
            z-index: 0;
        }
        .border::before {
            content: '';
            position: absolute;
            z-index: -2;
            left: -50%;
            top: -50%;
            width: 200%;
            height: 50%;
            background-repeat: no-repeat;
            background-size: 50% 50%, 50% 50%;
            background-position: 0 0, 100% 0, 100% 100%, 0 100%;
            background-image: linear-gradient(#FFC107, #FFC107), 
                            linear-gradient(#3F51B5, #3F51B5), 
                            linear-gradient(#E91E63, #E91E63), 
                            linear-gradient(#4CAF50, #4CAF50);
            animation: rotate 3s linear infinite;
        }
        .border::after {
            content: '';
            position: absolute;
            z-index: -1;
            left: 8px;
            top: 1px;
            width: calc(95% - 0px);
            height: calc(95% - 0px);
            background: url('{{ asset('image/headerBG.png') }}');
            border-radius: 15px;
        }

        .hero .btn {
            margin-top: 50px;
            padding: 15px 30px;
            font-size: 1.2rem;
            border: 1px solid white;
            background-color: transparent;
            color: white;
            border-radius: 15px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .hero .btn:hover {
            background-color: rgb(0, 144, 234);
        }
        .section-padding {
            padding: 50px 80px;
            text-align: center;
        }
        .services-section .row {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .services-section .col-md-4 {
            flex: 0 0 calc(50% - 20px); 
            margin-bottom: 20px; 
        }

        .services-section .service-card {
            background-color: white;
            border: 1px solid #ddd;
            text-align: center;
            padding: 30px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .services-section .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .services-section .service-card i {
            color: #007bff;
            margin-bottom: 10px;
        }
        .why-choose-us {
            background-color: #fff;
            text-align: center;
            padding: 0px 20px;
        }

        .why-choose-us h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
        }

        .why-choose-us p {
            font-size: 1.2rem;
            text-align: justify;
            margin-bottom: 20px;
        }

        .why-choose-us .points {
            display: flex;
            justify-content: space-around;
            flex: 50%;
        }

        .why-choose-us .point {
            max-width: 300px;
            margin: 10px;
            text-align: left;
        }
        .cta-section {
            background: url('{{ asset('image/headerBG.png') }}');
            color: white;
            text-align: center;
            padding: 60px 0;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        .cta-section a {
            font-size: 1.2rem;
            background-color: rgb(0, 144, 234);
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
        }
        .contact-section {
            padding: 60px 0;
            text-align: center;
        }
        footer {
            background-color: #343a40;
            color: white;
            align-items: center;
            text-align: center;
            padding: 40px 0;
        }

        footer a {
            color: #6c757d;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1.2rem;
                align-items: center;
                text-align: center;
            }

            .header .btn {
                margin-right: 20px;
                padding: 10px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>

    <header class="header" id="header">
        <img src="{{ asset('image/putihNoBG.png') }}" alt="PT. Funvita Indonesia Investama" id="logo">
        <nav>
            <a href="#work">Work</a>
            <a href="#insights">Insights</a>
            <a href="#about">About</a>
        </nav>
        <a href="#contact" class="btn">Contact</a>
    </header>

    <section class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <p class="border">PT. Funvita Indonesia Investama</p>
            <h1>Empowering Your Business Growth</h1>
            <a href="#services" class="btn">Discover Our Services</a>
        </div>
    </section>

    <section class="services-section section-padding" id="services">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-chart-line fa-3x mb-3"></i>
                        <h3>Business Consulting</h3>
                        <p>Helping you create effective business strategies.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-bullhorn fa-3x mb-3"></i>
                        <h3>Digital Marketing Training</h3>
                        <p>Understanding effective digital marketing strategies.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-wallet fa-3x mb-3"></i>
                        <h3>Digital Financial Literacy Training</h3>
                        <p>Improving financial literacy in the digital era.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-tags fa-3x mb-3"></i>
                        <h3>Product Branding Training</h3>
                        <p>Strengthening your product branding in the market.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-microphone fa-3x mb-3"></i>
                        <h3>Public Speaking</h3>
                        <p>Improving public speaking skills with confidence.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="service-card text-center">
                        <i class="fas fa-handshake fa-3x mb-3"></i>
                        <h3>Collaboration</h3>
                        <p>Building strategic partnerships for mutual growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-choose-us section-padding">
        <div class="container">
            <h2>Mengapa Memilih Kami?</h2>
            <div class="points">
                <div class="point">
                    <h3>Pengalaman yang Luas</h3>
                    <p>Kami memiliki pengalaman bertahun-tahun dalam membantu bisnis berkembang di berbagai sektor.</p>
                </div>
                <div class="point">
                    <h3>Tim Profesional</h3>
                    <p>Tim kami terdiri dari para ahli yang berdedikasi dan berpengalaman di bidangnya masing-masing.</p>
                </div>
                <div class="point">
                    <h3>Solusi Terpadu</h3>
                    <p>Kami menawarkan solusi yang terpadu dan disesuaikan dengan kebutuhan spesifik bisnis Anda.</p>
                </div>
                <div class="point">
                    <h3>Pendekatan Inovatif</h3>
                    <p>Kami selalu mengikuti tren terbaru dan mengadopsi teknologi inovatif untuk membantu bisnis Anda tumbuh.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <h2>Siap untuk Meningkatkan Bisnis Anda?</h2>
            <a href="#contact">Hubungi Kami Sekarang</a>
        </div>
    </section>

    <section class="contact-section section-padding" id="contact">
        <div class="container">
            <h2>Kontak Kami</h2>
            <p>Hubungi kami untuk informasi lebih lanjut tentang layanan kami.</p>
            <p><i class="fas fa-map-marker-alt"></i> Alamat: Jl. Contoh No. 123, Denpasar, Bali</p>
            <p><i class="fas fa-phone"></i> Telepon: (0361) 123456</p>
            <p><i class="fas fa-envelope"></i> Email: info@funvita.co.id</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2024 PT. Funvita Indonesia Investama. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#privacy-policy">Kebijakan Privasi</a> |
                    <a href="#terms">Syarat dan Ketentuan</a> |
                    <a href="#social-media">Tautan Sosial Media</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        window.addEventListener('scroll', function() {
            var header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
                logo.src = '{{ asset('image/biruNoBG.png') }}';
            } else {
                header.classList.remove('scrolled');
                logo.src = '{{ asset('image/putihNoBG.png') }}';
            }
        });
    </script>

</body>
</html>

