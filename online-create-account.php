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

  <div class="pb-6 bg-[#f2f6f9]    invitaionparent  border border-[#f2f6f9]" style="
        background-image: url('images/about-types/about-venue.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        /* height:80vh;
        width:100%; */
      ">
    <div class=" Online-regggg " style="        background: linear-gradient(to bottom right, rgba(0, 91, 157, 0.8), rgba(228, 228, 228, 0.5));;border:1px solid white;border-radius:18px; margin:4% auto; width:650px;height:150px;">
      <h1 class="text-center font-bold  tccc text-white pt-16  bg-trasnsparent text-2xl">
        Online Registration
      </h1>
    </div>
    <div class="w-[600px] online-regis-form py-20 mb-20 border-[#11A3CA] rounded-2xl  bg-white  mx-auto mt-10" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(222, 243, 255, 0.5));
">
      <h1 class="text-[#035793] px-4 text-center font-semibold pb-4">Please select one of the following options in order to create your account to register.</h1>

      <form class="max-w-sm mx-auto form">


        <div class="flex items-center mb-4">
          <input id="disabled-radio-1" type="radio" value=" " name="disabled-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600" onclick=" formQuerry()">
          <label for="disabled-radio-1" class="ms-2 text-sm font-medium text-[#035793] dark:text-[#035793]">If you haven&#39;t registered yourself. Kindly Sign Up</label>
        </div>
        <div class="flex items-center">
          <input checked id="regis" type="radio" value=" " name="disabled-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800  dark:bg-gray-700 dark:border-gray-600" onclick=" formQuerry()">
          <label for="regis" class="ms-2 text-sm font-medium text-[#035793] dark:text-[#035793]">If you have already registered.</label>
        </div>
        <!-- ======================================= -->
        <label for="email-address-icon" class="block mb-2 mt-4 text-sm font-medium text-[#035793] dark:text-[#035793]">Your Email</label>
        <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <svg class="w-4 h-4 dark:text-[#035793]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
              <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
              <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
            </svg>
          </div>
          <input type="text" id="email-address-icon" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:border-[#035793]            bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email">
        </div>
        <!-- ========================= -->
        <label for="password-address" class="block mb-2 mt-2 text-sm font-medium text-[#035793] dark:text-[#035793]">Password</label>
        <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <i class="fa-solid  text-[#035793] fa-key"></i>
          </div>
          <input type="password" id="password-address" class=" border   outline-none  text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5   dark:border-[#035793] bg-transparent dark:placeholder-[#035793]   dark:text-[#035793]dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password">
        </div>
        <!-- ========================= -->
        <label for="confirm-password" class="block mb-2 mt-2 text-sm font-medium text-[#035793] dark:text-[#035793]">Confirm Password</label>
        <div class="relative" id="confirm-pass">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <i class="fa-solid  text-[#035793] fa-key"></i>
          </div>
          <input type="password" id="confirm-password" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5   dark:border-[#035793] bg-transparent dark:placeholder-[#035793]  dark:text-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="confirm password ">
        </div>
        <button type="button" class="py-2.5 my-4 px-5 me-2 mb-2 w-[200px] text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]">Send and proceed</button>
        <button type="button" class="py-2.5 my-4 px-5 me-2 mb-2 text-sm w-[100px] font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]">Cancel</button>
      </form>
      <div class="mx-auto mt-4">
        <span class=" text-[#666666]  text-[13px] text-center sig px-40  mt-10">Sign-in your account <a href="online-regis.php" class="font-bold  text-[#035793]">Sign-in my account</a></span>
      </div>
    </div>








  </div>
  <script>
    function formQuerry() {
      const onlineRegister = document.getElementById('regis');
      const confirmPassField = document.getElementById('confirm-pass');

      if (onlineRegister.checked) {
        confirmPassField.style.display = 'none';
      } else {
        confirmPassField.style.display = 'block';
      }
    }
  </script>


  <?php include("component/footer.php"); ?>