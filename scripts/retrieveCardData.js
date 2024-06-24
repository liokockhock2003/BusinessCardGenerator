
// import {getCookie} from './cookies.js';

function determineTemplateID(){
    var path = window.location.pathname;
    var page = path.split("/").pop();

    var htmlFiles = [
        'template1.php',
        'template2.php',
        'template3.php'
        // Add more URLs if needed
    ];

    var currID = 0;
    for(var i = 1; i <= htmlFiles.length; i++){
        if(page == htmlFiles[i - 1]){
            currID = i;
            break;
        }
    }
    return currID;
}

document.addEventListener('DOMContentLoaded', async function() {
    const dataToSend = {
        current_template_id: determineTemplateID()
    };

    try {
        const response = await fetch('includes/getInfo_cardData.inc.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(dataToSend)
        });

        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }

        const data = await response.json();

        if (data.error) {
            throw new Error('Error from server: ' + data.error);
        }

        const nameNode = document.getElementById('name');
        const emailNode = document.getElementById('email');
        const positionNode = document.getElementById('position');
        const addressNode = document.getElementById('address');
        const imageNode = document.getElementById('image');
        
        nameNode.innerHTML += data['name'];
        emailNode.innerHTML += data['email'];
        addressNode.innerHTML += data['address'];
        positionNode.innerHTML += data['position'];
        imgFile = data['image'];

        const imgDiv = document.createElement('img');
        imgDiv.src = imgFile.split("../").join("");
        imgDiv.alt = 'Your Corporate Logo';
        imageNode.appendChild(imgDiv);
    } catch (error) {
        console.error('Error fetching data:', error);
    }
});