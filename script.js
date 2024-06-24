document.getElementById("showForm").addEventListener("click", function() {
    document.getElementById("div1").classList.remove("hidden");
    document.getElementById("div2").classList.remove("hidden");
});
document.getElementById("hideForm").addEventListener("click", function() {
    document.getElementById("div1").classList.add("hidden");
    document.getElementById("div2").classList.add("hidden");
});
