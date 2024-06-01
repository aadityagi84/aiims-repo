<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <title>Dynamic Calendar</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }


    .calendar {
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      padding: 20px;
      max-width: 400px;
      width: 100%;
    }

    .calendar .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .calendar .header .nav {
      display: flex;
    }

    .calendar .header .nav i {
      font-size: 24px;
      color: #673ab7;
      cursor: pointer;
      margin: 0 10px;
    }

    .calendar .header .month-year {
      font-size: 20px;
      font-weight: 600;
      color: #673ab7;
    }

    .calendar .weekdays {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .calendar .weekdays div {
      font-weight: 600;
      color: #673ab7;
    }

    .calendar .days {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 10px;
    }

    .calendar .days div {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 40px;
      height: 24px;
      border-radius: 50%;
      cursor: pointer;
      color: #333;
    }

    .calendar .days div.holiday {
      background-color: #f44336;
      color: #fff;
    }

    .calendar .days div:not(.holiday):hover {
      background-color: #e0e0e0;
    }

    .calendar .days div.current-date {
      background-color: #673ab7;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="calendar">
    <div class="header">
      <div class="nav">
        <i class="fas fa-chevron-left" id="prev"></i>
        <i class="fas fa-chevron-right" id="next"></i>
      </div>
      <div class="month-year"></div>
    </div>
    <div class="weekdays">
      <div>Sun</div>
      <div>Mon</div>
      <div>Tue</div>
      <div>Wed</div>
      <div>Thu</div>
      <div>Fri</div>
      <div>Sat</div>
    </div>
    <div class="days"></div>
  </div>

  <script>
    const daysEl = document.querySelector(".days");
    const monthYearEl = document.querySelector(".month-year");
    const prevEl = document.getElementById("prev");
    const nextEl = document.getElementById("next");

    let currentDate = new Date();
    let currentMonth = 10; // Set the default month to November (index 10)
    let currentYear = currentDate.getFullYear();

    const months = [
      "January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];

    function renderCalendar() {
      const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
      const lastDateOfMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
      const lastDayOfMonth = new Date(currentYear, currentMonth, lastDateOfMonth).getDay();
      const lastDateOfLastMonth = new Date(currentYear, currentMonth, 0).getDate();

      let daysHTML = "";

      // Add previous month's last days
      for (let i = firstDayOfMonth; i > 0; i--) {
        daysHTML += `<div class="disabled">${lastDateOfLastMonth - i + 1}</div>`;
      }

      // Add current month's days
      for (let i = 1; i <= lastDateOfMonth; i++) {
        const isCurrentDate = i === currentDate.getDate() && currentMonth === currentDate.getMonth() && currentYear === currentDate.getFullYear();
        const isHoliday = currentMonth === 10 && currentYear === 2024 && (i === 12 || i === 13 || i === 14);
        const holidayClass = isHoliday ? "holiday" : "";
        const currentDateClass = isCurrentDate ? "current-date" : "";
        daysHTML += `<div class="${holidayClass} ${currentDateClass}" onclick="showAlert(${i}, ${isHoliday})">${i}</div>`;
      }

      // Add next month's first days
      for (let i = lastDayOfMonth; i < 6; i++) {
        daysHTML += `<div class="disabled">${i - lastDayOfMonth + 1}</div>`;
      }

      daysEl.innerHTML = daysHTML;
      monthYearEl.textContent = `${months[currentMonth]} ${currentYear}`;
    }

    function showAlert(date, isHoliday) {
      if (isHoliday) {
        alert("36th Conference of the International Society for Fluoride Research (ISFR)");
      }
    }

    prevEl.addEventListener("click", () => {
      currentMonth--;
      if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
      }
      renderCalendar();
    });

    nextEl.addEventListener("click", () => {
      currentMonth++;
      if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
      }
      renderCalendar();
    });

    renderCalendar();
  </script>
</body>

</html>