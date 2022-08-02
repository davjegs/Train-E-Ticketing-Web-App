<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | @yield('title') </title>

  @include('admin.include.css')

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">
    @include('admin.include.navbar')

    @include('admin.include.aside')

    @yield('body')


  @include('admin.include.rightaside')

  @include('admin.include.footer')
</div>

@include('admin.include.js')

</body>
</html>
