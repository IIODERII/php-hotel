<?php

include __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body class='bg-secondary'>

    <header class='container text-center py-5'>
        <h1>Nice Hotels</h1>
    </header>

    <main class='container'>
        <form action='index.php' method='GET' class='d-flex align-items-center'>
            <div class='px-5'>
                <label for="parking" class='d-block pb-2'>Parking</label>
                <select name="parking" id="parking" class='w-100'>
                    <option value="">All</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class='px-5'>
                <label for="rating" class='d-block pb-2'>Rating</label>
                <select name="rating" id="rating" class='w-100'>
                    <option value="all">All</option>
                    <option value="1">1 &star;</option>
                    <option value="2">2 &star;</option>
                    <option value="3">3 &star;</option>
                    <option value="4">4 &star;</option>
                    <option value="5">5 &star;</option>
                </select>
            </div>
            <button class='btn btn-primary'>Filter</button>
        </form>
        <?php include __DIR__ . "/partials/table.php"; ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>