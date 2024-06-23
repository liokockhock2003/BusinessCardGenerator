// scripts.js
// this script will display a php file in another php file
document.addEventListener("DOMContentLoaded", function() {
    // Array of HTML file URLs to embed
    var htmlFiles = [
        'template3.php'
        // Add more URLs if needed
    ];

    // Function to create and append iframes for each HTML file
    function embedHtmlFiles(files) {
        var container = document.getElementById('container');
        files.forEach(function(file) {
            var iframe = document.createElement('iframe');
            iframe.src = file;
            iframe.className = 'embedded-frame';
            iframe.scrolling = 'no';
            container.appendChild(iframe);
        });
    }

    // Call the function to embed the HTML files
    embedHtmlFiles(htmlFiles);
});
