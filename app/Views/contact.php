<?= $this->include('template/header'); ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Website Artikel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
            color: #ffffff;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            color: #ff4444;
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 40px;
        }

        .contact-form {
            background: rgba(30, 30, 30, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 68, 68, 0.3);
        }

        .contact-info {
            background: rgba(40, 40, 40, 0.9);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255, 68, 68, 0.3);
            color: #e0e0e0;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #ff4444;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #333;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: rgba(50, 50, 50, 0.8);
            color: #e0e0e0;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff4444;
            box-shadow: 0 0 20px rgba(255, 68, 68, 0.3);
            transform: translateY(-2px);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255, 68, 68, 0.4);
            background: linear-gradient(135deg, #ff5555 0%, #dd1111 100%);
        }

        .contact-info h3 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            text-align: center;
            color: #ff4444;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding: 15px;
            background: rgba(50, 50, 50, 0.5);
            border-radius: 10px;
            transition: all 0.3s ease;
            border-left: 4px solid #ff4444;
        }

        .info-item:hover {
            background: rgba(70, 70, 70, 0.5);
            transform: translateX(10px);
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 68, 68, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 20px;
            color: #ff4444;
        }

        .info-content h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: #ff4444;
        }

        .info-content p {
            opacity: 0.9;
            font-size: 0.95rem;
            color: #b0b0b0;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .social-link {
            width: 50px;
            height: 50px;
            background: rgba(255, 68, 68, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ff4444;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 20px;
            border: 1px solid rgba(255, 68, 68, 0.3);
        }

        .social-link:hover {
            background: rgba(255, 68, 68, 0.3);
            transform: translateY(-5px);
            color: #ffffff;
        }

        .success-message {
            display: none;
            background: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .header h1 {
                font-size: 2rem;
            }

            .contact-form,
            .contact-info {
                padding: 30px 20px;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .contact-form,
        .contact-info {
            animation: fadeInUp 0.8s ease;
        }

        .contact-info {
            animation-delay: 0.2s;
        }

        hr {
            border: 0;
            height: 1px;
            background: linear-gradient(to right, transparent, #ff4444, transparent);
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Hubungi Kami</h1>
            <p>Kami senang mendengar dari Anda. Kirimkan pesan dan kami akan segera merespons.</p>
        </div>

        <div class="contact-wrapper">
            <div class="contact-form">
                <div class="success-message" id="successMessage">
                    Pesan Anda telah berhasil dikirim! Terima kasih.
                </div>

                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Nama Lengkap *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subjek *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Pesan *</label>
                        <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Kirim Pesan</button>
                </form>
            </div>

            <div class="contact-info">
                <h3>Informasi Kontak</h3>

                <div class="info-item">
                    <div class="info-icon">📧</div>
                    <div class="info-content">
                        <h4>Email</h4>
                        <p>info@websiteartikel.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📱</div>
                    <div class="info-content">
                        <h4>Telepon</h4>
                        <p>+62 812-3456-7890</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-content">
                        <h4>Alamat</h4>
                        <p>Jl. Contoh No. 123<br>Bekasi, Jawa Barat 17000</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">🕒</div>
                    <div class="info-content">
                        <h4>Jam Kerja</h4>
                        <p>Senin - Jumat: 09:00 - 17:00<br>Sabtu: 09:00 - 15:00</p>
                    </div>
                </div>

                <div class="social-links">
                    <a href="#" class="social-link" title="Facebook">📘</a>
                    <a href="#" class="social-link" title="Twitter">🐦</a>
                    <a href="#" class="social-link" title="Instagram">📷</a>
                    <a href="#" class="social-link" title="LinkedIn">💼</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Simulasi pengiriman form
            const submitBtn = document.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;

            submitBtn.textContent = 'Mengirim...';
            submitBtn.disabled = true;

            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'block';
                document.getElementById('contactForm').reset();
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;

                // Sembunyikan pesan sukses setelah 5 detik
                setTimeout(() => {
                    document.getElementById('successMessage').style.display = 'none';
                }, 5000);
            }, 2000);
        });

        // Animasi smooth untuk input focus
        const inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>

</html>
<?= $this->include('template/footer'); ?>