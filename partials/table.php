<?php
include __DIR__ . '/../db.php';

if (isset($_GET['parking'])) {
    $parking = $_GET['parking'];

    if ($parking !== '') {
        $hotels = array_filter($hotels, fn($item) => $item['parking'] == $parking);
    }
}

if (isset($_GET['rating'])) {
    $rating = $_GET['rating'];

    if ($rating !== 'all') {
        $hotels = array_filter($hotels, fn($item) => $item['vote'] >= $rating);
    }
}


?>

<table class="table table-dark table-striped my-5">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Distance to Center</th>
            <th scope="col">Rating</th>
            <th scope="col">Parking</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($hotels as $hotel) {
            ?>
            <tr>
                <th>
                    <?php echo $hotel['name'] ?>
                </th>
                <td>
                    <?php echo $hotel['description'] ?>
                </td>
                <td>
                    <?php echo $hotel['distance_to_center'] . ' km' ?>
                </td>
                <td>
                    <?php echo $hotel['vote'] . ' &star;' ?>
                </td>
                <td>
                    <div class='w-100 h-100 d-flex justify-content-start align-items-center'>
                        <div style="width: 1.5em; height: 1.5em"
                            class='rounded-circle bg-<?php echo $hotel['parking'] ? 'success' : 'danger' ?>'></div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>