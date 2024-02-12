document.addEventListener("DOMContentLoaded", function () {
    var searchIcon = document.getElementById("search");
    var searchBar = document.getElementById("search-bar");

    searchIcon.addEventListener("click", function (event) {
        event.stopPropagation(); // Hentikan penyebaran event klik untuk mencegah penutupan search box
        searchBar.classList.toggle("show");
    });

    document.addEventListener("click", function (event) {
        var isClickInsideSearchBar = searchBar.contains(event.target);
        var isClickInsideSearchIcon = searchIcon.contains(event.target);

        if (!isClickInsideSearchBar && !isClickInsideSearchIcon) {
            searchBar.classList.remove("show"); // Sembunyikan search box jika klik dilakukan di luar search box dan ikon search
        }
    });

    let availableKeywords = [
        "contact",
        "menu",
        "lenjer",
        "kapal selem",
        "kriting",
        "adaan",
        "kulit",
        "pastel",
        "instagram",
        "facebook",
        "whatsapp",
    ];

    const resultsBox = document.querySelector(".result-box");
    const inputBox = document.getElementById(".search-input");

    inputBox.onkeyup = function () {
        let result = [];
        let input = inputBox.value;
        if (input.length) {
            result = availableKeywords.filter((keyword) => {
                return keyword.toLowerCase().includes(input.toLowerCase());
            });
            console.log(result);
        }
        display(result);

        if(!result.length){
            resultsBox.innerHTML = '';
        }
    };

    function display(result) {
        const content = result.map((list) => {
            return "<li onclick=selectinput(this)>" + list + "</li>";
        });

        resultsBox.innerHTML = "<ul>" + content.join("") + "</ul>";
    }

    function selectinput(this){
        inputBox.value = list.innerHTML;
        resultsBox.innerHTML = '';
    }
});
