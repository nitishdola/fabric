<!DOCTYPE html>
<html>
  
<head>
    <title>
      Dashboard @yield('title')
    </title>
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/font-awesome.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/se7en-font.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/isotope.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/jquery.fancybox.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/fullcalendar.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/wizard.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/select2.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/morris.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/datatables.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/datepicker.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/timepicker.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/colorpicker.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/bootstrap-switch.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/daterange-picker.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/typeahead.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/summernote.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/pygments.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/style.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('stylesheets/color/green.css') }}" media="all" rel="alternate stylesheet" title="green-theme" type="text/css" />
    <link href="{{ asset('stylesheets/color/orange.css') }}" media="all" rel="alternate stylesheet" title="orange-theme" type="text/css" />
    <link href="{{ asset('stylesheets/color/magenta.css') }}" media="all" rel="alternate stylesheet" title="magenta-theme" type="text/css" />
    <link href="{{ asset('stylesheets/color/gray.css') }}" media="all" rel="alternate stylesheet" title="gray-theme" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.js" type="text/javascript">
    </script><script src="{{ asset('javascripts/bootstrap.min.js') }}" type="text/javascript">
    </script><script src="{{ asset('javascripts/raphael.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/selectivizr-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.mousewheel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.vmap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.vmap.world.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/gcal.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.dataTables.min.js') }}" type="text/javascript">
    </script><script src="{{ asset('javascripts/datatable-editable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.easy-pie-chart.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/excanvas.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.isotope.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/isotope_extras.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/select2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/styleswitcher.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/wysiwyg.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/summernote.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.inputmask.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.validate.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/bootstrap-fileupload.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/bootstrap-timepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/bootstrap-colorpicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/bootstrap-switch.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/typeahead.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/daterange-picker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/date.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/morris.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/skycons.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/fitvids.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/jquery.sparkline.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('javascripts/respond.js') }}" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  </head>
  <body>
    <div class="modal-shiftfix">
      <!-- Navigation -->
      @include('admin.layouts.navbar')
      <!-- End Navigation -->
      <div class="container-fluid main-content">
        <div class="row">
            <div class="col-md-8  col-offset-2">
                @if (Session::has('message'))
                <div class="alert alert-warning alert-dismissable alert-red">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times-circle"></i></button>
                  {!!Session::get('message')!!}
                </div>
                @endif
            </div>
        </div>
        @yield('content')
      </div>
    </div>
  </body>

</html>