<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    .c-nneed {
      visibility:hidden;
    }

    section {
      padding: 70px 0;
    }
  /* ===== Hero Section ===== */
    .hero {
      background:/* linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), */url("udatedImg/WhatsApp Image 2026-01-12 at 11.35.52.jpeg")
        center/cover no-repeat;
      color: #fff;
      text-align: center;
      /* padding: 140px 0; */
      height: 80vh;
    }

    .hero h1 {
      font-size: 44px;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .hero p {
      max-width: 750px;
      margin: auto;
      font-size: 18px;
      opacity: 0.95;
    }
  </style>
</head>

<body>

  <?php include('includes/header.php'); ?>

  <main>
    <!-- < ?php include('sections/section1.php'); ?> -->
     <!-- HERO -->
  <section class="hero">
    <div class="container c-nneed">
      <h1>Online Yoga TTC – 100 Hour</h1>
      <p>
        Begin your yoga journey from the comfort of your home with authentic teachings from Rishikesh, the Yoga Capital of the World.
      </p>
    </div>
  </section>
    <?php include('sections/section2.php'); ?>
    <!-- < ?php include('sections/section3.php'); ?> -->
    <?php include('sections/section2-4.php'); ?>
    <?php include('sections/section2-5.php'); ?>
    <?php include('sections/section6.php'); ?>
    <?php include('sections/section7.php'); ?>
    <?php include('sections/section8.php'); ?>
    <?php include('sections/section9.php'); ?>
    <?php include('sections/section10.php'); ?>
    <?php include('sections/section2-11.php'); ?>
    <?php include('sections/section12.php'); ?>
  </main>

  <?php include('includes/footer.php'); ?>


</body>

</html>