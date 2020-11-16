function validateForm() {

    let name = document.forms['shoppinglist']['username'].value;
    let pass = document.forms['shoppinglist']['password'].value;
    if (pass.length <= 4) {
        alert('Password too short. Input at least 4 characters.');
        return false;
    }
    let validShoes1 = document.getElementById('shoeYes');
    let validShoes2 = document.getElementById('shoeNo');


    let validShirt1 = document.getElementById('shirtYes');
    let validShirt2 = document.getElementById('shirtNo');


    let validPants1 = document.getElementById('pantsYes');
    let validPants2 = document.getElementById('pantsNo');

    let seven = document.getElementById('seven');
    let overnight = document.getElementById('overnight');
    let threeday = document.getElementById('threeday');

    if (!seven.checked && !overnight.checked && !threeday.checked) {
        alert('No choice for shipping selected.');
        return false;
    }




    if (!validShoes1.checked) {
        if (!validShoes2.checked) {
            alert('No choice for shoes selected.');
            return false;
        }

    }

    if (!validShirt1.checked) {
        if (!validShirt2.checked) {
            alert('No choice for shirt selected.')
            return false;
        }
    }

    if (!validPants1.checked) {
        if (!validPants2.checked) {
            alert('No choice for pants selected')
            return false;
        }
    }

    if (!name.includes('@') || !name.includes('.')) {
        alert("Not a valid email.");
        return false;
    }
    return true;
}