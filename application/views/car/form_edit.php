<h3>Edit Car</h3>
<?php
echo form_open('car/edit');
?>
<input type="hidden" name="id" value="<?php echo $record['car_id']?>">
<table class="table">
    <tr>
        <td width="200"><font color="#000" size="4">Car Name</td>
        <td><font color="#000" size="4"><input type="text" class="form-control"  name="car_name" value="<?php echo $record['car_name']?>" placeholder="nama barang">
       </td>
   </tr>
    <tr>
        <td><font color="#000" size="4">Classification</td>
        <td><font color="#000" size="4">
            <select name="classi" class="form-control" >
                <?php
                foreach ($classi as $k)
                {
                    echo "<option value='$k->classi_id'";
                    echo $record['classi_id']==$k->classi_id?'selected':'';
                    echo">$k->classi_name</option>";
                }
                ?>
            </select>
        </td>
    </tr>
    <tr><td><font color="#000" size="4">Harga (OTR Bandung)</td>
        <td><font color="#000" size="4"><input type="text" class="form-control"  name="price" value="<?php echo $record['price']?>" placeholder="Price">
       </td>
   </tr>
   <tr>
        <td><font color="#000" size="4">Spec</td>
        <td><textarea id="ckeditor" class="ckeditor" name="spec"><?php echo $record['spec']?></textarea></td>
   </tr>
    <tr><td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php echo anchor('car','Kembali',array('class'=>'btn btn-primary btn-sm'))?></td></tr>
</table>
</form>