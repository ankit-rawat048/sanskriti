<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Private Yoga Classes | Sanskriti Yogpeeth Rishikesh</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    /* ===== Reset ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Arial, sans-serif;
      line-height: 1.7;
      color: #333;
      background-color: #ffffff;
    }

    img {
      max-width: 100%;
      display: block;
      border-radius: 12px;
    }

    /* ===== Layout ===== */
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 0 20px;
    }

    section {
      padding: 80px 0;
    }

    /* ===== Hero ===== */
    .hero {
      background: #d46793;
      color: #fff;
      text-align: center;
      padding: 100px 0;
    }

    .hero h1 {
      font-size: 44px;
      margin-bottom: 15px;
    }

    .hero p {
      max-width: 900px;
      margin: auto;
      font-size: 18px;
      opacity: 0.95;
    }

    /* ===== Grid ===== */
    .row {
      display: flex;
      gap: 40px;
      align-items: center;
      flex-wrap: wrap;
    }

    .col-6 {
      width: 50%;
    }

    /* ===== Typography ===== */
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
      font-size: 34px;
      margin-bottom: 20px;
    }

    h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #004d40;
    }

    p {
      margin-bottom: 15px;
      font-size: 16px;
    }

    /* ===== Info Box ===== */
    .info-box {
      background: #f0f7f6;
      padding: 35px;
      border-radius: 14px;
      margin-top: 25px;
    }

    .info-list {
      list-style: none;
    }

    .info-list li {
      margin-bottom: 12px;
      padding-left: 24px;
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
      background: #fafafa;
    }

    .benefit-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 25px;
      margin-top: 35px;
    }

    .benefit-item {
      background: #fff;
      padding: 30px;
      border-radius: 14px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    /* ===== Pricing ===== */
    .pricing {
      background: #e0f2f1;
      border-radius: 18px;
      padding: 60px;
      text-align: center;
    }

    .price {
      font-size: 36px;
      font-weight: bold;
      color: #004d40;
      margin: 15px 0;
    }

    /* ===== CTA ===== */
    .cta {
      background: #d46793;
      color: #fff;
      text-align: center;
      padding: 80px 20px;
    }

    .cta a {
      display: inline-block;
      margin-top: 22px;
      background: #fff;
      color: #00897b;
      padding: 15px 36px;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s ease;
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
        font-size: 36px;
      }

      .benefit-grid {
        grid-template-columns: 1fr;
      }

      .pricing {
        padding: 35px;
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
      <h1>Online Private Yoga Classes</h1>
      <p>
        Personalized 1-on-1 live yoga sessions designed exclusively for your body, goals, and lifestyle — guided by experienced yoga teachers from Rishikesh.
      </p>
    </div>
  </section>

  <!-- OVERVIEW -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <img src="images/daily-dropin-private-class.png" alt="Online Private Yoga Classes">
        </div>

        <div class="col-6">
          <span class="sub-title">Personalized Yoga</span>
          <h2>1-on-1 Online Private Yoga Classes</h2>
          <p>
            Our <strong>Online Private Yoga Classes</strong> are specially designed for individuals who want focused,
            customized, and personal guidance from certified yoga teachers.
          </p>
          <p>
            These live sessions help you work on your specific goals such as flexibility, weight loss, therapeutic healing,
            mental wellness, or advanced yoga practice — all from the comfort of your home.
          </p>

          <div class="info-box">
            <ul class="info-list">
              <li>Live 1-on-1 Online Yoga Sessions</li>
              <li>Customized Practice Based on Your Goals</li>
              <li>Flexible Schedule & Time Slots</li>
              <li>Beginner to Advanced Levels</li>
              <li>Classes Conducted via Zoom</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BENEFITS -->
  <section class="benefits">
    <div class="container">
      <span class="sub-title">Why Choose Us</span>
      <h2>Benefits of Online Private Yoga Classes</h2>

      <div class="benefit-grid">
        <div class="benefit-item">
          <h3>Fully Personalized</h3>
          <p>Each session is tailored to your body type, health condition, and personal goals.</p>
        </div>

        <div class="benefit-item">
          <h3>Experienced Teachers</h3>
          <p>Learn from certified and experienced yoga instructors from Rishikesh.</p>
        </div>

        <div class="benefit-item">
          <h3>Flexible Timings</h3>
          <p>Choose class timings that suit your daily routine and time zone.</p>
        </div>

        <div class="benefit-item">
          <h3>Therapeutic Support</h3>
          <p>Ideal for stress relief, back pain, injuries, anxiety, and lifestyle disorders.</p>
        </div>

        <div class="benefit-item">
          <h3>Faster Progress</h3>
          <p>One-to-one attention helps you improve faster and practice safely.</p>
        </div>

        <div class="benefit-item">
          <h3>Practice From Home</h3>
          <p>No travel needed — practice yoga comfortably in your own space.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section>
    <div class="container">
      <div class="pricing">
        <h2>Affordable Monthly Pricing</h2>
        <p>Start your personalized yoga journey today</p>
        <div class="price">$99 USD / Month</div>
        <p>Includes live private sessions with expert yoga teachers</p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta">
    <div class="container">
      <h2>Book Your Online Private Yoga Class</h2>
      <p>Take control of your health with personalized yoga guidance.</p>
      <a href="#">Book a Free Consultation</a>
    </div>
  </section>

</main>

<?php include('includes/footer.php'); ?>
</body>
</html>
