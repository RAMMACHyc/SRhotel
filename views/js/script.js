document.getElementById('suite').addEventListener('change', function() {
    var style = this.value == 1 ? 'block' : 'none';
    document.getElementById('inpu').style.display = style;
});