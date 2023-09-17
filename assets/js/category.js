// Get the URL parameter
const urlParams = new URLSearchParams(window.location.search);
const categoryParam = urlParams.get('category');

// Check if the categoryParam is 'kids' and activate the tab
if (categoryParam === 'kids') {
    $(".filter-tab[data-category='kids']").addClass('active');
}

