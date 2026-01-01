<!-- Mobile Only Section -->
<section class="mobile-info">
  <img src="images/logo2.png" alt="Yoga Institute Logo">

  <h2>Comprehensive Curriculum</h2>

  <p>Learn asanas, philosophy, and anatomy through a structured program.</p>
</section>

<style>
  /* MOBILE INFO SECTION */
  .mobile-info {
    display: none;
    /* padding: 30px 20px; */
    text-align: center;
    background: linear-gradient(to bottom, #ffffff, #f7fdfc);
    border-radius: 16px;
    /* margin: 20px 16px; */
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
  }

  /* LOGO */
  .mobile-info img {
    height: 60px;
    margin-bottom: 15px;
  }

  /* HEADING */
  .mobile-info h2 {
    font-size: 26px;
    font-weight: 600;
    color: #222;
    margin-bottom: 10px;
  }

  /* TEXT */
  .mobile-info p {
    font-size: 15px;
    color: #666;
    line-height: 1.6;
  }

  /* SHOW ONLY ON SMALL SCREENS */
  @media (max-width: 768px) {
    .mobile-info {
      display: block;
    }
  }
</style>