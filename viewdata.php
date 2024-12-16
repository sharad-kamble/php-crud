<table border="1">
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>name</th>
        <th>email</th>
        <th>sub</th>
        <th>company</th>
        <th>phone</th>
        <th>Gender</th>
        <th>message</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php
$conn = mysqli_connect( 'localhost', 'root', '', 'phpdatabase' );

$sql = 'SELECT * FROM register';
$check = mysqli_query( $conn, $sql );
$rowcount = mysqli_num_rows( $check );
if ( $rowcount>0 ) {
    while( $data = mysqli_fetch_assoc( $check ) ) {
?>
    <tr>
        <td><?php echo $data[ 'id' ];?></td>
        <td><?php echo $data[ 'username' ];?></td>
        <td><?php echo $data[ 'password' ];?></td>
        <td><?php echo $data[ 'name' ];?></td>
        <td><?php echo $data[ 'email' ];?></td>
        <td><?php echo $data[ 'sub' ];?></td>
        <td><?php echo $data[ 'company' ];?></td>
        <td><?php echo $data[ 'phone' ];?></td>
        <td><?php echo $data[ 'gender' ];?></td>
        <td><?php echo $data[ 'message' ];?></td>
        <td><a
                href="updatedata.php?id=<?php echo $data[ 'id' ];?>&user=<?php echo $data[ 'username' ];?>&pass=<?php echo $data[ 'password' ];?>&name=<?php echo $data[ 'name' ]; ?>&email=<?php echo $data[ 'email' ];?>&sub=<?php echo $data[ 'sub' ];?>&company=<?php echo $data['company']; ?>&phone=<?php echo $data['phone']; ?>&message=<?php  echo $data['message'];?>$gender=<?php echo $data['gender']; ?>   ">
                Update</a></td>
        <td><a href="deletedata.php?id=<?php echo $data[ 'id' ];?>">Delete</a></td>
    </tr>

    <?php
    }

    } else {
    echo 'No data found';
    }
    ?>

</table>