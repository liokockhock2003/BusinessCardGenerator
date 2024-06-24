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
        var divButton = document.createElement('div');
        var divIframe = document.createElement('div');
        var viewButton = document.createElement('button');
        var updateButton = document.createElement('button');
        var deleteButton = document.createElement('button');

        divRef.className = 'card';

        divButton.className = 'button';
        divButton.style.flexGrow = 1;

        divIframe.style.flexGrow = 6;

        viewButton.className = 'view-button';
        viewButton.innerHTML = 'View';
        updateButton.className = 'update-button';
        updateButton.innerHTML = 'Update';
        deleteButton.className = 'delete-button';
        deleteButton.innerHTML = 'Delete';

        iframe.src = file;
        iframe.className = 'cardIframe';
        iframe.frameBorder = 'no';
        iframe.scrolling = 'no';

        divButton.appendChild(viewButton);
        divButton.appendChild(updateButton);
        divButton.appendChild(deleteButton);

        divIframe.appendChild(iframe);

        divRef.appendChild(divButton);
        divRef.appendChild(divIframe);
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
