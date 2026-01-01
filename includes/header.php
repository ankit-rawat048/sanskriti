<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
:root {
  --primary: #a45c79;
  --bg-main: #aa597971;
  --text-dark: #3e3a37;
  --text-muted: #6f6a65;
  --border-soft: #e6dcd3;
}

/* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'DM Sans', sans-serif;
}

a {
  text-decoration: none;
  color: inherit;
}

/* HEADER */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 18px 120px;
  background: aliceblue;
  box-shadow: 0 8px 30px rgba(0,0,0,0.05);
  position: sticky;
  top: 0;
  z-index: 1000;
}

/* LOGO */
header img {
  height: 55px;
}

/* NAV */
.nav {
  display: flex;
  align-items: center;
  gap: 35px;
}

/* NAV LIST */
.nav-ul {
  display: flex;
  align-items: center;
  gap: 30px;
}

.nav-ul > li {
  list-style: none;
  font-size: 16px;
  font-weight: 700;
  color: #000;
  cursor: pointer;
  position: relative;
}

/* UNDERLINE */
.nav-ul > li::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -6px;
  width: 0%;
  height: 2px;
  background-color: var(--primary);
  transition: 0.3s ease;
}

.nav-ul > li:hover::after {
  width: 100%;
}

/* DROPDOWN */
.dropdown-menu {
  position: absolute;
  top: 20px;
  left: 0;
  width: 320px;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
  padding: 10px 0;
  display: none;
}

.dropdown-menu li {
  list-style: none;
}

.dropdown-menu a {
  display: block;
  padding: 12px 20px;
  font-size: 14px;
  color: var(--text-muted);
  transition: 0.3s ease;
}

.dropdown-menu a:hover {
  background: #f3ebe6;
  color: var(--primary);
}

/* SHOW DROPDOWN DESKTOP */
.nav-ul li:hover .dropdown-menu {
  display: block;
}

/* REGISTER BUTTON */
.nav button {
  height: 45px;
  width: 130px;
  border: none;
  border-radius: 25px;
  background: #d46793;
  color: #fff;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s ease;
}

.nav button:hover {
  background: #b8776f;
}

/* HAMBURGER */
.bars-btn {
  display: none;
  background: none;
  border: none;
  font-size: 26px;
  color: var(--primary);
  cursor: pointer;
}

/* ================= MOBILE ================= */
@media (max-width: 768px) {

  header {
    padding: 15px 25px;
  }

  .bars-btn {
    display: block;
  }

  .nav {
    position: absolute;
    top: 75px;
    left: 0;
    width: 100%;
    height:100vh;
    background: #fff;
    padding: 25px;
    flex-direction: column;
    gap: 20px;
    display: none;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
  }

  .nav.active {
    display: flex;
  }

  .nav-ul {
    flex-direction: column;
    width: 100%;
    gap: 15px;
  }

  .dropdown-menu {
    position: static;
    width: 100%;
    box-shadow: none;
    padding-left: 10px;
    display: none;
  }

  .nav-ul li.active .dropdown-menu {
    display: block;
  }

  .nav button {
    width: 100%;
  }
}
</style>

<header >
  <img src="images/logo2.png" alt="logo">

  <button class="bars-btn" id="menuBtn">
    <i class="fa-solid fa-bars"></i>
  </button>

  <div class="nav" id="menu">
    <ul class="nav-ul">
      <li><a href="index.php">Home</a></li>
      <li>About</li>

      <li id="courseBtn">
        Yoga Courses
        <ul class="dropdown-menu">
          <li><a href="index.php">200 Hybrid Yoga TTC Rishikesh</a></li>
          <li><a href="200-hour-multistyle-yoga-course-india.php">200 Hour Hybrid Multistyle Yoga TTC</a></li>
          <li><a href="200-kundalini-yoga-teacher-training-course.php">200 Hour Hybrid Kundalini Yoga TTC</a></li>
          <li><a href="100-hour-online-yoga-ttc.php">Online Yoga TTC 100 Hour</a></li>
          <li><a href="200-hour-online-yoga-ttc.php">Online Yoga TTC 200 Hour</a></li>
          <li><a href="300-hour-online-yoga-ttc.php">Online Yoga TTC 300 Hour</a></li>
          <li><a href="online-private-classes.php">Online Private Classes</a></li>
          <li><a href="online-group-classes.php">Online Group Classes</a></li>
        </ul>
      </li>

      <li>Contact</li>
    </ul>

    <a href="registration.php">
      <button>Register</button>
    </a>
  </div>
</header>

<script>
const menuBtn = document.getElementById("menuBtn");
const menu = document.getElementById("menu");
const courseBtn = document.getElementById("courseBtn");

menuBtn.addEventListener("click", () => {
  menu.classList.toggle("active");
});

courseBtn.addEventListener("click", () => {
  if (window.innerWidth <= 768) {
    courseBtn.classList.toggle("active");
  }
});
</script>
