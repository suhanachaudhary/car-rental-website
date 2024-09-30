function filterCards() {
    // Get the search query from the input
    const searchQuery = document.getElementById('search').value.toLowerCase();

    // Get all cards
    const cards = document.querySelectorAll('.card');

    // Loop through each card and check if the title matches the search query
    cards.forEach(card => {
        const title = card.querySelector('.card-title').textContent.toLowerCase();

        // If the title contains the search query, display the card, otherwise hide it
        if (title.includes(searchQuery)) {
            card.style.display = 'block'; // Show the card if it matches
        } else {
            card.style.display = 'none';  // Hide the card if it doesn't match
        }
    });
}





function searchCard() {
    // Get the search query from the input
    const searchQuery = document.getElementById('search').value.toLowerCase();

    // Get all cards
    const cards = document.querySelectorAll('.card');

    // Loop through each card and check if the title matches the search query
    cards.forEach(card => {
        const title = card.querySelector('.card-title').textContent.toLowerCase();

        if (title === searchQuery) {
            // If found, highlight the card (or any other action)
            card.style.display = 'block';
            card.style.border = '2px solid red';
            card.scrollIntoView({ behavior: 'smooth' });
        } else {
            // Reset the style for other cards
            card.style.display = 'none';
            card.style.border = '1px solid #ccc';
        }
    });
}


