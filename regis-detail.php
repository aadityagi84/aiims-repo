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
    <link rel="stylesheet" href="./sidebar.css">
  </head>

  <body>


    <!-- ===Navbar -->

    <!-- ============== -->
    <div class="conatiner border" class="pb-4 bg-[#f2f6f9]    invitaionparent  border border-[#f2f6f9]" style="
        background-image: url('images/about-types/about-venue.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      
      ">
      <style>
        .style-dots {
          list-style-type: disc;
          margin-left: 180px;
          width: 800px;
        }

        .text-sm {
          font-size: 0.875rem;

        }

        .policy-container {
          /* background: linear-gradient(to bottom right, rgba(0, 91, 157, 0.8), rgba(228, 228, 228, 0.5)); */
          /* border: 1px solid white; */
          border-radius: 18px;
          margin: 1% 10%;
          width: 650px;
          height: 110px;
        }

        .policy-title {
          text-align: left;
          font-weight: bold;
          color: #000;
          padding-top: 10px;
          padding: 10px;

          background: transparent;
          font-size: 1.25rem;

        }

        .policy-text {
          font-weight: 500;
          text-align: left;
          /* padding: 10px; */
          padding-bottom: 6px;
          padding-left: 20px;
        }


        @media (max-width: 640px) {
          .style-dots {
            width: auto;
            margin-left: 40px;
            padding: 0 1rem;
          }

          .policy-container {
            width: auto;
            margin: 4% 5%;
            height: auto;
            padding: 1rem;
          }

          .policy-title {
            padding: 0.5rem 1rem;
            font-size: 1rem;
          }

          .policy-text {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
          }

          .contact-container {
            margin-left: 40px;
            margin-right: 10px;
            margin-top: 1rem;
            margin-bottom: 1rem;
          }

          .contact-title {
            font-size: 1rem;

          }

          .contact-name {
            font-size: 1.25rem;

          }

          .contact-role {
            font-size: 0.75rem;

          }

          .contact-phone {
            font-size: 0.875rem;

          }

          .online-button {
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 1rem;
            margin-bottom: 1rem;
            text-align: center;

          }



          .online-button button {
            padding: 0.625rem 1.5rem;

            margin: 0.5rem 0;

            font-size: 0.875rem;

            width: 100%;

          }

          .terms {
            /* border: 4px solid; */
            padding: 5%;
            text-align: center;
            width: 100% !important;
            margin: 0 !important;
            margin-right: 20px !important;
          }


        }

        /* Tablet styles */
        @media (min-width: 640px) and (max-width: 990px) {
          .style-dots {
            width: auto;
            margin-left: 77px;
            padding: 0 1rem;
          }

          .policy-container {
            width: auto;
            margin: 4% 5%;
            height: auto;
            padding: 1rem;
          }

          .policy-title {
            padding: 0.5rem 1rem;
            font-size: 1rem;

          }

          .policy-text {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;

          }

          .contact-container {
            margin-left: 80px;
            margin-right: 10px;
            margin-top: 1rem;
            margin-bottom: 1rem;
          }

          .contact-title {
            font-size: 1rem;

          }

          .contact-name {
            font-size: 1.25rem;

          }

          .contact-role {
            font-size: 0.75rem;

          }

          .contact-phone {
            font-size: 0.875rem;

          }

          .terms {
            width: 100% !important;
            margin: 0 !important;
            padding: 3% 0;

            /* border: 4px solid; */
            text-align: center;
          }
        }
      </style>
      <style>
        .link:hover::after {
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

      <!-- <div class="bg-white flex gap-10 w-full max-w-4xl mt-4 mx-auto px-6 py-2 justify-between items-center duration-750 ease-in rounded-2xl shadow-lg">
        <a href="online-regis.php" class="link text-gray-700 hover:text-red-500 transition-colors duration-300">Online Registration</a>
        <a href="term&condition.php" class="link text-gray-700 hover:text-red-500 transition-colors duration-300">Terms and Conditions</a>
        <a href="privacy-policy.php" class="link text-gray-700 hover:text-red-500 transition-colors duration-300">Privacy Policy</a>
        <a href="payment-issue.php" class="link text-gray-700 hover:text-red-500 transition-colors duration-300">Payment Issue</a>
      </div> -->
      <div class=" container mx-auto py-2 my-4 border-[#11A3CA] rounded-2xl " style=" background: linear-gradient(to bottom, rgba(255, 255, 255, 0.9), rgba(222, 243, 255, 0.9));">
        <div class="  ">
          <div class="bg-[#212a47]  text-white flex gap-10 w-full max-w-4xl mt-4 mx-auto px-6 py-2 justify-between items-center duration-750 ease-in rounded-2xl shadow-lg " id="hyperlinks">
            <a href="online-regis.php" class="link  text-white  text-sm transition-colors duration-300">Online Registration</a>
            <a href="term&condition.php" class="link  text-white  text-sm transition-colors duration-300">Terms and Conditions</a>
            <a href="privacy-policy.php" class="link  text-white  text-sm transition-colors duration-300">Privacy Policy</a>
            <a href="payment-issue.php" class="link  text-white  text-sm transition-colors duration-300">Payment Issue</a>
            <a href="cancel-refund.php" class="link  text-white  text-sm transition-colors duration-300">Cancellation & Refund Policy</a>
          </div>
          <h1 class="text-center font-bold  text-[#035793] mt-4  bg-trasnsparent text-2xl">
            Registration Fee
          </h1>
          <!-- ============== -->
          <style>
            th,
            td {
              border: 1px solid #20A3CC;
              text-align: left;
              padding: 8px;
            }
          </style>

          <div class="relative w-[80%] mx-auto my-4 overflow-x-auto" style="border-radius:10px;">
            <!--<table class="w-full text-sm text-center border border-[#20A3CC] rtl:text-right" style="border-radius:20px; ">-->
            <!--  <thead class="text-xs  font-medium   dark:bg-[#20A3CC] dark:text-white">-->
            <!--    <tr>-->
            <!--      <th scope="col" class="px-6 py-4">-->
            <!--        Category-->
            <!--      </th>-->
            <!--      <th scope="col" class="px-6 py-3">-->
            <!--        Early bird up to 30th April-->
            <!--      </th>-->
            <!--      <th scope="col" class="px-6 py-3">-->
            <!--        1st May to 31 August-->
            <!--      </th>-->
            <!--      <th scope="col" class="px-6 py-3">-->
            <!--        1st Sep to 10th Nov-->
            <!--      </th>-->
            <!--      <th scope="col" class="px-6 py-3">-->
            <!--        On Spot Registration-->
            <!--      </th>-->
            <!--    </tr>-->
            <!--  </thead>-->
            <!--  <tbody>-->
            <!--    <tr class="bg-white border-b border-[#20A3CC]">-->
            <!--      <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap  text-[#1C1C1C]">-->
            <!--        Student IPS Member <br> (Indian Delegate)-->
            <!--      </th>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--    </tr>-->
            <!--    <tr class="bg-white border-b border-[#20A3CC]">-->
            <!--      <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap  text-[#1C1C1C]">-->
            <!--        Student IPS Member <br> (Indian Delegate)-->
            <!--      </th>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--    </tr>-->
            <!--    <tr class="bg-white border-b border-[#20A3CC]">-->
            <!--      <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap  text-[#1C1C1C]">-->
            <!--        Student IPS Member <br> (Indian Delegate)-->
            <!--      </th>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--    </tr>-->
            <!--    <tr class="bg-white border-b border-[#20A3CC]">-->
            <!--      <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap  text-[#1C1C1C]">-->
            <!--        Student IPS Member <br> (Indian Delegate)-->
            <!--      </th>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--    </tr>-->
            <!--    <tr class="bg-white border-b border-[#20A3CC]">-->
            <!--      <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap  text-[#1C1C1C]">-->
            <!--        Student IPS Member <br> (Indian Delegate)-->
            <!--      </th>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--    </tr>-->
            <!--    <tr class="bg-white border-b border-[#20A3CC]">-->
            <!--      <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap  text-[#1C1C1C]">-->
            <!--        Student IPS Member <br> (Indian Delegate)-->
            <!--      </th>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--      <td class="px-6 py-4 text-[#666666]">-->
            <!--        ₹4500-->
            <!--      </td>-->
            <!--    </tr>-->


            <!--  </tbody>-->
            <!--</table>-->
            <style>
              table {
                width: 100%;
                border-collapse: collapse;
              }

              th,
              td {
                border: 1px solid #239ba9;
                text-align: center;
                padding: 8px;
              }

              td {
                background-color: #fff;
              }

              th {
                background-color: #035793;
                color: #fff;
                border: 1px solid #239ba9;
              }
            </style>

            <!-- Table according sheet given on mail  -->
            <div class="flex tab-tab">
              <table>
                <thead>
                  <tr>
                    <th rowspan="2">Category</th>
                    <th colspan="2">Registration Charges: INR (Indian Rupees) </th>
                  </tr>
                  <tr>
                    <th>Indian Delegates</th>
                    <th>Foreign Delegates </th>

                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                  <td>Faculty members, Scientists </td>
                  <td style="background: linear-gradient(to left, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%);"> ₹10,000</td>
                  <td style="background: linear-gradient(180deg, #fdfbfb 0%, #ebedee 100%);"> ₹15,000</td>

                </tr>
                <tr>
                  <td>Post-Doctoral Fellow, Research Associate </td>
                  <td style=" background: linear-gradient(360deg, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%);"> ₹7000</td>
                  <td style="background: linear-gradient(180deg, #fdfbfb 0%, #ebedee 100%);"> ₹10,000</td>

                </tr>
                <tr>
                  <td>Students</td>
                  <td style="background: linear-gradient(to top, #c4c5c7 0%, #dcdddf 52%, #ebebeb 100%);"> ₹5000</td>
                  <td style="background: linear-gradient(180deg, #fdfbfb 0%, #ebedee 100%);"> ₹8000</td>

                </tr> -->
                  <tr>
                    <td>Faculty members, Scientists </td>
                    <td style="background:rgb(243 252 255) ;"> ₹10,000</td>
                    <td> ₹15,000</td>

                  </tr>
                  <tr>
                    <td>Post-Doctoral Fellow, Research Associate </td>
                    <td style=" background:rgb(243 252 255);"> ₹7000</td>
                    <td> ₹10,000</td>

                  </tr>
                  <tr>
                    <td>Students</td>
                    <td style="background:rgb(243 252 255) ;"> ₹5000</td>
                    <td> ₹8000</td>

                  </tr>
                  <!-- <tr>
                  <td>Others</td>
                  <td> ₹4500</td>
                  <td> ₹4500</td>
                </tr> -->
                </tbody>
              </table>
            </div>
            <!-- --------------------- -->
            <div class="mx-[30%] my-6 online-button">
              <button type="button" class="py-2.5 my-4 px-12 me-2 mx-[40px] w-[350px] mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white   bg-[#035793]"><i class="fa-solid fa-earth-americas"></i> Online Registration</button>
            </div>
          </div>

          <p class="text-[#666666]    w-[800px] ml-40 terms">
            <span class="text-black font-semibold text-xl">The registration fee includes:
            </span>
          <ul class="  style-dots  w-[800px] ml-40 text-sm">
            <li>Access to All Conference Events and Cultural Programs</li>
            <li>Lunches for 12 <sup>th</sup>, 13<sup>th</sup>and 14 <sup>th</sup> November 2024</li>
            <li>Dinners for 12<sup>th</sup> and 13<sup>th</sup> November 2024</li>
            <li>Tea/Coffee Breaks during the conference</li>
            <li>Delegate Participation Certificate</li>
            <li>Conference Material (Bag, Stationary, Printed Program Booklet, Etc.)</li>
          </ul>
          </p>
          <br>
          <span class="text-black font-semibold ml-40 text-xl cancel">Cancellation/Refund Policy:
          </span>
          <ul class="  style-dots  w-[800px] ml-40 text-">
            <li class="">There is no refund for any cancellation of Registration.</li>
          </ul>
          <br>
          <p class="text-[#666666]  w-[800px] terms ml-40">
            <span class="text-black font-semibold text-xl ">TERMS &amp; CONDITIONS </span>
          <ul class="  style-dots  w-[800px] ml-40 text-sm">
            <li>Bank charges will be applicable as an additional fee in the online registration
              mode and fees exclude 18% GST.</li>
            <!-- <li>Registration is mandatory for Abstract Submission?</li> -->
            <li>Registration fee is non transferable</li>
            <li>Please mention your registration number in all transactions</li>
            <li>Decision of Organising Committee will be considered final.</li>
            <li>For legal purposes, the Jurisdiction area is New Delhi</li>
            <li>For spot registrations, Delegate kit will be provided subject to availability</li>
            <li>The organising committee will not be held responsible if conference gets
              cancelled/postponed/held in virtual mode because of an act of God or unavoidable
              circumstances like resurgence of COVID -19 cases. Any Decision regarding
              change in that case will be taken duly after consultation with the National
              Governing Body of the Society.</li>
          </ul>
          </p>
          <div class="ml-40 my-10 contact-container">
            <p class="text-xl font-semibold  contact-title">For any registration related queries,</br> Please contact</p></br>
            <h1 class="contact-name">Vishal Rathour</h1>
            <h6 class="contact-role">Registration In-Charge</h6>
            <a href="mailto:registration@isfr2024.in" class="text-blue-800 underline contact-email">registration@isfr2024.in</a>

            <p class="contact-phone">M: +91 9136619981</p>
          </div>
        </div>

      </div>


    </div>
    <!-- footer-------------- -->
    <?php include("component/footer.php"); ?>