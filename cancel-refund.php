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
      .listing>li {
        list-style-type: disc !important;
        margin-left: 20px;
      }
    </style>

    <!-- Content -->
    <div class="pb-6 bg-[#f2f6f9] border border-[#f2f6f9] invitaionparent" style="
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
      <script>
        function navcalll() {
          if (window.location.pathname.includes('cancel-refund.php')) {
            const terms = document.getElementById('termss');
            terms.classList.add('active');
          }
        }
        document.addEventListener('DOMContentLoaded', navcalll);
      </script>
      <!-- <h1 class="text-center text-3xl font-semibold text-white pt-4 my-[53px]">

        Payment Issue</h1> -->
      <div class="w-[1130px] border border rounded-[15px] flex  flex-wrap items-center gap-10
       mx-auto my-10 border-white " style="background: linear-gradient(to bottom, #dfe9f3 0%, white 100%);
       /* background: linear-gradient(to right, #212a47, #24a1ad); */
       ">
        <div class="  ">
          <div class=" ">
            <div class="bg-[#212a47]  text-white flex gap-10 w-full max-w-4xl mt-4 mx-auto px-6 py-2 justify-between items-center duration-750 ease-in rounded-2xl shadow-lg">
              <a href="online-regis.php" class="link  text-white  text-sm transition-colors duration-300">Online Registration</a>
              <a href="term&condition.php" class="link  text-white  text-sm transition-colors duration-300">Terms and Conditions</a>
              <a href="privacy-policy.php" class="link  text-white  text-sm transition-colors duration-300">Privacy Policy</a>
              <a href="payment-issue.php" class="link  text-white  text-sm transition-colors duration-300">Payment Issue</a>
              <a href="cancel-refund.php" id="termss" class="link  text-white  text-sm transition-colors duration-300">Cancellation & Refund Policy</a>
            </div>
            <ul class=" text-[13px] flex flex-col text-black py-10 px-10 gap-1">

              <p class="text-[22px] text-black "> CANCELLATION & REFUND POLICY</p> <br>
              <li class="text-justify"><span class="font-bold"> Note :</span> Fee once paid is not refundable or adjustable under any circumstances in future. Don't pay any extra amount apart from the requisite fee.
              </li>

            </ul>
            <ul class=" text-[13px] listing flex flex-col text-black py-5 px-10 gap-1">
              <p class="text-[22px] text-black ">Your registration will be cancelled :</p>
              <li>If the fee paid is short,

              </li>
              <li>If false identity has been submitted,
              </li>
            </ul>

            <ul class=" text-[13px] flex flex-col text-black py-5 px-10 gap-1">

              <p class="text-[22px] text-black ">REFUND POLICY</p>
              <p class="text-justify">IFSR 2024 does not have any refunding policy online.

              </p>
              <p>The registration fee deposited at the time of filling the online registration form is non-refundable pxunder any circumstances.</p>
              <p>If there is any discrepancy regarding the fee amount deposited through credit card then it has to be resolved in person only. Please contact the Institute reception for such cases.</p><br>

            </ul>




          </div>


        </div>
      </div>

      <!-- Footer -->
      <?php include("component/footer.php"); ?>