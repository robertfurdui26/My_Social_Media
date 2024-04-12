<?php
if (isset($_SESSION['message'])) :
?>

    <div class="alert alert-warning alert-dismissible fade show mt-4 " role="alert" style="width: 350px; margin-left:25px;">
        <strong><?= $_SESSION['message']; ?> </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['message']);
endif;
?>