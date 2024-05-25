

</div>
    <!--div class="container"-->
    <div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</div>
<!-- Footer -->
<footer id="pied-de-page" class="page-footer font-small blue" >

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">&copy; Copyright <strong><span><a href="/"> 2LIA</a></span></strong>. 
  </div>
  <!-- Copyright -->

</footer>

<!-- Footer -->

</div>

<div class="modal fade show" style="margin-left:20px;width: 424px;" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-primary  d-block">
        <h5 class="modal-title text-center" id="exampleModalLabel">Bienvenue sur Campus Afrique</h5>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <h5 class="lead">Connectez-vous d'abord pour pouvoir candidater!</h5>
      </div>
      <div class="modal-footer" style="font-size: 14px;">
      <button onclick="window.location.href='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'" type="button" id="envoi-cookie"  class="btn btn-lg btn-primary"  data-dismiss="modal" >Fermer et Ne plus afficher ce message</button>
      </div>
    </div>
  </div>
  <?php
$nomcookiemodal = 'pubmodal';  // ici le nom du cookie est : pubmodal
$str = <<<EWP_MODAL
<script>
// 1
    $(window).on('load',function(){
      $('#myModal').modal('show');
         });
// FIN DE 1
//2         
    $(document).ready(function(){
      if(!Cookies.get('$nomcookiemodal')){
         setTimeout(function() {
            $('#myModal').modal();
              }, 15000);
                }
  $("#envoi-cookie").click(function () {
      Cookies.set('$nomcookiemodal', true);
         });
  });
// FIN DE 2
</script>
EWP_MODAL;
    
      if(!isset($_COOKIE[$nomcookiemodal])) {
    echo $str;
} else {
   
}

?>



  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>