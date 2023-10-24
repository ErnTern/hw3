<select class="form-select" id="sid" name="sid">
  <?php
while ($sportItem = $schIDList->fetch_assoc()) {
  ?>
  <option value="<?php echo $sportItem['sport_id']; ?>"><?php echo $sportItem['sport_name']; ?></option>
  <?php
}
  ?>
</select>
