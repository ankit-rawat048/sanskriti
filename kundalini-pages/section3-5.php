<section class="section-wrapper2">
  <div class="container">

    <!-- Section Heading -->
    <div class="section-head">
      <h5 class="sub-title">Overview</h5>
      <h2 class="title">
        Kundalini Yoga Teacher Training Course Certificate Overview
      </h2>
    </div>

    <!-- Overview Cards -->
    <div class="overview-list">

      <!-- Card -->
      <div class="dz-card">
        <div class="card-label">Course</div>
        <div class="card-highlight">Intermediate Level</div>
        <div class="card-desc">
        Designed for yoga practitioners seeking deeper knowledge and teaching expertise in Kundalini Pranayama, Meditation, and Mantra Chanting.
        </div>
        <div class="card-action">→</div>
      </div>

      <div class="dz-card">
        <div class="card-label">Yoga Style</div>
        <div class="card-highlight">
        Kundalini Meditation, Pranayama & Mantra Chanting
        </div>
        <div class="card-desc">
        Integrates breath control techniques, mindfulness practices, and sacred mantra recitation for holistic mental, emotional, and spiritual transformation.
        </div>
        <div class="card-action">→</div>
      </div>

      <div class="dz-card">
        <div class="card-label">Module</div>
        <div class="card-highlight">Residential with Meals</div>
        <div class="card-desc">
          Includes comfortable accommodations and nutritious vegetarian meals, ensuring a complete yogic lifestyle experience throughout the training.
        </div>
        <div class="card-action">→</div>
      </div>

      <div class="dz-card">
        <div class="card-label">Duration</div>
        <div class="card-highlight">22 Days</div>
        <div class="card-desc">
          An immersive training focused on mastering Pranayama, Meditation, and Mantra Chanting in a peaceful yogic environment.


        </div>
        <div class="card-action">→</div>
      </div>

      <div class="dz-card">
        <div class="card-label">Language</div>
        <div class="card-highlight">English</div>
        <div class="card-desc">
         Conducted in English, making it accessible for international students to grasp profound yogic teachings with clarity.
        </div>
        <div class="card-action">→</div>
      </div>

      <div class="dz-card">
        <div class="card-label">Certification</div>
        <div class="card-highlight">200 Hour Kundalini Yoga Teacher Training Course Certificate</div>
        <div class="card-desc">
          Upon completion, receive a 200-hour Yoga Alliance-certified certificate, allowing you to teach globally with credibility.
        </div>
        <div class="card-action">→</div>
      </div>

      <div class="dz-card">
        <div class="card-label">Venue</div>
        <div class="card-highlight">Sanskriti Yogpeeth Rishikesh</div>
        <div class="card-desc">
          Training in Rishikesh, the yoga capital, surrounded by serene nature and spiritual vibrations, enhancing your learning and personal growth.
        </div>
        <div class="card-action">→</div>
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

