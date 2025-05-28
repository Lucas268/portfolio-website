<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Task Manager - Project Details</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <header>
        <h1>Vista Task Manager</h1>
        <a href="index.php" class="back-link">← Back to Portfolio</a>
    </header>
    <main class="project-details">
        <img src="images/TM.png" alt="Vista Task Manager Screenshot" class="project-image preview-img">
        <section class="project-info">
            <h2>About the Project</h2>
            <p>
                Vista Task Manager is een website gemaakt voor de Vista Externe Challenge Sector. Het is een taakbeheerder waarmee gebruikers hun taken kunnen organiseren en beheren. De website is ontworpen om gebruiksvriendelijk te zijn en biedt verschillende functies om het beheren van taken eenvoudig te maken. De website is responsive, wat betekent dat deze goed werkt op zowel desktop- als mobiele apparaten.
                 Ik heb deze website met PHP en MySQL gemaakt. Het doel van de website is om gebruikers aan een externe challenge te helpen door een platform aan te bieden waar zij kunnen zoeken naar een taak waar zij aan kunnen werken. De website biedt ook een gebruikersauthenticatie systeem zodat gebruikers hun eigen taken kunnen beheren zonder dat anderen toegang hebben tot hun gegevens.
            </p>
            <h3>Features</h3>
            <ul>
                <li>Create, edit, and delete tasks</li>
                <li>Organize tasks by categories</li>
                <li>Responsive design for all devices</li>
                <li>User authentication</li>
            </ul>
            <h3>Code Talen</h3>
            <ul>
                <li>HTML, CSS, JavaScript</li>
                <li>PHP</li>
                <li>MySQL</li>
            </ul>
            <h3>Screenshots</h3>
            <img src="images/TM1.png" alt="Login Screenshot" class="project-image preview-img">
            <img src="images/TM2.png" alt="Create Screenshot" class="project-image preview-img">
            <img src="images/TM3.png" alt="Edit Screenshot" class="project-image preview-img">
        </section>
    </main>

    <!-- Modal for image preview -->
    <div id="image-modal" class="modal">
        <span class="close" id="close-modal">&times;</span>
        <img class="modal-content" id="modal-img">
    </div>

    <script>
    document.querySelectorAll('.preview-img').forEach(img => {
        img.addEventListener('click', function() {
            document.getElementById('image-modal').style.display = 'block';
            document.getElementById('modal-img').src = this.src;
        });
    });
    document.getElementById('close-modal').onclick = function() {
        document.getElementById('image-modal').style.display = 'none';
    };
    window.onclick = function(event) {
        const modal = document.getElementById('image-modal');
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
    </script>
</body>
</html>