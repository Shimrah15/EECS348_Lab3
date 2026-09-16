<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>

    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <h1>Multiplication Table</h1>

    <form method="get">
        <label for="size">Enter the table size:</label>
        <input type="number" id="size" name="size" min="1" required>
        <button type="submit">Create Table</button>
    </form>

    <?php
    if (isset($_GET["size"])) {
        $size = (int) $_GET["size"];

        if ($size > 0) {
            echo "<table>";

            echo "<tr><th>&times;</th>";
            for ($column = 1; $column <= $size; $column++) {
                echo "<th>$column</th>";
            }
            echo "</tr>";

            for ($row = 1; $row <= $size; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";

                for ($column = 1; $column <= $size; $column++) {
                    $product = $row * $column;
                    echo "<td>$product</td>";
                }

                echo "</tr>";
            }

            echo "</table>";
        }
    }
    ?>

    <p><a href="index.html">Return to the main page</a></p>
</body>
</html>