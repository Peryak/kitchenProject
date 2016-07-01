    <div class="container">
        <div class="row">
            <h3>Marmiton</h3>
        </div>
        <div class="row">
            <p>
                <a href="/kitchenProject/views/steps/create.php" class="btn btn-success">Create</a>
            </p>

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Order of the steps</th>
                    <th>Receipt number</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- we retrieve data from database and show it on the grid -->
                <?php
                //include '../handler/database.php';
                //include '../controllers/etapesController.php';
                //$pdo = Database::connect();
                //$sql = 'SELECT * FROM etapes ORDER BY id DESC';
                //$etape = new etapes();
                //$sql = $etape->getst();
                foreach ($result as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['etape_order'] . '</td>';
                    echo '<td>'. $row['recette_id'] . '</td>';
                    echo '<td>'. $row['description'] . '</td>';
                    echo '<td width=250>';
                    echo '<a class="btn" href="/kitchenProject/views/steps/read.php?id='.$row['id'].'">Read</a>';
                    echo ' ';
                    echo '<a class="btn btn-success" href="/kitchenProject/views/steps/update.php?id='.$row['id'].'">Update</a>';
                    echo ' ';
                    echo '<a class="btn btn-danger" href="/kitchenProject/views/steps/delete.php?id='.$row['id'].'">Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                //Database::disconnect();
                ?>
                </tbody>
            </table>
        </div>
    </div> <!-- /container -->