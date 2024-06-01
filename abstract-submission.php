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

    .face-button {
      height: 35px;
      display: inline-block;
      border: 1px solid #035793;
      font-family: 'Roboto', sans-serif;
      font-size: 15px;
      /* font-weight: 500; */
      text-align: center;
      text-decoration: none;
      color: #035793;
      overflow: hidden;
    }

    .face-button .icon {
      margin-right: 6px;
    }

    .face-button .face-primary,
    .face-button .face-secondary {
      display: block;
      padding: 0 32px;
      line-height: 33px;
      transition: margin 0.4s;
    }

    .face-button .face-primary {
      background-color: #035793;
      color: #fff;
    }

    /* .face-button:hover .face-primary {
  margin-top: -33.6px;
} */
  </style>
</head>

<body>
  <style>
    .gradient-bg {
      background: linear-gradient(to bottom right, rgba(0, 91, 157, 0.8), rgba(228, 228, 228, 0.5));
      border: 1px solid white;
      border-radius: 18px;
    }

    @media (max-width: 640px) {
      .invitaionparent {
        /* min-height: 200vh !important;
        margin-bottom: 100vh !important; */
        /* border: 4px solid; */
      }

      #ggg {
        margin-left: -23px !important;
      }

      #hjj {
        margin: auto !important;
      }
    }
  </style>

  <div class="pb-4 border invitaionparent border-[#f2f6f9]" style="
        background-image: url('images/about-types/about-venue.jpg');
        background-size: cover; width:100%;
        min-height: 153vh;
        background-repeat: no-repeat;
        background-position: center;
      ">
    <div class="gradient-bg mx-auto my-8 p-4 w-full max-w-xl md:max-w-2xl lg:max-w-3xl">
      <h1 class="text-center font-bold text-white text-2xl py-8">
        Abstract Submission
      </h1>
    </div>
    <div class="w-full max-w-4xl py-10 mb-20 border border-[#11A3CA] rounded-2xl bg-white mx-auto mt-10" style="background: linear-gradient(to bottom, rgba(255, 255, 255, 0.9), rgba(222, 243, 255, 0.9));">

      <form class="w-full max-w-4xl mx-auto p-8 px-10">
        <hr class="mb-6">
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="email-nae-icon" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Presenting Author Name</label>
          <input type="text" id="email-nae-icon" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="email-address-icon" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Email Id</label>
          <input type="email" id="email-address-icon" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="email-number-icon" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Mobile No</label>
          <input type="number" id="email-number-icon" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="e-address-icon" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Address </label>
          <textarea id="eaddress-icon" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="country" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Country</label>
          <input type="text" id="country" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <!-- ============ -->
        <script>
          $(document).ready(function() {
            $('select').selectize({
              sortField: 'text'
            });
          })
        </script>
        <!-- ========================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="countrySelect" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Country of residence</label>
          <select name="country" placeholder="Pick a state..." id="countrySelect" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500">

          </select>
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="organization" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Organization</label>
          <input type="text" id="organization" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="select" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Presentation Mode</label>
          <select name="select" id="select" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected="selected" value="0">Select</option>
            <option value="oral">ORAL</option>
            <option value="poster">POSTER</option>
            <option value="no-preference">No Preference</option>
          </select>
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="abstract-title" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Abstract Title</label>
          <input type="text" id="abstract-title" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="author-bio" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Author Bio (100 words maximum)</label>
          <textarea id="author-bio" class="w-full border outline-none text-[#035793] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 bg-transparent dark:border-[#035793] dark:text-[#035793] dark:placeholder-[#035793] dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder=""></textarea>
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4 items-center">
          <label for="abstract-sample" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Download Sample Abstract</label>
          <div>
            <a href="Abstract Sample Format.docx" download class="face-button py-[6px] border-2 border-[#035793]  px-4 rounded-lg  text-sm font-medium text-[#035793] bg-transparent  hover:bg-[#035793] hover:text-white transition-colors duration-300 ease-in-out" style="margin-left: -102px;" id="ggg">

              <i class="fa-solid fa-file-arrow-down"></i> Download Sample Abstract

            </a>
          </div>
        </div>
        <div class="flex flex-col md:flex-row md:gap-10 mb-4">
          <label for="upload-file" class="w-full md:w-2/5 mb-2 text-sm font-medium text-[#035793]">Upload Abstract</label>
          <div class="relative">
            <input type="file" id="upload-file" class="hidden" />
            <label for="upload-file" class="flex items-center justify-center border-2 border-[#035793] rounded-lg cursor-pointer  py-2 px-4 text-sm text-[#035793] hover:bg-[#035793] hover:text-white transition-colors duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:border-[#035793] dark:text-[#035793] dark:bg-transparent dark:placeholder-[#035793] dark:hover:bg-[#035793] dark:hover:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" style="margin-left: -102px;" id="hjj">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm11 3a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1V7a1 1 0 011-1h10zM9 8a1 1 0 100 2 1 1 0 000-2z" />
              </svg>
              Choose a file
            </label>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="py-2.5 px-10 w-auto mb-2 text-sm font-medium text-white bg-[#035793] rounded-3xl border border-gray-200 transition-colors duration-300 ease-in-out dark:bg-[#035793] dark:border-[#035793] dark:text-white ">Submit your abstract</button>
        </div>
      </form>
    </div>
  </div>



  <!-- footer  -->
  <?php include("component/footer.php"); ?>