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
<table id="personel">
    <tr>
        <th>Sıra</th>
        <th>User Name</th>
        <th>Password</th>
        <th>E-mail</th>
    </tr>
    <tr>
<?php foreach ($records as $row) { ?>
       <td><?php echo $row->id;?></td>
        <td><?php echo $row->membername;?></td>
        <td><?php echo $row->password;?></td>
        <td><?php echo $row->email;?></td>
        <?php }?>
    </tr>
</table>
<center>
