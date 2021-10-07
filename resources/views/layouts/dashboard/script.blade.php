<!-- JS Global Compulsory -->
<script src="{{ asset('backend/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- JS Implementing Libraries -->
<script src="{{ asset('backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/chartist/dist/chartist.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/chartist-bar-labels/src/scripts/chartist-bar-labels.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/resize-sensor/dist/resizeSensor.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/jquery-shorten/src/jquery.shorten.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/datatables.net-select/js/dataTables.select.html') }}"></script>

<!-- JS Nova -->
<script src="{{ asset('backend/assets/js/hs.core.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.malihu-scrollbar.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.side-nav.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.unfold.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.flatpickr.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.header-search.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.select2.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.chartist-area.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.chartist-bar.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.chartist-pie.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.chartist-donut.js') }}"></script>
<script src="{{ asset('backend/assets/js/components/hs.datatables.js') }}"></script>

<!-- JS Libraries Init. -->
<script>
  $(document).on('ready', function () {
    // initialization of custom scroll
    $.HSCore.components.HSMalihuScrollBar.init($('.js-custom-scroll'));

    // initialization of sidebar navigation component
    $.HSCore.components.HSSideNav.init('.js-side-nav');

    // initialization of dropdown component
    $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
      unfoldHideOnScroll: false,
      afterOpen: function () {
        // initialization of charts
        $.HSCore.components.HSChartistBar.init('#activity .js-bar-chart');

        setTimeout(function () {
          $('#activity .js-bar-chart').css('opacity', 1);
        }, 100);

        // help function for accordions in hidden block
        $('#headerProjects .accordion-header').on('click', function () {
          // vars
          var target = $(this).data('target');

          $(target).collapse('show');
        });
      }
    });

    // initialization of range datepicker
    $.HSCore.components.HSFlatpickr.init('#headerRightSidebarDatepicker', {
      locale: {
        weekdays: {
          shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
        }
      },
      nextArrow: '<i class="nova-arrow-right icon-text icon-text-xs"></i>',
      prevArrow: '<i class="nova-arrow-left icon-text icon-text-xs"></i>'
    });

    $.HSCore.components.HSFlatpickr.init('#rangeDatepicker, #rangeDatepickerMyPortfolio', {
      locale: {
        weekdays: {
          shorthand: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
        },
        rangeSeparator: ' - '
      },
      nextArrow: '<em class="nova-arrow-right"></em>',
      prevArrow: '<em class="nova-arrow-left"></em>'
    });

    // initialization of show on type module
    $.HSCore.components.HSHeaderSearch.init('.js-header-search');

    // initialization of show on type module
    $.HSCore.components.HSSelect2.init('.js-custom-select');

    // initialization of charts
    $.HSCore.components.HSChartistArea.init('.js-area-chart');
    $.HSCore.components.HSChartistBar.init('.js-bar-chart');
    $.HSCore.components.HSChartistDonut.init('.js-donut-chart');

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      $(e.currentTarget.hash).find('.js-area-chart').each(function (el, tab) {
        tab.__chartist__.update();
      });
    });

    // initialization of datatables
    $.HSCore.components.HSDatatables.init('.js-datatable', {
      "columnDefs": [
        { "orderable": false, "targets": 8 }
      ]
    });
  });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
   @if(Session::has('message'))
   var type = "{{ Session::get('alert-type','info') }}"
   switch(type){
      case 'info':
      toastr.info(" {{ Session::get('message') }} ");
      break;
  
      case 'success':
      toastr.success(" {{ Session::get('message') }} ");
      break;
  
      case 'warning':
      toastr.warning(" {{ Session::get('message') }} ");
      break;
  
      case 'error':
      toastr.error(" {{ Session::get('message') }} ");
      break; 
   }
   @endif 
  </script>
