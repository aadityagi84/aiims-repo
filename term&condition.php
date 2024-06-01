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
      <style>
        /* Base styles */
        .responsive-container {
          max-width: 1130px;
          padding: 1rem;
        }

        .title {
          font-size: 22px;
        }

        .terms-content p,
        .terms-content li {
          font-size: 13px;
        }

        .bg-container {
          background: #212a47;
          color: white;
          display: flex;
          gap: 10px;
          padding: 10px;
          justify-content: space-between;
          align-items: center;
          border-radius: 15px;
        }

        .link {
          text-decoration: none;
          color: white;
          transition: color 0.3s;
        }

        .link:hover {
          color: #24a1ad;
        }

        /* Mobile styles */
        @media only screen and (max-width: 600px) {
          .bg-container {
            flex-direction: column;
            gap: 5px;
          }

          .terms-content {
            padding: 1rem;
            font-size: 14px;
          }

          .title {
            font-size: 18px;
          }
        }

        /* Tablet styles */
        @media only screen and (min-width: 601px) and (max-width: 900px) {
          .bg-container {
            flex-direction: row;
            gap: 10px;
          }

          .terms-content {
            padding: 1.5rem;
            font-size: 15px;
          }

          .title {
            font-size: 20px;
          }
        }

        /* Laptop styles */
        @media only screen and (min-width: 901px) and (max-width: 1200px) {
          .bg-container {
            flex-direction: row;
            gap: 10px;
          }

          .terms-content {
            padding: 2rem;
            font-size: 16px;
          }

          .title {
            font-size: 22px;
          }
        }

        /* Large display styles */
        @media only screen and (min-width: 1201px) {
          .bg-container {
            flex-direction: row;
            gap: 10px;
          }

          .terms-content {
            padding: 2.5rem;
            font-size: 18px;
          }

          .title {
            font-size: 24px;
          }
        }
      </style>
      <!-- <h1 class="text-center text-3xl font-semibold text-white pt-4 my-[53px]">

        Terms & Condition</h1> -->
      <div class="responsive-container mx-auto my-10 rounded-[15px] flex flex-wrap items-center gap-10 border border-white" style="background: linear-gradient(to bottom, #dfe9f3 0%, white 100%);">
        <div class="w-full">
          <div class="bg-[#212a47] text-white flex gap-2 w-full mt-4 mx-auto px-6 py-2 justify-between items-center duration-750 ease-in rounded-2xl shadow-lg">
            <a href="online-regis.php" class="link text-white text-sm transition-colors duration-300">Online Registration</a>
            <a href="term&condition.php" id='terms' class="link text-white text-sm transition-colors duration-300">Terms and Conditions</a>
            <a href="privacy-policy.php" class="link text-white text-sm transition-colors duration-300">Privacy Policy</a>
            <a href="payment-issue.php" class="link text-white text-sm transition-colors duration-300">Payment Issue</a>
            <a href="cancel-refund.php" class="link text-white text-sm transition-colors duration-300">Cancellation & Refund Policy</a>
          </div>
          <ul class="terms-content text-black py-10 px-4 gap-1">
            <li class="title">The use of this web site constitutes agreement with the following terms and conditions:</li><br>
            <li>IFSR 2024 maintains this web site <a href="https://isfr2024.in/" target="_blank" class="font-bold"> (the "https://isfr2024.in/") </a> as a courtesy to those who may choose to access the Site ("Users"). The information presented herein is for informative purposes only. IFSR 2024 grants permission to Users to visit the Site and to download and copy the information, documents and materials (collectively, "Materials") from the Site for the User' s personal, non-commercial use, without any right to resell or redistribute them or to compile or create derivative works therefrom, subject to the terms and conditions outlined below, and also subject to more specific restrictions that may apply to specific Material within this Site. </li>
            <br>
            <li>IFSR 2024 administers this Site. All Material on this Site from the IFSR 2024 appears subject to the present Terms and Conditions</li>
          </ul>
          <ul class="terms-content text-black py-5 px-4 gap-1">
            <li class="title">Terms & Conditions</li>
            <p>This official website of the "IFSR 2024 " has been developed to provide information to the activities of the Conference. The documents and information displayed in this website are for reference purposes only and does not purport to be a legal document.</p> <br>
            <p>IFSR 2024 does not warrant the accuracy or completeness of the information, text, graphics, links or other items contained within the Website. As a result of updates and corrections, the web contents are subject to change without any notice from "IFSR 2024 " at IFSR 2024 website.</p> <br>
            <p>In case of any variance between what has been stated and that contained in the relevant Act, Rules, Regulations, Policy Statements etc, the latter shall prevail.</p> <br>
            <p>Any specific advice or replies to queries in any part of the website is/are the personal views / opinion of such experts/consultants/persons and are not necessarily subscribed to by this Institute or its websites.</p> <br>
            <p>Certain links on the website lead to resources located on other websites maintained by third parties over whom IFSR 2024 has no control or connection. These websites are external to IFSR 2024 and by visiting these; you are outside the IFSR 2024 website and its channels. IFSR 2024 neither endorses in any way nor offers any judgment or warranty and accepts no responsibility or liability for the authenticity, availability of any of the goods or services or for any damage, loss or harm, direct or consequential or any violation of local or international laws that may be incurred by your visiting and transacting on these websites.</p> <br>
          </ul>
        </div>
      </div>

    </div>
    <script>
      function navcall() {
        if (window.location.pathname.includes('term&condition.php')) {
          const terms = document.getElementById('terms');
          terms.classList.add('active');
        }
      }
      document.addEventListener('DOMContentLoaded', navcall);
    </script>
    <!-- Footer -->
    <?php include("component/footer.php"); ?>