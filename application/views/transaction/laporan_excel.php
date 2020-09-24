
<table border="1">
    <tr><th>No</th><th>Date</th><th>Admin</th><th>Total</th></tr>
    <?php
    $no=1;
    $total=0;
    foreach ($record->result() as $r)
    {
        echo "<tr>
            <td width='10'>$no</td>
            <td width='160'>$r->transaction_date</td>
            <td>$r->full_name</td>
            <td>$r->total</td>
            </tr>";
        $no++;
        $total=$total+$r->total;
    }
    ?>
    <tr><td colspan="3">Total</td><td><?php echo $total;?></td></tr>
</table>