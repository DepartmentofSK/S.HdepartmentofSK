<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>S.H Department of SafeKeeping</title>
</head>
<body>

    <div class="top-banner">
        An official website of the S.H Department of SafeKeeping <span style="text-decoration: underline; cursor: pointer; margin-left: 5px;">Here's how you know</span>
    </div>

    <header>
        <div class="header-top">
            <div class="logo-section">
                <div class="logo-circle">DOS</div>
                <div class="agency-name">S.H Department of <br><strong>SafeKeeping</strong></div>
            </div>
            <div class="utility-nav">
                <a href="#">Our Outposts</a> | <a href="#">Find Transmission</a> | <a href="#">Contact Us</a>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Our Work</a></li>
            <li><a href="#">Resources</a></li>
        </ul>
    </nav>

    <div class="search-container">
        <div class="search-bar">
            <input type="text" placeholder="Enter your search term" value="">
            <button>🔍</button>
        </div>

        <div class="search-tabs">
            <div class="tab active"><a style="text-decoration: none; color: black;" href="./index.php">All Nodes</a></div>
            <div class="tab"><a style="text-decoration: none; color: black;" href="./shfiles.php">S.H Files</a></div>
            <div class="tab"><a style="text-decoration: none; color: black;" href="./narayan.php">Narayan Files</a></div>
        </div>

        <div class="results-count">0 results</div>

        <div class="recommended-box">
            <span class="recommended-label">Recommended by Department of SafeKeeping</span>
            <a href="./narayan.php" class="recommended-title">Narayan Files</a>
            <p>This page houses materials responsive under the <strong>S.H Data</strong> Transparency Act. Some of the library's contents include descriptions of anomalies. As such, please be advised.<br>Keyword: Department of SafeKeeping</p>
        </div>
        <div id="articles-list">
            <div class="result-item searchable-article">
                <h3><a href="#" class="recommended-title">S.H Group Library</a></h3>
                <p>This document outlines S.H Files in the data collected by the S.H Department of SafeKeeping regarding nodes about S.H Higher Elites<br>Keyword: Department of SafeKeeping</p>
            </div>

            <div class="result-item searchable-article">
                <h3><a href="#" class="recommended-title">Transparency Report - 2026</a></h3>
                <p>A comprehensive review of the SafeKeeping data and internal audits conducted under the S.H Data Transparency Act.<br>Keyword: Department of SafeKeeping</p>
            </div>

            <div class="result-item searchable-article">
                <h3><a href="#" class="recommended-title">Detailed Nodes</a></h3>
                <p>Nodes and connection of S.H Higher Elites, Presidency. Including or not including Narayan, Raditya and other Elites including the higher one's<br>Keyword: Department of SafeKeeping</p>
            </div>
    </div>
    </div>

</body>
<script>
    const searchInput = document.querySelector('.search-bar input');
    const searchButton = document.querySelector('.search-bar button');
    const articles = document.querySelectorAll('.searchable-article');
    const resultsCount = document.querySelector('.results-count');

    function performSearch() {
        const query = searchInput.value.toLowerCase();
        let visibleCount = 0;

        articles.forEach(article => {
            const text = article.textContent.toLowerCase();
            
            if (text.includes(query)) {
                article.style.display = 'block';
                visibleCount++;
            } else {
                article.style.display = 'none';
            }
        });

        // Update the results count text
        resultsCount.textContent = `${visibleCount} results`;
    }

    // Search when clicking the button
    searchButton.addEventListener('click', performSearch);

    // Search when pressing "Enter" key
    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') performSearch();
    });

    // Optional: Real-time search as you type
    searchInput.addEventListener('input', performSearch);

    // Run once on load to sync with the default value in the input
    window.onload = performSearch;
</script>
</html>
