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
  </div>

  <div class="pb-6 bg-[#f2f6f9]   regimain    border border-[#f2f6f9]" style="
        background-image: url('images/about-types/about-venue.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
     
      ">
    <style>
      .registration-container {
        background: linear-gradient(to bottom right, rgba(0, 91, 157, 0.8), rgba(228, 228, 228, 0.5));
        border: 1px solid white;
        border-radius: 18px;
        margin: 4% auto;
        width: 650px;
        height: 150px;
      }

      .registration-title {
        text-align: center;
        font-weight: bold;
        color: white;
        padding-top: 4rem;
        background: transparent;
        font-size: 1.5rem;
        /* Tailwind's 'text-2xl' equivalent */
      }

      /* Mobile styles */
      @media (max-width: 640px) {
        .registration-container {

          width: 96%;
          height: 50px;
        }

        .registration-title {
          font-size: 18px;
          padding: 3%;
          /* Adjust font size for mobile */
        }
      }
    </style>
    <div class="registration-container">
      <h1 class="registration-title">
        Online Registration
      </h1>
    </div>
    <div class="w-[600px]  py-20 mb-20 border-[#11A3CA] rounded-2xl  bg-white  mx-auto online-regis mt-10" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(222, 243, 255, 0.5));
">
      <h1 class="text-[#035793] px-4 text-center text-2xl font-semibold pb-4"><i class="fa-solid text-[#035793] fa-right-to-bracket"></i> Login to IFSR 2024.</h1>

      <form class="max-w-sm mx-auto">



        <!-- ======================================= -->
        <label for="email-address-icon" class="block mb-2 mt-4 text-sm font-medium text-[#035793] dark:text-[#035793] emm">Your Email</label>
        <div class="relative inp">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <svg class="w-4 h-4 dark:text-[#035793]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
              <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
              <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
            </svg>
          </div>
          <input type="text" id="email-address-icon" class=" inp border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:border-[#035793]            bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email">
        </div>
        <!-- ========================= -->
        <label for="password-address" class="block mb-2 mt-2 text-sm font-medium text-[#035793] dark:text-[#035793] emm">Password</label>
        <div class="relative inp">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <i class="fa-solid  text-[#035793] fa-key"></i>
          </div>
          <input type="password" id="password-address" class=" border inp   outline-none  text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5   dark:border-[#035793] bg-transparent dark:placeholder-[#035793]   dark:text-[#035793]dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password">
        </div>
        <!-- ========================= -->

        <button type="button" class="py-2.5 w-[300px] my-4 px-20 me-2 mx-8 mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]"><a href="delegate_membe.php">Log In</a></button>
      </form>
      <div class="mx-auto forget ">
        <div class="text-[#666666] text-center text-[13px] px-4 mt-10">Not registered? <a href="online-create-account.php" class=" text-[#035793] font-bold text-md"> Create User Account</a></div>
        <div class="  text-[#666666] text-center text-[13px] px-36 mt-2 forget-pass">Forgot password? <a href="delegate_membe.php" class="  text-[#035793] font-bold text-md">Receiving in Mail Account</a></div>
      </div>
    </div>








  </div>




  <?php include("component/footer.php"); ?>