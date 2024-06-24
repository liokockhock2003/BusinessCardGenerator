export function viewCardPage(id){
    var htmlFiles = [
        'template1.php',
        'template2.php',
        'template3.php'
    ]
    location.replace(htmlFiles[id - 1]);
}