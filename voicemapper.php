<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Mario Kart 7 Voice Mapper — Project</title>

    <link rel="stylesheet" href="styles/style.css" />
</head>
<body>
    <main class="project-page">
        <a class="back" href="index.php">← Back to portfolio</a>

        <header class="project-hero container">
            <div class="project-meta">
                <h1>Mario Kart 7 Voice Mapper</h1>
                <p class="tagline">A tool to easily map and organize custom character voices for use with CHpacker.</p>

                <div class="actions">
                    <a class="btn" href="https://gamebanana.com/tools/19808" target="_blank" rel="noopener noreferrer">GameBanana page</a>
                    <a class="btn ghost" href="https://github.com/yourname/voicemapper" target="_blank" rel="noopener noreferrer">Source</a>
                </div>

                <ul class="tech">
                    <li>Tool development</li>
                    <li>Voice file processing</li>
                    <li>CHpacker integration</li>
                </ul>
            </div>

            <figure class="project-screenshot">
                <img src="assets/voicemapper-screenshot.png" alt="Mario Kart 7 Voice Mapper screenshot" />
                <figcaption>Voice Mapper interface — organize and export voices</figcaption>
            </figure>
        </header>

        <section class="project-details container">
            <h2>Overview</h2>
            <p>
                The Mario Kart 7 Voice Mapper simplifies the process of creating custom character voices for Mario Kart 7 mods.
                Instead of manually organizing voice files, this tool automates the workflow: organize your voice clips into recognizable categories,
                run the tool, select your target character, and get CHpacker-ready output instantly.
            </p>

            <h3>How it works</h3>
            <ol style="color:var(--muted); line-height:1.6">
                <li>Place your custom voice files into the <code>voicebank</code> folder in predefined categories.</li>
                <li>The tool recognizes and organizes these categories automatically.</li>
                <li>Select your character and run the converter.</li>
                <li>Output files are ready for CHpacker — just point CHpacker to the output folder and you're done.</li>
            </ol>

            <h3>Features</h3>
            <ul>
                <li>Customizable voice categories for flexible organization</li>
                <li>User-friendly interface — no command-line knowledge required</li>
                <li>Reuse voices across multiple characters</li>
                <li>Lightweight and efficient processing</li>
                <li>Automatic update checker to stay current</li>
            </ul>

            <h3>Notes</h3>
            <p>
                For detailed setup instructions and downloads, see the GameBanana tool page:
                <a href="https://gamebanana.com/tools/19808" target="_blank" rel="noopener noreferrer">gamebanana.com/tools/19808</a>.
                Check the included README file for category setup and troubleshooting.
            </p>
        </section>
    </main>
</body>
</html>

