<h3>Classification</h3>
<?php
echo anchor('classi/post','Add Classification',array('class'=>'btn btn-danger btn-sm'))
?>
<hr>
<table class="table table-bordered">
    <tr><th><font color="#000" size="4">&nbspNo</th><th><font color="#000" size="4">&nbspClassification</th><th colspan="2"><font color="#000" size="4">&nbspAction</th></tr>
    <?php
    $no=1+$this->uri->segment(3);
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='30'><font color='#000' size='4'>&nbsp$no</td>
            <td><font color='#000' size='4'>&nbsp$r->classi_name</td>
            <td width='10'>".anchor('classi/edit/'.$r->classi_id,'Edit',array('class'=>'btn btn-danger btn-sm'))."</td>
            <td width='10'>".anchor('classi/delete/'.$r->classi_id,'Delete',array('class'=>'btn btn-danger btn-sm'))."</td>
            </tr>";
        $no++;
    }
    ?>
</table>

<?php
echo $paging;
?>

