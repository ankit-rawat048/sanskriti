<section class="content-inner service-wrapper">
  <div class="container">
    <div class="service-grid">

      <!-- LEFT CONTENT -->
      <div class="content-area">

        <!-- TAB 1 -->
        <div class="tab-content active" id="tab-food">
          <div class="section-head">
            <h2 class="title">Food: Sattvic &amp; Healthy</h2>
            <p>
              What we eat influences not only our physical well-being but also our emotions and thoughts.
              Yoga classifies food based on its effect on the body and mind: Sattva, Rajas, and Tamas.
            </p>

            <ul class="list-check-2">
              <li>Sattvic food makes you energetic & enthusiastic.</li>
              <li>Rajasic food brings activity or restlessness.</li>
              <li>Tamasic food causes lethargy or sluggishness.</li>
            </ul>
          </div>
        </div>

        <!-- TAB 2 -->
        <div class="tab-content" id="tab-accommodation">
          <div class="section-head">
            <h2 class="title">Accommodation: Clean &amp; Comfy</h2>
            <p>
              Sanskriti Yogpeeth Rishikesh blends Indian tradition with modern comfort,
              offering a peaceful and inspiring atmosphere for students.
            </p>

            <ul class="list-check-2">
              <li>Spacious & clean yoga halls in serene surroundings.</li>
              <li>Located near the sacred Ganga River.</li>
              <li>Calm environment for learning & inner growth.</li>
            </ul>
          </div>
        </div>

      </div>

      <!-- RIGHT TABS -->
      <div class="tabs-area">

        <div class="tab-btn active" data-tab="tab-food">
          <div class="dz-box">
            <img src="images/pic4.jpg" alt="">
            <div class="dz-info">
              <span>Food</span>
              <h5>Sattvic &amp; Healthy</h5>
            </div>
          </div>
        </div>

        <div class="tab-btn" data-tab="tab-accommodation">
          <div class="dz-box">
            <img src="images/pic2.jpeg" alt="">
            <div class="dz-info">
              <span>Accommodation</span>
              <h5>Clean &amp; Comfy</h5>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<style>
/* ====== LAYOUT ====== */
.content-inner {
  padding: 80px 20px;
  background: #f9fdfc;
}

.container {
  max-width: 1200px;
  margin: auto;
}

.service-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 50px;
  align-items: center;
}

/* ====== CONTENT ====== */
.tab-content {
  display: none;
  animation: fadeIn 0.5s ease;
}

.tab-content.active {
  display: block;
}

.section-head .title {
  /* font-size: 32px; */
  font-weight: 800;
  color: #004d40;
  margin-bottom: 20px;
}

.section-head p {
  font-size: 16px;
  color: #555;
  line-height: 1.7;
  margin-bottom: 25px;
}

/* ====== LIST ====== */
.list-check-2 {
  list-style: none;
}

.list-check-2 li {
  padding: 14px 20px 14px 50px;
  margin-bottom: 14px;
  background: #ffffff;
  border-left: 4px solid #00897b;
  border-radius: 12px;
  position: relative;
  font-size: 15px;
}

.list-check-2 li::before {
  content: "✓";
  position: absolute;
  left: 18px;
  top: 14px;
  color: #00897b;
  font-weight: bold;
}

/* ====== TABS ====== */
.tabs-area {
  display: flex;
  flex-direction: column;
  gap: 25px;
}

.tab-btn {
  cursor: pointer;
  transition: all 0.3s ease;
}

.tab-btn.active .dz-box {
  border-color: #00897b;
  transform: translateY(-4px);
}

.dz-box {
  display: flex;
  align-items:center;
  gap: 18px;
  background: #fff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  border: 2px solid transparent;
}

.dz-box img {
  width: 200px;
  height:200px;
  object-fit: cover;
}

.dz-info {
  padding: 15px;
}

.dz-info span {
  font-size: 12px;
  font-weight: 700;
  color: #00897b;
}

.dz-info h5 {
  font-size: 16px;
  font-weight: 700;
  margin-top: 6px;
}

/* ====== ANIMATION ====== */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(10px); }
  to { opacity: 1; transform: translateY(0); }
}

/* ====== RESPONSIVE ====== */
@media (max-width: 900px) {
  .service-grid {
    grid-template-columns: 1fr;
  }
}
</style>
