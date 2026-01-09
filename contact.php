<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

<style>
/* ---------- RESET ---------- */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: 'DM Sans', sans-serif;
    line-height:1.6;
}

.contact-wrapper{
    max-width:1200px;
    margin:80px auto;
    padding:0 20px;
    display:grid;
    grid-template-columns:1fr 1.2fr;
    gap:40px;
}

/* ---------- LEFT INFO BOX ---------- */
.contact-box{
    background:#ffffff;
    padding:40px;
    border-radius:16px;
    box-shadow:0 12px 30px rgba(0,0,0,0.08);
}

.section-head h2{
    font-size:2rem;
    margin-bottom:10px;
    /* color:#1b5e20; */
}

.section-head p{
    color:#666;
    margin-bottom:30px;
}

/* ---------- CONTACT LIST ---------- */
.widget_gelintuch ul{
    list-style:none;
}

.widget_gelintuch li{
    display:flex;
    gap:15px;
    margin-bottom:20px;
    align-items:flex-start;
}

.widget_gelintuch svg{
    width:22px;
    /* color:#1b5e20; */
    margin-top:5px;
}

.widget_gelintuch p{
    font-size:0.95rem;
    /* color: #154a65ff; */
}

/* ---------- SOCIAL ICONS ---------- */
h6{
    margin:30px 0 15px;
    font-size:1rem;
}

.dz-social-icon ul{
    display:flex;
    gap:12px;
    list-style:none;
}

.btn-social{
    width:40px;
    height:40px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    background:#EC407A;
    color:#fff;
    transition:.3s;
}

.btn-social:hover{
    background:#2e7d32;
    transform:translateY(-3px);
}

.btn-social svg{
    width:16px;
}

/* ---------- WORKING HOURS ---------- */
.widget_working{
    margin-top:30px;
    padding:25px;
    background:#e8f5e9;
    border-radius:12px;
}

.widget_working ul{
    list-style:none;
}

.widget_working li{
    margin-bottom:10px;
    font-size:0.9rem;
}

/* ---------- FORM ---------- */
form{
    background:#fff;
    padding:40px;
    border-radius:16px;
    box-shadow:0 12px 30px rgba(0,0,0,0.08);
}

.form-title{
   background: #d46793b8;
    color:#fff;
    padding:18px;
    text-align:center;
    border-radius:10px;
    margin-bottom:30px;
    font-size:1.5rem;
    font-weight:700;
}

/* ---------- FORM GRID ---------- */
.form-row{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
    margin-bottom:20px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

label{
    font-size:0.85rem;
    margin-bottom:6px;
}

input, select, textarea{
    padding:12px 14px;
    border-radius:8px;
    border:1px solid #ccc;
    font-size:0.9rem;
}

textarea{
    resize:none;
}

.phone-row{
    display:flex;
    gap:10px;
}

.phone-row select{
    width:120px;
}

/* ---------- BUTTON ---------- */
.btn-submit{
    padding:14px 40px;
    border:none;
    background: #d46793b8;
    color:#fff;
    border-radius:30px;
    font-size:1rem;
    cursor:pointer;
    transition:.3s;
}

.btn-submit:hover{
    background:#ff7b60;
}

/* ---------- MAP ---------- */
.map-iframe{
    margin:80px auto;
    max-width:1200px;
    padding:0 20px;
}

.map-iframe iframe{
    width:100%;
    height:400px;
    border-radius:16px;
}

/* ---------- RESPONSIVE ---------- */
@media(max-width:992px){
    .contact-wrapper{
        grid-template-columns:1fr;
    }
    .form-row{
        grid-template-columns:1fr;
    }
}
</style>
</head>

<body>
    <?php include('includes/header.php'); ?>
    <main>
        <div class="contact-wrapper">

    <!-- LEFT INFO -->
    <div class="contact-box">
        <div class="section-head">
            <h2>Contact Info</h2>
            <p>Fill up the form and our Team will get back to you within 24 hours.</p>
        </div>

        <div class="widget_gelintuch">
            <ul>
                <li>
                    <svg viewBox="0 0 384 512"><path fill="currentColor" d="M192 0C86 0 0 86 0 192c0 87 117 243 168 307 12 15 36 15 48 0 51-64 168-220 168-307C384 86 298 0 192 0z"/></svg>
                    <p>Sanskriti Yogpeeth Rishikesh, Ram Jhula, Swarg Ashram, Rishikesh, Uttarakhand</p>
                </li>
                <li>
                    <svg viewBox="0 0 512 512"><path fill="currentColor" d="M164 24L24 64C8 68 0 84 0 104c0 232 176 408 408 408 20 0 36-8 40-24l40-140-112-48-56 56C240 336 176 272 156 192l56-56-48-112z"/></svg>
                    <p>+91 9897991002</p>
                </li>
                <li>
                    <svg viewBox="0 0 512 512"><path fill="currentColor" d="M48 64h416c26 0 48 22 48 48v288c0 26-22 48-48 48H48c-26 0-48-22-48-48V112c0-26 22-48 48-48z"/></svg>
                    <p>contact@sanskritiyogpeethrishikesh.com</p>
                </li>
            </ul>
        </div>

        <h6>Our Socials</h6>
        <div class="dz-social-icon">
            <ul>
                <li><a class="btn-social" href="#">F</a></li>
                <li><a class="btn-social" href="#">I</a></li>
                <li><a class="btn-social" href="#">X</a></li>
                <li><a class="btn-social" href="#">W</a></li>
            </ul>
        </div>

        <div class="widget_working">
            <ul>
                <li>Mon – Fri : 07:00 – 21:00</li>
                <li>Saturday : 07:00 – 16:00</li>
                <li>Sunday : Closed</li>
            </ul>
        </div>
    </div>

    <!-- FORM -->
    <form>
        <div class="form-title">Get in Touch</div>

        <div class="form-row">
            <div class="form-group">
                <label>First Name *</label>
                <input type="text" required>
            </div>
            <div class="form-group">
                <label>Last Name *</label>
                <input type="text" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Email *</label>
                <input type="email" required>
            </div>
            <div class="form-group">
                <label>Phone *</label>
                <div class="phone-row">
                    <select><option>+91</option></select>
                    <input type="tel" required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Gender *</label>
                <select required><option>Select</option></select>
            </div>
            <div class="form-group">
                <label>Course *</label>
                <select required>
                    <option>Select Course</option>
                    <option>200 Hybird Yoga TTC Rishikesh</option>
                    <option>Online Private Classes</option>
                    <option>Online Group Classes</option>
                    <option>Online Yoga TTC 300 Hour</option>
                    <option>Online Yoga TTC 200 Hour</option>
                    <option>Online Yoga TTC 100 Hour</option>
                    <option>200 Hour Hybird Kundalini Yoga Yoga TTC</option>
                    <option>200 Hour Hybird MultiStyle Yoga TTC</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Message *</label>
            <textarea rows="4" required></textarea>
        </div>

        <div style="text-align:center;margin-top:30px;">
            <button class="btn-submit">Submit</button>
        </div>
    </form>
</div>

<div class="map-iframe">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55221.49028377216!2d78.25768249860594!3d30.112993071336668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3909178071ece02f%3A0x2b981e8b7e1a7d9d!2sYoga%20Teacher%20Training%20School%20In%20Rishikesh%20India%20%7C%20Sanskriti%20Yogpeeth!5e0!3m2!1sen!2sin!4v1726223454130!5m2!1sen!2sin" width="600" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>
