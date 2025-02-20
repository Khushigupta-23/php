<?php
    $insert = false;
    $update = false;
    $delete = false;

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "notes";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // **Handle Delete Request**
    if (isset($_POST['deleteSno'])) {
        $sno = $_POST['deleteSno'];

        $sql = "DELETE FROM `note` WHERE `sno`=$sno";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $delete = true;
        } else {
            echo "Failed to delete note: " . mysqli_error($conn);
        }
    }

    // **Handle Edit Request**
    if (isset($_POST['snoEdit'])) {
        $sno = $_POST['snoEdit'];
        $title = $_POST['titleEdit'];
        $description = $_POST['descriptionEdit'];

        $sql = "UPDATE `note` SET `title`='$title', `description`='$description' WHERE `sno`=$sno";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $update = true;
        } else {
            echo "Failed to update note: " . mysqli_error($conn);
        }
    }

    // **Handle Insert Request**
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title']) && isset($_POST['description'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `note` (`title`, `description`) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $insert = true;
        } else {
            echo "Failed to insert note: " . mysqli_error($conn);
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- **Edit Modal** -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Note</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="snoEdit" id="snoEdit">
                    <div class="mb-3">
                        <label for="titleEdit" class="form-label">Title</label>
                        <input type="text" class="form-control" id="titleEdit" name="titleEdit">
                    </div>
                    <div class="mb-3">
                        <label for="descriptionEdit" class="form-label">Description</label>
                        <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- **Form to Add Notes** -->
<div class="container my-4">
<h1 style="text-align:center; color:blue;">CRUD Operations Web - For Notes</h1>
    <h2>Add A Note</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Note Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Note Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
</div>

<!-- **Notes Table** -->
<div class="container my-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM `note`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <th scope='row'>" . $row['sno'] . "</th>
                <td>" . $row['title'] . "</td>
                <td>" . $row['description'] . "</td>
                <td>
                    <button class='btn btn-primary edit' data-id='" . $row['sno'] . "' data-title='" . $row['title'] . "' data-description='" . $row['description'] . "'>Edit</button>
                    <button class='btn btn-danger delete' data-id='" . $row['sno'] . "'>Delete</button>
                </td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<!-- **JavaScript for Edit & Delete** -->
<script>
    // **Handle Edit Button Click**
    document.querySelectorAll('.edit').forEach(button => {
        button.addEventListener('click', function () {
            let sno = this.getAttribute('data-id');
            let title = this.getAttribute('data-title');
            let description = this.getAttribute('data-description');

            document.getElementById('snoEdit').value = sno;
            document.getElementById('titleEdit').value = title;
            document.getElementById('descriptionEdit').value = description;

            let editModal = new bootstrap.Modal(document.getElementById('editModal'));
            editModal.show();
        });
    });

    // **Handle Delete Button Click**
    document.querySelectorAll('.delete').forEach(button => {
        button.addEventListener('click', function () {
            let sno = this.getAttribute('data-id');
            if (confirm("Are you sure you want to delete this note?")) {
                let form = document.createElement("form");
                form.method = "POST";
                form.innerHTML = `<input type="hidden" name="deleteSno" value="${sno}">`;
                document.body.appendChild(form);
                form.submit();
            }
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
