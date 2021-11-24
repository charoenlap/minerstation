      <footer class="site-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="site-footer-legal float-right">Power by friendlysoftpro</div>
            </div>
          </div>
        </div>
      </footer>
      <div class="modal " tabindex="-1" role="dialog" id="model-result" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Result</h5>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                <button id="model-result-btn-submit" type="button" class="btn btn-secondary" data-url="">กลับ</button>
                <!-- <span aria-hidden="true">&times;</span> -->
              </button>
            </div>
            <div class="modal-body">
              <p id="model-result-text"></p>
            </div>
            <!-- <div class="modal-footer"></div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /#wrapper -->

  <!-- <?php echo $filemanager; ?> -->
  <script src="assets/js/main.js"></script>

  <!-- Custom styles for this template -->
  <script src="assets/fontawesome/js/all.js"></script>
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
