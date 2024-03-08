const headerEL = document.getElementById("header")

window.addEventListener("scroll", function () {
    const scrollPos = window.scrollY
    console.log(scrollPos); 
        if ((scrollPos>10) && (scrollPos<720)) {
            
            headerEL.classList.add("header_scroll1")
            headerEL.classList.remove("header_scroll0")
        }  else {
            
            headerEL.classList.remove("header_scroll1")
            headerEL.classList.add("header_scroll0")
        }
    
        if (scrollPos>720) {
            
            headerEL.classList.add("header_scroll2")
            headerEL.classList.remove("header_scroll0")
        }  else {
            
            headerEL.classList.remove("header_scroll2")
        }
    
})