function marecherche() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("mabarrederecherche");
    filter = input.value.toUpperCase();
    ul = document.getElementById("list_evenements");
    li = ul.getElementsByTagName("div");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h3")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
