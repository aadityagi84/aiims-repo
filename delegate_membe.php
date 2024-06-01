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
  <style>
    select.form-control:not([size]):not([multiple]) {
      height: calc(2.15625rem + 2px);
    }

    .form-control {
      display: block;
      width: 100%;
      padding: 0.375rem 0.75rem;
      font-size: 0.9375rem;
      line-height: 1.5;
      outline: none;
      background: transparent;
      background-clip: padding-box;
      border: 1px solid #035793;
      border-radius: 0.25rem;
      -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    }

    option {
      font-weight: normal;
      display: block;
      /* min-height: 1.2em; */
      /* padding: 0px 2px 1px; */
      white-space: nowrap;
    }
  </style>
</head>

<body>

  <div class="pb-4 bg-[#f2f6f9]    invitaionparent  border border-[#f2f6f9]" style="
        background-image: url('images/about-types/about-venue.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      
      ">
    <div class="" style="        background: linear-gradient(to bottom right, rgba(0, 91, 157, 0.8), rgba(228, 228, 228, 0.5));;border:1px solid white;border-radius:18px; margin:4% auto; width:650px;height:150px;">
      <h1 class="text-center font-bold  text-white pt-[52px]  bg-trasnsparent text-2xl">
        Delegate Profile/ Personal Information
      </h1>
    </div>
    <div class="w-[1100px]  py-20 mb-20 border-[#11A3CA] rounded-2xl  bg-white  mx-auto mt-10" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.9), rgba(222, 243, 255, 0.8));
">

      <form class=" w-[900px] mx-auto">
        <h1 class="text-4xl text-[#035793] ">Delegate Profile</h1>
        <hr><br><br>
        <div class="w-[150px] mb-2  bg-transparent flex mx-auto items-center w-[95%]  gap-10  dark:text-[#035793] text-[#035793]  dark:placeholder-[#035793]">

          <label for="select" class=" mb-2 mt-4  items-center w-[26%]  text-sm font-medium text-[#035793] dark:text-[#035793]">Title :</label>

          <div class="">
            <select name="select" id="select" class="form-control">
              <option selected="selected" class="ps-10 p-2.5" value="0">Select</option>
              <option value="Dr.">Dr.</option>
              <option value="Prof.">Prof.</option>
              <option value="Mr.">Mr.</option>
              <option value="Ms.">Ms.</option>
              <option value="Mrs.">Mrs.</option>

            </select>
          </div>
        </div>
        <!-- ======================================= -->
        <div class="flex mx-auto w-[95%] mb-2  gap-10">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[38%]  text-sm font-medium text-[#035793] dark:text-[#035793]">First Name :</label>
          <input type="text" id="email-address-icon" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex mx-auto w-[95%] mb-2  gap-10">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[38%]   text-sm font-medium text-[#035793] dark:text-[#035793]">Last Name:</label>
          <input type="text" id="email-address-icon" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex mx-auto mb-2 w-[95%]  gap-3">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[29%]   text-sm font-medium text-[#035793] dark:text-[#035793]">Date of Birth:</label>
          <input type="date" id="email-address-icon" class=" border   w-[38%] outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block   ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex items-center mx-auto w-[95%] gap-3">
          <div class="w-[30%]">
            <label for="gender" class="mb-2 mt-4 text-sm font-medium text-[#035793] dark:text-[#035793]">Gender</label>
          </div>
          <div class="flex gap-5 items-center pt-4 mb-4">
            <div class="flex items-center">
              <input id="male-radio" type="radio" name="gender" value="male" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
              <label for="male-radio" class="ml-2 text-sm font-medium text-[#035793] dark:text-[#035793]">Male</label>
            </div>
            <div class="flex items-center">
              <input id="female-radio" type="radio" name="gender" value="female" checked class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
              <label for="female-radio" class="ml-2 text-sm font-medium text-[#035793] dark:text-[#035793]">Female</label>
            </div>
          </div>
        </div>
        <!-- ======= -->
        <div class="flex mx-auto w-[95%] mb-2  gap-10">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[38%]  text-sm font-medium text-[#035793] dark:text-[#035793]">Email :</label>
          <input type="email" id="email-address-icon" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex mx-auto w-[95%] mb-2  gap-3">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[43%]  text-sm font-medium text-[#035793] dark:text-[#035793]">Confirm Email :</label>
          <input type="email" id="email-address-icon" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <!-- =========== -->
        <div class="flex mx-auto w-[95%] mb-2  gap-10">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[38%]  text-sm font-medium text-[#035793] dark:text-[#035793]">Institute/ University/ Organisation/ Company </label>
          <input type="email" id="email-address-icon" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex mx-auto w-[95%] mb-2  gap-10">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[38%]   text-sm font-medium text-[#035793] dark:text-[#035793]">Department :</label>
          <input type="text" id="email-address-icon" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex mx-auto w-[95%] mb-2  gap-10">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[26%]   text-sm font-medium text-[#035793] dark:text-[#035793]">Position :</label>
          <input type="text" id="email-address-icon" class=" border  outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[200px] ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="w-[150px] mb-2  bg-transparent flex mx-auto items-center w-[95%]  gap-10  dark:text-[#035793] text-[#035793]  dark:placeholder-[#035793]">

          <label for="select" class=" mb-2 mt-4  items-center w-[26%]  text-sm font-medium text-[#035793] dark:text-[#035793]">Country of residence: :</label>

          <div class="">

            <select name="country" id="countrySelect" class="form-control">

            </select>
          </div>

        </div>
        <div class="flex mx-auto w-[95%] mb-2 gap-10">
          <label for="email-address-icon" class="mb-2 mt-4 items-center w-[38%] text-sm font-medium text-[#035793] dark:text-[#035793]">Address :</label>
          <textarea id="email-address-icon" class="border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-4 p-2.5 dark:border-[#035793] bg-transparent dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
        </div>
        <div class="flex mx-auto mb-2 w-[95%]  gap-3">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[29%]   text-sm font-medium text-[#035793] dark:text-[#035793]">Country Code:</label>
          <input type="text" id="email-address-icon" class=" border   w-[38%] outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block   ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex mx-auto mb-2 w-[95%]  gap-3">
          <label for="email-address-icon" class=" mb-2 mt-4  items-center w-[29%]   text-sm font-medium text-[#035793] dark:text-[#035793]">Mobile number:</label>
          <input type="text" id="email-address-icon" class=" border   w-[38%] outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block   ps-4 p-2.5  dark:border-[#035793]    bg-transparent   dark:text-[#035793] dark:placeholder-[#035793]  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <button type="button" class="py-2.5 my-10 px-20 me-2 mx-[285px]  w-[250px] mb-2 text-sm font-medium text-white focus:outline-none  rounded-3xl border border-gray-200 hover:bg-[#035793] hover:text-white focus:z-10  dark:bg-[#035793]  dark:border-[#035793] dark:hover:text-white dark:hover:bg-[#035793]">Sign In</button>
        <!-- ============= -->


      </form>

    </div>


    <!-- footer  -->

    <?php include("component/footer.php"); ?>