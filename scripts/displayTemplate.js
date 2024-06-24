// scripts.js
// this script will display a php file in another php file
document.addEventListener("DOMContentLoaded", function() {
    // Array of HTML file URLs to embed
    var htmlFiles = [
        'template1.php',
        'template2.php',
        'template3.php'
        // Add more URLs if needed
    ];

    function displayCardInHTML(file) {
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

    function getCardCount(){
        //AJAX to fetch data from database to JavaScript
        fetch('includes/getInfo_count.inc.php')
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
            for(var key in data){
                displayCardInHTML(htmlFiles[data[key] - 1]);
            }
        })
        .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
        });
    }
    // Call the function to embed the HTML files
    getCardCount();
});
