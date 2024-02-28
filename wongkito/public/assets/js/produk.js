// Ambil status visibilitas dari data yang diterima dari backend
const menuItems = dataFromBackend.menuItems;

// Loop melalui setiap item-menu
menuItems.forEach((item) => {
    if (item.is_visible) {
        // Tampilkan item-menu jika visibilitasnya true
        document.getElementById(item.id).style.display = "block";
    } else {
        // Sembunyikan item-menu jika visibilitasnya false
        document.getElementById(item.id).style.display = "none";
    }
});
