
<link href="<?php echo base_url();?>assets/DatePicker/css/datepicker.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>assets/DatePicker/js/jquery-1.10.2.min.js"></script> 

<h3>Transaction Report</h3>
<?php
echo form_open('transaction/laporan');
?>
<div class="row">
    
    <div class="form-group" >
        <div class="col-md-3">
                <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                    <input class="form-control" type="text" name="tanggal1" readonly="readonly" placeholder="Tanggal Awal">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <div class="col-md-3">
                <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                    <input class="form-control" type="text" name="tanggal2" readonly="readonly" placeholder="Tanggal Akhir">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        <button class="btn btn-primary btn-sm" type="submit" name="submit">Process</button>
    </div>

    
    <!-- /.col-lg-6 -->
</div>
<!-- /.row -->


<h4>Export</h4>
<?php echo anchor('transaction/excel','Excel',array('class'=>'btn btn-primary btn-sm'))?>
<?php echo anchor('transaction/pdf','PDF',array('class'=>'btn btn-primary btn-sm'))?>
</form>
<table class="table table-bordered">
    <tr><th><font color="#000" size="4">&nbspNo</th><th><font color="#000" size="4">&nbspDate</th><th><font color="#000" size="4">&nbspAdmin</th><th><font color="#000" size="4">&nbspTotal</th></tr>
    <?php
    $no=1;
    $total=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'><font color='#000' size='4'>&nbsp$no</td>
            <td width='160'><font color='#000' size='4'>&nbsp$r->transaction_date</td>
            <td><font color='#000' size='4'>&nbsp$r->full_name</td>
            <td><font color='#000' size='4'>&nbsp$r->total</td>
            </tr>";
        $no++;
        $total=$total+$r->total;
    }
    ?>
    <tr><td colspan="3"><font color="#000" size="4">&nbspTotal</td><td><font color="#000" size="4">&nbsp<?php echo $total;?></td></tr>
</table>
<script src="<?php echo base_url();?>assets/DatePicker/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/DatePicker/js/bootstrap-datepicker.js"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>