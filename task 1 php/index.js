const makes = document.getElementById('makes');
const models = document.getElementById('models');

$(makes).change(function() {
    models.disabled = makes.value == "Any";
    $(models).load("selection.php", {
        make: makes.value
        // index: makes.selectedIndex ///second way
    });
})