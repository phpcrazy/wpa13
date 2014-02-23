<?php require DD . '/app/views/layout/header.php'; ?>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="text-center">String Manipulation</h1>
         </div>
         <div class="col-md-6">
            <form role="form">
               <input type="text" class="form-control input-lg" placeholder="Enter String To Test">
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                     count number of characters
                  </label>
               </div>
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" data-toggle="modal" href="#myModal">
                     find specific keyword in text
                  </label>
               </div>
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                     determine no. of words
                  </label>
               </div>
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                     count specific character
                  </label>
               </div>
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
                     split words
                  </label>
               </div>
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
                     replace word
                  </label>
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg">Run</button>
               </div>
            </form>
         </div>
         <div class="col-md-6">
            <form role="form">
               <div class="form-group has-success">
                  <input type="text" class="form-control input-lg" placeholder="Result..." disabled>
               </div>
               <div class="form-group">
                  <h3>Code</h3>
                  <pre>&lt;?php <br>$num = 12;<br>echo gettype($num);<br>?&gt;</pre>
                  <h4>Description</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, aspernatur, laboriosam, quae, fugiat recusandae qui aliquid reiciendis eveniet saepe voluptatum deleniti exercitationem sint quisquam consectetur repudiandae tempore ut mollitia assumenda?</p>
               </div>
            </form>
         </div>
         
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     <form role="form">
                        <div class="form-group">
                           <input type="text" class="form-control input-lg" placeholder="Result...">
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control input-lg" placeholder="Result...">
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  </div>
               </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
         </div><!-- /.modal -->
      </div>
   </div>
   <script src="js/jquery-2.1.0.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>