<section class="course-layout">

    <!-- CONTENT COLUMN -->
    <div class="content-column">

        <div class="course-single">
            <div class="dz-media">
                <img src="images/200-hr-multistyle.png" alt="200 hrs yoga ttc in rishikesh">
            </div>

            <div class="dz-info">
                <div class="post-author">
                    <img src="images/logo2.png" alt="Sanskriti Yogpeeth">
                </div>

                <h3 class="dz-title">
                    200 Hour Integrated Yoga Teacher Training Course
                </h3>

                <h5 class="sub-title">
                    Step into a Journey of Self-Discovery and Transformation!!!
                </h5>

                <p>
                    Embark on a transformative 44-day journey with the 200 Hour Integrated Yoga Teacher Training Course
                    at Sanskriti Yogpeeth Rishikesh.
                </p>

                <p>
                    The training covers asanas, pranayama, meditation, shatkarma, mantra chanting, mudras, yoga
                    philosophy, anatomy, and teaching methodology.
                </p>

                <p>
                    By the end of the course, you will be eligible for Yoga Alliance (USA) certification.
                </p>
            </div>
        </div>

        <div class="content-section">
            <h5 class="sub-title">After Completion</h5>
            <h3 class="dz-title">What You Gain After Completion?</h3>

            <p>
                This course is more than certification — it's a powerful step toward inner growth and professional
                mastery.
            </p>

            <ul class="list-check-2">
                <li>Comprehensive Yogic Knowledge</li>
                <li>Yoga Alliance USA Certification</li>
                <li>Confidence as a Teacher</li>
                <li>Personal Growth & Inner Transformation</li>
                <li>Pathway to Advanced Training</li>
                <li>Living the Yogic Way</li>
                <li>Global Yoga Community</li>
            </ul>

            <h5 class="sub-title">
                Start your journey today — Enroll now and become a certified yoga teacher 🌿
            </h5>
        </div>

    </div>

    <!-- SIDEBAR COLUMN -->
    <aside class="sidebar-column">
        <div class="course-side-bar">

            <h2 class="price">$489 USD</h2>

            <ul class="meta-tags">
                <li>44 Days</li>
                <li>200 Hours</li>
                <li>English</li>
            </ul>

            <ul class="course-info">
                <li><strong>Level:</strong> Intermediate</li>
                <li><strong>Certificate:</strong> RYT 200 Yoga Alliance</li>
                <li><strong>Module:</strong> Residential with Meals</li>
                <li><strong>Location:</strong> Rishikesh, India</li>
            </ul>

            <a href="./registration.php" class="btn-enroll">ENROLL NOW</a>

        </div>
    </aside>

</section>

<style>
    /* =====================
   GLOBAL
  ===================== */
    .course-layout {
        display: grid;
        grid-template-columns: 1fr 360px;
        gap: 40px;
        max-width: 1300px;
        margin: auto;
        padding: 80px 20px;
    }

    /* =====================
   COURSE CARD
  ===================== */
    .course-single {
        background: #ffffff;
        border-radius: 26px;
        overflow: hidden;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.08);
    }

    .dz-media img {
        width: 100%;
        height: 420px;
        object-fit: cover;
    }

    .dz-info {
        padding: 45px;
    }

    .post-author img {
        width: 82px;
        padding: 12px;
        background: #fff;
        border-radius: 16px;
        margin-top: -85px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.18);
    }

    .dz-title {
        /* font-size: 34px; */
        font-weight: 800;
        margin: 28px 0 14px;
        color: #4a4442;
        line-height: 1.15;
        font-family: 'Cormorant Garamond', serif;
    }

    .sub-title {
        font-size: 18px;
        color: #c45783;
        margin-bottom: 24px;
        font-family: 'DM Sans', sans-serif;
    }

    .dz-info p {
        font-size: 16px;
        color: #5f5a58;
        line-height: 1.7;
        margin-bottom: 18px;
        font-family: 'DM Sans', sans-serif;
    }

    /* =====================
   CONTENT SECTION
 ===================== */
    .content-section {
        margin-top: 55px;
        padding: 50px;
        background: #ffffff;
        border-radius: 26px;
        box-shadow: 0 18px 45px rgba(0, 0, 0, 0.06);
    }

    .content-section p {
        max-width: 720px;
    }

    /* =====================
   CHECK LIST
  ===================== */
    .list-check-2 {
        list-style: none;
        margin: 35px 0;
        padding: 0;
    }

    .list-check-2 li {
        padding: 16px 22px 16px 58px;
        margin-bottom: 14px;
        background: #f4fbfa;
        border-left: 4px solid #00897b;
        border-radius: 14px;
        position: relative;
        font-size: 15px;
        color: #4d4d4d;
    }

    .list-check-2 li::before {
        content: "✓";
        position: absolute;
        left: 22px;
        top: 50%;
        transform: translateY(-50%);
        color: #00897b;
        font-weight: 700;
    }

    /* =====================
   SIDEBAR
  ===================== */
    .sidebar-column {
        position: sticky;
        top: 90px;
        height: fit-content;
    }

    .course-side-bar {
        background: #ffffff;
        border-radius: 26px;
        padding: 34px;
        box-shadow: 0 25px 55px rgba(0, 0, 0, 0.1);
    }

    .price {
        font-size: 36px;
        text-align: center;
        color: #c45783;
        margin-bottom: 26px;
        font-weight: 800;
    }

    .meta-tags {
        display: flex;
        justify-content: center;
        gap: 10px;
        list-style: none;
        margin-bottom: 30px;
        padding: 0;
    }

    .meta-tags li {
        background: #c457833d;
        padding: 9px 16px;
        border-radius: 22px;
        font-size: 13px;
        font-weight: 600;
        color: #444;
    }

    .course-info {
        list-style: none;
        margin-bottom: 32px;
        padding: 0;
    }

    .course-info li {
        padding: 12px 0;
        border-bottom: 1px dashed #ddd;
        font-size: 14px;
        color: #555;
    }

    /* =====================
   ENROLL BUTTON
   ===================== */
    .btn-enroll {
        display: block;
        text-align: center;
        padding: 16px;
        border-radius: 40px;
        background: linear-gradient(135deg, #c457834d, #c45783db);
        color: #3a1f1f;
        font-weight: 800;
        text-decoration: none;
        letter-spacing: 0.4px;
        transition: all 0.3s ease;
    }

    .btn-enroll:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.18);
    }

    /* =====================
   RESPONSIVE
   ===================== */
    @media (max-width: 992px) {

        .course-layout {
            grid-template-columns: 1fr;
            padding: 60px 16px;
        }

        .dz-media img {
            height: 300px;
        }

        .dz-info {
            padding: 30px;
        }

        .dz-title {
            font-size: 26px;
        }

        .content-section {
            padding: 30px;
        }

        .sidebar-column {
            position: static;
            margin-top: 40px;
        }
    }
</style>