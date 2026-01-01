<div class="section-wrapper1">
  <div class="container">

    <div class="section-head">
      <h5 class="sub-title">Dates</h5>
      <h2 class="title">Course Fees & Dates</h2>
      <h5 class="sub-title">Get Early Bird Discount by booking 45 days from the Initial Date.</h5>
    </div>

    <div class="schedule-table">
      <table class="ck-table">
        <thead>
          <tr>
            <th rowspan="2">Date</th>
            <th colspan="4">Course Fees</th>
            <th rowspan="2">Booking</th>
          </tr>
          <tr>
            <th>Private</th>
            <th>Double</th>
            <th>Triple</th>
            <th>Quadral</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>
              <select class="event-dropdown">
                <option>03rd-16th Dec 2025</option>
                <option>07th-20th Dec 2025</option>
              </select>
            </td>
            <td><span class="title"><strike>$1299</strike> $729</span></td>
            <td><span class="title"><strike>$1199</strike> $639</span></td>
            <td class="booked">Fully Booked</td>
            <td class="booked">Fully Booked</td>
            <td><a href="registration.php" class="enroll-btn">Enroll Now</a></td>
          </tr>

          <tr>
            <td>
              <select class="event-dropdown">
                <option>03rd-16th Mar 2026</option>
                <option>07th-20th Mar 2026</option>
              </select>
            </td>
            <td><span class="title"><strike>$1299</strike> $656 <small style="color:green;">(-10%)</small></span></td>
            <td><span class="title"><strike>$1199</strike> $575 <small style="color:green;">(-10%)</small></span></td>
            <td><span class="title"><strike>$1099</strike> $512 <small style="color:green;">(-10%)</small></span></td>
            <td><span class="title"><strike>$999</strike> $440 <small style="color:green;">(-10%)</small></span></td>
            <td><a href="registration.php" class="enroll-btn">Enroll Now</a></td>
          </tr>

          <tr>
            <td>
              <select class="event-dropdown">
                <option>03rd-16th Jun 2026</option>
                <option>07th-20th Jun 2026</option>
              </select>
            </td>
            <td><span class="title"><strike>$1299</strike> $620 <small style="color:green;">(-15%)</small></span></td>
            <td><span class="title"><strike>$1199</strike> $543 <small style="color:green;">(-15%)</small></span></td>
            <td><span class="title"><strike>$1099</strike> $484 <small style="color:green;">(-15%)</small></span></td>
            <td><span class="title"><strike>$999</strike> $416 <small style="color:green;">(-15%)</small></span></td>
            <td><a href="registration.php" class="enroll-btn">Enroll Now</a></td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</div>

<style>
.section-wrapper1 {
  padding: 80px 20px;
  background: #f9fafb;
}

.container {
  max-width: 1200px;
  margin: auto;
}

/* ===== HEADER ===== */
.section-head {
  text-align: center;
  margin-bottom: 40px;
}

.section-head .sub-title {
  color: #c45783;
  font-size: 14px;
  margin-bottom: 10px;
  letter-spacing: 1px;
}

.section-head .title {
  font-size: 18px;
  margin-bottom: 10px;
  color: #222;
}

/* ===== TABLE ===== */
.schedule-table {
  overflow-x: auto;
}

.ck-table {
  width: 100%;
  border-collapse: collapse;
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.ck-table thead {
  background: #d85389;
  color: #fff;
}

.ck-table th,
.ck-table td {
  padding: 14px 12px;
  text-align: center;
  border-bottom: 1px solid #eee;
}

.ck-table th {
  font-size: 14px;
  font-weight: 600;
}

.ck-table tbody tr:hover {
  background: #f5fdfc;
}

/* ===== SELECT ===== */
.event-dropdown {
  padding: 8px 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
  width: 100%;
}

/* ===== PRICE ===== */
.title {
  font-size: 15px;
}

strike {
  color: #999;
  margin-right: 4px;
}

/* ===== BOOKED ===== */
.booked {
  color: #d9534f;
  font-weight: bold;
}

/* ===== BUTTON ===== */
.enroll-btn {
  display: inline-block;
  padding: 10px 18px;
  background: #b6235f;
  color: #fff;
  text-decoration: none;
  border-radius: 25px;
  font-size: 14px;
  transition: 0.3s;
}

.enroll-btn:hover {
  background: #76143bff;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
  .section-head .title {
    font-size: 24px;
  }

  .ck-table th,
  .ck-table td {
    font-size: 13px;
    padding: 10px;
  }
}
</style>
