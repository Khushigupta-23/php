<?php
    namespace Html;

    class Table {

        public $title = "";
        public $numRows = 0;

        public function message() {
            echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
        }
    }

    $table = new Table();
    $table->title = "Khushi";
    $table->numRows = 10;
?>

<!DOCTYPE html>
<html>
    <body>

        <?php
        $table->message();
        ?>

    </body>
</html>