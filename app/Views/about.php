<?= $this->include('template/header'); ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Website Artikel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 50%, #1e0f0f 100%);
            color: #e0e0e0;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 30% 20%, rgba(198, 119, 119, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 68, 68, 0.15) 0%, transparent 50%);
            z-index: -1;
        }

        .hero-content h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out;
        }

        .hero-content p {
            font-size: 1.3rem;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        /* Content Sections */
        .section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 60px;
            color: #ffffff;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            border-radius: 2px;
        }

        /* Mission & Vision Cards */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .card {
            background: rgba(30, 30, 30, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 68, 68, 0.3);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 68, 68, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .card:hover::before {
            left: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(255, 0, 0, 0.1);
            border-color: rgba(255, 68, 68, 0.5);
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #ffffff;
        }

        .card p {
            font-size: 1.1rem;
            opacity: 0.8;
            line-height: 1.8;
        }

        /* Stats Section */
        .stats {
            background: rgba(20, 20, 20, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 60px 40px;
            margin: 80px 0;
            border: 1px solid rgba(255, 68, 68, 0.3);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-item h4 {
            font-size: 3rem;
            font-weight: 700;
            color: #ff4444;
            margin-bottom: 10px;
            counter-reset: number;
            animation: countUp 2s ease-out;
        }

        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.8;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Team Section */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .team-member {
            background: rgba(30, 30, 30, 0.8);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 68, 68, 0.3);
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(255, 0, 0, 0.1);
        }

        .member-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            border: 4px solid rgba(255, 68, 68, 0.3);
        }

        .member-name {
            font-size: 1.5rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 10px;
        }

        .member-role {
            color: #ff4444;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .member-bio {
            font-size: 0.95rem;
            opacity: 0.8;
            line-height: 1.6;
        }

        /* Values Section */
        .values-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        .value-item {
            background: rgba(30, 30, 30, 0.8);
            padding: 30px;
            border-radius: 15px;
            border-left: 4px solid #ff4444;
            transition: all 0.3s ease;
        }

        .value-item:hover {
            background: rgba(40, 40, 40, 0.8);
            transform: translateX(10px);
        }

        .value-item h4 {
            color: #ffffff;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .value-item p {
            opacity: 0.8;
            line-height: 1.7;
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            border-radius: 30px;
            padding: 60px 40px;
            text-align: center;
            margin: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            animation: shine 3s infinite;
        }

        .cta h3 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .cta p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }

        .cta-button {
            display: inline-block;
            padding: 15px 40px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.3);
            position: relative;
            z-index: 1;
        }

        .cta-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes shine {
            0% {
                transform: translateX(-100%) translateY(-100%) rotate(45deg);
            }

            100% {
                transform: translateX(100%) translateY(100%) rotate(45deg);
            }
        }

        @keyframes countUp {
            from {
                transform: scale(0.5);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 2rem;
            }

            .cards-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .card {
                padding: 30px 20px;
            }

            .stats {
                padding: 40px 20px;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px;
            }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Tentang Kami</h1>
                <p>Kami adalah platform artikel digital yang berkomitmen menyajikan konten berkualitas tinggi, informatif, dan menginspirasi untuk pembaca di seluruh Indonesia.</p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Visi & Misi Kami</h2>
            <div class="cards-grid">
                <div class="card fade-in">
                    <div class="card-icon">🎯</div>
                    <h3>Visi</h3>
                    <p>Menjadi platform artikel terdepan di Indonesia yang menjembatani pengetahuan dengan kehidupan sehari-hari, menginspirasi pembaca untuk terus berkembang dan belajar.</p>
                </div>
                <div class="card fade-in">
                    <div class="card-icon">🚀</div>
                    <h3>Misi</h3>
                    <p>Menyediakan konten artikel yang berkualitas, akurat, dan mudah dipahami tentang berbagai topik seperti teknologi, lifestyle, bisnis, dan pengembangan diri untuk meningkatkan pengetahuan masyarakat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Nilai-Nilai Kami</h2>
            <div class="values-list">
                <div class="value-item fade-in">
                    <h4>🔍 Akurasi</h4>
                    <p>Setiap artikel melewati proses fact-checking yang ketat untuk memastikan informasi yang akurat dan terpercaya.</p>
                </div>
                <div class="value-item fade-in">
                    <h4>💡 Inovasi</h4>
                    <p>Selalu menghadirkan perspektif baru dan ide-ide segar dalam setiap konten yang kami sajikan.</p>
                </div>
                <div class="value-item fade-in">
                    <h4>🤝 Integritas</h4>
                    <p>Berkomitmen pada transparansi dan kejujuran dalam setiap proses pembuatan konten.</p>
                </div>
                <div class="value-item fade-in">
                    <h4>🎓 Edukasi</h4>
                    <p>Fokus pada konten yang tidak hanya menghibur, tetapi juga memberikan nilai edukatif kepada pembaca.</p>
                </div>
                <div class="value-item fade-in">
                    <h4>🌟 Kualitas</h4>
                    <p>Mengutamakan kualitas daripada kuantitas dalam setiap artikel yang dipublikasikan.</p>
                </div>
                <div class="value-item fade-in">
                    <h4>🌍 Accessibility</h4>
                    <p>Memastikan konten kami dapat diakses dan dipahami oleh berbagai kalangan masyarakat.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section">
        <div class="container">
            <div class="cta fade-in">
                <h3>Bergabunglah dengan Komunitas Kami</h3>
                <p>Dapatkan artikel terbaru dan eksklusif langsung di inbox Anda</p>
                <a href="#" class="cta-button">Berlangganan Newsletter</a>
            </div>
        </div>
    </section>

    <script>
        // Scroll animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all elements with fade-in class
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Counter animation for stats
        function animateCounter(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const current = Math.floor(progress * (end - start) + start);
                element.textContent = current + (element.textContent.includes('+') ? '+' : '');
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statItems = entry.target.querySelectorAll('.stat-item h4');
                    statItems.forEach(item => {
                        const text = item.textContent;
                        const number = parseInt(text.replace(/\D/g, ''));
                        const hasPlus = text.includes('+');
                        const hasK = text.includes('K');

                        let finalNumber = number;
                        if (hasK) finalNumber = number * 1000;

                        item.textContent = '0' + (hasPlus ? '+' : '');
                        animateCounter(item, 0, finalNumber, 2000);

                        if (hasK) {
                            setTimeout(() => {
                                item.textContent = number + 'K' + (hasPlus ? '+' : '');
                            }, 2000);
                        }
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }

        // Smooth scrolling for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
<?= $this->include('template/footer'); ?>