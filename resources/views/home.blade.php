<!doctype html>
<html lang="en">
    <head>        
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="img/favicon.ico">
      <meta name="title" content="Safna Yuliani">
      <meta property="og:site_name" content="Safna Yuliani">
      <meta property="og:title" content="Safna Yuliani">      
      <title>Safna Yuliani</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body id="home">  

    {{-- navbar section --}}
    @include('partials.navbar')
    {{-- Jumbotron Section --}}
    <section class="hero-section">
        <div class="logo-animation-wrapper">
            <img src="img/asana.svg" class="floating-logo" style="top: 22%; left: 90%;">
            <img src="img/trello.svg" class="floating-logo" style="top: 17%; left: 65%;">
            <img src="img/jira.svg" class="floating-logo" style="top: 40%; left: 94%;">
            <img src="img/slack.svg" class="floating-logo" style="top: 32%; left: 63%;">
            <img src="img/notion.svg" class="floating-logo" style="top:30%; left:56%;">
            <img src="img/clickup.svg" class="floating-logo" style="top: 50%; left: 89%;">
            <img src="img/miro.svg" class="floating-logo" style="top: 47%; left: 60%;">
        </div>
    
        <div class="hero-overlay">
            <div class="container hero-text">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="tagline">
                            <h1>I'M</h1>                           
                            <h1 class="digital">Safna Yuliani</h1>                            
                            <br>
                            <h1>Project Manager</h1>
                        </div>                        
                        <p class="subsTag">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet...</p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <!-- kosong atau konten lain -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
    {{-- About Section --}}
    <section id="about" class="about hero-text ">
        <div class="row">
            <div class="col-lg-6 col-12 order-lg-2">
                <img src="img/about.jpg">
            </div>
            <div class="col-lg-6 col-12 order-lg-1 textabout">
                <h1>About</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </section> 
    
    {{-- Service Section --}}
    <section id="services" class="services container hero-text ">
        <div class="row">
            <div class="serv our col-lg-3 col-md-6 col-12 order-lg-4">
                <h1>My Skills</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">                
                <a href="/instant-web-builder" style="text-decoration: none; color: black;">
                    <div class="serContainer ">
                        <h3 class="web" style="color: black;">Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad.</p>
                        <a style="width:100%; margin-top: 10px; font-weight:bolder;" href="/instant-web-builder" class="btn learn">Learn More</a>
                    </div>
                </a>                
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <a href="/custom-app-development" style="text-decoration: none; color: black;">
                    <div class="serContainer">
                        <h3 class="app" style="color: black;">Consectetur adipiscing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad.</p>
                        <a style="width:100%; margin-top: 10px; font-weight:bolder;" href="/custom-app-development" class="btn learn">Learn More</a>
                    </div>
                </a>
            </div>
            <div class="serv col-lg-3 col-md-6 col-12">
                <a href="/one-stop-iot-solutions" style="text-decoration: none; color: black;">
                    <div class="serContainer">
                        <h3 class="iot" style="color: black;">Sed do eiusmod tempor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad.</p>
                        <a style="width:100%; margin-top: 10px; font-weight:bolder;" href="/one-stop-iot-solutions" class="btn learn">Learn More</a>
                    </div>
                </a>
            </div>
            
        </div>
    </section>

{{-- Partner Section --}}
    {{-- <section id="partners" class="partner hero-text " style="margin-top: 100px;">
        <div class="row d-flex flex-wrap">
            <div class="serv col-lg-4 col-12 " >
                <h1 style="text-shadow: none;" data-lang-en="Partners and Clients" data-lang-id="Mitra dan Klien">Partners and Clients</h1>
                <p data-lang-en="Trusted partners and satisfied clients who have collaborated to develop their business ideas." 
                data-lang-id="Mitra terpercaya dan klien puas yang telah bekerjasama mengembangkan ide bisnis mereka.">Trusted partners and satisfied clients who have collaborated to develop their business ideas.</p>
            </div>
            <div class="partner-logos col-lg-8 col-12 d-flex flex-wrap">
                <a href="https://www.mendix.com" target="_blank">
                    <img src="img/mendix.png" alt="Partner 1">
                </a>
                <a href="https://www.aca-apac.com/id" target="_blank">
                    <img src="img/aca.png" alt="Partner 2">
                </a>
                <a href="https://www.bmc.com" target="_blank">
                    <img src="img/bmc.png" alt="Partner 3">
                </a>
                <a href="https://www.miligolas.co.id" target="_blank">
                    <img src="img/miligolas.png" alt="Partner 4">
                </a>
                <a href="https://www.delano-comm.com" target="_blank">
                    <img src="img/delano.png" alt="Partner 5">
                </a>
                <a href="https://www.babagi-tech.co.id" target="_blank">
                    <img src="img/babagi.png" alt="Partner 6">
                </a>
                <a href="https://www.big-solutions.co.id/" target="_blank">
                    <img src="img/big.png" alt="Partner 7">
                </a>
                <a href="https://www.miligolas.co.id" target="_blank">
                    <img src="img/milian.png" alt="Partner 8">
                </a>
                <a href="https://www.pakarangan.id/" target="_blank">
                    <img src="img/pakarangan.png" alt="Partner 9">
                </a>
                <a href="https://www.spyros.co.id" target="_blank">
                    <img src="img/spyros.png" alt="Partner 10">
                </a>
            </div>
        </div>
    </section> --}}
     {{-- Footer Section --}}
     @include('partials.footer')  
 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Event handler untuk merubah opacity gambar secara acak
    document.addEventListener("DOMContentLoaded", function() {
        let images = document.querySelectorAll('.partner-logos img');
        let index = 0;

        // Fungsi untuk merubah opacity secara acak
        function changeOpacityRandomly() {
            // Set opacity semua gambar ke 30%
            images.forEach(img => img.classList.remove('active'));

            // Pilih gambar secara acak
            let randomIndex = Math.floor(Math.random() * images.length);
            images[randomIndex].classList.add('active');
        }

        // Panggil fungsi untuk merubah opacity setiap detik
        setInterval(changeOpacityRandomly, 1000);
    });

    // Observer untuk menambahkan kelas 'visible' ketika elemen terlihat di layar
    const sections = document.querySelectorAll('header, section');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    sections.forEach(section => {
        observer.observe(section);
    });
</script>
<script>
    document.querySelectorAll('.floating-logo').forEach(logo => {
        const random = Math.random() * 5; // 0 - 5 detik
        logo.style.setProperty('--random-delay', random.toFixed(2));
    });
</script>



</body>
</html>
