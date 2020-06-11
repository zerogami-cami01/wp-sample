jQuery(() => {
  jQuery(".menu").on("click", () => {
    jQuery(".sp-menu").slideToggle();
    jQuery(".icon-menu").toggle();
    jQuery(".icon-close").toggle();
    return false;
  })
})