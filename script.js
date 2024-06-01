function setTimers(
  targetDateString,
  daysElement,
  hoursElement,
  minutesElement,
  secondsElement,
  storageKey
) {
  var targetDate = new Date(targetDateString);
  var storedDate = new Date(localStorage.getItem(storageKey));

  // Update local storage if the target date is different from the stored date
  if (storedDate.getTime() !== targetDate.getTime()) {
    localStorage.setItem(storageKey, targetDate);
    storedDate = targetDate;
  }

  var countDownDate = storedDate.getTime();

  var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    if (distance >= 0) {
      document.getElementById(daysElement).innerHTML = days;
      document.getElementById(hoursElement).innerHTML = hours;
      document.getElementById(minutesElement).innerHTML = minutes;
      document.getElementById(secondsElement).innerHTML = seconds;
    } else {
      clearInterval(x);
      document.getElementById(daysElement).innerHTML = "EXPIRED";
      document.getElementById(hoursElement).innerHTML = "";
      document.getElementById(minutesElement).innerHTML = "";
      document.getElementById(secondsElement).innerHTML = "";
    }
  }, 1000);
}

// Ensure the same target date across all timers
const targetDateString = "2024-11-13T00:00:00";
const storageKey = "commonTimerDate";

// Set timers with the same storage key
setTimers(
  targetDateString,
  "days1",
  "hours1",
  "minutes1",
  "seconds1",
  storageKey
);
setTimers(
  targetDateString,
  "days2",
  "hours2",
  "minutes2",
  "seconds2",
  storageKey
);
setTimers(
  targetDateString,
  "dayss",
  "hourss",
  "minutess",
  "secondss",
  storageKey
);
setTimers(
  targetDateString,
  "daysss",
  "hoursss",
  "minutesss",
  "secondsss",
  storageKey
);
const sidebar = document.getElementById("mySidebar");
const originalSidebarHTML = sidebar.innerHTML;

const closeSidebar = () => {
  sidebar.style.width = "0";
  sidebar.innerHTML = "";
};

const openSidebar = () => {
  sidebar.style.width = "250px";
  sidebar.innerHTML = originalSidebarHTML;
  sidebar.classList.add("fade-in"); // Add fade-in class

  setTimeout(() => {
    sidebar.classList.remove("fade-in");
  }, 700);
};

// =====================================================
document.addEventListener("DOMContentLoaded", function () {
  const countries = [
    "Select",
    "Afghanistan",
    "Albania",
    "Algeria",
    "Andorra",
    "Angola",
    "Antigua and Barbuda",
    "Argentina",
    "Armenia",
    "Australia",
    "Austria",
    "Azerbaijan",
    "Bahamas",
    "Bahrain",
    "Bangladesh",
    "Barbados",
    "Belarus",
    "Belgium",
    "Belize",
    "Benin",
    "Bhutan",
    "Bolivia",
    "Bosnia and Herzegovina",
    "Botswana",
    "Brazil",
    "Brunei",
    "Bulgaria",
    "Burkina Faso",
    "Burundi",
    "Cabo Verde",
    "Cambodia",
    "Cameroon",
    "Canada",
    "Central African Republic",
    "Chad",
    "Chile",
    "China",
    "Colombia",
    "Comoros",
    "Congo, Democratic Republic of the",
    "Congo, Republic of the",
    "Costa Rica",
    "Croatia",
    "Cuba",
    "Cyprus",
    "Czech Republic",
    "Denmark",
    "Djibouti",
    "Dominica",
    "Dominican Republic",
    "Ecuador",
    "Egypt",
    "El Salvador",
    "Equatorial Guinea",
    "Eritrea",
    "Estonia",
    "Eswatini",
    "Ethiopia",
    "Fiji",
    "Finland",
    "France",
    "Gabon",
    "Gambia",
    "Georgia",
    "Germany",
    "Ghana",
    "Greece",
    "Grenada",
    "Guatemala",
    "Guinea",
    "Guinea-Bissau",
    "Guyana",
    "Haiti",
    "Honduras",
    "Hungary",
    "Iceland",
    "India",
    "Indonesia",
    "Iran",
    "Iraq",
    "Ireland",
    "Israel",
    "Italy",
    "Jamaica",
    "Japan",
    "Jordan",
    "Kazakhstan",
    "Kenya",
    "Kiribati",
    "Korea, North",
    "Korea, South",
    "Kosovo",
    "Kuwait",
    "Kyrgyzstan",
    "Laos",
    "Latvia",
    "Lebanon",
    "Lesotho",
    "Liberia",
    "Libya",
    "Liechtenstein",
    "Lithuania",
    "Luxembourg",
    "Madagascar",
    "Malawi",
    "Malaysia",
    "Maldives",
    "Mali",
    "Malta",
    "Marshall Islands",
    "Mauritania",
    "Mauritius",
    "Mexico",
    "Micronesia",
    "Moldova",
    "Monaco",
    "Mongolia",
    "Montenegro",
    "Morocco",
    "Mozambique",
    "Myanmar",
    "Namibia",
    "Nauru",
    "Nepal",
    "Netherlands",
    "New Zealand",
    "Nicaragua",
    "Niger",
    "Nigeria",
    "North Macedonia",
    "Norway",
    "Oman",
    "Pakistan",
    "Palau",
    "Palestine",
    "Panama",
    "Papua New Guinea",
    "Paraguay",
    "Peru",
    "Philippines",
    "Poland",
    "Portugal",
    "Qatar",
    "Romania",
    "Russia",
    "Rwanda",
    "Saint Kitts and Nevis",
    "Saint Lucia",
    "Saint Vincent and the Grenadines",
    "Samoa",
    "San Marino",
    "Sao Tome and Principe",
    "Saudi Arabia",
    "Senegal",
    "Serbia",
    "Seychelles",
    "Sierra Leone",
    "Singapore",
    "Slovakia",
    "Slovenia",
    "Solomon Islands",
    "Somalia",
    "South Africa",
    "South Sudan",
    "Spain",
    "Sri Lanka",
    "Sudan",
    "Suriname",
    "Sweden",
    "Switzerland",
    "Syria",
    "Taiwan",
    "Tajikistan",
    "Tanzania",
    "Thailand",
    "Timor-Leste",
    "Togo",
    "Tonga",
    "Trinidad and Tobago",
    "Tunisia",
    "Turkey",
    "Turkmenistan",
    "Tuvalu",
    "Uganda",
    "Ukraine",
    "United Arab Emirates",
    "United Kingdom",
    "United States",
    "Uruguay",
    "Uzbekistan",
    "Vanuatu",
    "Vatican City",
    "Venezuela",
    "Vietnam",
    "Yemen",
    "Zambia",
    "Zimbabwe",
  ];

  const selectElement = document.getElementById("countrySelect");

  countries.forEach((country) => {
    const option = document.createElement("option");
    option.value = country;
    option.textContent = country;
    selectElement.appendChild(option);
  });
});
