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
    <div class="pb-6 bg-[#f2f6f9] border border-[#f2f6f9]  main-pa" style="
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
          if (window.location.pathname.includes('payment-issue.php')) {
            const terms = document.getElementById('termss');
            terms.classList.add('active');
          }
        }
        document.addEventListener('DOMContentLoaded', navcalll);
      </script>
      <!-- <h1 class="text-center text-3xl font-semibold text-white pt-4 my-[53px]">

        Payment Issue</h1> -->
      <div class="w-[1130px] border border rounded-[15px] flex  flex-wrap items-center gap-10
       mx-auto my-10 border-white main-pa " style="background: linear-gradient(to bottom, #dfe9f3 0%, white 100%);
       /* background: linear-gradient(to right, #212a47, #24a1ad); */
       ">
        <div class="  ">
          <div class=" ">
            <div class="bg-[#212a47]  text-white flex gap-10 w-full max-w-4xl mt-4 mx-auto px-6 py-2 justify-between items-center duration-750 ease-in rounded-2xl shadow-lg">
              <a href="online-regis.php" class="link  text-white  text-sm transition-colors duration-300">Online Registration</a>
              <a href="term&condition.php" class="link  text-white  text-sm transition-colors duration-300">Terms and Conditions</a>
              <a href="privacy-policy.php" class="link  text-white  text-sm transition-colors duration-300">Privacy Policy</a>
              <a href="payment-issue.php" id="termss" class="link  text-white  text-sm transition-colors duration-300">Payment Issue</a>
              <a href="cancel-refund.php" class="link  text-white  text-sm transition-colors duration-300">Cancellation & Refund Policy</a>
            </div>
            <ul class=" text-[13px] flex flex-col text-black py-10 px-10 gap-1">

              <p class="text-[22px] text-black "> PAYMENT ISSUE </p> <br>
              <li class="text-justify"><span class="font-bold"> Note :</span> IFSR 2024 has appointed Chime, an event management company under Chime Travel pvt. ltd., as its official event management company for organizing the event. Chime's registered office is located at 898, Udyog Vihar, Phase-I, Gurugram-122016, Haryana, India. as the official event management company to execute all matters for organising IFSR 2024 .e.
              </li>

            </ul>
            <ul class=" text-[13px] listing flex flex-col text-black py-5 px-10 gap-1">

              <p class="text-[22px] text-black "> Payments can fail for the following reasons:</p>
              <li>You enter incorrect credit or debit card details, e.g. name on the card, card number, CVV, 3D secure PIN and expiry date.

              </li>
              <li>Your bank is going through an outage.

              </li>
              <li>You close or refresh the page or go back to the previous page while the transaction is being processed by your bank.

              </li>
              <li>The connection between IFSR 2024 and your bank fails due to some technical issues and the transaction cannot be completed.

              </li>
              <li>Your card may be blocked for online transactions.

              </li>

            </ul>

            <ul class=" text-[13px] flex flex-col text-black py-5 px-10 gap-1">

              <p class="text-[22px] text-black ">Dispute Resolution</p>
              <p class="text-justify">If any dispute, controversy or claim arises in relation to any IFSR 2024 online registration platform, the parties shall use all reasonable endeavours to resolve such Dispute amicably. If the parties are unable to resolve the Dispute amicably within 30 days of the notice of such Dispute, IFSR 2024 may elect to resolve any Dispute by a binding arbitration in accordance with the provisions of the Indian Arbitration & Conciliation Act, 1996 (hereinafterAct).

              </p> <br>

            </ul>

            <ul class=" text-[13px] flex flex-col text-black py-5 px-10 gap-1">

              <p class="text-[22px] text-black ">Governing Law and Forum for Disputes</p>
              <p class="text-justify">Subject to the Dispute Resolution section above, You agree that any claim or dispute You may have against IFSR 2024 must be resolved by a court having jurisdiction in New Delhi, India. You agree to submit to the personal jurisdiction of the courts located within New Delhi, India, for the purpose of litigating all such claims or disputes. This Agreement shall be governed by Indian law.

              </p> <br>

            </ul>


          </div>


        </div>
      </div>

      <!-- Footer -->
      <?php include("component/footer.php"); ?>