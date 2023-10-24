<select class="form-select" id="schID" name="schID">
  <?php
while ($sportItem = $schIDList->fetch_assoc()) {
  ?>
  <option value="<?php echo $sportItem['sport_id']; ?>"><?php echo $sportItem['sport_id']; ?></option>
  <?php
}https://github.com/ErnTern/hw3/blob/hw4/view-sportid-input-list.php
  ?>
</select>
