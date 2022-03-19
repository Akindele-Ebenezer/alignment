const viewAllSuppliesButton = document.querySelector(".sec-4 div button");

viewAllSuppliesButton.addEventListener("click", () => {
    window.open("https://ebengm.herokuapp.com/supplies.php")
});

const viewMoreServicesButton = document.querySelector(".sec-2 + div button");

viewMoreServicesButton.addEventListener("click", () => {
    window.open("https://ebengm.herokuapp.com/all-services.php");
});

const readMoreButton = document.querySelector(".sec-6 .sec-inner-wrapper .sec-inner div button");

readMoreButton.addEventListener("click", () => {
    window.open("https://ebengm.herokuapp.com/logistics.php")
});

// console.log(viewMoreServicesButton);
