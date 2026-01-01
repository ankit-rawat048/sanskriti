<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Yoga TTC Registration | Sanskriti Yogpeeth Rishikesh</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  /* ===== Reset ===== */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  body {
    background: #f5f7fa;
    color: #333;
    line-height: 1.6;
  }

  a {
    text-decoration: none;
    color: inherit;
  }

  /* ===== Container ===== */
  .container {
    max-width: 850px;
    margin: 40px auto;
    padding: 0 20px;
  }

  /* ===== Header ===== */
  .header {
    text-align: center;
    padding: 25px 0;
  }

  .header h1 {
    font-size: 30px;
    color: #00695c;
    font-weight: bold;
  }

  .header p {
    font-size: 16px;
    margin-top: 8px;
    color: #666;
  }

  /* ===== Form ===== */
  form {
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  }

  .form-group {
    margin-bottom: 18px;
  }

  label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #004d40;
  }

  input[type="text"],
  input[type="email"],
  input[type="date"],
  input[type="tel"],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
    background: #fafafa;
  }

  textarea {
    height: 100px;
    resize: vertical;
  }

  /* ===== Buttons ===== */
  .btn-submit {
    display: inline-block;
    background: #00897b;
    color: white;
    padding: 14px 32px;
    border: none;
    border-radius: 6px;
    font-size: 17px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s ease;
  }

  .btn-submit:hover {
    background: #00584d;
  }

  /* ===== Footer ===== */
  .footer {
    text-align: center;
    margin-top: 25px;
    font-size: 14px;
    color: #666;
  }
</style>
</head>

<body>
<?php include('includes/header.php'); ?>
<div class="container">

  <!-- Registration Form -->
  <form action="#" method="POST">

    <div class="form-group">
      <label for="firstName">First Name *</label>
      <input type="text" id="firstName" name="firstName" required>
    </div>

    <div class="form-group">
      <label for="middleName">Middle Name</label>
      <input type="text" id="middleName" name="middleName">
    </div>

    <div class="form-group">
      <label for="lastName">Last Name *</label>
      <input type="text" id="lastName" name="lastName" required>
    </div>

    <div class="form-group">
      <label for="birthDate">Birth Date *</label>
      <input type="date" id="birthDate" name="birthDate" required>
    </div>

    <div class="form-group">
      <label for="gender">Gender *</label>
      <select id="gender" name="gender" required>
        <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>
    </div>

    <div class="form-group">
      <label for="address1">Street Address *</label>
      <input type="text" id="address1" name="address1" required>
    </div>

    <div class="form-group">
      <label for="address2">Street Address Line 2 *</label>
      <input type="text" id="address2" name="address2" required>
    </div>

    <div class="form-group">
      <label for="city">City *</label>
      <input type="text" id="city" name="city" required>
    </div>

    <div class="form-group">
      <label for="state">State / Province *</label>
      <input type="text" id="state" name="state" required>
    </div>

    <div class="form-group">
      <label for="postal">Postal / Zip Code *</label>
      <input type="text" id="postal" name="postal" required>
    </div>

    <div class="form-group">
      <label for="country">Country *</label>
      <select id="country" name="country" required>
        <option value="">Choose Country</option>
        <!-- List a few common choices or add full list -->
        <option value="India">India</option>
        <option value="United States">United States</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Australia">Australia</option>
        <option value="Canada">Canada</option>
      </select>
    </div>

    <div class="form-group">
      <label for="email">Student E-mail *</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="whatsapp">WhatsApp No *</label>
      <input type="tel" id="whatsapp" name="whatsapp" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone Number *</label>
      <input type="tel" id="phone" name="phone" required>
    </div>

    <div class="form-group">
      <label for="month">Month of Course *</label>
      <select id="month" name="month" required>
        <option value="">Select Month</option>
        <option>January</option><option>February</option><option>March</option><option>April</option>
        <option>May</option><option>June</option><option>July</option><option>August</option>
        <option>September</option><option>October</option><option>November</option><option>December</option>
      </select>
    </div>

    <div class="form-group">
      <label for="date">Date of Course *</label>
      <select id="date" name="date" required>
        <option value="">Select Date</option>
        <option>03rd</option><option>15th</option>
      </select>
    </div>

    <div class="form-group">
      <label for="course">Course Name *</label>
      <select id="course" name="course" required>
        <option value="">Select Course</option>
        <option>200 Hour Hybird MultiStyle Yoga TTC</option>
        <option>200 Hour Hybrid Classic Hatha  Yoga TTC</option>
        <option>200 Hour Hybird Kundalini Yoga  Yoga TTC</option>
        <option>Online Yoga TTC 200 Hour</option>
        <option>Online Yoga TTC 300 Hour</option>
        <option>Online Private Classes</option>
        <option>Online Group Classes</option>
        <!-- <option>Online Yoga TTC</option>
        <option>Daily Drop In</option>
        <option>Ayurveda Course</option> -->
      </select>
    </div>

    <div class="form-group">
      <label for="accommodation">Accommodation Type *</label>
      <select id="accommodation" name="accommodation" required>
        <option value="">Select Type</option>
        <option>Private Room</option>
        <option>Double Sharing Room</option>
        <option>Triple Sharing Room</option>
        <option>Quadral Sharing Room</option>
      </select>
    </div>

    <div class="form-group">
      <label for="message">Tell something about your query *</label>
      <textarea id="message" name="message" required></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn-submit">Register and Pay</button>
    </div>

  </form>


</div>

<?php include('includes/footer.php'); ?>
</body>
</html>
