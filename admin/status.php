<!-- Missing Status -->
<?php if (isset($_SESSION['missing_status'])) :
?>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'info',
            title: '<?= $_SESSION['missing_status'] ?>',
            showConfirmButton: false,
            timer: 2000
        })
    </script>
<?php
endif;
unset($_SESSION['missing_status']);
?>

<!-- Add Status -->
<?php if (isset($_SESSION['add_status'])) :
?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: '<?= $_SESSION['add_status'] ?>'
        })
    </script>
<?php
endif;
unset($_SESSION['add_status']);
?>

<!-- Edit Status -->

<script>
    $('#edit_btn').click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to update!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#edit_form').submit();
            }
        })
    })
</script>

<?php if (isset($_SESSION['edit_status'])) :
?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'success',
            title: '<?= $_SESSION['edit_status'] ?>'
        })
    </script>
<?php
endif;
unset($_SESSION['edit_status']);
?>

<!-- Deleted Status -->

<?php if (isset($_SESSION['deleted_status'])) :
?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'error',
            title: '<?= $_SESSION['deleted_status'] ?>'
        })
    </script>
<?php
endif;
unset($_SESSION['deleted_status']);
?>

<script>
    $('.delete_btn').click(function() {
        var link = $(this).val();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
            }
        })
    });
</script>