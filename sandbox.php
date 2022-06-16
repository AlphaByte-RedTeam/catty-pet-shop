<!-- home.php -->
<!-- 125 - 158 -->

<div>
    <?php
    $sSQL = "SELECT * FROM tb_coreval";
    $result = mysqli_query($conn, $sSQL);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src=<?= $row["src_coreval"]; ?>background="transparent" speed="1" style="width: 250px; height: 250px;" loop autoplay></lottie-player>
    <?php
        }
    }
    ?>
</div>
<div class="col-md-3 align-self-center ms-6">
    <?php
    $sSQL = "SELECT * FROM tb_coreval";
    $result = mysqli_query($conn, $sSQL);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <h3 class="value-title">
                <?= $row["title_coreval"] ?>
            </h3>
            <p class="value-desc">
                <?= $row["desc_coreval"] ?>
            </p>
    <?php
        }
    }
    ?>
</div>