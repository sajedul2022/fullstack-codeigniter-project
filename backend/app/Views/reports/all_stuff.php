
    <?php if ($officeWise) : ?>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Number </th>
                    <th>First Name</th>
                    <th>lastName</th>
                    <th>Email </th>
                    <th>officeCode </th>
                    <th>ReportsTo </th>
                </tr>
            </thead>
            <thead>
                
                    <?php foreach ($officeWise as $index => $offWise) :  ?>
                        <tr>
                            <td> <?= $index + 1 ?>  </td>
                            <td> <?= $offWise['employeeNumber']; ?> </td>
                            <td> <?= $offWise['firstName']; ?> </td>
                            <td> <?= $offWise['lastName']; ?> </td>
                            <td> <?= $offWise['email']; ?> </td>
                            <td> <?= $offWise['officeCode']; ?> </td>
                            <td> <?= $offWise['reportsTo']; ?> </td>
                        </tr>
                    <?php endforeach;  ?>
                
            </thead>
        </table>



    <?php endif; ?>

