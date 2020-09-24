<h3>Transaction</h3>
<?php
echo form_open('transaction');
?>
<table class="table table-bordered">
    <tr class="success"><th><font color="#000" size="4">&nbsp&nbsp&nbsp&nbspForm</th></tr>
    <tr><td>
            <div class="col-sm-6"">
                <font color="#000" size="4">&nbsp<input list="car" name="car" placeholder="Car List" class="form-control">
            </div>
            <div class="col-sm-2"">
                <font color="#000" size="4">&nbsp<input type="text" name="qty" placeholder="QTY" class="form-control">
            </div>
</td></tr>
    <tr><td>&nbsp&nbsp&nbsp&nbsp
            <button type="submit" name="submit" class="btn btn-default">Save</button>
            <?php echo anchor('transaction/selesai_belanja','Finish',array('class'=>'btn btn-default'))?>
        </td></tr>
</table>
</form>
<table class="table table-bordered">
    <tr class="success"><th colspan="6"><font color="#000" size="4">&nbspDetail</th></tr>
    <tr><th><font color="#000" size="4">&nbspNo</th><th><font color="#000" size="4">&nbspCar Name</th><th><font color="#000" size="4">&nbspQty</th><th><font color="#000" size="4">&nbspPrice</th><th><font color="#000" size="4">&nbspSubtotal</th><th><font color="#000" size="4">&nbspCancel</th></tr>
    <?php
    $no=1;
    $total=0;
    foreach ($detail as $r)
    {
        echo "<tr>
            <td><font color='#000' size='4'>&nbsp$no</td>
            <td><font color='#000' size='4'>&nbsp$r->car_name</td>
            <td><font color='#000' size='4'>&nbsp$r->qty</td>
            <td><font color='#000' size='4'>&nbsp$r->price</td>
            <td><font color='#000' size='4'>&nbsp".$r->qty*$r->price."</td>
            <td><font color='#000' size='4'>&nbsp".anchor('transaction/hapusitem/'.$r->t_detail_id,'Delete')."</td></tr>";
        $total=$total+($r->qty*$r->price);
        $no++;
    }
    ?>
    <tr><td colspan="5"><font color="#000" size="4"><p align="right">Total</p></td><td><font color="#000" size="4"><?php echo $total;?></td></tr>
</table>

<datalist id="car">
    <?php
    foreach ($car->result() as $b)
    {
        echo "<option value='$b->car_name'>";
    }
    ?>
    
</datalist>