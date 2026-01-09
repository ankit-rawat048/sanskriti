<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'DM Sans', sans-serif;
    line-height: 1.7;
    color: #333;
    background-color: #f9f9f9;
}


.about-hero {
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(
        rgba(0, 0, 0, 0.45),
        rgba(0, 0, 0, 0.45)
    ),
    url('https://images.unsplash.com/photo-1544367567-0f2fcb009e0b') center/cover no-repeat;
    color: #fff;
    text-align: center;
}

.about-hero h1 {
    font-size: 3rem;
    font-family: 'Cormorant Garamond', serif;
    letter-spacing: 1px;
}


.part-one {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 80px 8%;
    background-color: #d4679361;
    gap: 40px;
}

.content1 {
    width: 50%;
}

.content1 h1 {
    font-size: 2.6rem;
    font-family: 'Cormorant Garamond', serif;
    margin-bottom: 10px;
    color: #000000ff;
}

.content1 h4 {
    font-size: 1.1rem;
    margin-bottom: 20px;
    color: #4e4e4e;
}

.content1 p {
    margin-bottom: 25px;
    color: #555;
}

.content1 ul {
    display: flex;
    gap: 15px;
    list-style: none;
}

.content1 ul li {
    padding: 10px 18px;
    font-size: 0.95rem;
    border-radius: 30px;
    background-color: #ffecf4;
    border: 1px solid #a6265a;
    color: #a0476a;
}


.imgDiv1 {
    width: 45%;
    text-align: center;
}

.imgDiv1 img {
    max-width: 100%;
    height: auto;
    border-radius: 14px;
    /* box-shadow: 0 20px 40px rgba(0,0,0,0.15); */
}


section:not(.about-hero):not(.part-one) {
    padding: 70px 8%;
    background-color: #ffffff;
}

section h4 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    color: #1b5e20;
}

section p {
    margin-bottom: 25px;
    color: #555;
}

section ul {
    margin: 20px 0 30px 20px;
}

section ul li {
    margin-bottom: 10px;
}



section:last-of-type {
    display: flex;
    /* flex-wrap: wrap; */
    align-items: center;
    gap: 50px;
    background-color: #f4faf6;
}

section:last-of-type > div {
    width: 48%;
}

section:last-of-type h1 {
    font-size: 2.4rem;
    font-family: 'Cormorant Garamond', serif;
    color: #d46793;
}

section:last-of-type h2 {
    font-size: 1.6rem;
    margin: 10px 0 20px;
    color: #d46793;
}


button {
    padding: 14px 32px;
    border: none;
    background-color: #e481a9d9;
    color: #fff;
    font-size: 1rem;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
}

button:hover {
    background-color: #2e7d32;
    transform: translateY(-2px);
}


@media (max-width: 992px) {
    .content1,
    .imgDiv1,
    section:last-of-type > div {
        width: 100%;
    }

    .about-hero h1 {
        font-size: 2.3rem;
    }

    .part-one {
        padding: 60px 6%;
    }

    section {
        padding: 60px 6%;
    }
}
</style>

</head>
<body>
    <?php include('includes/header.php'); ?>
    <main>
        
    <section class="about-hero">
        <h1>About Us</h1>
    </section>


    <section class="part-one">
        <div class="content1">
            <h1>Best Yoga Scho ol In Rishikesh, India</h1>
            <h4>A Combination of Teaching & Place!</h4>
            <p>Located in between the peace, serenity, beauty, and spirituality; Rishikesh is a place opt for Yoga, Meditation and other aspects. Known as World’s Yoga Capital; the city serves the true environment, suitable for yoga. Sanskriti Yogpeeth Rishikesh is an affiliated yoga school in the yoga city of Rishikesh. Various yoga courses like 100 Hours Yoga Course; 200 Hours, 300 Hours Yoga Teacher Training Courses & Yoga Retreat Programs. All the courses and programs are internationally certified with Yoga Alliance, USA.</p>
            <ul>
                <li>Sanskriti Yogpeeth Rishikesh</li>
                <li>Yoga In Rishikesh</li>
            </ul>
        </div>

        <div class="imgDiv1">
            <img src="https://sanskritiyogpeethrishikesh.com/assets/images/about/about-us-1.png" alt="">
        </div>
    </section>

    <section>
        <h4>Yoga with Yogic Environment</h4>
        <p>Living some days with yoga makes you habitual of it. You will start enjoying the life of yogi and soon getting the benefits of it. You will get the ultimate peace with this. Yoga asanas, diet, lifestyle, culture, and everything will eventually change your life and you will start cherishing it.</p>

        <h4>Yog Gurus at Sanskriti Yogpeeth Rishikesh</h4>
        <p>Sanskriti Yogpeeth Rishikesh conducts various yoga courses and programs under the guidance of well-trained and professionals Yoga teachers. The enthusiastic and Experienced mentors of our school are always ready to help their students in every possible way they can. Time to Time, they give you guidance about yoga styles and aspects.</p>

        <p>The yoga class of our school is a perfect combination of knowledge, talent, and at last utmost proficiency. The teaching style of our yoga school in Rishikesh needed only things from you, i.e., sincerity and dedication with the blend of learning and strategies.</p>

        <strong>Our Registered yoga school in Rishikesh has some features distinct from other yoga schools. Some of them are:</strong>

        <ul>
            <li>Our yoga school in India spreads the true knowledge of ancient yoga all over the world.</li>
            <li>Yoga Courses in India at our yoga school build the well-being of an individual.</li>
            <li>We aim to incorporate good disciplines.</li>
            <li>Yoga Courses, Programs or Classes help an individual in attaining self-control.</li>
        </ul>

        <strong>To know more about our yoga school in Rishikesh, Sanskriti Yogpeeth Rishikesh, Come to our place and learn every aspect of yoga and its types.</strong>

        <h4>We are Different from other Yoga Schools</h4>

        <strong>There are many aspects that make Sanskriti Yogpeeth Rishikesh different from other yoga schools and centers. Some of them are:</strong>

        <ul>
            <li> We offer authentic learning of yoga.</li>
            <li> We have yoga gurus with true and vast knowledge.</li>
            <li> We are Yoga Alliance the USA approved yoga school.</li>
            <li> We aim to provide injury-free yoga.</li>
            <li> We carry lots of experiences with us.</li>
            <li> We conduct theories and practicals equally.</li>
        </ul>
    </section>

    <section>
        <div>
            <h1>The Real Spirit of Our Yoga School</h1>
            <h2>Why Choose Us</h2>
            <p>We founded this yoga school in Rishikesh with the true love and energy of our yoga aspirants. The aim of our yoga school is to simply offer the best for you. Sanskriti Yogpeeth Rishikesh follows the well-defined and well-crafted curriculum and decorum of yoga and yogic-life.</p>
            <p>Our biggest advantage is our location that simply offers the adaptive environment for yoga. This lures all the yoga students and aspirants from all over the globe. Including yoga in our daily routine makes life easier, healthier and helpful. One can easily tackle the hurdles of life by opting yoga and further it provides ultimate bliss and happiness to yoga-aspirants.</p>

            <button>Join Now</button>
        </div>

        <div> 
            <img src="https://sanskritiyogpeethrishikesh.com/assets/images/about/about-us-2.png" alt="">
        </div>
    </section>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>