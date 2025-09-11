<?php
    // Bagian PHP: Mendefinisikan semua data profil
    $name = "Kanira Syakira Tarigan";
    $dateofbirth = "16 October 2006";
    $studyprogram = "Manajemen Informatika";
    $id_anggota = "31242354";
    $slogan = "STMIK IKMI CIREBON 2025";
    
    // Data Media Sosial
    $sosial_media = array(
        "instagram" => array(
            "url" => "https://instagram.com/i.am.your.k",
            "username" => "i.am.your.k",
            "icon" => "https://cdn-icons-png.flaticon.com/512/174/174855.png",
            "alt" => "Instagram Logo"
        ),
        "twitter" => array(
            "url" => "https://twitter.com/bluejamw",
            "username" => "bluejamw",
            "icon" => "https://cdn-icons-png.flaticon.com/512/5968/5968830.png",
            "alt" => "Twitter Logo"
        )
    );
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pribadi Kanira Syakira</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F8E8F8;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .id-card-container {
            position: relative;
            width: 500px;
            padding: 30px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            color: #E85B9E;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2.5em;
            font-weight: 700;
            margin: 0;
        }

        .info-section {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .profile-photo {
            flex-shrink: 0;
            width: 150px;
            height: 150px;
            background-color: #F8F8F8;
            border-radius: 15px;
            overflow: hidden;
        }

        .profile-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .details {
            flex-grow: 1;
        }

        .details p {
            margin: 5px 0;
            font-size: 1em;
            color: #666;
        }

        .details .label {
            font-weight: 600;
            color: #333;
        }
        
        .contact-info {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px dashed #ccc;
            text-align: center;
        }
        
        .contact-info .social-links {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }
        
        .contact-info .social-links a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #E85B9E;
            font-weight: 600;
        }

        .contact-info img {
            width: 20px;
            margin-right: 8px;
        }
        
        .slogan {
            margin-top: 20px;
            text-align: center;
            font-style: italic;
            color: #E85B9E;
            font-size: 0.9em;
        }
        .slogan .click-me {
    display: inline-block;
    margin-top: 10px;
    padding: 6px 14px;
    background-color: #E85B9E;
    color: white;
    font-weight: 600;
    border-radius: 8px;
    text-decoration: none;
    transition: background 0.3s ease;
}

.slogan .more-info:hover {
    background-color: #c9447d;
}

        }
    </style>
</head>
<body>
    <div class="id-card-container">
        <div class="header">
            <h1>College Student Card</h1>
        </div>

        <div class="info-section">
            <div class="profile-photo">
                <img src="https://raw.githubusercontent.com/kaniratarigan3-blip/kanipic/refs/heads/main/meme.jfif" alt="Profile Photo of Kanira Syakira">
            </div>
            <div class="details">
                <p><span class="label">Name:</span> <strong><?php echo $name; ?></strong></p>
                <p><span class="label">Date Of Birth:</span> <strong><?php echo $dateofbirth; ?></strong></p>
                <p><span class="label">Study Program:</span> <strong><?php echo $studyprogram; ?></strong></p>
                <p><span class="label">Student ID:</span> <strong><?php echo $id_anggota; ?></strong></p>
            </div>
        </div>

        <div class="contact-info">
            <div class="social-links">
                <?php foreach ($sosial_media as $media): ?>
                    <a href="<?php echo $media['url']; ?>" target="_blank">
                        <img src="<?php echo $media['icon']; ?>" alt="<?php echo $media['alt']; ?>">
                        <span><?php echo $media['username']; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="slogan">
    <p><strong><?php echo $slogan; ?></strong></p>
    <a href="https://kaniratarigan3-blip.github.io/kani-html-file/cv.html" target="_blank" class="click-me">Click me for my resume!</a>
</div>
</html>