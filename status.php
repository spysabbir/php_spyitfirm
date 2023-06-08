<?php if (isset($_SESSION['successfully_status'])) :
?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '<?= $_SESSION['successfully_status'] ?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php
endif;
unset($_SESSION['successfully_status']);
?>



<?php if (isset($_SESSION['error_status'])) :
?>

    <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: '<?= $_SESSION['error_status'] ?>',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
<?php
endif;
unset($_SESSION['error_status']);
?>