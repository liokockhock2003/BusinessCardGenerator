// scripts.js
// this script will display a php file in another php file
import {setCookie} from './cookies.js';
import { deleteCardData } from './deleteCardData.js';
import {cancelUpdateCardDetails, updateCardDetails} from './updateCardData.js';
import { viewCardPage } from './viewCard.js';

document.addEventListener("DOMContentLoaded", function() {
    // Array of HTML file URLs to embed
    var htmlFiles = [
        'template1.php',
        'template2.php',
        'template3.php'
        // Add more URLs if needed
    ];

    function displayCardInHTML(file, key) {
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
        viewButton.id = key;
        viewButton.addEventListener('click', function(){
          viewCardPage(this.id);
        });

        updateButton.className = 'update-button';
        updateButton.innerHTML = 'Update';
        updateButton.id = key;
        updateButton.addEventListener('click', function(){
          updateCardDetails(this.id);
        });

        deleteButton.className = 'delete-button';
        deleteButton.innerHTML = 'Delete';
        deleteButton.id = key
        deleteButton.addEventListener('click', function() {
            deleteCardData(this.id);
            location.replace('profilepage.php');
        });

        
        iframe.src = file;
        iframe.className = 'cardIframe';
        iframe.frameBorder = 'no';
        iframe.scrolling = 'no';
        
        divButton.appendChild(viewButton);
        divButton.appendChild(updateButton);
        divButton.appendChild(deleteButton);
        
        divIframe.appendChild(iframe);
        
        divRef.appendChild(divIframe);
        divRef.appendChild(divButton);
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
            displayCardInHTML(htmlFiles[key - 1], key);
            setCookie(data[key], key, 1);
          }
        })
        .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
        });
    }
    // Call the function to embed the HTML files
    document.getElementById('update-overlay').style.display = 'none';
    getCardCount();
});
