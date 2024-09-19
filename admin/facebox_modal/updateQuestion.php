<?php
include("../../config.php");

$id = $_GET['id'];

$selCourse = $dbh->query("SELECT * FROM test_question_tbl WHERE tqt_id='$id' ")->fetch(PDO::FETCH_ASSOC);

?>

<fieldset style="width:800px;">
  <legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update Question</i></legend>

  <form method="post" id="updateQuestionFrm">
    <div class="row">

      <div class="col-md-6 mt-4">
        <div class="form-group">
          <legend>Question</legend>
          <input type="hidden" name="question_id" value="<?php echo $id; ?>">
          <input name="question" class="form-control" required="" value="<?php echo htmlspecialchars($selCourse['test_question'], ENT_QUOTES); ?>"
 />
        </div>

        <div class="form-group">
          <legend class="text-success">Correct Answer</legend>
          <input type="" name="test_final" value="<?php echo $selCourse['test_answer']; ?>" class="form-control" required>
        </div>
        <div class="form-group">
          <label>Explain Answer</label>
          <textarea name="test_explain" id="" class="form-control" required rows="3"><?php echo $selCourse['test_explain']; ?></textarea>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <legend>Option A</legend>
          <input type="" name="test_ch1" value="<?php echo $selCourse['test_ch1']; ?>" class="form-control" required>
        </div>
        <div class="form-group">
          <legend>Option B</legend>
          <input type="" name="test_ch2" value="<?php echo $selCourse['test_ch2']; ?>" class="form-control" required>
        </div>
        <div class="form-group">
          <legend>Option C</legend>
          <input type="" name="test_ch3" value="<?php echo $selCourse['test_ch3']; ?>" class="form-control" required>
        </div>
        <div class="form-group">
          <legend>Option D</legend>
          <input type="" name="test_ch4" value="<?php echo $selCourse['test_ch4']; ?>" class="form-control" required>
        </div>
      </div>
      <div class="form-group ml-auto mr-3">
        <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
      </div>
    </div>
  </form>
</fieldset>