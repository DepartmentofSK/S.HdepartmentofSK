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