<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Design Portfolio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>My Graphic Design Portfolio</h1>
            <p>Showcasing my best work</p>
        </div>
    </header>
    <main>
        <section class="gallery">
            <?php
            $imagesDirectory = 'images/';
            $images = glob($imagesDirectory . '*.{jpg,jpeg,png,gif,svg,heif,raw}', GLOB_BRACE);

            foreach ($images as $image) {
                echo '<div class="image-container">';
                echo '<img src="' . $image . '" alt="Design">';
                echo '</div>';
            }
            ?>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 My Graphic Design Portfolio. All rights reserved.</p>
            <p>Website design and code assistance provided by <a href="https://www.mistral.ai/" target="_blank">Mistral AI</a> & <a href="https://www.chatgpt..com/" target="_blank">Chat Gpt</a>.</p>
        </div>
    </footer>
    <script>
        function applyAspectRatioClasses() {
            const imageContainers = document.querySelectorAll('.image-container');
            imageContainers.forEach(container => {
                const img = container.querySelector('img');
                const aspectRatio = img.naturalWidth / img.naturalHeight;

                if (aspectRatio >= 16 / 9) {
                    container.classList.add('landscape');
                    container.classList.remove('portrait');
                } else if (aspectRatio <= 3 / 4) {
                    container.classList.add('portrait');
                    container.classList.remove('landscape');
                } else {
                    container.classList.remove('landscape');
                    container.classList.remove('portrait');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', applyAspectRatioClasses);
        window.addEventListener('resize', applyAspectRatioClasses);
    </script>
</body>
</html>
