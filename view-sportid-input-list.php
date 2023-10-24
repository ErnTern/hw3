<select class="form-select" id="schIDD" name="schIDD">
  <?php
while ($sportItem = $schIDList->fetch_assoc()) {
  ?>
  <option value="<?php echo $sportItem['sport_id']; ?>"><?php echo $sportItem['sport_name']; ?></option>
  <?php
}https://github.com/ErnTern/hw3/blob/hw4/view-sportid-input-list.php
  ?>
</select>
