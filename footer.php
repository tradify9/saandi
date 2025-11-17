<footer class="site-footer" style="position: relative; z-index: 10;">
  <style>
    /* ======= SANDEEPANI HI-TECH SCHOOL FOOTER ======= */
    .footer-modern {
      background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.85)),
        url('https://allea.org/wp-content/uploads/2019/06/shutterstock_520698799small.jpg') center/cover no-repeat;
      color: #fff;
      padding-top: 60px;
      padding-bottom: 40px;
      font-family: 'Poppins', sans-serif;
      position: relative;
      overflow: hidden;
    }

    /* Logo */
    .footer-logo img {
      width: 180px;
      max-width: 100%;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.05);
      padding: 10px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .footer-logo img:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 12px rgba(255, 255, 255, 0.15);
    }

    /* Footer Headings */
    .footer-widget h3 {
      color: #fff;
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 1rem;
      border-bottom: 2px solid #2d2ad6;
      display: inline-block;
      padding-bottom: 6px;
    }

    /* Footer Links */
    .footer-widget ul {
      list-style: none;
      padding-left: 0;
    }

    .footer-widget ul li {
      margin-bottom: 8px;
    }

    .footer-widget ul li a {
      color: #bbb;
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 0.95rem;
    }

    .footer-widget ul li a:hover {
      color: #2d2ad6;
      padding-left: 4px;
    }

    /* About Section */
    .footer-about p {
      color: #ccc;
      font-size: 0.95rem;
      line-height: 1.7;
      margin-bottom: 1rem;
    }

    /* --- Clean and Large Social Icons --- */
    .footer-social {
      display: flex;
      gap: 18px;
      justify-content: flex-start;
      margin-top: 15px;
      flex-wrap: wrap;
    }

    .footer-social a {
      color: #ffffff;
      font-size: 1.6rem;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 50%;
      transition: all 0.35s ease;
      position: relative;
      background: transparent; /* ✅ No background color */
    }

    .footer-social a:hover {
      color: #2d2ad6;
      border-color: #2d2ad6;
      transform: translateY(-4px) scale(1.1);
      background: transparent; /* ✅ Keep background clean */
    }

    /* Contact Section */
    .footer-contact {
      margin-top: 1rem;
      color: #ccc;
      font-size: 0.95rem;
    }

    .footer-contact i {
      color: #2d2ad6;
      margin-right: 10px;
    }

    /* Copyright */
    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.15);
      margin-top: 40px;
      padding-top: 15px;
      text-align: center;
      color: #888;
      font-size: 0.9rem;
    }

    /* Back to Top Button */
    #back-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: #2d2ad6;
      color: #fff;
      width: 45px;
      height: 45px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      transition: 0.3s;
      z-index: 100;
    }

    #back-top:hover {
      background: #3b39f0;
      transform: translateY(-4px);
    }

    /* Responsive Fixes */
    @media (max-width: 767px) {
      .footer-logo img {
        margin: 0 auto;
      }

      .footer-social {
        justify-content: center;
      }

      .footer-widget {
        text-align: center;
      }

      .footer-widget h3 {
        margin-bottom: 0.8rem;
      }
    }
  </style>


<!-- WhatsApp Floating Button -->
<div id="whatsapp-btn">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
</div>

<!-- Popup -->
<div id="whatsapp-popup">
    <p>Chat with us on WhatsApp</p>
    <button id="open-whatsapp">Start Chat</button>
</div>

<script>
// Toggle popup
document.getElementById("whatsapp-btn").addEventListener("click", function () {
    const popup = document.getElementById("whatsapp-popup");
    popup.style.display = popup.style.display === "block" ? "none" : "block";
});

