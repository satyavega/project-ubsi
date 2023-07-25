    function toggleSearch() {
        var icon = document.getElementById('search-icon');
        var input = document.getElementById('search-input');

        if (icon.style.display !== 'none') {
            icon.style.display = 'none';
            input.style.display = 'inline-block';
            input.focus();
        } else {
            icon.style.display = 'inline-block';
            input.style.display = 'none';
        }
    }
