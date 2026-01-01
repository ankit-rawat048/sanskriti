<section class="section-wrapper2">
  <div class="container">

    <!-- Section Heading -->
    <div class="section-head">
      <!-- <h5 class="sub-title">Overview</h5> -->
      <h2 class="title">
        200 Hour Integrated Yoga Teacher Training Course <br />
        Overview
      </h2>
    </div>

    <!-- Overview Cards -->
    <div class="overview-list">

      <!-- Card -->
      <div class="dz-card active">
        <img src="images/istockphoto-153515458-612x612.jpg" alt="">
        <div class="half-div">
          <div class="card-label">Course</div>
        <div class="card-highlight">Intermediate Level</div>
        <div class="card-desc">
          Intermediate Yoga Course by Sanskriti Yogpeeth Rishikesh enhances Practice,
          Alignment, Breathwork, and Mindfulness for growth.
        </div>
        <div class="card-action">→</div>
        </div>
      </div>

      <div class="dz-card">
        <img src="images/istockphoto-153515458-612x612.jpg" alt="">
        <div class="half-div">
          <div class="card-label">Yoga Style</div>
        <div class="card-highlight">
          Multi-style (Hatha, Ashtanga, Iyengar)
        </div>
        <div class="card-desc">
          Multi-style yoga course covering Hatha, Ashtanga, and Iyengar for Balance,
          Strength, Flexibility, and Alignment.
        </div>
        <div class="card-action">→</div>
        </div>
      </div>

      <div class="dz-card">
        <img src="images/istockphoto-153515458-612x612.jpg" alt="">
        <div class="half-div">
          <div class="card-label">Module</div>
        <div class="card-highlight">Residential with Meals</div>
        <div class="card-desc">
          Residential yoga course with meals, providing a holistic learning experience
          in a serene environment.
        </div>
        <div class="card-action">→</div>
        </div>
      </div>

      <div class="dz-card">
        <img src="images/istockphoto-153515458-612x612.jpg" alt="">
        <div class="half-div">
          <div class="card-label">Duration</div>
        <div class="card-highlight">44 Days</div>
        <div class="card-desc">
          ◉ 30 Days Online – 2.5 hours/day <br />
          ◉ 14 Days Offline in Rishikesh (120 contact hours) <br />
          ▪ Teaching Practical & Final Exams <br />
          ▪ Weekend cultural excursions included
        </div>
        <div class="card-action">→</div>
        </div>
      </div>

      <div class="dz-card">
        <img src="images/istockphoto-153515458-612x612.jpg" alt="">
        <div class="half-div">
          <div class="card-label">Language</div>
        <div class="card-highlight">English</div>
        <div class="card-desc">
          The course is taught in English, ensuring clear communication and understanding.
        </div>
        <div class="card-action">→</div>
        </div>
      </div>

      <div class="dz-card">
        <img src="images/istockphoto-153515458-612x612.jpg" alt="">
        <div class="half-div">
          <div class="card-label">Certification</div>
        <div class="card-highlight">RYT 200 – Yoga Alliance</div>
        <div class="card-desc">
          Certified by Yoga Alliance, enabling global yoga teaching eligibility.
        </div>
        <div class="card-action">→</div>
        </div>
      </div>

      <div class="dz-card">
        <img src="images/istockphoto-153515458-612x612.jpg" alt="">
        <div class="half-div">
          <div class="card-label">Venue</div>
        <div class="card-highlight">Sanskriti Yogpeeth Rishikesh</div>
        <div class="card-desc">
          Located in Yoga Village, Swargashram, Rishikesh – a serene spiritual environment.
        </div>
        <div class="card-action">→</div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* =========================
   SECTION
========================= */
.section-wrapper2 {
  padding: 80px 20px;
  background: #f7f9f8;
}

.container {
  max-width: 1200px;
  margin: auto;
}

/* =========================
   SECTION HEAD
========================= */
.section-head {
  margin-bottom: 50px;
}

.title {
  /* font-size: 32px; */
  line-height: 1.3;
  font-weight: 700;
  color: #222;
  font-family: 'Cormorant Garamond', serif;
}

/* =========================
   OVERVIEW LIST
========================= */
.overview-list {
  width: 100%;
  position: relative;
}

/* =========================
   CARD
========================= */
.dz-card {
  display: none; /* slider logic */
  width: 100%;
  background: #ffffff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 12px 30px rgba(0,0,0,0.06);
  transition: all 0.35s ease;
}

.dz-card.active {
  display: flex;
}

.dz-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 20px 45px rgba(0,0,0,0.1);
}

/* =========================
   IMAGE
========================= */
.dz-card img {
  width: 35%;
  object-fit: cover;
}

/* =========================
   CONTENT SIDE
========================= */
.half-div {
  width: 65%;
  padding: 30px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.card-label {
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
  color: #777;
}

.card-highlight {
  font-size: 20px;
  font-weight: 700;
  color: #ff9781;
}

.card-desc {
  font-size: 15px;
  line-height: 1.7;
  color: #555;
}

.card-action {
  margin-top: auto;
  font-size: 26px;
  color: #00897b;
  align-self: flex-end;
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 768px) {
  .dz-card.active {
    flex-direction: column;
  }

  .dz-card img {
    width: 100%;
    height: 220px;
    object-fit: contain;
  }

  .half-div {
    width: 100%;
    padding: 22px;
  }

  .title {
    font-size: 24px;
  }
}

</style>


<script>
  let slideIndex = 0;
  let slides = document.querySelectorAll('.dz-card');

  function showSlides() {
    // hides all slides
    slides.forEach(slide => slide.classList.remove('active'));
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    slides[slideIndex - 1].classList.add('active');
  }

  showSlides();
  setInterval(showSlides, 5000); //change slides every 5 seconds


</script>