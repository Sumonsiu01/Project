<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>This is Homepage</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="autorefresh">
      <nav>
        <ul class="sidebar">
          <li onclick="hideSidebar()">
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                height="24"
                viewBox="0 -960 960 960"
                width="24"
              >
                <path
                  d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"
                /></svg
            ></a>
          </li>
          <li><a href="Bowler.php">Bowler</a></li>
          <li><a href="Batsman.php">Batsman</a></li>
          <li><a href="Ranking.php">Rankings</a></li>
          <li><a href="About.php">About</a></li>
        </ul>
        <ul>
          <li class="hideOnMobile"><a href="Bowler.php">Bowler</a></li>
          <li class="hideOnMobile"><a href="Batsman.php">Batsman</a></li>
          <li class="hideOnMobile"><a href="Ranking.php">Rankings</a></li>
          <li class="hideOnMobile"><a href="About.php">About</a></li>
          <li class="menu-btn" onclick="showSidebar()">
            <a href="#"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                height="26"
                viewBox="0 -960 960 960"
                width="26"
              >
                <path
                  d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"
                /></svg
            ></a>
          </li>
        </ul>
      </nav>

      <script>
        function showSidebar() {
          const sidebar = document.querySelector(".sidebar");
          sidebar.style.display = "flex";
        }
        function hideSidebar() {
          const sidebar = document.querySelector(".sidebar");
          sidebar.style.display = "none";
          sidebar.style.cursor = "pointer";
        }
      </script>
    </div>
  </body>
</html>
