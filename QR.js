function vehicle(){
  const vehicle = document.getElementById("vehicle");
  const content_home_page = document.getElementById("content_home_page");

  if (vehicle){
    vehicle.style.display = "block";

  }
  if (content_home_page){
    content_home_page.style.display = "none";
  }
}
function qr_codes(){
  const qr_codes = document.getElementById("qr_codes");
  const content_home_page = document.getElementById("content_home_page");

  if (qr_codes){
    qr_codes.style.display = "flex";

  }
  if (content_home_page){
    content_home_page.style.display = "block";
  }
}

function scanova(){
  const scanova = document.getElementById("scanova");
  const content_home_page = document.getElementById("content_home_page");

  if (scanova){
    scanova.style.display = "flex";

  }
  if (content_home_page){
    content_home_page.style.display = "none";
  }
}