// Redirect to WhatsApp
document.getElementById("open-whatsapp").addEventListener("click", function () {
    const phone = "YOUR_NUMBER_HERE"; // ← Add your WhatsApp number here
    window.open(`https://wa.me/${phone}`, "_blank");
});
</script><style>
/* Floating WhatsApp Button */
#whatsapp-btn {
    position: fixed;
    bottom: 80px;
    right: 25px;
    width: 60px;
    height: 60px;
    background: #25d366;
    border-radius: 50%;
    display:flex;
    justify-content:center;
    align-items:center;
    cursor:pointer;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    z-index: 999;
}

#whatsapp-btn img {
    width: 35px;
    height: 35px;
}

/* Popup Box */
#whatsapp-popup {
    position: fixed;
    bottom: 120px;
    right: 25px;
    width: 220px;
    background: white;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
    display: none;
    z-index: 999;
}

#whatsapp-popup button {
    background: #25d366;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}
</style>


  <!-- FOOTER CONTENT -->
  <div class="footer-modern">
    <div class="container">
      <div class="row gy-5">
        
        <!-- Logo + About -->
        <div class="col-md-6 col-lg-3 text-center text-lg-start">
          <div class="footer-logo mb-3">
            <img src="./wp-content/uploads/2025/02/logo_footer-1.png" alt="Sandeepani Hi-Tech School Logo">
          </div>
          <div class="footer-about">
            <p>
              Sandeepani Hi-Tech School, Bangalore is dedicated to shaping young minds through
              quality education, innovation, and holistic development.
            </p>
          </div>
          <div class="footer-social">
            <a href="https://www.instagram.com/saandipini_hitech_school/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/saandipinihitechschoolbengaluru/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/@Saandipini_Hi_Tech_School" target="_blank" title="YouTube"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <!-- Explore -->
        <div class="col-md-6 col-lg-3">
          <div class="footer-widget">
            <h3>Explore</h3>
            <ul>
              <li><a href="./index.php">Home</a></li>
              <li><a href="./about.php">About Us</a></li>
              <li><a href="./chairmans-message.php">Chairman’s Message</a></li>
              <li><a href="./school-secretary.php">School Secretary</a></li>
              <li><a href="./directors-desk.php">Director’s Desk</a></li>
              <li><a href="./gallery.php">Gallery</a></li>
              <li><a href="./contact.php">Contact</a></li>
              <li><a href="http://69.62.85.153/Saandipini">Login</a></li>
            </ul>
          </div>
        </div>

        <!-- Policies -->
        <div class="col-md-6 col-lg-3">
          <div class="footer-widget">
            <h3>Policies</h3>
            <ul>
              <li><a href="./privacy-policy-2.php">Privacy Policy</a></li>
              <li><a href="./refund-policy.php">Refund Policy</a></li>
              <li><a href="./terms-conditions.php">Terms &amp; Conditions</a></li>
            </ul>
          </div>
        </div>

        <!-- Contact -->
        <div class="col-md-6 col-lg-3">
          <div class="footer-widget">
            <h3>Contact</h3>
            <div class="footer-contact"><i class="fas fa-phone-alt"></i> +91 9606447701, 9036067702</div>
            <div class="footer-contact"><i class="fas fa-envelope"></i> saandipinischool@gmail.com</div>
            <div class="footer-contact"><i class="fas fa-map-marker-alt"></i> Bangalore, India</div>
            <a href="http://69.62.85.153/Saandipini" target="_blank" class="btn btn-sm mt-3" style="border-radius:8px; background:#2d2ad6; border:none; color:#fff;">
              Student Login
            </a>
          </div>
        </div>
      </div>

      <!-- Copyright -->
      <div class="footer-bottom mt-5">
        © 2025 Sandeepani Hi-Tech School. All Rights Reserved.
      </div>
    </div>
  </div>

  <!-- Back to top -->
  <div id="back-top">
    <i class="fas fa-arrow-up"></i>
  </div>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Back to top JS -->
  <script>
    const backTop = document.getElementById("back-top");
    window.addEventListener("scroll", () => {
      backTop.style.display = window.scrollY > 200 ? "flex" : "none";
    });
    backTop.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
  </script>
</footer>
