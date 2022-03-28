const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
  accordionItemHeader.addEventListener("click", event => {
    const currentlyActiveaccordionItemHeader = document.querySelector(".accordion-item-header.active");
      if(currentlyActiveaccordionItemHeader && currentlyActiveaccordionItemHeader!==accordionItemHeader) {
        currentlyActiveaccordionItemHeader.classList.toggle("active");
        currentlyActiveaccordionItemHeader.nextElementSibling.style.maxHeight = 0;
      }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if (accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    }else{
      accordionItemBody.style.maxHeight = 0;
    }
  });
});
