<!DOCTYPE html>
<html>
<head>
    <title>List of Books</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
        
        </tr>
        <?php
        require_once("../Controllers/BooksController.php");

        $controller = new BooksController();
        $books = $controller->getBooks();

        if ($books !== null) {
            foreach ($books as $title => $book) {
                echo '<tr>';
                echo '<td><a href="details.php?book=' . urlencode($book->getTitle()) . '">' . $book->getTitle() . '</a></td>';
                echo '<td>' . $book->getAuthor() . '</td>';
                echo '</tr>';
            }
        } else {
            // Nếu không có sách nào, hiển thị thông báo
            echo '<tr><td colspan="3">No books available</td></tr>';
        }
        ?>
    </table>
</body>
</html>
