
<div class="content-inner overflow-hidden">
  <div class="container">

    <div class="section-head">
      <h5 class="sub-title">Monday – Saturday</h5>
      <h2 class="title">Daily Schedule</h2>
    </div>

    <div class="schedule-table">
      <table class="ck-table">
        <thead>
          <tr>
            <th>TIME</th>
            <th>SCHEDULE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="event-time">06:00 – 06:45 am</td>
            <td class="event"><span class="title">Pranayama</span></td>
          </tr>
          <tr>
            <td class="event-time">07:00 – 08:30 am</td>
            <td class="event"><span class="title">Hatha Yoga Asana</span></td>
          </tr>
          <tr>
            <td class="event-time">08:30 – 09:45 am</td>
            <td class="event"><span class="title">Breakfast &amp; Rest</span></td>
          </tr>
          <tr>
            <td class="event-time">10:00 – 11:00 am</td>
            <td class="event"><span class="title">Philosophy</span></td>
          </tr>
          <tr>
            <td class="event-time">11:15 am – 12:15 pm</td>
            <td class="event"><span class="title">Ayurveda &amp; Anatomy</span></td>
          </tr>
          <tr>
            <td class="event-time">12:30 – 01:30 pm</td>
            <td class="event"><span class="title">Adjustment &amp; Alignment</span></td>
          </tr>
          <tr>
            <td class="event-time">01:30 – 03:30 pm</td>
            <td class="event"><span class="title">Lunch &amp; Rest</span></td>
          </tr>
          <tr>
            <td class="event-time">03:30 – 05:00 pm</td>
            <td class="event"><span class="title">Ashtanga–Vinyasa Asana</span></td>
          </tr>
          <tr>
            <td class="event-time">05:15 – 06:30 pm</td>
            <td class="event"><span class="title">Mantras &amp; Meditation</span></td>
          </tr>
          <tr>
            <td class="event-time">06:30 – 07:30 pm</td>
            <td class="event"><span class="title">Self Study</span></td>
          </tr>
          <tr>
            <td class="event-time">07:30 – 08:00 pm</td>
            <td class="event"><span class="title">Dinner</span></td>
          </tr>
          <tr>
            <td class="event-time">09:00 pm</td>
            <td class="event"><span class="title">Lights Off</span></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</div>


<style>
  /* ===== SECTION ===== */
.content-inner {
  padding: 80px 20px;
  background: linear-gradient(135deg, #f7fffd, #eefaf8);
}

/* ===== CONTAINER ===== */
.container {
  max-width: 900px;
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
  letter-spacing: 1px;
  margin-bottom: 8px;
}

.section-head .title {
  font-size: 18px;
  color: #222;
}

/* ===== TABLE WRAPPER ===== */
.schedule-table {
  overflow-x: auto;
}

/* ===== TABLE ===== */
.ck-table {
  width: 100%;
  border-collapse: collapse;
  background: #fff;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: 0 12px 35px rgba(0,0,0,0.08);
}

/* ===== TABLE HEAD ===== */
.ck-table thead {
  background: #d85389;
  color: #fff;
}

.ck-table th {
  padding: 16px;
  font-size: 14px;
  letter-spacing: 1px;
  text-align: left;
}

/* ===== TABLE BODY ===== */
.ck-table td {
  padding: 14px 16px;
  font-size: 15px;
  border-bottom: 1px solid #eee;
}

/* ===== TIME COLUMN ===== */
.event-time {
  font-weight: 600;
  color: #444;
  width: 35%;
}

/* ===== EVENT COLUMN ===== */
.event .title {
  color: #333;
  font-weight: 500;
  text-decoration: none;
}

/* ===== ROW HOVER ===== */
.ck-table tbody tr:hover {
  background: #f3fbfa;
  transition: 0.3s;
}

/* ===== LAST ROW BORDER REMOVE ===== */
.ck-table tbody tr:last-child td {
  border-bottom: none;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 600px) {
  .section-head .title {
    font-size: 18px;
  }

  .ck-table th,
  .ck-table td {
    font-size: 13px;
    padding: 12px;
  }
}
</style>