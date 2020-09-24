<h3>Edit Classification</h3>
<?php
echo form_open('classi/edit');
?>
<input type="hidden" value="<?php echo $record['classi_id']?>" name="id">
<table class="table table-bordered">
    <tr><td width="200"><font color="#000" size="4">&nbspClassification Name</td>
        <td><div class="col-sm-4""><font color="#000" size="4"><input type="text" name="classi" placeholder="Classification" class="form-control"
                   value="<?php echo $record['classi_name']?>"></div>
       </td></tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Save</button> 
        <?php echo anchor('classi','Back',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>