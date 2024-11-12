(function () {
  var primary = localStorage.getItem("primary") || "#00a85f";
  var secondary = localStorage.getItem("secondary") || "#F94C8E";

  window.yuriAdminConfig = {
    primary: primary,
    secondary: secondary,
  };
})();

function copyText(text) {
    var input = document.createElement("input");
    input.setAttribute("value", text);
    document.body.appendChild(input);
    input.select();
    document.execCommand("copy");
    document.body.removeChild(input);
    swal("Success!","Đã sao chép: " + text, "success"); 
}