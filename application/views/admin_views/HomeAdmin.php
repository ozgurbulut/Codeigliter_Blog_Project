<center><h1>All Open Posts</h1></center>
<center>
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
                <th>Title</th>
                <th>Content</th>
                <th>Send Date</th>
                <th>Member Name</th>
            </tr>

            <tr>
        <?php foreach ($records as $row){
?>
        <tr>
            <td><?php echo $row->title;?></td><td><?php echo $row->content;?></td>
            <td><?php echo $row->senddate;?></td><td><?php echo $row->membername;?></td>

        </tr>
        <?php }?>
    </table>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</center>