<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('admin.elements.head')
  </head>
  <style>
    body {
      background-image: url(data:image/png;base64,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);
    }
  </style>
  <body>
    


          <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->


              @yield('content')
                 
            </div>


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    @include('admin.elements.script')
  </body>
</html>
