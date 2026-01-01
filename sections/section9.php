<section class="content-inner overflow-hidden">
  <div class="container">

    <div class="section-head">
      <h5 class="sub-title">Excursions</h5>
      <h2 class="title">Excursions: Beyond the Courses</h2>
    </div>

    <div class="slider-container">
      <div class="slide-wrapper">

        <div class="icon-bx-wraper active">
          <div class="icon-content">
            <h5><a href="#">Opening Havan</a></h5>
            <p>Opening Hawan (Fire Ceremony)</p>
          </div>
          <div class="icon-bx">
            <img src="images/hava.svg" alt="">
          </div>
        </div>

        <div class="icon-bx-wraper">
          <div class="icon-content">
            <h5><a href="#">Ganga Aarti</a></h5>
            <p>Parmarth Niketan Ashram</p>
          </div>
          <div class="icon-bx">
            <img src="images/ganga arti.svg" alt="">
          </div>
        </div>

        <div class="icon-bx-wraper">
          <div class="icon-content">
            <h5><a href="#">Sunrise View</a></h5>
            <p>Kunjapuri / Balkumari Temple</p>
          </div>
          <div class="icon-bx">
            <img src="images/sunri.svg" alt="">
          </div>
        </div>

        <div class="icon-bx-wraper">
          <div class="icon-content">
            <h5><a href="#">Outdoor Yoga</a></h5>
            <p>Yoga by the Ganges</p>
          </div>
          <div class="icon-bx">
            <img src="images/outdoor-yoga.svg" alt="">
          </div>
        </div>

        <div class="icon-bx-wraper">
          <div class="icon-content">
            <h5><a href="#">Meditation Cave</a></h5>
            <p>Mouni / Vashishtha Cave Tour</p>
          </div>
          <div class="icon-bx">
            <img src="images/mediatation.svg" alt="">
          </div>
        </div>

        <div class="icon-bx-wraper">
          <div class="icon-content">
            <h5><a href="#">Dance Class</a></h5>
            <p>Bollywood & Classical Dance</p>
          </div>
          <div class="icon-bx">
            <img src="images/classic-dance.svg" alt="">
          </div>
        </div>

        <div class="icon-bx-wraper">
          <div class="icon-content">
            <h5><a href="#">Classical Music Concert</a></h5>
            <p>With Gurukul Students</p>
          </div>
          <div class="icon-bx">
            <img src="images/music-room.svg" alt="">
          </div>
        </div>

        <div class="icon-bx-wraper">
          <div class="icon-content">
            <h5><a href="#">Bhootnath Temple</a></h5>
            <p>13th Floor Temple – Sunset View</p>
          </div>
          <div class="icon-bx">
            <img src="images/temple.svg" alt="">
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<style>
/* ===== SECTION ===== */
.content-inner {
  padding: 80px 20px;
  background: linear-gradient(135deg, #f4fffc, #eefaf8);
}

.container {
  max-width: 1200px;
  margin: auto;
}

/* ===== HEADER ===== */
.section-head {
  text-align: center;
  margin-bottom: 50px;
}

.sub-title {
  font-size: 14px;
  letter-spacing: 1px;
  color: #c45783;
}

.title {
  /* font-size: 34px; */
  color: #222;
}

/* ===== SLIDER ===== */
.slider-container {
  width: 900px;
  margin: auto;
  overflow: hidden;
}

.slide-wrapper {
  display: flex;
  transition: transform 0.5s ease-in-out;
}

/* ===== CARD ===== */
.icon-bx-wraper {
  background: #fff;
  border-radius: 18px;
  padding: 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
  width: 300px;
  height: 200px;
  flex-shrink: 0;
  transition: 0.35s;
}

.icon-bx-wraper:hover {
  transform: translateY(-6px);
}

.icon-bx-wraper.active {
  border: 2px solid #b944732b;
}

/* ===== CONTENT ===== */
.icon-content {
  width: 70%;
}

.icon-content h5 {
  font-size: 18px;
}

.icon-content h5 a {
  color: #222;
  text-decoration: none;
}

.icon-bx-wraper:hover h5 a {
  color: #00897b;
}

.icon-content p {
  font-size: 14px;
  color: #666;
}

/* ===== ICON ===== */
.icon-bx {
  width: 70px;
  height: 70px;
  background: #b944732b;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.icon-bx img {
  width: 36px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .slider-container {
    width: 100%;
  }
}
</style>


<script>
window.onload = function () {

  const slideWrapper = document.querySelector('.slide-wrapper');
  const slides = document.querySelectorAll('.icon-bx-wraper');
  const slidesVisible = 3;
  const totalSlides = slides.length;
  let currentIndex = 0;

  function getSlideWidth() {
    return slides[0].offsetWidth;
  }

  function nextSlide() {
    slides.forEach(slide => slide.classList.remove('active'));

    if (currentIndex >= totalSlides - slidesVisible) {
      currentIndex = 0;
      slideWrapper.style.transition = 'none';
      slideWrapper.style.transform = 'translateX(0)';
      slideWrapper.offsetHeight; // force reflow
      slideWrapper.style.transition = 'transform 0.5s ease-in-out';
    } else {
      currentIndex++;
    }

    slides[currentIndex].classList.add('active');

    const offset = -currentIndex * getSlideWidth();
    slideWrapper.style.transform = `translateX(${offset}px)`;
  }

  let autoSlide = setInterval(nextSlide, 3000);

  slideWrapper.addEventListener('mouseenter', () => {
    clearInterval(autoSlide);
  });

  slideWrapper.addEventListener('mouseleave', () => {
    autoSlide = setInterval(nextSlide, 3000);
  });

};
</script>
