<h3>Edit Admin</h3>
<?php
echo form_open('admin/edit');
?>
<input type="hidden" value="<?php echo $record['admin_id']?>" name="id">
<table class="table">
    <tr><td width="120"><font color="#000" size="4">&nbspFull Name</td>
        <td><font color="#000" size="4">&nbsp<input type="text" name="name" class="form-control" placeholder="Full Name" value="<?php echo $record['full_name']?>">
       </td></tr>
    <tr><td><font color="#000" size="4">&nbspUsername</td>
        <td><font color="#000" size="4">&nbsp<input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $record['username']?>">
       </td></tr>
     <tr><td><font color="#000" size="4">&nbspPassword</td>
        <td><font color="#000" size="4">&nbsp<input type="password" name="password" class="form-control" placeholder="password">
       </td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Save</button>
        <?php echo anchor('admin','Back',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>