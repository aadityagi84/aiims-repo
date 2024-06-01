<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>ISFR2024</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link rel="stylesheet" href="Responsive.css" />
  <link rel="stylesheet" href="./sidebar.css">
  <?php include("component/header.php"); ?>
</head>

<body>
  <style>
    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .my-float {
      margin-top: 16px;
    }

    .home-hero img {
      visibility: hidden;
    }

    .hero-contact {
      width: 48px;
      top: 90%;
      position: fixed;
      right: 0;
      z-index: 0;
      transform: translate(0, -50%);
    }

    .email-us,
    .enquire,
    .Whatsapp {
      font-size: 16px;
      font-weight: 500;
      /* text-transform: uppercase; */
      background: 0 0;
      color: var(--red);
      width: 260px;
      height: 47px;
      line-height: 48px;
      margin-bottom: 14px;
      padding: 0 0 0 60px;
      position: relative;
      right: 0;
      display: block;
      -webkit-border-top-left-radius: 50px;
      -webkit-border-bottom-left-radius: 50px;
      -moz-border-radius-topleft: 50px;
      -moz-border-radius-bottomleft: 50px;
      border-top-left-radius: 50px;
      border-bottom-left-radius: 50px;
      transition: all 0.3s ease-out;
    }

    .email-us:before,
    .enquire:before,
    .Whatsapp:before {
      content: "";
      background-position: center center;
      background-repeat: no-repeat;
      width: 47px;
      position: absolute;
      left: -2px;
    }

    .Whatsapp:before {
      background-image: url('images/icons8-registration-48.png');
      top: 0;
      box-shadow: 0 0 16px #212a47 outset;
      border-radius: 50%;
      width: 48px;
      height: 48px;
    }

    .email-us:before {
      background-image: url('images/icons8-submit-document-48.png');
      top: 0;
      box-shadow: 0 0 16px #212a47 outset;
      border-radius: 50%;
      height: 48px;
    }

    .enquire:before {
      background-image: url(//www.trivenipackaging.com/wp-content/themes/Triveni/css/../images/iconEnquiry.png);
      top: 0;
      height: 47px;
    }

    .email-us:hover,
    .enquire:hover,
    .Whatsapp:hover {
      right: 210px;
      background: #f1f1f1;
    }
  </style>


  <div class="hero-contact">
    <a class="Whatsapp" href="online-regis.php" target="_self">Online Registartion</a>
    <a class="email-us" href="abstract-submission.php">abstract submission</a>
    <!-- <a class="enquire" href="contact-us.php">Enquire</a> -->
        
  </div>
  <!-- ========= -->
  <article>
    <div class="container-fluid min-h-[700px] parrent-banner border border-[#212a47]" style="
       background: linear-gradient(to bottom, #212a47, #24a1ad);

          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        ">
      <div class="container mx-auto border border-[#5BBBFF] mt-8 mb-10 rounded-lg flex items-center gap-[10px] banner-cont   ">
        <div class="banner w-1/2 ">
          <img src="./images/banner-img-aiims.png" class=" h-[730px] rounded-tl-lg rounded-bl-lg" alt="'" />
        </div>
        <div class="banner2 w-1/2">

          <div class="container p-6  text-white flex flex-col banner-txt gap-12">

            <div class="  mx-auto foot2">
              <span class=" text-[29px] pb-4 pl-[70px]"> Days To Go </span>
              <div class="text-white  w-[290px] flex border gap-[5px] border-b-2 border-0">

                <div class="flex flex-col items-center justify-between py-2">
                  <span id="dayss" class="text-2xl"> </span>
                  <span class="text-[15px]">Days</span>
                </div>
                &nbsp; <span class="py-[14px]">:</span>
                <div class="flex flex-col items-center py-2">
                  <span id="hourss" class="text-2xl"></span>
                  <span class="text-[15px]">Hours</span>
                </div>
                &nbsp; <span class="py-[14px]">:</span>
                <div class="flex flex-col items-center py-2">
                  <span id="minutess" class="text-2xl"></span>
                  <span class="text-[15px]">Minutes</span>
                </div>
                &nbsp; <span class="py-[14px]">:</span>
                <div class="flex flex-col items-center py-2">
                  <span id="secondss" class="text-2xl"></span>
                  <span class="text-[15px]">Seconds</span>
                </div>
              </div>
            </div>
            <h2 class="text-[28px] mt-4">IMPORTANT DATES </h2>
            <div style="border-top-left-radius: 6px">
              <h1 class="bg-[#367dac] py-2 px-6" style="border-top-left-radius: 18px">
                Main Conference
              </h1>
              <p class="bg-white text-[#045C97] py-2 px-4" style="border-bottom-right-radius: 18px">
                12<sup>th</sup> to 14<sup>th</sup>  November 2024
              </p>
            </div>
            <div style="border-top-left-radius: 6px;" class="imp-banner">
              <h1 class="bg-[#367dac] py-2 px-6" style="border-top-left-radius: 18px">
                Abstract Submission
              </h1>
              <div class="bg-white   text-[#045C97] py-2 px- flex flex-row items-center justify-between" style="border-bottom-right-radius: 18px ;">
                <div class="">
                  <p class="bg-white text-[#045C97] py-2 px-4">
                    Open :  30<sup>th</sup>  May 2024
                  </p>
                  <p class="bg-white text-[#045C97] py-2 px-4" style="border-bottom-right-radius: 18px">
                    Close :  15<sup>th</sup>  September 2024
                  </p>
                </div>
                <div class="text-[#] text-[15px]  click click1 px-4 flex items-center gap-1" style="border-bottom-right-radius: 6px ;">
                  <a href="online-regis.php"> Click Here </a><i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
              <p class="pt-4 text-center text-[20px]">
                <span>Venue :</span> All India Institute of Medical Science
                (AIIMS), New Delhi
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
  <!--<div class="conatiner-fluid py-10 timmmm">-->
  <!--  <span class="text-2xl px-6 py-2" id="day"> Days To Go : </span>-->
  <!--  <div class="text-white mx-auto rounded-[16px] w-[700px] time p-4 bg-[#1585b5] timm2   " style="background:linear-gradient(360deg, #212a47, #24a1ad); ;">-->
  <!--    <div class="flex items-center">-->
  <!--      <span class="text-2xl px-6 py-2" id="daya"> Days To Go : </span>-->
  <!--      <div class="flex  tum  gap-6">-->
  <!--        <div class="flex flex-col items-center py-2">-->
  <!--          <span id="days1" class="text-2xl daa"> </span>-->
  <!--          <span class="text-[15px]  daa">days</span>-->
  <!--        </div>-->
  <!--        <span class="py-3 text-xl">:</span>-->
  <!--        <div class="flex flex-col items-center py-2">-->
  <!--          <span id="hours1" class="text-2xl daa"></span>-->
  <!--          <span class="text-[15px] daa">hours</span>-->
  <!--        </div>-->
  <!--        <span class="py-3 text-xl">:</span>-->
  <!--        <div class="flex flex-col items-center py-2">-->
  <!--          <span id="minutes1" class="text-2xl daa"></span>-->
  <!--          <span class="text-[15px] daa">minutes</span>-->
  <!--        </div>-->
  <!--        <span class="py-3 text-xl">:</span>-->
  <!--        <div class="flex flex-col items-center py-2">-->
  <!--          <span id="seconds1" class="text-2xl daa"></span>-->
  <!--          <span class="text-[15px] daa">seconds</span>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <div class="pb-6 bg-[#f2f6f9]   invitaionparent  border border-[#f2f6f9]" style="
        background-image: url('images/doctor-removebg-preview.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
      ">
    <div class="container  border-[#11A3CA] rounded-2xl invitaion  border  pb-20 mb-10 mx-auto mt-10" style="background-color: rgba(255, 255, 255, 0.6)">
      <h1 class="text-[#035793]  text-center text-[30px] pt-8 font-semibold">
        INVITATION
      </h1>
      <div class="px-16">
        <h2 class="text-[#035793] font-bold text-[20px] mt-10">
          Welcome to the 36th International Conference of the International Society for Fluoride Research
          (ISFR)
        </h2>
        <br />
        <p class="font-medium text-[15px]">

          We are excited to invite you to join us from November 12 to 14, 2024, in the vibrant city of New
          Delhi, India, for a ground-breaking conference on the impacts of fluoride on health. Hosted under
          the distinguished chairmanship of Professor A. Shariff, Founder Chief of Clinical Ecotoxicology
          Diagnostic and Research Facility at AIIMS, New Delhi, and Organizing Secretary Dr. Javed Ahsan
          Quadri, Vice-President of International Society of Fluoride Research, New Zealand, this event
          promises to bring together a diverse group of doctors, thought leaders, researchers, practitioners,
          and students from across the globe.
        </p>
        <br /><br />
        <p class="font-medium text-[15px]">
          <span class="text-[#035793] font-bold text-[20px]">Conference theme: Fluoride toxicity and spectrum of adverse health effects: Challenges of skeletal
            and non-skeletal fluorosis across ages and new mitigation modalitiese</span>
          <br>
          The conference aims to delve into the complex issues surrounding fluoride toxicity, exploring both
          the skeletal and non-skeletal effects of fluorosis across different age groups. Our sessions are
          designed to foster rigorous scientific discourse, promote the exchange of ideas, and facilitate
          collaborations that could lead to significant advancements in the diagnosis, treatment, and
          prevention of fluorosis.
        </p>
        <br />
        <p class="font-medium text-[15px]">
          Attendees can look forward to a comprehensive agenda that includes keynote addresses by leading
          experts, panel discussions that probe deep into the challenges and solutions, oral and poster
          presentations showcasing cutting-edge research, and ample opportunities for networking.
        </p>
        <br />

        <p class="font-medium text-[15px] ">
          Whether you are a scientist, a healthcare provider, a policy maker, or a student, your contribution
          and participation will enrich our discussions and help pave the way for innovative solutions to
          fluoride-related health issues.

        </p>
        <br />
        <p class="font-medium text-[15px]">
          We encourage you to explore our website to find more information on registration, abstract
          submission, and the detailed conference schedule. Join us as we work together to address the
          pressing challenges posed by fluoride toxicity and improve public health outcomes around the
          world.
        </p>
        <br />
        <style>
          @media (max-width: 640px) {
            .invitation-problem {
              flex-direction: column;
              align-items: center;
            }

            .invitation-problem>div {
              width: 100%;
              margin-bottom: 1rem;
            }
          }
        </style>
        <p class="font-medium text-[15px]">
          We eagerly await your participation and look forward to welcoming you to New Delhi for an
          engaging and inspiring conference.
        </p>
        <div class="invitation-problem flex  items-center flex-wrap my-4 mb-10 py-10 w-[98%]">
          <div class="w-1/3 text-center ">
            <div class="w-[200px] h-[200px] border rounded-full mx-auto">
              <img src="images/user.png" alt="">
            </div>
            <h1 class="   font-semibold text-[20px]">Professor A. Shariff</h1>
            <h1 class="font-regular p-2 text-md">Organizing Chairman</h1>

          </div>
          <div class="w-1/3 text-center">
          </div>
          <div class="w-1/3 text-center">
            <div class="w-[200px] h-[200px] border rounded-full mx-auto">
              <img src="images/user.png" alt="">
            </div>
            <h4 class="font-semibold text-[20px]">Dr. Javed Ahsan Quadri</h4>
            <h4 class="  font-regular p-2 ">Organizing Secretary</h4>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- about -->
  <About>
    <div class="container-fluid w-full  about border border-white mb-4">
      <div class="container mx-auto mt-20 rounded-xl" style="
            /* background-image: url('./images/about/about\ frame.jpg'); */
          background: linear-gradient(180deg, #dfe9f3 0%, white 100%);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
          ">

        <div class="flex items-center parent-container justify-evenly">
          <div class="w-[35%]   ml-20  about2">
            <img src="./images/about/about-delhi2.png
            " class="h-[400px] p-6" id="abt-img" alt="" />
          </div>
          <div class="w-1/2 mr-20  about1">
            <p class="font-medium text-justify about1-txt pr-16 text-[15px]">
            <h1 class="text-left font-bold text-[#035793] about-text-res text-3xl pb-8 ">
              About Delhi
            </h1>
            <p class="text-justify pr-16 text-[15px] abt-txt">
              Delhi, the capital city of India, is a vibrant and diverse metropolis that seamlessly blends
              the old with the new, offering a plethora of experiences for tourists. Renowned for its rich
              history, Delhi boasts UNESCO World Heritage Sites such as the Red Fort, Qutub Minar,
              and Humayun&#39;s Tomb, showcasing the city&#39;s architectural marvels. The bustling markets
              like Chandni Chowk and Sarojini Nagar provide a delightful shopping experience, offering
              everything from traditional handicrafts to modern fashion. Food enthusiasts are in for a
              treat, as Delhi is a paradise for gastronomic adventures. From street food delights like
              chaat and kebabs to fine dining experiences featuring Mughlai and North Indian cuisines,
              the city&#39;s culinary scene is diverse and delectable. Additionally, Delhi serves as a
              convenient hub for exploring nearby attractions like Agra&#39;s Taj Mahal, Jaipur&#39;s Pink City,
              and the serene hills of Himachal Pradesh, making it an ideal starting point for wider
              exploration of India&#39;s cultural and natural treasures.</p>
            </p>
          </div>

        </div>
      </div>
    </div>
  </About>
  <!-- About Venue -->
  <About>
    <div class="container-fluid border border-blue-100 mt-20 about-venue  min-h-[600px]" style="
          background-image: url('./images/about/Venue\ Frame.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
        ">
      <div class="container mx-auto mt-16 sub-about-venue rounded-xl mb-[5vh] bg-white">
        <h1 class="text-center pb-8 font-bold text-[#035793] text-3xl pt-8">
          About Venue
        </h1>
        <div class="flex px-16 main-sub-about-venue items-center justify-evenly">
          <div class=" main1  w-1/2 mb-6">
            <h1 class="font-bold text-2xl van-head ">All India Institute of Medical Science (AIIMS), New Delhi</h1>
            <p class="font-medium text-justify px- py-2 text-[15px] venu-txt ">
              AIIMS, New Delhi is considered among the top 10 best Institutes in India according to the NIRF
              Ranking 2023. AIIMS was established in 1956 as the Institute of National Importance to serve the
              country in all aspects of healthcare focusing on research, teaching, and healthcare. AIIMS, New Delhi
              is an autonomous Institute working under the Ministry of Health and Family Welfare, Govt. of India.
              AIIMS, New Delhi&#39;s main campus is located in Ansari Nagar, adjacent to the South Extension-II
              market. It Is well connected to the Sir Aurobindo Marg and Mahatma Gandhi Marg Roundabout
              flyover crossing for transportation connectivity by road and by Delhi-Metro.
            </p>
          </div>
          <div class=" mb-6  main2 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7008.132484141757!2d77.19935427770999!3d28.56777349999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce265fa4d97ab%3A0x525929da7d341ae1!2sAIIMS%20Hospital!5e0!3m2!1sen!2sin!4v1716973247138!5m2!1sen!2sin" width="500" height="350" id="ven-map" style="border:0; border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </About>
  <!-- <script src="script.js"></script> -->
  <!-- =footer======== -->
  <?php include("component/footer.php"); ?>