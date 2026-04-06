export function footerSearch() {
var searchBtn = document.getElementById('footer-search-btn');
var searchInput = document.getElementById('footer-search-input');

if (searchBtn && searchInput) {

    // Submit on button click
    searchBtn.addEventListener('click', function () {
        var query = searchInput.value.trim();
        if (query !== '') {
            // Replace with your actual search URL
            window.location.href = '/search?q=' + encodeURIComponent(query);
        }
    });

    // Submit on Enter key
    searchInput.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') {
            searchBtn.click();
        }
    });

}
}
