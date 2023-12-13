                <table class="data-table">
                    <!-- <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Jurusan</th>
                    </tr> -->
                    <?php 
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "data_sekolah";

                        $conn = new mysqli($server, $username , $password , $database);
                        //conditions
                        if($conn -> connect_error){
                            die("Connection failed: ". $conn->connect_error);
                        }
                        echo "Connection Successful";

                        // show data jurusan
                        $sql = "SELECT * FROM data_siswa INNER JOIN data_jurusan ON data_jurusan.id_jurusan = data_siswa.id_siswa";
                        $result = $conn->query($sql);

                        while($row = $result ->fetch()){
                            echo "<tr>";
                            echo "<td>".$row['id_siswa']."</td>";
                            echo "<td>".$row['nama_siswa']."</td>";
                            echo "<td>".$row['nama_jurusan']."</td>";
                            echo "</tr>";
                        }
                        echo "success";
                    ?>
                </table>