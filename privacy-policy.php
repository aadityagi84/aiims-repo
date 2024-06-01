  <?php include("component/header.php"); ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon" />
    <title>IFSR2024</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="Responsive.css" />
    <link rel="stylesheet" href="./sidebar.css" />
  </head>

  <body>
    <style>
      @media only screen and (max-width: 600px) {
        .policy-cont {
          /* border: 4px solid; */
          width: 100% !important;
          min-height: 40vh !important;
        }


      }
    </style>
    <style>
      ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      /* Default styles */
      #heii {
        font-size: 13px;
      }

      .MIN {
        font-size: 15px;
      }

      .text-white {
        color: white;
      }

      .text-black {
        color: black;
      }

      .py-10 {
        padding-top: 10px;
        padding-bottom: 10px;
      }

      .px-10 {
        padding-left: 10px;
        padding-right: 10px;
      }

      .gap-1 {
        gap: 1rem;
      }

      /* Media queries for responsiveness */
      @media only screen and (max-width: 600px) {

        .MIN,
        #heii {
          font-size: 14px;
          /* Adjust font sizes for smaller screens */
        }
      }
    </style>

    <!-- Content -->
    <div class="pb-6 bg-[#f2f6f9] border border-[#f2f6f9] " style="
         background-image: url('images/about-types/about-venue.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      ">
      <style>
        .link:hover::after,
        .link.active::after {
          transform: scaleX(1);
          transform-origin: bottom left;
        }

        .link::after {
          content: '';
          display: block;
          width: 100%;
          height: 2px;
          background-color: #EF4444;
          transform: scaleX(0);
          transform-origin: bottom right;
          transition: transform 0.45s ease-out;
        }
      </style>

      <!-- <h1 class="text-center text-3xl font-semibold text-white pt-4 my-[53px]">

        Privacy Policy</h1> -->
      <div class="w-[1130px] policy-cont border border rounded-[15px] flex  flex-wrap items-center gap-10
       mx-auto my-10 border-white " style="background: linear-gradient(to bottom, #dfe9f3 0%, white 100%);
       /* background: linear-gradient(to right, #212a47, #24a1ad); */
       ">
        <div class=" ">
          <div class="bg-[#212a47]  text-white flex gap-10 w-full max-w-4xl mt-4 mx-auto px-6 py-2 justify-between items-center duration-750 ease-in rounded-2xl shadow-lg">
            <a href="online-regis.php" class="link  text-white  text-sm transition-colors duration-300">Online Registration</a>
            <a href="term&condition.php" class="link  text-white  text-sm transition-colors duration-300">Terms and Conditions</a>
            <a href="privacy-policy.php" id="termss" class="link  text-white  text-sm transition-colors duration-300">Privacy Policy</a>
            <a href="payment-issue.php" class="link  text-white  text-sm transition-colors duration-300">Payment Issue</a>
            <a href="cancel-refund.php" class="link  text-white  text-sm transition-colors duration-300">Cancellation & Refund Policy</a>
          </div>
          <ul class="text-[13px] flex flex-col text-white py-10 px-10 gap-1" id="heii">
            <li class="text-[15px] text-black MIN">
              By accessing this site, certain information about the User, such as Internet protocol (IP) addresses, navigation through the Site, the software used and the time spent, along with other similar information, will be stored on IFSR 2024 server. These will not specifically identify the User. The information will be used internally only for web site traffic analysis. If the User provides unique identifying information, such as name, address and other information on forms stored on this Site, such information will be used only for statistical purposes and will not be published for general access. IFSR 2024, however, assumes no responsibility for the security of this information.
            </li>
          </ul>


        </div>


      </div>
    </div>
    <script>
      function navcalll() {
        if (window.location.pathname.includes('privacy-policy.php')) {
          const terms = document.getElementById('termss');
          terms.classList.add('active');
        }
      }
      document.addEventListener('DOMContentLoaded', navcalll);
    </script>
    <!-- Footer -->
    <?php include("component/footer.php"); ?>