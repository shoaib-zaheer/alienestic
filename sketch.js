$(document).ready(function(){
  $(function(){
    $(".resizable").draggable({
      scrolle: false,
      cursor: "move"
    });
    $(".img-2").resizable({
      animate: true,
      ghost:true,
      // handles: "n, e, s, w",
      maxHeight: 600,
      maxWidth: 500,
      minHeight: 60,
      minWidth: 50
    });
    $("#reset").click(function(){
      $(".img-2").resizable().css({
        width: "50px",
        height: "auto"
      });
    });
  });
});