<?php
include('header.php');

// Sample user data
$user = [
    "userName" => "Johnny",
    "email" => "johnny@example.com",
    "phoneNum" => "123-456-7890",
    "description" => "lorem ipsum",
    "profile_image" => "https://thumbs.dreamstime.com/b/cute-anime-girl-chef-kitchen-cute-anime-girl-chef-kitchen-generative-ai-342085902.jpg" // Avatar Profile
];


$cooking_activity_uploaded = false; // if user has uploaded activity, set to true

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user['userName'] = $_POST['username'];
    $user['email'] = $_POST['email'];
    $user['phoneNum'] = $_POST['phoneNum'];
    $user['description'] = $_POST['description'];
    
    // Handle uploaded image
    if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {
        $user['profile_image'] = 'data:image/jpeg;base64,' . base64_encode(file_get_contents($_FILES['profileImage']['tmp_name']));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Center profile container */
        .profile-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 20px;
            height: auto;
        }

        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .profile-img-container {
            position: relative;
            display: inline-block;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
        }

        .camera-icon {
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 1.5rem;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            padding: 5px;
            opacity: 0;
            transition: opacity 0.3s ease;
            cursor: pointer;
        }

        .profile-img-container:hover .camera-icon {
            opacity: 1;
        }

        .username {
            font-size: 1.8rem;
            font-weight: bold;
            margin: 0;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
            font-size: 1rem;
            margin-top: 5px;
        }

        .description {
            margin-top: 10px;
            text-align: center;
            font-style: italic;
        }

        .edit-profile {
            margin-top: 20px;
            text-align: center;
            color: rgb(231, 131, 0);
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
        }

        .edit-profile:hover {
            text-decoration: underline;
        }

        /* Edit Profile Form */
        .edit-form {
            display: none;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }

        .form-btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .form-btn {
            width: 48%;
        }

        /* Cooking Activity Section */
        .cooking-activity-container {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .cooking-icon {
            font-size: 3rem;
            color: #FF6347;
        }

        .cooking-message {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .start-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #FF6347;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .start-button:hover {
            background-color: #FF4500;
        }
    </style>
</head>

<body>

    <!-- Profile -->
    <div class="w3-container profile-container">
        <!-- Profile Header -->
        <div class="profile-header">
            <div class="profile-img-container">
                <label for="fileInput">
                    <img src="<?php echo htmlspecialchars($user['profile_image']); ?>" alt="Profile Image" class="profile-img"
                        id="profileImage">
                    <i class="fa fa-camera camera-icon"></i>
                </label>
                <form method="POST" enctype="multipart/form-data" style="display: none;">
                    <input type="file" id="fileInput" name="profileImage" accept="image/*" onchange="previewImage(event)">
                </form>
            </div>
            <div>
                <p class="username"><?php echo htmlspecialchars($user['userName']); ?></p>
                <!-- Email and Phone Number-->
                <div class="contact-info">
                    <span>
                        <i class="fa fa-envelope color-orange w3-text-orange" aria-hidden="true"></i>
                        <?php echo htmlspecialchars($user['email']); ?>
                    </span>
                    <span>
                        <i class="fa fa-phone w3-text-orange" aria-hidden="true"></i>
                        <?php echo htmlspecialchars($user['phoneNum']); ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Description -->
        <div class="description">
            <p><?php echo htmlspecialchars($user['description']); ?></p>
        </div>

         <!-- Edit Profile -->
         <div class="edit-profile" id="editProfileBtn"
            style="display: flex; align-items: center; justify-content: center;">
            Edit Profile
            <i class="w3-small w3-margin-left w3-text-orange w3-hover-opacity fa fa-pencil"></i>
        </div>

        <!-- Cooking Activity Message -->
        <?php if (!$cooking_activity_uploaded): ?>
        <div class="cooking-activity-container">
            <i class="fa fa-utensils cooking-icon"></i>
            <p class="cooking-message">Belum ada aktiviti membuat kueh</p>
            <h4 class ="cooking-message-2">Kongsi resipe idaman anda! </h4>
            <button class="start-button">Mulakan!</button>
        </div>
        <?php endif; ?>

        <!-- Listing Area -->





       

        <!-- Edit Profile Form -->
        <div class="w3-card-4 edit-form" id="editForm">
            <form method="POST" enctype="multipart/form-data">
                <div class="w3-center">
                    <!-- Profile Image Upload -->
                    <label for="fileInput">
                        <img src="<?php echo htmlspecialchars($user['profile_image']); ?>" alt="Upload Image"
                            class="profile-img" id="uploadPreview">
                    </label>
                </div>

                <!-- Personal Details -->
                <label>Username</label>
                <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" name="username"
                    value="<?php echo htmlspecialchars($user['userName']); ?>">

                <label>Email</label>
                <input class="w3-input w3-border w3-round w3-margin-bottom" type="email" name="email"
                    value="<?php echo htmlspecialchars($user['email']); ?>">

                <label>Phone Number</label>
                <input class="w3-input w3-border w3-round w3-margin-bottom" type="text" name="phoneNum"
                    value="<?php echo htmlspecialchars($user['phoneNum']); ?>">

                <label>Description</label>
                <textarea class="w3-input w3-border w3-round w3-margin-bottom" name="description"
                    rows="3"><?php echo htmlspecialchars($user['description']); ?></textarea>

                <!-- Buttons -->
                <div class="form-btn-container">
                    <button class="w3-button w3-orange w3-round form-btn" type="submit">Update</button>
                    <button class="w3-button w3-gray w3-round form-btn" type="button" id="cancelBtn">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Show edit form when Edit Profile is clicked
        document.getElementById('editProfileBtn').onclick = function () {
            document.getElementById('editForm').style.display = 'block';
        };

        // Hide edit form after user click on cancel button
        document.getElementById('cancelBtn').onclick = function () {
            document.getElementById('editForm').style.display = 'none';
        };

        // Upload image preview
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('profileImage').src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

</body>

<br><br><br><br><br><br><br><br>
<?php include('footer.php') ?>

</html>
