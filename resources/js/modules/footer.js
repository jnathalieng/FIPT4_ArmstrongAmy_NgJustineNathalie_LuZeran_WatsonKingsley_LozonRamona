export function footerSearch() {
    var searchInput = document.getElementById('footer-search-input');
    var searchBtn = document.getElementById('footer-search-btn');
    
    if (searchInput) {
        // Create results dropdown
        var resultsDropdown = document.createElement('div');
        resultsDropdown.id = 'footer-search-results';
        resultsDropdown.className = 'search-dropdown';
        searchInput.parentElement.appendChild(resultsDropdown);
        
        // Listen for Enter key
        searchInput.addEventListener('keydown', async function (e) {
            if (e.key === 'Enter') {
                var query = searchInput.value.trim();
                if (query !== '') {
                    const response = await fetch(`/api/search?q=${encodeURIComponent(query)}`);
                    const results = await response.json();
                    displayResults(results, resultsDropdown);
                }
            }
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function (e) {
            if (e.target !== searchInput) {
                resultsDropdown.style.display = 'none';
            }
        });
    }
}

function displayResults(results, dropdown) {
    if (results.length === 0) {
        dropdown.innerHTML = '<p class="search-no-results">No results found</p>';
        dropdown.style.display = 'block';
        return;
    }
    
    let html = '<ul class="search-results-list">';
    results.forEach(result => {
        html += `<li><a href="/blogs/${result.slug}">${result.title}</a></li>`;
    });
    html += '</ul>';
    
    dropdown.innerHTML = html;
    dropdown.style.display = 'block';
}