<!--
=========================================================
* Argon Dashboard 3 - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="100x100" href="{{ asset('assets/img/android-chrome.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/keris.ico') }}">
  <title>
    Quran Warrior
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  crossorigin="anonymous"/>


  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/argon-dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom-styles.css') }}">
</head>

<body class="g-sidenav-show bg-gray-100 d-flex flex-column min-vh-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>

  <x-navbar></x-navbar>

  <main class="main-content position-relative border-radius-lg flex-fill">

  <x-header>{{ $title }}</x-header>

    <div class="container-fluid py-4">
        {{ $slot }}
    </div>
  


<x-footer class="pb-0"></x-footer>
<x-script></x-script>