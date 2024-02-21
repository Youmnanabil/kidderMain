<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-template="vertical-menu-template-free">
  
  @include('admin.includes.head')
  <body>
   @include('admin.includes.Layoutwrapper')

   @include('admin.includes.menu')

   @include('admin.includes.navBar')

   @yield('content')

   @include('admin.includes.footer')
   
   @include('admin.includes.footerJs')

  </body>
</html>
