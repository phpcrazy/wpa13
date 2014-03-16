<?php load_view('layout/header'); ?>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="text-center">String Manipulation</h1>
         </div>
         <div class="col-md-6">
            <form role="form" method="POST" action="http://wpa13.local/">
               <input type="text" name="input-text" class="form-control input-lg" placeholder="Enter String To Test">
               <br>
               <input type="text" name="another-text" class="form-control input-lg" placeholder="Enter String To Test">
               <br>
               <input type="text" name="replace-text" class="form-control input-lg" placeholder="Enter String To Test">
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                     count number of characters
                  </label>
               </div>
         
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios3" value="option2">
                     determine no. of words
                  </label>
               </div>
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios4" value="option3">
                     count specific character
                  </label>
               </div>
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios5" value="option4">
                     split words
                  </label>
               </div>
               <div class="radio">
                  <label>
                     <input type="radio" name="optionsRadios" id="optionsRadios6" value="option5">
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
               <input type="text" class="form-control input-lg" placeholder="Result..." disabled value="<?php echo $result; ?>">
               </div>
               <div class="form-group">
                  <h3>Code</h3>
                  <pre><?php echo $code; ?></pre>
                  <h4>Description</h4>
                  <p><?php echo $description; ?></p>
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
<?php load_view('layout/footer'); ?>