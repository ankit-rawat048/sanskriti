<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Yoga TTC 100 Hour | Sanskriti Yogpeeth Rishikesh</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    /* ===== Base Reset ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Arial, sans-serif;
      line-height: 1.7;
      color: #333;
      background-color: #fff;
    }

    img {
      max-width: 100%;
      display: block;
    }

    /* ===== Layout ===== */
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 0 20px;
    }

    section {
      padding: 70px 0;
    }

    /* ===== Hero Section ===== */
    .hero {
      background: #e07ea5;
      color: #fff;
      padding: 90px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 42px;
      margin-bottom: 15px;
    }

    .hero p {
      max-width: 800px;
      margin: auto;
      font-size: 18px;
      opacity: 0.95;
    }

    /* ===== Two Column Layout ===== */
    .row {
      display: flex;
      gap: 40px;
      align-items: center;
      flex-wrap: wrap;
    }

    .col-6 {
      width: 50%;
    }

    /* ===== Titles ===== */
    .sub-title {
      color: #00897b;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
      font-size: 14px;
      margin-bottom: 10px;
      display: inline-block;
    }

    h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    p {
      margin-bottom: 15px;
      font-size: 16px;
    }

    /* ===== Course Highlights ===== */
    .info-box {
      background: #f6f9f9;
      padding: 30px;
      border-radius: 10px;
    }

    .info-list {
      list-style: none;
      margin-top: 15px;
    }

    .info-list li {
      margin-bottom: 10px;
      padding-left: 22px;
      position: relative;
    }

    .info-list li::before {
      content: "✔";
      position: absolute;
      left: 0;
      color: #00897b;
      font-weight: bold;
    }

    /* ===== Benefits ===== */
    .benefits {
      background-color: #fafafa;
    }

    .benefit-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 25px;
      margin-top: 30px;
    }

    .benefit-item {
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    }

    /* ===== CTA ===== */
    .cta {
      background: #e07ea5;
      color: #fff;
      text-align: center;
      padding: 70px 20px;
    }

    .cta h2 {
      margin-bottom: 15px;
    }

    .cta a {
      display: inline-block;
      margin-top: 20px;
      background: #fff;
      color: #00897b;
      padding: 14px 32px;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .cta a:hover {
      background: #004d40;
      color: #fff;
    }

    /* ===== Responsive ===== */
    @media (max-width: 992px) {
      .col-6 {
        width: 100%;
      }

      .hero h1 {
        font-size: 34px;
      }

      .benefit-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>


<?php include('includes/header.php'); ?>
<main>
    
  <!-- HERO -->
  <section class="hero">
    <div class="container">
      <h1>Online Yoga TTC – 100 Hour</h1>
      <p>
        Begin your yoga journey from the comfort of your home with authentic teachings from Rishikesh, the Yoga Capital of the World.
      </p>
    </div>
  </section>

  <!-- COURSE OVERVIEW -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="images/online-100-yttc.png" alt="Online Yoga TTC 100 Hour">
        </div>

        <div class="col-6">
          <span class="sub-title">Course Overview</span>
          <h2>100 Hour Online Yoga Teacher Training</h2>
          <p>
            The <strong>100 Hour Online Yoga TTC</strong> is a beginner-friendly program designed to introduce you to the fundamentals of yoga.
            This course builds a strong base in asanas, pranayama, meditation, and yoga philosophy.
          </p>
          <p>
            It is ideal for yoga enthusiasts who want to deepen their personal practice or prepare themselves for higher-level teacher training courses.
          </p>

          <div class="info-box">
            <ul class="info-list">
              <li>Duration: 30 Days</li>
              <li>Mode: Live Online Classes (Zoom)</li>
              <li>Yoga Style: Multi-Style Yoga</li>
              <li>Certificate: Course Completion Certificate</li>
              <li>Course Fee: $149 USD</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BENEFITS -->
  <section class="benefits">
    <div class="container">
      <span class="sub-title">Why Choose This Course</span>
      <h2>Benefits of 100 Hour Online Yoga TTC</h2>

      <div class="benefit-grid">
        <div class="benefit-item">
          <h3>Strong Foundation</h3>
          <p>Learn yoga basics with correct alignment, breathing, and awareness.</p>
        </div>

        <div class="benefit-item">
          <h3>Learn From Experts</h3>
          <p>Classes conducted by experienced yoga teachers from Rishikesh.</p>
        </div>

        <div class="benefit-item">
          <h3>Flexible Learning</h3>
          <p>Attend live sessions or revise using recorded classes anytime.</p>
        </div>

        <div class="benefit-item">
          <h3>Path to Advanced TTC</h3>
          <p>Perfect stepping stone for 200 Hour and 300 Hour Yoga TTC programs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>Start Your Yoga Journey Today</h2>
      <p>Join the 100 Hour Online Yoga Teacher Training Course and transform your practice.</p>
      <a href="#">Enroll Now – $149 USD</a>
    </div>
  </section>

</main>

<?php include('includes/footer.php'); ?>
</body>
</html>
