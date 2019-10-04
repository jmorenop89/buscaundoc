<!DOCTYPE html>
<html lang="es">
{{-- BEGIN HEAD --}}
  @include('templateadmin.head')
 {{-- END HEAD --}}
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        {{-- start header --}}
		 @include('templateadmin.nav')
        {{-- end header --}}
        {{-- start page container --}}
        <div class="page-container">
 			{{-- start sidebar menu --}}
			 @include('templateadmin.sidebar')
			 {{-- end sidebar menu --}}
			{{-- start page content --}}
			
			@yield('content')
            {{-- end page content --}}
            {{-- start chat sidebar --}}
            
            {{-- end chat sidebar --}}
        </div>
        {{-- end page container --}}
        {{-- start footer --}}
         @include('templateadmin.footer')
        {{-- end footer --}}
    </div>
    {{-- start js include path --}}
    <script src="/assets/admin/plugins/jquery/jquery.min.js" ></script>
	<script src="/assets/admin/plugins/popper/popper.min.js" ></script>
    <script src="/assets/admin/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="/assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    {{-- bootstrap --}}
    <script src="/assets/admin/plugins/bootstrap/js/bootstrap.min.js" ></script>
    {{-- counterup --}}
    <script src="/assets/admin/plugins/counterup/jquery.waypoints.min.js" ></script>
    <script src="/assets/admin/plugins/counterup/jquery.counterup.min.js" ></script>
    {{-- Common js--}}
	<script src="/assets/admin/js/app.js" ></script>
    <script src="/assets/admin/js/layout.js" ></script>
    <script src="/assets/admin/js/theme-color.js" ></script>
    {{-- material --}}
    <script src="/assets/admin/plugins/material/material.min.js"></script>
    {{-- morris chart --}}
    <script src="/assets/admin/plugins/morris/morris.min.js" ></script>
    <script src="/assets/admin/plugins/morris/raphael-min.js" ></script>
    <script src="/assets/admin/js/pages/chart/morris/morris-home-data.js" ></script>
    {{-- data tables --}}
    <script src="/assets/admin/plugins/datatables/jquery.dataTables.min.js" ></script>
    <script src="/assets/admin/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js" ></script>
    <script src="/assets/admin/js/pages/table/table_data.js" ></script>
    {{-- end js include path --}}

  </body>
</html>
