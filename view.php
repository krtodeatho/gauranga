<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Index</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <!-- =================Body Started==================== -->
    <body>
        <!-- ========================Header Started========================== -->
        <?php
        require './Header.php'
        ?>
        <!-- ========================Main Started========================== -->
        
        <section class="container">

        
        <table class="table">
            <h3 class="mb-4">List of user in Data base</h3>

            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">user</th>
                <th scope="col">pass</th>
                <!-- <th scope="col">Handle</th> -->
              </tr>
            </thead>
            <tbody>
                <?php
                require './connection.php';
                //            print_r("suucessful")
                // Select all records from the users table
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                       echo "<tr>";

                        foreach ($row as $key => $value) {
                            echo "<td>".$value."</td>";
                        }
                        echo "</tr>";
                        //                          echo "<th scope='row'> " . $row["id"]."</th> "." <td> " . $row["user"]. " </td>" ."<td>". $row["pass"]. "</td><br>";
                    }
                } else {
                    echo "0 results";
                }

                ?>

            
            </tbody>
          </table>
        </section>
        <!-- ========================Footer Started========================== -->
        <?php
        require "./Footer.php";
        ?>
    </body>
    <!-- =================Body End==================== -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>