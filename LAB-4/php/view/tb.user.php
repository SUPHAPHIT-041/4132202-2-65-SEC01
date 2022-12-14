<?php
include "../model/condb.php";
?>
<table>
    <thead>
        <th>
            <th>#</th>
            <th>NAE</th>
            <th>PASS</th>
            <th></th>
            <th></th>
        </th>
    </thead>
</table>
<tbody>
    <?php
    $sql = "SELECT * FROM tb_user ORDER BY user_id ASC";
    $result = mysqli__query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)){
    
    ?>
    <tr>
        <td><?= $row["user_id"]?></td>
        <td><?= $row["user_name"]?></td>
        <td><?= $row["user_pas"]?></td>
        <td><button class="btn_del" data="<?=$row["user_id"]?>">DEL</button></td>
        <td></td>
    </tr>
<?php
    }
    ?>
    </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
<script>
    $(".btn_del").click(function(){
        let data = $(this).sttr("data");
        alert(data);
    });
</script>
