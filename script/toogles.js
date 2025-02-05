// side bar section
const showSideBar = document.getElementById("show-side-bar");
const hideSideBar = document.getElementById("hide-side-bar");
const sideBar  = document.getElementById("side-bar");
// side bar section

// quick section starts here
const flightFromNigeriaBtn = document.getElementById("flight-from-nigeria-btn");
const flightFromNigeriaIconUp = document.getElementById("flight-from-nigeria-icon-up");
const flightFromNigeriaIconDown = document.getElementById("flight-from-nigeria-icon-down");
const flightFromNigeria = document.getElementById("flight-from-nigeria");
const internationalDestinationBtn = document.getElementById("international-destination-btn");
const internationalDestinationIconUp = document.getElementById("international-destination-icon-up");
const internationalDestinationIconDown = document.getElementById("international-destination-icon-down");
const internationalDestination = document.getElementById("international-destination");
const flightToCountryBtn = document.getElementById("flight-to-country-btn");
const flightToCountryIconUp = document.getElementById("flight-to-country-icon-up");
const flightToCountryIconDown = document.getElementById("flight-to-country-icon-down");
const flightToCountry = document.getElementById("flight-to-country");
// quick section ends here

// desktop-search section
const desktopOneWay = document.getElementById("desktop-oneWay");
const desktopRoundedTrip = document.getElementById("desktop-roundedTrip");
const desktopMultiCity = document.getElementById("desktop-multiCity");
// dropdown section
const adultDropdown = document.getElementById("adult-dropdown");
const passengersDropdown = document.getElementById("passengers-dropdown");
const flightTypeDropdown = document.getElementById("flight-type-dropdown");
const flightClassDropdown = document.getElementById("flight-class-dropdown");
// rounded-trip-date
const roundedTripDate = document.getElementById("rounded-trip-date");


// side bar functions start
showSideBar.addEventListener("click", () => {
    sideBar.style.display = "flex"
});

hideSideBar.addEventListener("click", () => {
    sideBar.style.display = "none"
});
// side bar function end

// simple or quick action section 
flightFromNigeriaIconDown.style.display = "none";
internationalDestinationIconDown.style.display = "none";
flightToCountryIconDown.style.display = "none";

if (window.innerWidth === "750px") {
    flightFromNigeriaBtn.addEventListener("click", () => {
         if (flightFromNigeria.style.height === "0px") {
            flightFromNigeria.style.height = "fit-content";
            internationalDestination.style.height = "0px";
            flightToCountry.style.height = "0px";
            flightFromNigeriaIconDown.style.display = "flex";
            flightFromNigeriaIconUp.style.display = "none";
            // international destination 
            internationalDestinationIconDown.style.display = "none";
            internationalDestinationIconUp.style.display = "flex";
            // flight to country
            flightToCountryIconDown.style.display = "none";
            flightToCountryIconUp.style.display = "flex";
            // inter 
            flightFromNigeria.style.transition = "width 0.5s ease, height 0.5s ease";
        } else {
            flightFromNigeria.style.height = "0px";
            flightFromNigeriaIconDown.style.display = "none";
            flightFromNigeriaIconUp.style.display = "flex";
        }
    });
} else {
    console.log("width not up to requested height")
}

if (window.innerWidth === "750px") {
    flightToCountryBtn.addEventListener("click", () => {
        if (flightToCountry.style.height === "0px") {
            flightToCountry.style.height = "fit-content";
            internationalDestination.style.height = "0px";
            flightFromNigeria.style.height = "0px";
            flightToCountryIconDown.style.display = "flex";
            flightToCountryIconUp.style.display = "none";
            // international destination 
            internationalDestinationIconDown.style.display = "none";
            internationalDestinationIconUp.style.display = "flex";
            // covering up ends meet
            flightFromNigeriaIconDown.style.display = "none";
            flightFromNigeriaIconUp.style.display = "flex";
            // coverd ends meet
            flightToCountry.style.transition = "width 0.5s ease, height 0.5s ease";
        } else {
            flightToCountry.style.height = "0px";
            flightToCountryIconDown.style.display = "none";
            flightToCountryIconUp.style.display = "flex";
        }
    });
} else {
    console.log("width not up to requested height")
}

if (window.innerWidth === "750px") {
    internationalDestinationBtn.addEventListener("click", () => {
        if (internationalDestination.style.height === "0px") {
            internationalDestination.style.height = "fit-content";
            flightFromNigeria.style.height = "0px";
            flightToCountry.style.height = "0px";
            internationalDestinationIconDown.style.display = "flex";
            internationalDestinationIconUp.style.display = "none";
            // covering up ends meet
            flightFromNigeriaIconDown.style.display = "none";
            flightFromNigeriaIconUp.style.display = "flex";
             // flight to country
             flightToCountryIconDown.style.display = "none";
             flightToCountryIconUp.style.display = "flex";
            // coverin gup ends meet
            internationalDestination.style.transition = "width 0.5s ease, height 0.5s ease";
        } else {
            internationalDestination.style.height = "0px";
            internationalDestinationIconDown.style.display = "none";
            internationalDestinationIconUp.style.display = "flex";
        }
    });
} else {
    console.log("width not up to requested height")
}

// desktop section

desktopOneWay.addEventListener("click", () => {
    desktopOneWay.classList.add("bg-red-500","text-white");
    desktopRoundedTrip.classList.remove("bg-red-500","text-white");
    desktopMultiCity.classList.remove("bg-red-500","text-white");
    roundedTripDate.classList.add("hidden");
});

desktopRoundedTrip.addEventListener("click", () => {
    desktopRoundedTrip.classList.add("bg-red-500","text-white");
    desktopOneWay.classList.remove("bg-red-500","text-white");
    desktopMultiCity.classList.remove("bg-red-500","text-white");
    roundedTripDate.classList.remove("hidden");
});

desktopMultiCity.addEventListener("click", () => {
    desktopMultiCity.classList.add("bg-red-500","text-white");
    desktopOneWay.classList.remove("bg-red-500","text-white");
    desktopRoundedTrip.classList.remove("bg-red-500","text-white");
});

//drop down section
adultDropdown.addEventListener("click", () => {
    passengersDropdown.classList.toggle("hidden");
});

flightTypeDropdown.addEventListener("click", () => {
    flightClassDropdown.classList.toggle("hidden");
});
if (window.innerWidth === "750px") {
    console.log(window.innerWidth);
} else {
    console.log("width isnt that high")
}