<section class="content-inner-1">
  <div class="custom-container">

    <!-- Section Head -->
    <div class="section-head">
      <!-- <h5 class="sub-title">Inclusions</h5> -->
      <h2 class="title">Course Inclusions</h2>
    </div>

    <!-- Inclusions Grid -->
    <div class="inclusion-grid">

      <div class="inclusion-card active">
        <div class="icon-bx">
          <img src="images/certificate.svg" alt="">
        </div>
        <h5>Certificate:<br>200 Hour Yoga TTC by Yoga Alliance</h5>
      </div>

      <div class="inclusion-card">
        <div class="icon-bx">
          <img src="images/taxi.svg" alt="">
        </div>
        <h5>FREE Taxi Pick-up<br>(Dehradun DED Airport)</h5>
      </div>

      <div class="inclusion-card">
        <div class="icon-bx">
          <img src="images/accomodation.svg" alt="">
        </div>
        <h5>Accommodation with<br>Attached Washroom</h5>
      </div>

      <div class="inclusion-card">
        <div class="icon-bx">
          <img src="images/yogic-food.svg" alt="">
        </div>
        <h5>Yogic Food<br>(100% Vegetarian Meals)</h5>
      </div>

      <div class="inclusion-card">
        <div class="icon-bx">
          <img src="images/home-yogic-food.svg" alt="">
        </div>
        <h5>Special Dietary<br>(Raw, Vegan, Gluten-free)</h5>
      </div>

      <div class="inclusion-card">
        <div class="icon-bx">
          <img src="images/2.svg" alt="">
        </div>
        <h5>24×7<br>Free Wi-Fi</h5>
      </div>

      <div class="inclusion-card">
        <div class="icon-bx">
          <img src="images/home-herbal-tea.svg" alt="">
        </div>
        <h5>2 Times Tea Daily<br>(Ayurvedic / Herbal)</h5>
      </div>

      <div class="inclusion-card">
        <div class="icon-bx">
          <img src="images/yoga-props.svg" alt="">
        </div>
        <h5>Teaching Materials<br>& Modules</h5>
      </div>

    </div>
  </div>
</section>


<style>
/* =========================
   SECTION BASE
========================= */
.content-inner-1 {
  padding: 90px 20px;
  background: linear-gradient(180deg, #e4409936, #ffffff);
  font-family: "Segoe UI", sans-serif;
}

/* Container */
.custom-container {
  max-width: 1300px;
  margin: auto;
}

/* =========================
   SECTION HEAD
========================= */
.section-head {
  text-align: center;
  margin-bottom: 60px;
}

.sub-title {
  font-size: 15px;
  font-weight: 600;
  color: #c45783;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 10px;
}

.title {
  font-size: 36px;
  font-weight: 800;
  color: #004d40;
  font-family: 'Cormorant Garamond', serif;
}

/* =========================
   GRID LAYOUT
========================= */
.inclusion-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 30px;
}

/* =========================
   CARD
========================= */
.inclusion-card {
  background: #ffffff;
  border-radius: 22px;
  padding: 40px 25px;
  text-align: center;
  box-shadow: 0 14px 40px rgba(0, 0, 0, 0.08);
  transition: all 0.35s ease;
  position: relative;
}

/* .inclusion-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 25px 55px rgba(0, 137, 123, 0.18);
} */

/* Highlighted card */
.inclusion-card.highlight {
  border: 2px solid #ff9781;
}

/* =========================
   ICON
========================= */
.icon-bx {
  width: 90px;
  height: 90px;
  margin: 0 auto 25px;
  border-radius: 50%;
  background: linear-gradient(135deg, #f5b4d740, #ffffff);
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-bx img {
  width: 45px;
}

/* =========================
   TEXT
========================= */
.inclusion-card h5 {
  font-size: 17px;
  font-weight: 700;
  color: #004d40;
  line-height: 1.4;
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 768px) {

  .inclusion-grid{
    width:100%;
    overflow:hidden;
    display: block;
  }

  .inclusion-card {
    display:none;
    width:100%;
  }

  .inclusion-card.active {
    display:block ;
  }

  .title {
    font-size: 28px;
  }

  .icon-bx {
    width: 75px;
    height: 75px;
  }

  .icon-bx img {
    width: 38px;
  }

  .inclusion-card h5 {
    font-size: 16px;
  }
}
</style>

<script>
  let slideIndex = 0;
  let slides = document.querySelectorAll('.inclusion-card');

  function showSlides() {
    slides.forEach(slide => slide.classList.remove('active'));

    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }

    slides[slideIndex - 1].classList.add('active');
  }

  showSlides();
  setInterval(showSlides, 3000);
</script>
