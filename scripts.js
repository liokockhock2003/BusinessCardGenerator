// scripts.js
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
            container.appendChild(iframe);
        });
    }

    // Call the function to embed the HTML files
    embedHtmlFiles(htmlFiles);
});
