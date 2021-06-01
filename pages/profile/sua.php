<form action="profile.php" method="POST"  enctype="multipart/form-data" >
<table class="Profiletable" border="1">
    <tr>
    <td>User name</td>
    <td>    <input type="text" value="<?php echo $row_user['username'] ?>" name="username">   </td>
    </tr>
    <tr>
    <td>Avartar</td>
    <td><input type="file" name="avatar"><img src="/avatar/<?php echo $row_user_info['anhdaidien'] ?>" ></td>
    </tr>
    <tr>
    <td>Full name</td>
    <td><input type="text" value="<?php echo $row_user_info['hovaten'] ?>" name="fullname"></td>
    </tr>
    <tr>
    <td>Phone</td>
    <td><input type="text" value="<?php echo $row_user['phone'] ?>" name="phone"></td>
    </tr>
    <tr>
    <td>Email</td>
    <td><input type="text" value="<?php echo $row_user['email'] ?>" name="email"></td>
    </tr>
    <td><input type="submit" value="Save" name="updatebut"></td>
    </tr>

</table>
</form>