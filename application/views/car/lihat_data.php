<h3>Car List</h3>

<?php
echo anchor('car/post','Add Car',array('class'=>'btn btn-danger btn-sm'))
?>
</br>
<table class="table table-bordered">
    <tr>
        <th><font color="#000" size="4">&nbspNo</th>
        <th><font color="#000" size="4">&nbspName</th>
        <th><font color="#000" size="4">&nbspClassification</th>
        <th><font color="#000" size="4">&nbspPrice (OTR Bandung)</th>
        <th colspan="3"><font color="#000" size="4">&nbspAction</th>
    </tr>
    <?php
    $no=1;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='30'><font size='4'>&nbsp$no</td>
            <td><font color='#000' size='4'>&nbsp$r->car_name</td>
            <td><font color='#000' size='4'>&nbsp$r->classi_name</td>
            <td><font color='#000' size='4'>&nbspRp. $r->price</td>
            <td width='20'><font color='#000' size='4'>".anchor('car/spec/'.$r->car_id,'Detail',array('class'=>'btn btn-danger btn-sm'))."</td>
            <td width='20'><font color='#000' size='4'>".anchor('car/edit/'.$r->car_id,'Edit',array('class'=>'btn btn-danger btn-sm'))."</td>
            <td width='20'><font color='#000' size='4'>".anchor('car/delete/'.$r->car_id,'Delete',array('class'=>'btn btn-danger btn-sm'))."</td>
            </tr>";
        $no++;
    }
    ?>
</table>
<?php
echo $paging;
?>



