// scripts.js
// this script will display a php file in another php file
document.addEventListener("DOMContentLoaded", function() {
    // Array of HTML file URLs to embed
    var htmlFiles = [
        'template3.php',
        'template1.php'
        // Add more URLs if needed
    ];

    function displayCard(file) {
        var parentRef = document.getElementById('grid-container');
        var divRef = document.createElement('div');
        var iframe = document.createElement('iframe');
        divRef.className = 'card';
        iframe.src = file;
        iframe.className = 'cardIframe';
        iframe.frameBorder = 'no';
        iframe.scrolling = 'no';
        divRef.appendChild(iframe);
        parentRef.appendChild(divRef);
    }

    // Function to create and append iframes for each HTML file
    function embedHtmlFiles(files) {
        var container = document.getElementById('container');
        files.forEach(displayCard);
    }

    // Call the function to embed the HTML files
    embedHtmlFiles(htmlFiles);
});
