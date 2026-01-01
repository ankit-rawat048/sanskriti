<section class="hero">
  <div class="hero-inner">

    <div class="content">
      <h2>
        <span class="highlight">Integrated Yoga</span><br>
        Teacher Training
      </h2>

      <p>
        Deepen your practice, gain spiritual clarity, and become a globally
        certified yoga instructor guided by experienced teachers.
      </p>

      <button>Join Our Program</button>

      <div class="trust">
        ✔ Certified Course &nbsp; • &nbsp; ✔ Expert Teachers &nbsp; • &nbsp; ✔ Global Recognition
      </div>
    </div>

    <div class="img"></div>

  </div>
</section>

<style>
/* HERO WRAPPER */
.hero {
  background: linear-gradient(to right, #e2adc273, #ffffff);
  padding: 80px 20px;
}

/* CENTER CONTAINER */
.hero-inner {
  max-width: 1200px;
  margin: auto;
  display: flex;
  align-items: center;
  gap: 50px;
}

/* CONTENT */
.content {
  width: 50%;
  display: flex;
  flex-direction: column;
  gap: 18px;
  animation: fadeUp 0.8s ease forwards;
}

.content h2 {
  font-size: clamp(34px, 4vw, 54px);
  font-weight: 700;
  line-height: 1.15;
  color: #4f4846;
  font-family: 'Cormorant Garamond', serif;
}

.highlight {
  color: #a45c79;
}

.content p {
  font-size: 16px;
  line-height: 1.7;
  color: #8b7f7b;
  max-width: 520px;
  font-family: 'DM Sans', sans-serif;
}

/* BUTTON */
.content button {
  margin-top: 10px;
  height: 54px;
  width: 240px;
  border: none;
  border-radius: 30px;
  background:linear-gradient(135deg, #ff8fbc, #a45c79);
  color: #fff;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  box-shadow: 0 10px 25px rgba(148, 39, 39, 0.3);
  transition: all 0.3s ease;
}

.content button:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(148, 39, 39, 0.45);
}

/* TRUST */
.trust {
  font-size: 14px;
  color: #9b8f8b;
  margin-top: 8px;
  font-family: 'DM Sans', sans-serif;
}

/* IMAGE */
.img {
  width: 50%;
  height: 420px;
  background-image: url("images/girl.png");
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
  transition: transform 0.6s ease;
}

.hero-inner:hover .img {
  transform: scale(1.05);
}

/* ANIMATION */
@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* MOBILE */
@media (max-width: 768px) {

  .hero {
    padding: 40px 16px;
    background: #fff;
  }

  .hero-inner {
    flex-direction: column;
    gap: 25px;
  }

  .content {
    width: 100%;
    text-align: center;
    align-items: center;
    order:2
  }

  .content h2 {
    font-size: 32px;
  }

  .content p {
    font-size: 15px;
    max-width: 100%;
  }

  .content button {
    width: 100%;
    max-width: 260px;
    height: 50px;
  }

  .trust {
    font-size: 13px;
  }

  .img {
    order:1;
    width: 100%;
    height: 280px;
  }
}
</style>
