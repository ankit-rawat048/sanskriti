<section class="content-inner-1 about-wrapper1">
  <style>
    /* ===== Reset & Base ===== */
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 1.7;
      color: #333;
    }

    /* ===== Layout ===== */
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 0 20px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
    }

    .col-6 {
      width: 50%;
    }

    .col-12 {
      width: 100%;
    }

    /* ===== Section Spacing ===== */
    .content-inner-1 {
      padding: 80px 0;
      overflow: hidden;
    }

    /* ===== Image ===== */
    .dz-media img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    /* ===== Section Head ===== */
    .section-head {
      padding-left: 10px;
    }

    .section-head.text-center {
      text-align: center;
    }

    .section-head.text-left {
      text-align: left;
    }

    .sub-title {
      display: inline-block;
      font-size: 14px;
      letter-spacing: 1px;
      text-transform: uppercase;
      color: #c45783;
      margin-bottom: 10px;
    }

    .title {
      font-size: 18px;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .section-head p {
      margin-bottom: 15px;
    }

    /* ===== Evaluation Section ===== */
    .about-info {
      margin-top: 60px;
    }

    .about-info .title {
      font-size: 28px;
      margin-bottom: 15px;
    }

    /* ===== List Style ===== */
    .list-check {
      list-style: none;
      padding: 0;
      margin-top: 20px;
    }

    .list-check li {
      position: relative;
      padding-left: 28px;
      margin-bottom: 12px;
    }

    .list-check li::before {
      content: "✔";
      position: absolute;
      left: 0;
      top: 0;
      color: #00897b;
      font-weight: bold;
    }

    /* ===== Animations (optional WOW replacement) ===== */
    .fade-in {
      animation: fadeInUp 0.8s ease forwards;
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

    /* ===== Responsive ===== */
    @media (max-width: 992px) {
      .col-6 {
        width: 100%;
      }

      .section-head {
        padding-left: 0;
        text-align: center;
      }
    }
  </style>

  <div class="container">
    <div class="row">
      <div class="col-6 fade-in">
        <div class="dz-media">
          <img src="images/200-hr-multistyley.png" alt="Yoga Course">
        </div>
      </div>

      <div class="col-6 fade-in">
        <div class="section-head text-left">
          <span class="sub-title">Certification</span>
          <h2 class="title">Yoga Certification</h2>

          <p>
            The <strong>200 Hour Multistyle Yoga Teacher Training Course (TTC)</strong> at Sanskriti Yogpeeth Rishikesh is an immersive program designed to build a strong foundation in traditional Hatha Yoga.
          </p>

          <p>
            Set in the serene surroundings of Rishikesh, the yoga capital of the world, this residential course provides a deeply transformative experience.
          </p>

          <p>
            Upon successful completion, graduates receive <strong>Yoga Alliance Certification (RYT 200)</strong>, enabling them to teach globally and embrace a holistic yoga lifestyle.
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 about-info">
        <h2 class="title">Evaluation</h2>
        <p>
          The overall evaluation of the 200 Hour Multistyle Yoga Teacher Training Course (TTC) is based on the following assessments:
        </p>

        <ul class="list-check">
          <li>Written Assessment – Completion of assignments</li>
          <li>Practical Assessment – Designing and conducting yoga sessions</li>
          <li>Student conduct throughout the training</li>
          <li>Minimum 90% attendance with valid justification</li>
        </ul>
      </div>
    </div>
  </div>
</section>
