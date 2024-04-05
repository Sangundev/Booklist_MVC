<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #666;
            margin-bottom: 5px;
        }
        strong {
            font-weight: bold;
        }
        .error {
            color: #f00;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        require_once("../Controllers/BooksController.php");
        $controller = new BooksController();
        if (isset($_GET['book'])) {
            $bookTitle = urldecode($_GET['book']);
            $book = $controller->getBookDetails($bookTitle);

            if ($book !== null) {
                echo '<h1>' . $book->getTitle() . '</h1>';
                echo '<p><strong>Author:</strong> ' . $book->getAuthor() . '</p>';
                echo '<p><strong>Description:</strong> ' . $book->getDescription() 
                . '</p>';
            } else {
                echo '<p class="error">Book not found</p>';
            }
        } else {
            echo '<p class="error">Invalid request</p>';
        }
        ?>
    </div>
</body>
</html>
