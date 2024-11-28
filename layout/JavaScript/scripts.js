// Function to show an alert with the movie title when clicked
function setupMovieClickEvents() {
    const movieCards = document.querySelectorAll('.latest-card');

    movieCards.forEach(card => {
        card.addEventListener('click', function() {
            const movieTitle = this.querySelector('.latest-title span').textContent;
            alert(`You clicked on ${movieTitle}!`);
        });
    });
}

document.addEventListener('DOMContentLoaded', () => {


    // Add hover event to change background color of project cards on hover
    document.querySelectorAll('.latest-card').forEach(card => {
        card.addEventListener('mouseover', () => {
            card.style.backgroundColor = '#333';
        });
        card.addEventListener('mouseout', () => {
            card.style.backgroundColor = '';
        });
    });
});
