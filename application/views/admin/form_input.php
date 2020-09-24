<h3>Add Admin</h3>
<?php
echo form_open('admin/post');
?>
<table class="table">
    <tr><td width="120"><font color="#000" size="4">&nbspFull Name</td>
        <td><font color="#000" size="4">&nbsp<input type="text" class="form-control" name="name" placeholder="Full Name">
       </td></tr>
    <tr><td><font color="#000" size="4">&nbspUsername</td>
        <td><font color="#000" size="4">&nbsp<input type="text" class="form-control" name="username" placeholder="username">
       </td></tr>
     <tr><td><font color="#000" size="4">&nbspPassword</td>
        <td><font color="#000" size="4">&nbsp<input type="password" class="form-control"  name="password" placeholder="password">
       </td></tr>
    <tr><td colspan="2"><font color="#000" size="4">&nbsp<button type="submit" class="btn btn-primary btn-sm" name="submit">Save</button>
        <?php echo anchor('admin','Back',array('class'=>'btn btn-primary btn-sm'))?>
        </td></tr>
</table>
</form>