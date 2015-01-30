<!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              copyright <i class="fa fa-copyright"></i> 2015. blackomsi
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url().'asset/js/jquery.js';?>"></script>
    <script src="<?= base_url().'asset/js/jquery-1.11.2.min.js';?>"></script>
    <script src="<?= base_url().'asset/js/bootstrap.min.js';?>"></script>
    <script class="include" type="text/javascript" src="<?= base_url().'asset/js/jquery.dcjqaccordion.2.7.js';?>"></script>
    <script src="<?= base_url().'asset/js/jquery.scrollTo.min.js';?>"></script>
    <script src="<?= base_url().'asset/js/jquery.nicescroll.js';?>" type="text/javascript"></script>
    <script src="<?= base_url().'asset/js/jquery.sparkline.js';?>"></script>


    <!--common script for all pages-->
    <script src="<?= base_url().'asset/js/common-scripts.js';?>"></script>
    <script src="<?= base_url().'asset/js/rats.js';?>"></script>
    <script src="<?= base_url().'asset/js/spin.min.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/jquery.gritter.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/gritter-conf.js';?>"></script>

    <!--script for this page-->
    <script src="<?= base_url().'asset/js/owl.carousel.js';?>"></script>  
    <script src="<?= base_url().'asset/js/sparkline-chart.js';?>"></script>    
	<script src="<?= base_url().'asset/js/zabuto_calendar.js';?>"></script>	
    <script type="text/javascript" src="<?= base_url().'asset/js/footable.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/footable.paginate.js';?>"></script>
	<script type="text/javascript" src="<?= base_url().'asset/js/footable.sort.js';?>"></script>
    <script type="text/javascript" src="<?= base_url().'asset/js/footable.filter.js';?>"></script>

    <script type="text/javascript">
    $(function () {
        $('.footable').footable();
    });
    </script> 	

    <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Selamat Datang',
            // (string | mandatory) the text inside the notification
            text: 'Anda saat ini sedang menggunakan sistem BK versi 1.0 yang dikembangkan oleh blackomsi',
            // (string | optional) the image to display on the left
           
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: '4500',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
    </script>
    
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <script type="text/javascript">
    $(document).ready(function(){
    
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.go-top').fadeIn();
        } else {
            $('.go-top').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.go-top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    
});
 
    </script>  

    <script type="text/javascript">
        <script type="text/javascript">
            // Show a spinning load indicator
            // while the page is loading
            var spinner;
            $(document).ready(function() {
                // Once the DOM is loaded, start spinning
                spinner = Rats.UI.LoadAnimation.start();
                pageUI();
            });
            $(window).load(function() {
                // Once the page is fully loaded, stop spinning
                Rats.UI.LoadAnimation.stop(spinner);
            });
    </script>

  </body>
</html>