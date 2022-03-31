$(document).ready(function(){
  $(function(){
    $(".resizable").draggable({
      containment: "#nav1",
      scrolle: false,
      cursor: "move"
    });
    $(".img-2").resizable({
      // alsoResize: ".img-2",
      containment:"#nav1",
      animate: true,
      ghost:true,
      handles: "n, e, s, w",
      maxHeight: 600,
      maxWidth: 500,
      minHeight: 60,
      minWidth: 50
    });
  });
});