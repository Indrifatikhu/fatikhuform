<?php
    include("koneksi.php");
    $nama = "";
    $nim = "";
    $komen = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nama =  $_POST["nama"];
        $nim = $_POST["nim"];
        $komen = $_POST["komen"];
    }
    if ($nama!="" || $nim!="" || $komen!=""){
        $sql = "INSERT INTO komentar (nama,nim,komentar)
       values ('$nama', '$nim', '$komen')";
       if($conn->query($sql)===TRUE){
           echo "success";
       }else{
           echo "Error:".$sql."<br>".$conn->error;
       }
    }
    
?>

<div class="section">
    <table width=100%>
        <thead>
            <th>Nama</th>
            <th width=25%>NIM</th>
            <th width=50%>Komentar</th>
        </thead>
            
        <tbody>
            <tr>
                <?php 
                    $sql= "SELECT * FROM komentar ORDER BY id";
                    $result = $conn->query($sql);
                    if ($result->num_rows >0){
                        //output data dari setiap baris
                        while ($row = $result -> fetch_assoc()){
                            echo "<tr>
                            <td>".$row["nama"]."</td>
                            <td>".$row["nim"]."</td>
                            <td>".$row["komentar"]."</td>
                            </tr>";
                        }
                    }
                    ?>
            </tr>
        </tbody>
    </table>
</div>