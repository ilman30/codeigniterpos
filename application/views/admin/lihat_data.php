<h3>Admin</h3>
<?php
echo anchor('admin/post','Add Admin',array('class'=>'btn btn-danger btn-sm'))
?>
<table class="table table-bordered">
    <tr><th><font color="#000" size="4">&nbspNo</th><th><font color="#000" size="4">&nbspFull Name</th><th><font color="#000" size="4">&nbspUsername</th><th><font color="#000" size="4">&nbspLast Login</th><th colspan="2"><font color="#000" size="4">&nbspAction</th></tr>
    <?php
    $no=1;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'><font color='#000' size='4'>&nbsp$no</td>
            <td><font color='#000' size='4'>&nbsp$r->full_name</td>
            <td><font color='#000' size='4'>&nbsp$r->username</td>
            <td><font color='#000' size='4'>&nbsp$r->last_login</td>
            <td  width='20'><font color='#000' size='4'>&nbsp".anchor('admin/edit/'.$r->admin_id,'Edit',array('class'=>'btn btn-danger btn-sm'))."</td>
            <td  width='20'><font color='#000' size='4'>&nbsp".anchor('admin/delete/'.$r->admin_id,'Delete',array('class'=>'btn btn-danger btn-sm'))."</td>
            </tr>";
        $no++;
    }
    ?>
</table>