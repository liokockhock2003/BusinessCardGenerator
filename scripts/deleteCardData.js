export async function deleteCardData(id){
    const dataToSend = {
        current_template_id: id
    };
    console.log(id);

    try {
        const response = await fetch('includes/delete.inc.php', {
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

        console.log(data);
        
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}