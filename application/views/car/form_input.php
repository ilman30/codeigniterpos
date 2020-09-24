<h3>Add Car</h3>
<?php
echo form_open('car/post');
?>
<table class="table">
    <tr><td width="130"><font color="#000" size="4">Car Name</td>
        <td><font color="#000" size="4"><input type="text" class="form-control" name="car_name" placeholder="Car Name">
       </td></tr>
    <tr><td><font color="#000" size="4">Classification</td><td><font color="#000" size="4">
            <select name="classi" class="form-control">
                <?php
                foreach ($classi as $k)
                {
                    echo "<option value='$k->classi_id'>$k->classi_name</option>";
                }
                ?>
            </select>
        </td></tr>
    <tr><td><font color="#000" size="4">Price</td>
        <td><font color="#000" size="4"><input type="text" class="form-control" name="price" placeholder="Price">
       </td></tr>
    <tr>
        <td><font color="#000" size="4">Spec</td>
        <td><font color="#000" size="4"><textarea id="ckeditor" class="ckeditor" name="spec"></textarea></td>
    </tr>
    <tr><td colspan="2">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Save</button>
        <?php echo anchor('car','Back',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>