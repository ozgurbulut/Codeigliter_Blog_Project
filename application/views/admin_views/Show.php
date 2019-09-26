<style>
    #personel {
        border-collapse: collapse;
        width: 100%;
    }

    #personel td, #personel th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #personel tr:nth-child(even){background-color: #f2f2f2;}

    #personel tr:hover {
        background-color: #2ecc71;
        color:#fff;
    }

    #personel th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #2c3e50;
        color: white;
    }
</style>
<center>
<table id="personel">
    <tr>
        <th>User Name</th>
        <th>E-Mail</th>
        <th>Account</th>

    </tr>

<?php foreach ($records as $row) { ?>

<tr>
    <td><?php echo $row->membername;?></td>
        <td><?php echo $row->email;?></td>
    <td><?php if($row->freeze=='0'){echo "Active";}

    else{echo "Passive";} ?></td>

    <?php }?>
    </tr>
</table>
<center>
