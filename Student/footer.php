<footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com/">Creative Tim</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/presentation">About Us</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/blog">Blog</a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">Licenses</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../Files/assets2/js/core/jquery.min.js"></script>
    <script src="../Files/assets2/js/core/popper.min.js"></script>
    <script src="../Files/assets2/js/core/bootstrap-material-design.min.js"></script>
    <script src="../Files/assets2/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../Files/assets2/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../Files/assets2/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../Files/assets2/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../Files/assets2/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../Files/assets2/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../Files/assets2/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../Files/assets2/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../Files/assets2/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../Files/assets2/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../Files/assets2/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../Files/assets2/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../Files/assets2/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../Files/assets2/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="../../../buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="../Files/assets2/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../Files/assets2/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../Files/assets2/js/material-dashboard.min1c51.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../Files/assets2/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>
    <!-- Sharrre libray -->
    <script src="../Files/assets2/demo/jquery.sharrre.js"></script>
    <script>
        $(document).ready(function() {


            $('#facebook').sharrre({
                share: {
                    facebook: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('facebook');
                },
                template: '<i class="fab fa-facebook-f"></i> Facebook',
                url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
            });

            $('#google').sharrre({
                share: {
                    googlePlus: true
                },
                enableCounter: false,
                enableHover: false,
                enableTracking: true,
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('googlePlus');
                },
                template: '<i class="fab fa-google-plus"></i> Google',
                url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
            });

            $('#twitter').sharrre({
                share: {
                    twitter: true
                },
                enableHover: false,
                enableTracking: false,
                enableCounter: false,
                buttons: {
                    twitter: {
                        via: 'CreativeTim'
                    }
                },
                click: function(api, options) {
                    api.simulateClick();
                    api.openPopup('twitter');
                },
                template: '<i class="fab fa-twitter"></i> Twitter',
                url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
            });


            // Facebook Pixel Code Don't Delete
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window,
                document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

            try {
                fbq('init', '111649226022273');
                fbq('track', "PageView");

            } catch (err) {
                console.log('Facebook Track Error:', err);
            }

        });
    </script>
    <script>
        // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }
    </script>
    <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
    </noscript>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

            md.initVectorMap();

        });
    </script>
    <script>
        $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
            search: "_INPUT_",
            searchPlaceholder: "Search records",
            }
        });

        var table = $('#datatable').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });
        });
    </script>
  <script>
    $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
    
  </script>
  <script>
    $(document).ready(function() {
      // Initialise the wizard
      demo.initMaterialWizard();
      setTimeout(function() {
        $('.card.card-wizard').addClass('active');
      }, 600);
    });
  </script>
  <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<script type="text/javascript">
          function others(){
            var sp = document.getElementById("sp").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("sptext").innerHTML='<input type="text" name="others_sp_d2d_n_12th" class="form-control mt-2" placeholder="Specify Your Specialzation">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("sptext").innerHTML='';  
            }
          }
          function others1(){
            var sp = document.getElementById("12sp").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("sptext").innerHTML='<input type="text" name="others_sp_ba_12th" class="form-control mt-2" placeholder="Specify Your Specialzation">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("sptext").innerHTML='';  
            }
          }
          function othersforbach1(){
            var sp = document.getElementById("bdgree").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("bsptext").innerHTML='<input type="text" name="others_sp_bach_ma" class="form-control mt-2" placeholder="Specify Your Degree">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("bsptext").innerHTML='';  
            }
          }

          function othersformaster1(){
            var sp = document.getElementById("masterdegree").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("mastertext").innerHTML='<input type="text" name="others_sp_master_type_ma" class="form-control mt-2" placeholder="Specify Your Degree">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("mastertext").innerHTML='';  
            }
          }

            function othersformaster(){
            var sp = document.getElementById("msp").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("msptext").innerHTML='<input type="text" name="others_sp_master" class="form-control mt-2" placeholder="Specify Your Specialzation">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("msptext").innerHTML='';  
            }
          } 
          function y(){
              var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","d2d.php?d2d=y",false);
              xmlhttp.send(null);
              document.getElementById("d2dtext").innerHTML=xmlhttp.responseText;
          }
          function n(){
              var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","d2d.php?d2d=n",false);
              xmlhttp.send(null);
              document.getElementById("d2dtext").innerHTML=xmlhttp.responseText;
          }
          function othersfordip(){
                    var sp = document.getElementById("dsp").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("dsptext").innerHTML='<input type="text" name="others_sp_dip" class="form-control mt-2" placeholder="Specify Your Specialzation">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("dsptext").innerHTML='';  
                    }
                  }

              
               function othersfordipspyba(){
                    var sp = document.getElementById("diplomasp").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("dsptext").innerHTML='<input type="text" name="others_sp_dip_y_ba" class="form-control mt-2" placeholder="Specify Your Specialzation">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("dsptext").innerHTML='';  
                    }
                  }    


                function othersforbach(){
                    var sp = document.getElementById("bbdegree").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("bachsptext").innerHTML='<input type="text" name="others_sp_bach_n_d2d_ba" class="form-control mt-2" placeholder="Specify Your Degree">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("bachsptext").innerHTML='';  
                    }
                  }
                  function othersforbachforMAandd2dY(){
                    var sp = document.getElementById("bbdegree").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("bachsptext").innerHTML='<input type="text" name="others_sp_bach_d2dY" class="form-control mt-2" placeholder="Specify Your Degree">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("bachsptext").innerHTML='';  
                    }
                  }
                  function otherfordipmastertypey(){
                    var sp = document.getElementById("masterdegree").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("mastersptext").innerHTML='<input type="text" name="other_for_master_dip_y" class="form-control mt-2" placeholder="Specify Your Degree">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("mastersptext").innerHTML='';  
                    }
                  }  

                function othersformaster(){
                    var sp = document.getElementById("mastersp").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("mastersptext").innerHTML='<input type="text" name="others_sp_master" class="form-control mt-2" placeholder="Specify Your Specialzation">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("mastersptext").innerHTML='';  
                    }
                  }              
        </script>
        <script type="text/javascript">
          var skill=0;
          var personalSkill=0;
          var language=0;
          var project=0;
          var achivement=0;
          function addskill()
          {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","addskill.php?a="+skill,false);
            xmlhttp.send(null);
            document.getElementById("technical_skills_"+skill).innerHTML=xmlhttp.responseText;
            skill+=1;
          }
          function addpersonalskill()
          {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","addpersonalskill.php?a="+personalSkill,false);
            xmlhttp.send(null);
            document.getElementById("personal_skills_"+personalSkill).innerHTML=xmlhttp.responseText;
            personalSkill+=1;
          }
          function addlanguage()
          {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","addlanguage.php?a="+language,false);
            xmlhttp.send(null);
            document.getElementById("language_"+language).innerHTML=xmlhttp.responseText;
            language+=1;
          }
          function addproject()
          {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","addproject.php?a="+project,false);
            xmlhttp.send(null);
            document.getElementById("project_"+project).innerHTML=xmlhttp.responseText;
            project+=1;
          }
          function addachivement()
          {
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","addachivement.php?a="+achivement,false);
            xmlhttp.send(null);
            document.getElementById("achivement_"+achivement).innerHTML=xmlhttp.responseText;
            achivement+=1;
          }
        </script>
        <script type="text/javascript">
          function others(){
            var sp = document.getElementById("sp").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("sptext").innerHTML='<input type="text" name="others_sp_d2d_n_12th" class="form-control mt-2" placeholder="Specify Your Specialzation">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("sptext").innerHTML='';  
            }
          }
          function others1(){
            var sp = document.getElementById("12sp").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("sptext").innerHTML='<input type="text" name="others_sp_ba_12th" class="form-control mt-2" placeholder="Specify Your Specialzation">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("sptext").innerHTML='';  
            }
          }
          function othersforbach1(){
            var sp = document.getElementById("bdgree").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("bsptext").innerHTML='<input type="text" name="others_sp_bach_ma" class="form-control mt-2" placeholder="Specify Your Degree">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("bsptext").innerHTML='';  
            }
          }

          function othersformaster1(){
            var sp = document.getElementById("masterdegree").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("mastertext").innerHTML='<input type="text" name="others_sp_master_type_ma" class="form-control mt-2" placeholder="Specify Your Degree">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("mastertext").innerHTML='';  
            }
          }

            function othersformaster(){
            var sp = document.getElementById("msp").value;
            if(sp == "OTHERS")
            {
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("msptext").innerHTML='<input type="text" name="others_sp_master" class="form-control mt-2" placeholder="Specify Your Specialzation">';
            }
            else{
              var xmlhttp=new XMLHttpRequest();
              document.getElementById("msptext").innerHTML='';  
            }
          } 
          function y(){
              var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","d2d.php?d2d=y",false);
              xmlhttp.send(null);
              document.getElementById("d2dtext").innerHTML=xmlhttp.responseText;
          }
          function n(){
              var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","d2d.php?d2d=n",false);
              xmlhttp.send(null);
              document.getElementById("d2dtext").innerHTML=xmlhttp.responseText;
          }
          function othersfordip(){
                    var sp = document.getElementById("dsp").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("dsptext").innerHTML='<input type="text" name="others_sp_dip" class="form-control mt-2" placeholder="Specify Your Specialzation">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("dsptext").innerHTML='';  
                    }
                  }

              
               function othersfordipspyba(){
                    var sp = document.getElementById("diplomasp").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("dsptext").innerHTML='<input type="text" name="others_sp_dip_y_ba" class="form-control mt-2" placeholder="Specify Your Specialzation">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("dsptext").innerHTML='';  
                    }
                  }    


                function othersforbach(){
                    var sp = document.getElementById("bbdegree").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("bachsptext").innerHTML='<input type="text" name="others_sp_bach_n_d2d_ba" class="form-control mt-2" placeholder="Specify Your Degree">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("bachsptext").innerHTML='';  
                    }
                  }
                  function othersforbachforMAandd2dY(){
                    var sp = document.getElementById("bbdegree").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("bachsptext").innerHTML='<input type="text" name="others_sp_bach_d2dY" class="form-control mt-2" placeholder="Specify Your Degree">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("bachsptext").innerHTML='';  
                    }
                  }
                  function otherfordipmastertypey(){
                    var sp = document.getElementById("masterdegree").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("mastersptext").innerHTML='<input type="text" name="other_for_master_dip_y" class="form-control mt-2" placeholder="Specify Your Degree">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("mastersptext").innerHTML='';  
                    }
                  }  

                function othersformaster(){
                    var sp = document.getElementById("mastersp").value;
                    if(sp == "OTHERS")
                    {
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("mastersptext").innerHTML='<input type="text" name="others_sp_master" class="form-control mt-2" placeholder="Specify Your Specialzation">';
                    }
                    else{
                      var xmlhttp=new XMLHttpRequest();
                      document.getElementById("mastersptext").innerHTML='';  
                    }
                  }              
        </script>
</body>

</html>