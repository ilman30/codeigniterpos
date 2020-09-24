<h3>Car Detail</h3>
<?php
echo form_open('car/spec');
?>
<input type="hidden" name="id" value="<?php echo $record['car_id']?>">
<input type="hidden" name="id" value="<?php echo $record['classi_id']?>">
<?php echo anchor('car','Back',array('class'=>'btn btn-primary btn-sm'))?>
<table class="table">
    <tr>
        <td width="120"><font color="#000" size="4">Nama Mobil</td>
        <td><font color="#000" size="4">:&nbsp&nbsp</td>
        <td><font color="#000" size="4"><?php echo $record['car_name']?></td>
   </tr>
   <tr>
        <td width="120"><font color="#000" size="4">Harga (OTR Bandung)</td>
        <td><font color="#000" size="4">:&nbsp&nbsp</td>
        <td><font color="#000" size="4"><?php echo $record['price']?></td>
   </tr>
   <tr>
        <td width="120"><font color="#000" size="4">Spesifikasi</td>
        <td><font color="#000" size="4">:&nbsp&nbsp</td>
        <td><font color="#000" size="4"><?php echo $record['spec'] ?></td>
   </tr>
</table>
</form>
                
<?php
/*
foreach ($kategori as $k)
{
    echo "<option value='$k->kategori_id'";
    echo $record['kategori_id']==$k->kategori_id?'selected':'';
    echo">$k->nama_kategori</option>";
}
*/
?>