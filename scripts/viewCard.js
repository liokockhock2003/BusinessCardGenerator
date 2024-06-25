export function viewCardPage(id){
    var htmlFiles = [
        'template1.php',
        'template2.php',
        'template3.php'
    ]
    window.open(htmlFiles[id - 1]);
}