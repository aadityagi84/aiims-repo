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
  <style>
    table {
      width: 70%;
      height: 30%;
      border-collapse: collapse;
      border: 1px solid #20A3CC;
      background: #F0FCFF;
      ;
      text-align: center;
      border-radius: 8px;
    }

    th,
    td {
      padding: 6px;
      border-bottom: 1px solid #20A3CC;

    }

    th {
      border-right: 1px solid #20A3CC;
      color: #333;
    }

    td {
      color: #666;
    }

    tr:last-child td {
      border-bottom: none;
    }

    th,
    td:first-child {
      width: 40%;
    }
  </style>
  <style>
    .style-dots {
      list-style-type: disc;
      margin-left: 100px;
      width: 800px;
    }

    .text-sm {
      font-size: 0.875rem;

    }

    .policy-container containerr {
      background: linear-gradient(to bottom right, rgba(0, 91, 157, 0.8), rgba(228, 228, 228, 0.5));
      border: 1px solid white;
      border-radius: 18px;
      margin: 4% 10%;
      width: 650px;
      height: 110px;
    }

    .policy-title {
      text-align: left;
      font-weight: bold;
      color: #fff;
      padding-top: 8px;
      padding: 10px;

      background: transparent;
      font-size: 1.25rem;

    }

    .policy-text {
      font-weight: 600;
      text-align: left;
      padding: 10px;
      padding-bottom: 6px;
    }


    @media (max-width: 640px) {
      .style-dots {
        width: auto;
        margin-left: 45px;
        padding: 0 1rem;
      }

      .policy-container containerr {
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

      .contact-container containerr {
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

      .policy-container containerr {
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

      .contact-container containerr {
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


    /* For small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
      .containerr {
        /* border: 4px solid; */
        width: 98%;
      }

      .child-containerr {
        /* border: 4px solid red; */
        margin: 0 !important;
        padding: 0 !important;
        display: flex;
        flex-wrap: wrap;
        flex-direction: column-reverse;
      }

      .child-containerr-1>p {
        /* border: 4px solid; */
        width: 100% !important;
        padding: 10px !important;

      }

      .child-containerr-1 {
        width: 98% !important;
        /* border: 4px solid blue; */
        border-radius: 10px;
        padding: 0 !important;
        margin: 0 !important;
      }

      .child-containerr-1>table {
        /* border: 5px solid; */
        width: 100% !important;
        margin: 10px 0;
        ;
      }

      .child-containerr-1>button {
        margin: 10px 45px !important;
      }

      .child-containerr-1>img {
        border-radius: 10px;
        width: 98%;
        margin: auto;
      }

      h1 {
        font-size: 20px !important;
        text-align: left !important;
        padding: 10px 15px !important;
      }

      .terms-con {
        /* border: 4px solid !important; */
      }

      .terms-con>span {
        font-size: 20px !important;
      }

      .terms-con1 {
        width: 100% !important;
        font-size: 17px !important;
        text-align: left !important;
        padding: 10px 0 10px 44px !important;
        margin: 0 !important;
      }

      .terms-con2 {
        font-size: 17px !important;
        text-align: left !important;
        padding: 0 0 0 14px !important;
        margin: 0 !important;
      }

      .pppppp {
        margin: 0 !important;
        padding: 10px 20px !important;
        font-size: 14px !important;
      }

      .add {
        width: 100% !important;
      }

      .add>h3 {
        font-size: 14px !important;
        padding: 0 !important;
        margin: 0 3.6% !important;
      }
    }

    /* For tablets (portrait and landscape, 600px to 900px) */
    @media only screen and (min-width: 601px) and (max-width: 900px) {
      .terms-con1 {
        width: 100% !important;
        font-size: 17px !important;
        text-align: left !important;
        padding: 10px 0 10px 44px !important;
        margin: 0 4% !important;
      }
    }

    /* For laptops (901px to 1200px) */
    @media only screen and (min-width: 901px) and (max-width: 1200px) {
      .terms-con1 {
        width: 100% !important;
        font-size: 17px !important;
        text-align: left !important;
        padding: 10px 0 10px 44px !important;
        margin: 0 4% !important;
      }
    }

    /* For large screens (1201px and up) */
    @media only screen and (min-width: 1201px) {
      .terms-con1 {
        width: 100% !important;
        font-size: 17px !important;
        text-align: left !important;
        padding: 10px 0 10px 44px !important;
        margin: 0 2% !important;
      }
    }
  </style>


  <body>


    <!-- Content -->
    <div class="pb-6 bg-[#f2f6f9] border border-[#f2f6f9] " style="
         background: linear-gradient(180deg, #12A6CC 0%, #035793 100%);

        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      ">
      <h1 class="text-center text-3xl font-semibold text-white pt-10">

        ACCOMMODATION</h1>
      <div class="container containerr 
       mx-auto my-10 border-white">
        <div class=" text-white p-4   text-center ">
          <h1 class="text-center">Dear Esteemed Participants,</h1>
          <p>We have negotiated special rates for the hotel ranging from 5-star to the guest house category, suiting all
            budget travellers. Rooms are being booked on first cum first serve basis. Hence, you are requested to
            book your accommodation early.</p>
        </div>


      </div>
      <div class="container containerr  rounded-[14px] mx-auto " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8"> The Ashok, New Delhi</h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1 ">
            <p class="text-justify p-8">Situated in the bustling capital city of India, The Ashok provides an array of amenities including an outdoor
              swimming pool, a spa and wellness center, and a fully equipped fitness facility. Complimentary Wi-Fi is accessible
              throughout the premises. Each accommodation at The Ashok features modern conveniences such as a television, air
              conditioning, and a minibar. Additionally, guests will find an electric kettle for their convenience. The private
              bathrooms are equipped with showers, complimentary toiletries, and cozy slippers. Extra comforts include a seating
              area and access to cable channels.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/delhi1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>5 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Standard Rooms</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>15.2 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>6.5 Kms </td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking Enquiry</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/delhi2.jpg">
          </div>
        </div>


      </div>

      <!-- ============ -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8"> The Park, New Delhi</h1>
        <div class=" flex mx-auto items-center child-containerr">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">The Park New Delhi offers convenient access to AIIMS, just a 10-minute stroll away. The hotel offers quick check-in
              and check-out, along with non-smoking rooms, a restaurant, and complimentary Wi-Fi throughout. Guests can
              enjoy an outdoor swimming pool, fitness center, garden, and terrace. Additionally, there&#39;s free private parking, and
              airport shuttle service is available for a fee.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/delhi-park1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>5 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Luxury Rooms</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>19.2 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>4.9 Kms </td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/delhi-park2.jpg">
          </div>
        </div>


      </div>
      <!-- ============================= -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8"> Le Méridien New Delhi</h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">Over the last three decades, Le Meridien New Delhi has transformed itself into a masterpiece. The 5-star hotel is an epitome of world-class architecture, cuisine, design and fashion. Located in the heart of the city, the iconic glass building of Le Meridien New Delhi has been recognized as one of the 100 Icons of Delhi. The hotel is readily accessible to city's important facilities and institutions. The glass building is surrounded by ministries, government institutions, Media Centre and historical monuments. The shopping hubs Connaught Place and Jan path Market are within walking distance from the hotel. It's a perfect getaway for a business traveller who is also looking for some recreation nearby in the evening. The Le Meridien New Delhi can be summed as a Traveller’s Paradise</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/merdien.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>5 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Guest Rooms</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>18.9 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>8.7 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/nerdien2.jpg">
          </div>
        </div>
      </div>
      <!-- ============================ -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8"> The Lalit, New Delhi:</h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">The LaLiT New Delhi stands at the heart of central Delhi, conveniently near major commercial and business hubs. Offering 461 luxurious rooms and suites, it sets the standard as the premier 5-star hotel in Delhi. Distinguishing itself from others, The LaLiT New Delhi boasts the exclusive "Art Junction," a unique space that transcends the typical art gallery experience. Here, over 5000 artists, ranging from emerging talents to established names, have their works displayed, making it a true haven for art enthusiasts.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/lalit1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>5 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Business Suite</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>22.1 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>9.8 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/lalit2.jpg">
          </div>
        </div>
      </div>
      <!-- ========= -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8"> Novotel New Delhi Aerocity</h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">Novotel New Delhi Aerocity boasts a modern and expansive design, offering 400 well-appointed rooms that serve as comfortable living spaces tailored to meet your every requirement. Catering to both business and leisure travellers, the hotel provides an array of amenities including diverse dining choices, a deluxe spa, and a round-the-clock fitness center. Conveniently located adjacent to both international and domestic airport terminals, with easy access via the Airport Express Line just a short 5-minute journey away, it serves as an ideal hub for travellers.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/novo1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>5 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Standard Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>4.6 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>13.6 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/novo2.jpg">
          </div>
        </div>
      </div>
      <!-- ============ -->
      <!-- =========================================================================================================================================================================================================================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">Holiday Inn New Delhi Int'L Airport, an IHG Hotel</h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">Experience the convenience of staying at Holiday Inn New Delhi International Airport, a top-rated hotel situated mere moments away from IGI Airport. Guests can enjoy complimentary Wi-Fi and airport transfers with select rates. Travelers appreciate our excellent connectivity to key business districts such as Worldmark, DLF Cybercity, Udyog Vihar, Yashobhoomi, and Gurgaon. Plus, the Aerocity Metro Station, just a brief two-minute stroll away, offers swift access to various parts of the city. Each of our 265 guest rooms and suites boasts elegant design and amenities including LED TVs, a choice of pillows, and triple-glazed windows for a tranquil night's rest.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/holiday-inn1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>5 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Standard Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>13.3 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>4.4 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/novo2.jpg">
          </div>
        </div>
      </div>
      <!-- ================================= -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">Ambassador, New Delhi - IHCL SeleQtions</h1>
        <div class=" flex mx-auto items-center child-containerr">
          <div class="w-[70%] px-4  child-containerr-1">
            <p class="text-justify p-8">Set in the aristocratic heart of New Delhi, Ambassador is a contemporary hotel serving up a slice in time. Just a short drive from the international airport, it ushers leisure and business travellers into a red-brick and pink bougainvillaea neighbourhood, surrounded by plush shopping districts, gardens and magnificent monuments..</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/novo1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>5 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Superior Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>19.6 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>6.4 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/holoiday-inn2.jpg">
          </div>
        </div>
      </div>
      <!-- ////////////////////////// -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">JRD Exotica || Business Hotel</h1>
        <div class=" flex mx-auto items-center child-containerr  ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">JRD Exotica in New Delhi extends an invitation for you to indulge in an accessible luxury during your stay with us. This hotel, conveniently located near AIIMS, boasts well-lit, well-appointed, and lavishly furnished rooms designed for your comfort. Each room is equipped with a range of modern amenities including a fully stocked minibar, deluxe bath accessories, a tea & coffee maker, and a 42-inch television featuring your favourite channels. Alongside complimentary breakfast and Wi-Fi, we also provide an in-room safe and digital key for your security, as well as exceptional room service available throughout the day, ensuring a seamless and delightful experience during your stay with us.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/jrd1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>4 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Superior Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>16.8 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>3.7 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/jrd2.jpg">
          </div>
        </div>
      </div>
      <!-- ////////////////////////// -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">

          Hotel Diplomat
        </h1>
        <div class=" flex mx-auto items-center  child-containerr">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">Hotel Diplomat, situated amid verdant surroundings and positioned in the prestigious area of central New Delhi, epitomizes modern refinement. With opulent elegance, impeccable service, and unmatched hospitality, it stands as the epitome of luxury in the capital. Boasting a plethora of amenities, it is renowned as Delhi's premier boutique hotel. Each of its deluxe rooms and suites is exquisitely designed with unique interiors and decor, ensuring a truly exceptional experience.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/hotel-dip1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>4 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Deluxe Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>14.5 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>7.5 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/hotel-dip2.jpg">
          </div>
        </div>
      </div>
      <!-- ///////////////////////////////////// -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">

          Udman Panchshila Park:
        </h1>
        <div class=" flex mx-auto items-center child-containerr">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">UDMAN stands out as the top-notch boutique hotel in New Delhi, offering a comprehensive and lavish hospitality encounter suitable for both corporate and leisure voyagers. The modern layout and subtle refinement of the establishment encapsulate an artistic perspective that permeates every corner of the hotel. </p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/udman1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>4 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Superior Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>17.7 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>5.1 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/udman2.jpg">
          </div>
        </div>
      </div>
      <!-- ========================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          NUO by jüSTa, Greater Kailash
        </h1>
        <div class=" flex mx-auto items-center child-containerr">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">NUO is your home away from home when you are in Delhi. It’s the ideal place to unwind after a long day. Whether it’s a weekend getaway or a business trip, we have spacious rooms available with delicious food. We’re committed to providing our guests with a comfortable experience while they are here at the NUO hotel in Delhi.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/nuo1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>4 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Standard Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>21.4 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>5.2 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/nuo2.jpg">
          </div>
        </div>
      </div>
      <!-- ========================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          Park Inn by Radisson New Delhi Lajpat Nagar
        </h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">Conveniently positioned just off NH-48 and a mere 20-minute drive from the Indira Gandhi International Airport (DEL), the luxurious Park Inn by Radisson New Delhi Lajpat Nagar situates you at the core of one of Delhi's most sought-after neighborhoods. Within strolling distance are the Moolchand Metro Station and Lajpat Nagar Bus Stop, granting effortless access to prominent areas such as Nehru Place, Mathura Road, Lodhi Road, Jasola, and Connaught Place, as well as major medical centres like AIIMS and Moolchand Hospital.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/radisson1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>4 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Standard Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>21.5 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>4.0 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/radisson2.jpg">
          </div>
        </div>
      </div>
      <!-- ========================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          Hotel The Royal Plaza
        </h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">Located in the heart of the capital city Connaught Place, New Delhi Hotel the Royal Plaza is close to several locations of interest including India Gate, Presidential Palace, Parliament, Pragati Maidan and shopping districts amongst others. Winner of several awards we are a fully serviced 4 star-deluxe property. On offer are 419 Luxury well-furnished rooms and suite consisting of the second largest room inventory in the city-center</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src=" images/accmo/hotel-plazza1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>4 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Standard Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>20.0 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>7.7 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/hotel-plazza2.jpg">
          </div>
        </div>
      </div>
      <!-- ========================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          The Saga Hotel, Green Park | New Delhi
        </h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">The Saga Delhi: Where Urban Convenience Harmonizes with Tranquillity. Step into the hotel where opulence intertwines with coziness, offering you an oasis of relaxation just steps away. We're delighted to host you and dedicated to making your stay unforgettable. Our rooms and suites provide the ideal haven for unwinding during your journey. Featuring plush bedding, contemporary facilities, and a warm ambiance, you can indulge in a restful night's sleep after your day's adventures</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/saga1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto  child-containerr">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>3 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Standard Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>16.4 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>2.2 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/saga2.jpg">
          </div>
        </div>
      </div>
      <!-- ========================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          Minimalist Poshtel & Suites
        </h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">"Step into Minimalist, where the tranquillity of Japanese aesthetics harmonizes with the practicality of Scandinavian design. Discover our blend of sleek designs, spacious interiors, and subtle hues. Explore our collection of Japanese Style Capsules & Studio Apartments, complemented by our inventive Social Kitchen, all within a single environment.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/mini-poshtel1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>3 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Single Lagom</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>18.7 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>3.4 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/mini-poshtel2.jpg">
          </div>
        </div>
      </div>
      <!-- ========================== -->
      <!-- ========================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          The Ashtan Sarovar Portico, New Delhi
        </h1>
        <div class=" flex mx-auto items-center  child-containerr">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">The Ashtan Sarovar Portico stands as a modern business hotel situated in Green Park Extension, New Delhi, India. Nestled amidst the Green Park Area, it epitomizes refined architecture and contemporary lifestyle, distinguishing itself as one of the premier accommodations in the locale. Renowned for its exceptional hospitality, The Ashtan Sarovar Portico, New Delhi, has established itself as a leader in the hospitality sector by offering unparalleled services and amenities to its guests. Its accommodations are divided into two categories: Superior Rooms and Premium Rooms, both of which are equipped with air conditioning, luxurious furnishings, and state-of-the-art facilities, ensuring a truly comfortable and enjoyable stay.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/ashtan1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>3 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Superior Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>18.0 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>1.8 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/ashtan2.jpg">
          </div>
        </div>
      </div>
      <!-- ========================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          Hotel Nature View Green Park, New Delhi
        </h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">Situated in New Delhi, Hotel Nature View Green Park Metro Couple Friendly New Delhi is conveniently located within a short distance of popular landmarks such as Lodhi Gardens (3.3 miles away) and Gandhi Smriti (4 miles away). The hotel offers comfortable accommodations, boasting a terrace for guests to enjoy. Providing added convenience, the 3-star hotel offers air-conditioned rooms equipped with complimentary Wi-Fi and private bathrooms. Guests can also benefit from amenities such as room service, a 24-hour front desk, and currency exchange services. Each guest room at the hotel is furnished with an electric tea kettle for added comfort. Additionally, all rooms feature a flat-screen TV, while select units offer the luxury of a balcony. Bed linen and towels are provided in every room for the convenience of guests</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/hotel-natutre1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto  child-containerr">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>3 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Superior Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>16.1 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>2.7 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/hotel-natutre2.jpg">
          </div>
        </div>
      </div>
      <!-- =============================== -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          Red Fox Hotel, Delhi Airport
        </h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">Red Fox Hotel, located near Delhi Airport, sits 4 kilometres from Indira Gandhi International Airport and 5 kilometres from the domestic terminal. Additionally, it's conveniently positioned just a kilometre from Aerocity Metro Station, facilitating quick access to Delhi and Gurugram’s corporate and commercial centres. The hotel also boasts proximity to numerous entertainment and shopping venues in the city. Upon arrival at Red Fox Hotel, Delhi Airport, guests are greeted by vibrant interiors and immaculate rooms. This budget-friendly accommodation impresses with its exceptional value and steadfast commitment to safety standards.</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/red-fox1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>3 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Superior Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>4.2 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>15.3 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/red-fox2.jpg">
          </div>
        </div>
      </div>
      <!-- ============ -->
      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <h1 class="text-[#035793] text-2xl font-semibold pl-12 pt-8">
          The USI Residency Resorts: -
        </h1>
        <div class=" flex mx-auto items-center child-containerr ">
          <div class="w-[70%] px-4 child-containerr-1">
            <p class="text-justify p-8">The USI Residency spans across 4 acres and boasts 30 finely furnished rooms along with 7 serviced apartments. Nestled within the serene confines of the Army containment area, it offers a tranquil escape from the urban chaos, yet conveniently located at the heart of Delhi. Situated just 5 minutes away from the domestic airport and 15 minutes from the international airport, it ensures easy accessibility. The residency offers an array of services including room service for the apartments, housekeeping, a 24-hour coffee shop, laundry facilities, and a travel desk</p>
          </div>
          <div class=" w-[20%] p-2 child-containerr-1">
            <img src="images/accmo/usi1.jpg" alt="">
          </div>
        </div>
        <div class="px-8   flex items-center mx-auto child-containerr ">
          <div class="w-[60%] p-6 child-containerr-1">

            <table>
              <tr>
                <th>Category</th>
                <td>3 Star</td>
              </tr>
              <tr>
                <th>Room Category</th>
                <td>Superior Room</td>
              </tr>
              <tr>
                <th>Distance from Airport</th>
                <td>9.6 Kms</td>
              </tr>
              <tr>
                <th>Distance from Venue</th>
                <td>11.8 Kms</td>
              </tr>
            </table>
            <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-2 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="#">Booking NOW !!</a></button>
          </div>

          <div class=" w-[20%] child-containerr-1">
            <img src="./images/accmo/usi2.png">
          </div>
        </div>
      </div>
      <!-- ============ -->



      <div class="container containerr  rounded-[14px] mx-auto mt-6 " style="
         background: linear-gradient(180deg, rgba(172, 232, 255, 0.8) 0%, rgba(255, 255, 255, 0.8) 100%);
      ">
        <p class="text-[#666666]  terms-con   w-full ml-20 py-10 terms">
          <span class="text-black font-semibold text-[32px] ">Terms and Conditions:
          </span>
        <h1 class="text-[20px] font-semibold ml-[100px]  terms-con1  ">Rates and Availability:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li>The rates will have shared as per the request</li>
          <li>Hotel room bookings are subject to availability at the time of booking, and it is advisable to book early to secure your reservation.</li>
          <li> The rates that we will share will be valid only for the 36th International Conference of the International Society for Fluoride Research, taking place from 12<sup>th</sup> to 14<sup>th</sup> November 2024.</li>
          <li>Room rates are applicable on a per room per night basis</li>
        </ul>

        <h1 class="font-semibold text-black pt-6 text-[17px]  terms-con1 ">Inclusions:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li>The room rates include buffet breakfast at designated restaurants.</li>
          <li>Complimentary Wi-Fi internet access is also included during your stay.</li>
        </ul>
        <h1 class="font-semibold text-black pt-6 text-[17px]  terms-con1 ">Check-in and Check-out:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li>The standard check-in time is at 14:00 hrs, and check-out time is at 11:00 hrs.

          </li>
          <li>In case of early arrival, room(s) should be booked from the previous day for immediate occupancy.</li>
        </ul>
        <h1 class="font-semibold text-black pt-6 text-[17px]  terms-con1 ">Taxes:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li>The above rates do not include government taxes (18% GST) on room charges. Taxes will be added to your invoice, and any changes in the tax structure will be applicable.</li>
          <li>Please note that taxes are government-mandated and are subject to change or revision.</li>
        </ul>
        <h1 class="font-semibold text-black pt-6 text-[17px]  terms-con1 ">Exclusions:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li>The rates that we will share are exclusive of additional services such as airport transfers, tips, laundry, meals not mentioned, room service, mini-bar charges, phone bills, and any other services not specifically mentioned in this document.</li>
        </ul>
        <h1 class="font-semibold text-black pt-6 text-[17px]  terms-con1 ">Booking Guarantee:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li>To secure your room reservation, a 100% advance payment towards the room(s) booked is required.</li>
        </ul>
        <h1 class="font-semibold text-black pt-6 text-[17px]  terms-con1 ">Alternative Hotel Booking:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li>In the event that your first preference hotel is not available, we will confirm a room at the next available preferred hotel. Any price difference between the original booking and the alternative hotel, if applicable, will need to be paid by the guest</li>
        </ul>
        <h1 class="font-semibold text-black pt-6 text-[17px]  terms-con1 ">Refunds:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li>Refunds, if applicable, will be processed within 30 days after the completion of the event.</li>
        </ul>
        <h1 class="font-semibold text-black pt-6 text-[17px]  terms-con1 ">Cancellation Policy:</h1>
        <ul class="  style-dots  text-black  w-[800px] ml-40 text-sm">
          <li><span class="text-black pt-6 font-semibold text-[17px]">Cancellation 75 Days or More Prior to Check-in: </span> No cancellation charges will be applied, and a full refund will be issued.</li>
          <li><span class="text-black pt-6 font-semibold text-[17px]">Cancellation 76 to 60 Days Prior to Check-in: </span> If you cancel your booking within this time frame, a 50% cancellation fee of the full amount will be charged, and the remainder will be refunded.</li>
          <li><span class="text-black pt-6 font-semibold text-[17px]">Cancellation Less Than 59 Days Prior to Check-in or No Show: </span> Cancellation of rooms less than 59 days prior to check-in or a no-show will result in full cancellation charges for the duration of your stay. No refund will be issued.</li>
        </ul>
        <p class="py-6 px-24 font-medium text-justify pppppp">By making a booking, you acknowledge and agree to abide by these Terms and Conditions. Please review this document carefully and ensure that you understand and accept the terms outlined above before proceeding with your reservation. If you have any questions or require further clarification, please do not hesitate to contact us.</p>
        </p>
        <h1 class="font-semibold ml-20  terms-con2">For any query related to Accommodation, please feel free to reach:</h1>
        <div class="add">
          <h3 class="text-left ml-20 font-medium">Mr. Vishal Rathour</h3>
          <h3 class="text-left ml-20 underline"> Email: -<a href="mailto:vishal.rathour@chime.travel"> vishal.rathour@chime.travel</a> </h3>
          <h3 class="text-left ml-20 font-medium">Conference Secretariat</h3>
          <h3 class="text-left ml-20 font-medium">36th ISFR</h3>
          <h3 class="text-left ml-20 font-medium pb-10">All India Institute of Medical Science, New Delhi - 110029</h3>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include("component/footer.php"); ?>