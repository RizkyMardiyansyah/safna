    {{-- Footer --}}
    <div class="footer container-fluid bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div style="margin-bottom: 20px;"  class="col-lg-3 col-md-6 col-12 flex-column ">
                    <img src="../img/logo2.svg" alt="Logo" class="footer-logo me-3" style="height: 40px;">
                    <a href="#" style="color: inherit; text-decoration: none;">
                        <p style="margin-top:20px;"><b>Cakung Timur</b>, Jakarta Timur, DKI Jakarta, 13910, Indonesia</p>
                    </a>
                </div>
                
                <!-- About us -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder">About</h6>
                    <a href="/#about" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="About Us">About</p>
                    </a>
                    <a href="/#services" style="color: inherit; text-decoration: none;">
                        <p>My Skills</p>
                    </a>
                    <a href="/#partners" style="color: inherit; text-decoration: none;">
                        <p data-lang-en="Partner and Client" data-lang-id="Mitra dan Klien">My Project</p>
                    </a>
                    
                </div>

                <!-- Our Services -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder">My Skills</h6>
                    <a href="#" style="color: inherit; text-decoration: none;">
                        <p>Lorem ipsum dolor</p>
                    </a>
                    <a href="#" style="color: inherit; text-decoration: none;">
                        <p>Consectetur adipiscing</p>
                    </a>
                    <a href="#" style="color: inherit; text-decoration: none;">
                        <p>Sed do eiusmod tempor</p>
                    </a>
                </div>

                <!-- Contact Us -->
                <div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-12 text-left">
                    <h6 style="font-weight:bolder" data-lang-en="Contact Us" data-lang-id="Hubungi Kami">Contact</h6>
                    <a href="mailto:hi@mardsoft.com" style="color: inherit; text-decoration: none;">
                        <p>hi@mardsoft.com</p>
                    </a>
                    <a style="margin-top: 10px;" href="/contact" class="btn btn-primary" data-lang-en="Get in Touch" data-lang-id="Hubungi Kami">
                        Get in Touch
                    </a>
                </div>
            </div>

            <!-- Footer Bawah -->
            <div style="margin-top: 10px" class="row align-items-center">
                <!-- Social Media Icons Section -->
                <div class="order-md-2 col-lg-6 col-md-6 col-12 d-flex justify-content-lg-end justify-content-md-end justify-content-start">
                    <footer class="mt-4 ml-md-auto">
                        {{-- <a href="#" class="me-3" style="color: inherit; text-decoration: none;">
                            <i class="fab fa-github fs-5"></i>
                        </a> --}}
                        <a href="https://web.facebook.com/mardsoft" class="me-3" style="color: inherit; text-decoration: none;" title="Facebook">
                            <i class="fab fa-facebook fs-3"></i>
                        </a>
                        <a href="https://www.instagram.com/hi.mardsoft/" class="me-3" style="color: inherit; text-decoration: none;" title="Instagram">
                            <i class="fab fa-instagram fs-3"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/mardsoft/" target="_blank" style="color: inherit; text-decoration: none;" title="LinkedIn">
                            <i class="fab fa-linkedin fs-3"></i>
                        </a>
                    </footer>
                </div>
                <!-- Copyright Section -->
                <div class="order-md-1 copyright col-lg-6 col-md-6 col-12 ">
                    <footer class="mt-4 text-left">
                        <p style="text-transform:capitalize;" class="mb-0">
                            Copyright <span id="year"></span>,  <span style="margin-left: 10px">Mardsoft.</span>
                        </p>
                        
                        <script>
                            document.getElementById("year").textContent = new Date().getFullYear();
                        </script>
                    </footer>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelectorAll('.view').forEach((button) => {
        button.addEventListener('click', () => {
            button.classList.add('viewClicked');
        });
        });
    </script>
    <script>
        
                window.onload = function () {
                    // Ambil preferensi bahasa dari localStorage
                    const savedLanguage = localStorage.getItem('preferredLanguage') || 'en';
        
                    // Atur posisi toggle sesuai bahasa tersimpan
                    const languageToggle = document.getElementById('languageToggle');
                    languageToggle.checked = (savedLanguage === 'en');
                    
                    // Set bahasa saat halaman dimuat
                    switchLanguage(savedLanguage);
                    updateToggleText(savedLanguage);
                };
        
                // Tambahkan event listener pada toggle
                const toggleCheckbox = document.getElementById('languageToggle');
        
                toggleCheckbox.addEventListener('change', function () {
                    const selectedLang = toggleCheckbox.checked ? 'en' : 'id';
        
                    // Simpan preferensi bahasa ke localStorage
                    localStorage.setItem('preferredLanguage', selectedLang);
        
                    // Ubah bahasa dan teks toggle
                    switchLanguage(selectedLang);
                    updateToggleText(selectedLang);
                });
        
                function switchLanguage(lang) {
                    const elements = document.querySelectorAll('[data-lang-en]');
        
                    elements.forEach(element => {
                        element.textContent = element.getAttribute('data-lang-' + lang);
                    });
                }
        
                function updateToggleText(lang) {
                    const toggleInner = document.querySelector('.toggle-inner');
                    toggleInner.textContent = lang === 'en' ? 'EN' : 'IN';
                }
        
        
        
            window.onscroll = function() {
                const navbar = document.getElementById('navbar');
                const floatingButton = document.getElementById("floatingButton");
                
                // Memeriksa scroll untuk navbar
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
        
                // Menampilkan/menyembunyikan tombol berdasarkan scroll
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    floatingButton.style.display = "block";
                } else {
                    floatingButton.style.display = "none";
                }
            };
        
            // Fungsi untuk menggulir ke atas saat tombol diklik
            function topFunction() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        
            // Smooth scroll untuk navigasi di halaman yang sama
        document.querySelectorAll('a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
        
                if (targetId && targetId.startsWith('/#')) {
                    const targetElement = document.querySelector(targetId.slice(1));
        
                    if (targetElement) { // Periksa apakah elemen target ada
                        e.preventDefault(); // Mencegah navigasi default
                        const offsetPosition = targetElement.getBoundingClientRect().top + window.scrollY - 80;
        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        // Pindah ke posisi elemen setelah halaman dimuat
        window.addEventListener('load', () => {
            const hash = window.location.hash; // Mendapatkan bagian hash dari URL
            if (hash) {
                const targetElement = document.querySelector(hash); // Mencari elemen dengan ID hash
                if (targetElement) {
                    const offsetPosition = targetElement.getBoundingClientRect().top + window.scrollY - 80;
        
                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth' // Bisa juga diubah menjadi 'auto' jika tidak ingin animasi di sini
                    });
                }
            }
        });
        </script>