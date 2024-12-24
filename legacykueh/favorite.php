<?php
include('header.php');

// Testing data appearance
$favorites = [
    [
        'kuehID' => 1,
        'kuehName' => 'Kueh 1',
        'kuehDesc' => 'qoihrwqoihoqiwhrioqwhroiwqhroiqhwroihqowirhqiwhroqwihrqwrasd',
        'image' => 'https://static.tumblr.com/516de29bcc7045d5149860c65a9f8da5/l2qfe9q/pwknbe56l/tumblr_static_4uka6psqoomcsk4kwckcwk4wo_2048_v2.jpg',
        'tagKueh' => 'tag 1, tag 2, tag 3'
    ],
    [
        'kuehID' => 2,
        'kuehName' => 'Kuih 2',
        'kuehDesc' => 'qoihrwqoihoqiwhrioqwhroiwqhroiqhwroihqowirhqiwhroqwihrqwrasd',
        'image' => 'https://static.tumblr.com/516de29bcc7045d5149860c65a9f8da5/l2qfe9q/pwknbe56l/tumblr_static_4uka6psqoomcsk4kwckcwk4wo_2048_v2.jpg',
        'tagKueh' => 'tag 1, tag 2, tag 3'
    ],
    [
        'kuehID' => 3,
        'kuehName' => 'Kueh 3',
        'kuehDesc' => 'qoihrwqoihoqiwhrioqwhroiwqhroiqhwroihqowirhqiwhroqwihrqwrasd',
        'image' => 'https://static.tumblr.com/516de29bcc7045d5149860c65a9f8da5/l2qfe9q/pwknbe56l/tumblr_static_4uka6psqoomcsk4kwckcwk4wo_2048_v2.jpg',
        'tagKueh' => 'tag 1, tag 2 ,tag 3'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kueh Kegemaran Anda</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .favorite-container {
            display: block;
            padding: 20px;
        }

        .favorite-item {
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 15px;
        }

        .favorite-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .favorite-item-details {
            padding: 10px;
        }

        .favorite-item h3 {
            font-size: 1.4rem;
            margin: 10px 0;
        }

        .favorite-item p {
            font-size: 1rem;
            color: #666;
        }

        .favorite-item .tag {
            font-size: 1rem;
            color: #f57c00;
            margin-top: 5px;
        }

        .favorite-item .remove-btn {
            margin-top: 10px;
            background-color: #e74c3c;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            border-radius: 5px;
        }

        .favorite-item .remove-btn:hover {
            background-color: #c0392b;
        }
    </style>


</head>

<body>



    <!-- Favorite Kueh -->
    <div class="w3-container favorite-container">
        <?php if (empty($favorites)): ?>
            <div class="w3-center w3-padding-32">
                <i class="fa fa-heart w3-xxlarge" style="color: #f57c00;"></i>
                <h3>Tiada kueh kegemaran dijumpai</h3>
            </div>
        <?php else: ?>
            <?php foreach ($favorites as $favorite): ?>
                <div class="favorite-item">
                    <img src="<?php echo htmlspecialchars($favorite['image']); ?>"
                        alt="<?php echo htmlspecialchars($favorite['kuehName']); ?>">
                    <div class="favorite-item-details">
                        <h3><?php echo htmlspecialchars($favorite['kuehName']); ?></h3>
                        <p><?php echo htmlspecialchars($favorite['kuehDesc']); ?></p>
                        <div class="tag"><?php echo htmlspecialchars($favorite['tagKueh']); ?></div>
                        <button class="remove-btn" onclick="removeFavorite(<?php echo $favorite['kuehID']; ?>, this)">Buang dari
                            kegemaran</button>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</body>

</html>

<?php include('footer.php'); ?>
