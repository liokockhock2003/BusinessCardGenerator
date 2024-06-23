document.addEventListener("DOMContentLoaded", () => {
    fetch('fetch_profiles.php')
        .then(response => response.json())
        .then(profiles => {
            const gridContainer = document.getElementById('grid-container');
            profiles.forEach(profile => {
                profile.contents.forEach(content => {
                    const div = document.createElement('div');
                    div.classList.add('grid-item');
                    div.textContent = content;
                    gridContainer.appendChild(div);
                });
            });
        })
        .catch(error => console.error('Error fetching profiles:', error));
});