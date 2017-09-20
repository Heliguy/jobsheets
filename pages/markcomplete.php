<?php include ("../includes/header.php");?>
<div class="container">
<form class="form-horizontal">
  <div class="form-group">
  <label for="comment">Work Completed:</label>
  <textarea class="form-control" placeholder="Please enter the work completed..." rows="5" id="comment"></textarea>
</div>

  <div class="form-group">
  <label for="comment">Stock used:</label>
  <textarea class="form-control" placeholder="Please enter the part numbers of stock used..." rows="5" id="comment"></textarea>
</div>

  <div class="form-group">
  <label for="comment">Will you have to re-visit?:</label>
  <div class="radio">
  <label><input type="radio" name="optradio">Yes</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">No</label>
</div>
</div>

  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
    </div> <!-- /container -->
<?php include ("../includes/footer.php");?>