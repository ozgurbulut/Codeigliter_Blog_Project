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
    <h2 id="personel" style="color:red;"><?php echo $data->title;?></h2>
    <h4 id=""><?php echo $data->content ?></h4><br>
    <h4>Yazar : <?php echo $data->membername; ?></h4>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</center>