<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body class="sidebar-mini">
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
           <!--  <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li> -->
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
         
          </ul>
       
        </form>
       <div>
	   <button class='btn btn-link btn-primary' id="logoutBtn" style='color:white;font-size:16px;'><a style='text-decoration:none;color: inherit;' href='<?= base_url(); ?>logout'>logout</a></button>
	   </div>
      </nav>
