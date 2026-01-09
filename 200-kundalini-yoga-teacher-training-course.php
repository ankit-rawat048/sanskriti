<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<style>
   /* ===== Layout ===== */
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 0 20px;
    }

    .c-nneed {
      visibility:hidden;
    }

    section {
      padding: 70px 0;
    }
  /* ===== Hero Section ===== */
    .hero {
      background:/* linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), */url("udatedImg/WhatsApp Image 2026-01-09 at 11.31.28 (1).jpeg")
        center/cover no-repeat;
      color: #fff;
      text-align: center;
      /* padding: 140px 0; */
      height: 70vh;
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

<body>

  <?php include('includes/header.php'); ?>

  <main>
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
    <?php include('kundalini-pages/section3-4.php'); ?>
    <?php include('kundalini-pages/section3-5.php'); ?>
    <?php include('sections/section6.php'); ?>
    <?php include('sections/section7.php'); ?>
    <?php include('sections/section8.php'); ?>
    <?php include('sections/section9.php'); ?>
    <?php include('sections/section10.php'); ?>
    <?php include('kundalini-pages/section3-11.php'); ?>
    <?php include('sections/section12.php'); ?>
  </main>

  <?php include('includes/footer.php'); ?>


</body>

</html>