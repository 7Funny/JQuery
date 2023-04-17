<?php include("..\includes/connection.php");?>
<?php include("..\includes/head.php");

$result = mysqli_query($connection, "SELECT * FROM news ORDER BY d");
if ($result == false)
{
    echo "Сообщение ошибки:\n";
    echo mysqli_connect_error();
}
?>
<p class="title">Новое</p><br>
<div class="slider">
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <div class="listIndexNews">
        <div class="photoNew">
            <img class ="img" data-lazy="<?= $row['picture'] ?>" alt="<?= $row['preview'] ?>">
            <p><?= $row['title'] ?></p>
            <?= $row['d'] ?><br>
            <a href="..\news/new.php?id=<?= $row['id'] ?>"> <p><?=$row['preview']?></p></a><br>
            <?php if (!empty($_SESSION['user']['login']) and $_SESSION['user']['admin'] == 1){ ?>
                <a href="..\news/new_edit.php?id=<?=$row['id'] ?>">Изменить /</a>
                <a href="..\news/new_delete.php?id=<?=$row['id'] ?>">удалить новость</a>
            <?php } ?> 
        </div>
    </div>
<?php } ?>
</div>
<script type="text/javascript" src="..\js/jquery-3.6.0.min.js"></script>
<script src="..\js/slick.min.js" ></script>
<script src="..\js/script.js"></script>
<?php include("..\includes/footer.php");?>