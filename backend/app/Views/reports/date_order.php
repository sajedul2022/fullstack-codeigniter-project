
    <?php if ($orders) : ?>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name  </th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Order Number </th>
                    <th>Order Date </th>
                    <th>Status </th>
                </tr>
            </thead>
            <thead>
                
                    <?php foreach ($orders as $index => $order) :  ?>
                        <tr>
                            <td> <?= $index + 1 ?>  </td>
                            <td> <?= $order['customerName']; ?> </td>
                            <td> <?= $order['phone']; ?> </td>
                            <td> <?= $order['city']; ?> </td>
                            <td> <?= $order['orderNumber']; ?> </td>
                            <td> <?= $order['orderDate']; ?> </td>
                            <td> <?= $order['status']; ?> </td>
                        </tr>
                    <?php endforeach;  ?>
                
            </thead>
        </table>



    <?php endif; ?>

