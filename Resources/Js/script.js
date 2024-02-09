function logout() {
    alert('Você foi desconectado.');
    window.location.href = "../../App/Providers/logout.php";
}

window.onload = function() {
    var alertBox = document.querySelector('.alert');
    if (alertBox) {
        alertBox.style.display = 'block';
        setTimeout(function() {
            alertBox.style.display = 'none';
        }, 5000);
    }
};