<section class="content-inner faq-section">
  <div class="container">

    <div class="section-head">
      <h2 class="title">Frequently Asked Questions</h2>
    </div>

    <div class="faq-accordion">

      <div class="faq-item">
        <button class="faq-question">
          What is the structure of the 200-Hour Integrated YTTC at Sanskriti Yogpeeth?
          <span class="icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            The course includes 30 days of online training with 2.5 hours of live classes
            (Monday to Saturday), followed by 14 days of intensive in-person training in
            Rishikesh. This blended format allows students to learn from home and complete
            certification at the spiritual center of yoga.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          What topics are covered during the online and offline parts of the course?
          <span class="icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            Online classes focus on Yoga Philosophy, Pranayama, Meditation, Anatomy, and
            Alignment. Offline sessions emphasize intensive asana practice, hands-on
            adjustments, teaching methodology, and practical experience.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          What are the class timings for the online sessions?
          <span class="icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            Online sessions run for 2.5 hours per day, Monday to Saturday. Timings may vary
            by batch and time zone. Sundays are reserved for rest and self-study.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          What certifications will I receive after completing the course?
          <span class="icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            After successful completion, you receive a Yoga Alliance certified 200-hour
            YTTC certificate, allowing you to register as an RYT-200 and teach globally.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          Is it necessary to attend both the online and offline components?
          <span class="icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            Yes, both components are mandatory to fulfill the 200-hour requirement.
            The integrated format ensures balanced theoretical and practical learning.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          What support is provided during the online classes?
          <span class="icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            Students receive live sessions, recordings, manuals, assignments, and regular
            Q&amp;A support. Instructors remain accessible throughout the online phase.
          </p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question">
          What is included during the 14-day in-person training in Rishikesh?
          <span class="icon">+</span>
        </button>
        <div class="faq-answer">
          <p>
            The program includes daily yoga practice, accommodation, yogic meals,
            excursions, spiritual activities, and authentic ashram living in Rishikesh.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
/* ===== SECTION ===== */
.content-inner {
  padding: 80px 20px;
  background: #f8fdfc;
}

.container {
  max-width: 1000px;
  margin: auto;
}

/* ===== HEADING ===== */
.section-head {
  text-align: center;
  margin-bottom: 50px;
}

.section-head .title {
  /* font-size: 34px; */
  font-weight: 800;
  color: #004d40;
}

/* ===== ACCORDION ===== */
.faq-accordion {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.faq-item {
  background: #ffffff;
  border-radius: 18px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  overflow: hidden;
}

/* ===== QUESTION ===== */
.faq-question {
  width: 100%;
  background: none;
  border: none;
  padding: 22px 26px;
  font-size: 16px;
  font-weight: 700;
  text-align: left;
  color: #003d35;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.faq-question:hover {
  background: #f1faf8;
}

.faq-question .icon {
  font-size: 24px;
  color: #00897b;
  transition: transform 0.3s ease;
}

/* ===== ANSWER ===== */
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease;
}

.faq-answer p {
  padding: 0 26px 26px;
  font-size: 15px;
  line-height: 1.7;
  color: #555;
}

/* ===== ACTIVE STATE ===== */
.faq-item.active .faq-answer {
  max-height: 400px;
}

.faq-item.active .icon {
  transform: rotate(45deg);
}
</style>

<script>
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {
  const btn = item.querySelector(".faq-question");

  btn.addEventListener("click", () => {
    faqItems.forEach(i => {
      if (i !== item) i.classList.remove("active");
    });
    item.classList.toggle("active");
  });
});
</script>
