<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
</head>
<body>
    <header>
        <h1>My Portfolio</h1>
    </header>
    <section>
        <h2>About Me</h2>
        <p>Ik ben Lucas, een software developer die met passie aan projecten werkt, zie deze website voor een aantal projecten die ik heb gemaakt.</p>
    </section>
    <section>
        <h2>Projects</h2>
        <div class="project">
            <a href="vista-task-manager.php">
                <h3>Vista Task Manager (Examen Project)</h3>
                <p>Een website gemaakt voor de vista externe challenge sector.</p>
            </a>
        </div>
        <div class="project">
            <a href="spell-dash.php">
                <h3>Project Spell Dash (extra Bewijslast)</h3>
                <p>Een 2D platformer game gemaakt door studenten</p>
            </a>
        </div>
        <div class="project">
            <a href="MK7DX.php">
                <h3>MK7DX</h3>
                <p>Een mod voor Mario Kart 7</p>
            </a>
        </div>
        <div class="project">
            <a href="voicemapper.php">
                <h3>Mario Kart 7 Voice Mapper</h3>
                <p>Een tool om gemakkelijk aangepaste karakterstemmen te koppelen voor gebruik met CHpacker.</p>
            </a>
        </div>
        <div class="project">
            <a href="downloads/bewijslast.zip" download class="download-btn">
                <h3>Bewijslast</h3>
                <p>Klik hier om mijn bewijslast te downloaden (ZIP).</p>
            </a>
        </div>
    </section>
    <section>
        <h2>Skills</h2>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
        </ul>
    </section>
    <section>
        <h2>Contact</h2>
        <p>Email: 512371@vistacollege.nl</p>
    </section>
</body>
</html>

<style>
:root{
  --bg:#0f1724;
  --card:#0b1220;
  --muted:#9aa4b2;
  --accent:#06b6d4;
  --text:#e6eef6;
  --container:1100px;
  --gap:1rem;
}

*{box-sizing:border-box}
html,body{height:100%;margin:0;font-family:Inter,Segoe UI,Roboto,Arial;background:var(--bg);color:var(--text);-webkit-font-smoothing:antialiased}

.container{width:min(92%,var(--container));margin:0 auto;padding:1.5rem 0}

/* Header / Hero */
header{padding:3rem 4%;text-align:center;background:linear-gradient(180deg, rgba(6,182,212,0.03), transparent 60%)}
header h1{margin:0;font-size:2.2rem;letter-spacing:0.5px}

/* About section */
section{padding:2rem 4%;width:100%}
section h2{margin:0 0 1rem 0;font-size:1.4rem}
section p{color:var(--muted);line-height:1.7;max-width:70ch}

/* Projects grid */
section:has(.project){max-width:100%;padding:2rem 0}
.project{
  background:var(--card);
  border:1px solid rgba(255,255,255,0.04);
  border-radius:12px;
  overflow:hidden;
  transition:border-color 0.2s, transform 0.2s;
}
.project:hover{border-color:rgba(6,182,212,0.3);transform:translateY(-2px)}
.project a{display:block;padding:1.5rem;text-decoration:none;color:inherit}
.project h3{margin:0 0 .5rem 0;color:var(--text)}
.project p{margin:0;color:var(--muted);font-size:0.95rem}

/* Projects container grid */
section:has(.project){
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));
  gap:1.25rem;
  padding:2rem 4%;
  width:100%;
}

/* Skills section */
section:has(ul) ul{
  list-style:none;
  padding:0;
  margin:0;
  display:flex;
  flex-wrap:wrap;
  gap:.75rem;
}
section:has(ul) li{
  background:rgba(255,255,255,0.02);
  padding:.5rem 1rem;
  border-radius:8px;
  border:1px solid rgba(255,255,255,0.04);
  color:var(--muted);
  font-size:0.95rem;
}

/* Contact section */
section:has(p:contains("Email")){border-top:1px solid rgba(255,255,255,0.03)}

/* Download button styling */
.download-btn{background:transparent !important;border:1px solid var(--accent) !important}
.download-btn:hover{background:rgba(6,182,212,0.1) !important}

/* Responsive */
@media (max-width:880px){
  header h1{font-size:1.8rem}
  section{padding:1.5rem 4%}
  section:has(.project){grid-template-columns:1fr}
}
</style>
