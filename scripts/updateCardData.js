
export function updateCardDetails(id){
    document.getElementById('templateID').value = id;
    document.getElementById('update-overlay').style.display = 'flex';
    document.getElementById(id).onclick = null;
}

export function cancelUpdateCardDetails(){
    document.getElementById('update-overlay').style.display = 'none';
    document.getElementById('cancelButton').oncclick = null;
}