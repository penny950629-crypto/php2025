<?php
require_once "header.php";
try {
    require_once 'db.php';

    $searchtxt = $_POST["searchtxt"] ?? "";
    $order = $_POST["order"] ?? ""; 

    $sql = "select * from job";

    if ($searchtxt){
        $sql .= " WHERE company LIKE '%$searchtxt%' OR content LIKE '%$searchtxt%'";
    }

    if ($order){

        $allowed_orders = ['company', 'content', 'pdate'];
        if (in_array($order, $allowed_orders)) {
            $sql .= " ORDER BY $order";
        }
    }
    $result = mysqli_query($conn, $sql);
?>

<div class="container mt-4">
    <form action="job.php" method="post" class="mb-3">
        <div class="input-group">
            <select name="order" class="form-select" style="max-width: 150px;">
                <option value="">預設排序</option>
                <option value="company" <?= ($order == 'company') ? 'selected' : '' ?>>求才廠商</option>
                <option value="content" <?= ($order == 'content') ? 'selected' : '' ?>>求才內容</option>
                <option value="pdate" <?= ($order == 'pdate') ? 'selected' : '' ?>>刊登日期</option>
            </select>
            <input class="form-control" placeholder="搜尋廠商或內容" type="text" name="searchtxt" value="<?= htmlspecialchars($searchtxt) ?>">
            <input class="btn btn-primary" type="submit" value="搜尋/排序">
        </div>
    </form>

    <h3 class="mb-3">求才資訊列表</h3>
    <table id="jobTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <td>求才廠商</td>
                <td>求才內容</td>
                <td>日期</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) {?>
            <tr>
                <td><?= htmlspecialchars($row["company"]) ?></td>
                <td><?= htmlspecialchars($row["content"]) ?></td>
                <td><?= htmlspecialchars($row["pdate"]) ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
    mysqli_close($conn);
}
catch(Exception $e) {
    echo 'Message: ' .$e.getMessage();
}
require_once "footer.php";
?>