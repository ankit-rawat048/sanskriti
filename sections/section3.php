  <!-- Swiper CSS -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
  />

  <style>
    /* Slider Wrapper */
    .blog-slider-wrapper {
      width: 90%;
      max-width: 1200px;
      margin: auto;
      padding: 50px 0;
    }

    /* Slide alignment */
    .swiper-slide {
      display: flex;
      justify-content: center;
    }

    /* Card */
    .image-box-wrapper {
      background: #ffffff;
      border-radius: 16px;
      overflow: hidden;
      width: 100%;
      max-width: 360px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .image-box-wrapper:hover {
      transform: translateY(-8px);
      box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
    }

    /* Image */
    .dz-media img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      display: block;
      transition: transform 0.4s ease;
    }

    .image-box-wrapper:hover .dz-media img {
      transform: scale(1.06);
    }

    /* Content */
    .dz-content {
      padding: 22px 20px;
      text-align: center;
    }

    .dz-title {
      font-size: 20px;
      font-weight: 600;
      color: #00897b;
      margin-bottom: 10px;
    }

    .dz-title a {
      color: inherit;
      text-decoration: none;
    }

    .dz-title a:hover {
      color: #00695c;
    }

    .dz-content p {
      font-size: 15px;
      line-height: 1.6;
      color: #555;
    }

    /* Pagination */
    .swiper-pagination {
      margin-top: 25px;
      position: relative;
    }

    .swiper-pagination-bullet {
      background: #00897b;
      opacity: 0.4;
    }

    .swiper-pagination-bullet-active {
      opacity: 1;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .dz-media img {
        height: 180px;
      }

      .dz-title {
        font-size: 18px;
      }

      .dz-content p {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>

  <!-- Swiper Slider -->
  <div class="blog-slider-wrapper swiper mySwiper">
    <div class="swiper-wrapper">

      <!-- Slide 1 -->
      <div class="swiper-slide">
        <div class="image-box-wrapper">
          <div class="dz-media">
            <img src="images/pic1.png" alt="Accommodation">
          </div>
          <div class="dz-content">
            <h5 class="dz-title">
              <a href="#">Accommodation</a>
            </h5>
            <p>
              Cozy accommodation ensures restful, comfortable retreats for students during practice.
            </p>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide">
        <div class="image-box-wrapper">
          <div class="dz-media">
            <img src="images/pic2.png" alt="Yogic Food">
          </div>
          <div class="dz-content">
            <h5 class="dz-title">
              <a href="#">Yogic Food</a>
            </h5>
            <p>
              Enjoy a gluten-free Sattvic diet that keeps you energized, refreshed, and balanced.
            </p>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide">
        <div class="image-box-wrapper">
          <div class="dz-media">
            <img src="images/pic3.png" alt="Transportation">
          </div>
          <div class="dz-content">
            <h5 class="dz-title">
              <a href="#">Transportation</a>
            </h5>
            <p>
              Reliable transportation ensures smooth travel for classes, outings, and activities.
            </p>
          </div>
        </div>
      </div>
      

    </div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script>
    new Swiper(".mySwiper", {
      slidesPerView: 1.2,
      spaceBetween: 20,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });
  </script>

</body>
</html>
